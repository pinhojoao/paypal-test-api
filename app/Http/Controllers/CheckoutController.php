<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartFormatter;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PayPal\Api\Address;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\PayerInfo;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

class CheckoutController extends Controller
{
    public function pay(Request $request)
    {
        $user = new User();
        $cart = Cart::get();

        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_CLIENT'),
                env('PAYPAL_SECRET')
            )
        );
        $payerInfo = new PayerInfo();
        $payerInfo->setFirstName($user->first_name);
        $payerInfo->setLastName($user->last_name);
        $payerInfo->setEmail($user->email);

        $address = new Address();
        $address->setPhone($user->phone_number);
        $address->setCity($user->city);
        $address->setState($user->state);
        $address->setCountryCode($user->country);
        $address->setLine1($user->address);
        $address->setPostalCode($user->zip);
        $payerInfo->setBillingAddress($address);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $payer->setPayerInfo($payerInfo);

        $amount = new Amount();
        $amount->setTotal(CartFormatter::getTotal($cart));
        $amount->setCurrency('USD');

        $transaction = new Transaction();
        $transaction->setAmount($amount);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('checkout.success'));
        $redirectUrls->setCancelUrl(route('checkout.cancel'));

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($apiContext);
            $res = json_decode($payment);
            return $this->respond(['id' => $res->id]);
        }
        catch (PayPalConnectionException $ex) {
            // This will print the detailed information on the exception.
            //REALLY HELPFUL FOR DEBUGGING
            return $this->respondInternalError($ex->getData());
        }
    }
}

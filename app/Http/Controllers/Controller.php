<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

    }

    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Return a Not Found Error
     *
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * Return a Unauthorized
     *
     * @param string $message
     * @return mixed
     */
    public function respondUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    /**
     * Return an Internal Error
     *
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Error!')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    /**
     * Return error if any validation fails
     *
     * @param string $message
     * @return mixed
     */
    public function respondValidationFailed($message = 'Missing parameters')
    {
        return $this->setStatusCode(422)->respond($message);
    }

    /**
     * Return error if api tries to access a forbidden method
     *
     * @param string $message
     * @return mixed
     */
    public function respondForbidden($message = 'Forbidden')
    {
        return $this->setStatusCode(403)->respondWithError($message);
    }

    /**
     * Return successful created item
     *
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respondCreated($data, $headers = [])
    {
        return $this->setStatusCode(201)->respond($data, $headers);
    }

    /**
     * Basic Response (Success or Error)
     *
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * Basic Error Response
     *
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        $data = [
            'message' => $message
        ];

        return $this->respond($data);
    }
}

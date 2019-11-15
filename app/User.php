<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    public function __construct(array $attributes = [])
    {
        $this->first_name = 'Jane';
        $this->last_name = 'Doe';
        $this->email = 'jane@janedoe.com';
        $this->phone_number = '555-2112';
        $this->country = 'US';
        $this->state = 'NY';
        $this->city = 'New York';
        $this->zip = 10012;
        $this->address = '199 Lafayette Street';
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';
    protected $data = ['first_name','last_name','Date_of_Birth','email','phone_number','Password','Re_password'];

}

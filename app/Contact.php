<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contact';
  protected $data = ['firsts_name','lasts_name','emailss','phones_number','message'];
}

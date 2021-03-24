<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class my_contacts extends Model
{
  protected $table = 'contact';
  protected $data = ['firsts_name','lasts_name','emailss','phones_number','message'];
}

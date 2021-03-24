<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GetStart extends Model
{
    //
  public function login($email, $pwd)
  {
    $result = false;

    try{

      $query = DB::table('register')
        ->where('email', 'like', $email)
        ->where('Password', '=', $pwd)
        ->select()->get();
      if(!empty($query->first()))
        $result = true;
    }catch (QueryException $ex){
      Log::error($ex->getMessage()); // Set log out put while exception happen
    }

    return $result;
  }
}

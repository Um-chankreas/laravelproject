<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\my_contacts;

class ContactController extends Controller
{
  public function insertform() {
    return view('project.contact-us');
  }
  public function insert(Request $req) {
    //validation
    $req->validate ([
      'firsts_name' => 'required|string|max:20',
      'lasts_name' => 'required|string|max:20',
      'emailss' => 'required|string|max:255|email',
      'phones_number' => 'required|string|max:20',
      'message' => 'required|string|min:2',
    ]);
    $firstse_name = $req->input('firsts_name');
    $lastse_name = $req->input('lasts_name');
    $emailse = $req->input('emailss');
    $phones_number= $req->input('phones_number');
    $message = $req->input('message');
//    if ($emailse==GetstartController::)

    $query = DB::table('register')->where('email', 'like', $emailse)->select()->limit(1)->get();
    if(!empty($query->first()))
    {

      $data = [
        'firsts_name' => $firstse_name,
        'lasts_name' => $lastse_name,
        'emailss' =>$emailse,
        'phones_number' => $phones_number,
        'message' => $message
      ];
      DB::table('Contact')->insert($data);
      echo 'Add successfully.<br>';
      echo '<a href = "/insert">Click here</a> go to back.';
    }
    else{
      echo 'Your email is incorrect';
    }

  }
}

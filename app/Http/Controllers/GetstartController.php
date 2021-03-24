<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Register;
use App\Http\Controllers\Controller;

class GetstartController extends Controller
{
    public function get()
    {
      return view('header.get-start');
    }
    public function start(Request $request)
    {
      $request->validate ([
        'first_name' => 'required|string|max:20',
        'last_name' => 'required|string|max:20',
        'Date_of_Birth' => 'required|max:30',
        'email' => 'required|string|max:191|unique:register,email',
        'phone_number' => 'required|string|max:191|unique:register',
        'Password' => 'required|string|min:8',
        // 'Re-password' => 'required','string|min:8',
      ]);
        $first_name = $request->input('first_name');
        $last_name= $request->input('last_name');
        $Date_of_Birth= $request->input('Date_of_Birth');
//        $sellist1 = $request->input('sellist1');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $Password = $request->input('Password');
        $Re_password=$request->input('Re-password');
      if ($Password==$Re_password)
      {
        $data = array('first_name' => $first_name,
          'last_name' => $last_name,
          'Date_of_Birth' => $Date_of_Birth,
//          'sellist1' => $sellist1,
          'email' =>$email,
          'phone_number' => $phone_number,
          'Password' => bcrypt($Password),
          // 'Re_password' => bcrypt($Re_password)
        );
        DB::table('Register')->insert($data);
        echo "<style>
                * {
                    margin: 0;
                    padding: 0;
                }
                .user {
                    text-align: center;
                }
                a {
                    text-decoration: none;
                    list-style: none;
                }
                hr {
                    margin-top: 25px;
                }
            </style>";
        echo '<div class="user">';
        echo '<h1>Welcome</h1>';
        echo '<span>'.$request->input('first_name')." ".$request->input('last_name').'</span>';
        echo '<a href = "/get"> Click here</a> go to back.'.'<a href = "/home-page"> OR Click This</a> go to Website.'.'<br>'.'<hr>';
        echo view('project.logout');
        echo '</div>';
      }
      else {
        echo '<style>
                div {
                    text-align: center;
                    width: 100%;
                    height: 65px;
                    background: pink;
                }
                p {
                    padding-top: 20px;
                    color: red;
                }
            </style>';
        echo '<div>';
        echo '<p>! Password Error</p>';
        echo '</div>';
      }
    }
  public function logout()
  {
    DB::table('register')->select('id')->delete();
    return redirect('header.get-start')->with('info', 'User logged out 
        successfully');
  }
}
?>

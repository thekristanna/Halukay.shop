<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signup(Request $r)
    {
        $this->validate($r, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|unique:users,email_address', //name of table,name of column
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'con_pw' => 'required|same:password',
            'phone_number' => 'required|unique:users,phone_number',
            'address_street' => 'required|string',
            'address_barangay' => 'required|string',
            'address_citytown' => 'required|string',
            'address_province' => 'required|string',
            'address_zip' => 'required|string',
            'role' => 'required',
            'accept_tc' => 'required'

        ], [
            'accept_tc.required' => 'Accepting the Terms & Conditions is required to proceed',
            'role' => 'Need to select a role (Shopper or Seller)'
        ], [
            'pw' => 'password',
            'con_pw' => 'password confirmation',
            // 'accept_tc' => 'Terms & Conditions needs to be accepted in the'
        ]);

        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email_address = $r->input('email_address');
        $user->username = $r->input('username');
        $user->password = Hash::make($r->input('password'));
        $user->phone_number = $r->input('phone_number');
        $user->address_street = $r->input('address_street');
        $user->address_barangay = $r->input('address_barangay');
        $user->address_citytown = $r->input('address_citytown');
        $user->address_province = $r->input('address_province');
        $user->address_zip = $r->input('address_zip');
        $user->role = $r->input('role');
        if ($r->file('profile_picture')) {
            $file = $r->file('profile_picture');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/user_profiles'), $filename);
            $user->profile_photo = $filename;
        }
        $user->save();

        return redirect("/signup")->with('success', 'Account has been created successfully.');
    }

    public function signup_show()
    {
        return view('signup');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function contact_send_email(Request $r)
    {
        $content = [
            'body' => $r->input('message')
        ];
        Mail::send('emails.to_developer', $content, function ($message) use ($r) {
            $message->from($r->input('email'));
            $message->to('contact@halukay.com', 'Developers of Halukay Ecommerce Website');
            $message->subject($r->input('subject'));
        });
        return redirect('/contact')->with('success', 'Email sent!');
    }

    // Contact page
    public function contact_form()
    {
        return view('contact_email_form');
    }

    ////____PUBLIC SHOW SELLER SHOP___////
    public function seller_shop_view()
    {
        return view('shop_by_seller');
    }

    ////_____NOTIFICATIONS______////
    public function view_notifications_shopper()
    {
        $notifications = Notification::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->orderBy('date_sent', 'DESC')
            ->get();

        return view('shopper_notification', compact('notifications'));
    }

    public function view_notifications()
    {
        $notifications = Notification::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->orderBy('date_sent', 'DESC')
            ->get();

        return view('seller_notification', compact('notifications'));
    }

    public function seen_notification(string $id)
    {
        Notification::where('notif_id', '=', $id)
            ->update(
                [
                    'marked_seen' => '1'
                ]
            );

        if (Session::get('role') == 'shopper') {
            return redirect('/shopper/notifications');
        } elseif (Session::get('role') == 'seller') {
            return redirect('/seller/notifications');
        } else {
            return redirect('/login')->with('fail', 'You need to be logged in to access notifications');
        }
    }

    public function delete_notification(string $id)
    {
        Notification::where('notif_id', '=', $id)
            ->delete();

        if (Session::get('role') == 'shopper') {
            return redirect('/shopper/notifications');
        } elseif (Session::get('role') == 'seller') {
            return redirect('/seller/notifications');
        } else {
            return redirect('/login')->with('fail', 'You need to be logged in to access notifications');
        }
    }

    /////___MY ACCOUNT SHOPPER___/////
    public function my_acct_shopper_edit(Request $r)
    {
        $profile = User::where('user_id', '=', Session::get('user_id'))
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'email_address' => $r->input('email_address'),
                    'phone_number' => $r->input('phone_number'),
                    'address_street' => $r->input('address_street'),
                    'address_barangay' => $r->input('address_barangay'),
                    'address_citytown' => $r->input('address_citytown'),
                    'address_province' => $r->input('address_province'),
                    'address_zip' => $r->input('address_zip'),
                ]
            );

        return redirect('/shopper/my_account');
    }

    public function my_acct_shopper_form()
    {
        $profile = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        return view('myacct_shopper_form', compact('profile'));
    }

    public function my_acct_shopper_view()
    {
        $profile = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        return view('myacct_shopper', compact('profile'));
    }

    /////___MY ACCOUNT SELLER___/////
    public function my_acct_seller_edit(Request $r)
    {
        $profile = User::where('user_id', '=', Session::get('user_id'))
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'email_address' => $r->input('email_address'),
                    'phone_number' => $r->input('phone_number'),
                    'address_street' => $r->input('address_street'),
                    'address_barangay' => $r->input('address_barangay'),
                    'address_citytown' => $r->input('address_citytown'),
                    'address_province' => $r->input('address_province'),
                    'address_zip' => $r->input('address_zip'),
                ]
            );

        return redirect('/seller/my_account');
    }

    public function my_acct_seller_form()
    {
        $profile = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        return view('myacct_seller_form', compact('profile'));
    }

    public function my_acct_seller_view()
    {
        $profile = User::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get()
            ->first();

        return view('myacct_seller', compact('profile'));
    }

    ////___VIEW PROFILE PUBLIC___////
    public function view_profile(string $id)
    {
        $profile = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->first();

        return view('profile', compact('profile'));
    }

    /////___LOGOUT___/////
    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('/');
    }

    /////___LOGIN___/////
    public function login(Request $r)
    {
        $user = User::where("username", '=', $r->username)
            ->first();

        if ($user) {
            if (Hash::check($r->password, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('role', $user->role);
                if (Session::get('role') == 'seller') {
                    return redirect('/'); // will still update redirect once profile is ready
                } else if (Session::get('role') == 'shopper') {
                    if (Session::get('last_viewed')) {
                        return redirect('/shop/' . Session::get('last_viewed')); //need to place an after middleware shopblade
                    } else {
                        return redirect('/'); // will still update redirect once profile is ready
                    }
                }
            } else {
                return redirect('login')->with('fail', 'Incorrect password');
            }
        } else {
            return redirect('login')->with('fail', 'An account with that username does not exist');
        }
    }

    public function login_show()
    {
        return view('login');
    }

    /////___SIGN UP___/////
    public function signup(Request $r)
    {
        $this->validate($r, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|unique:users,email_address', //name of table,name of column
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'con_pw' => 'required|same:password',
            'phone_number' => 'required|string',
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
        $user->display_name = '@' . $r->input('username');
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

        return redirect("/login")->with('success', 'Account has been created successfully.');
    }

    public function signup_show()
    {
        return view('signup');
    }
}

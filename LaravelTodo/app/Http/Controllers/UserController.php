<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Todos;



class UserController extends Controller
{
    function _UserController_()
    {

        return '';
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required']
        ]);

        if (Auth::attempt(['email' =>  $request->email, 'password' => $request->password]) == true) {
            $user = User::where('email', $request -> email)->first();
            $request -> session() -> put('email', $user -> email);
            $request -> session() -> put('user_id', $user -> id);
            return redirect(route('homePage'))->with("success", "Login Completed Successfully!");
        } else {
            // echo "login not";
            // $user = new User;
            // $user->email = $request->email;
            // $user->password = bcrypt($request->password);
            // $user->save();
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            $user = User::create($data);
            if (!$user) {
                return redirect(route('index'))->with("error", "Something Went Wrong!");
            }

            $user = User::where('email', $request -> email)->first();
            $request -> session() -> put('email', $user -> email);
            $request -> session() -> put('user_id', $user -> id);
            return redirect(route('homePage'))->with("success", "Registration Completed Successfully!");
        }
        // return '';
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('index'));
    }

    public function homePage(){
        $todo=Todos::get()->where('user_id', session() -> get('user_id'));
        return view('home',['todo'=>$todo]); 
    }

    public static function getUserEmail() {
        return Session::get('email');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginIndex(){
        return view('login');
    }
    public function registerIndex(){
        return view('register');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=> 'required|min:8'
        ]);

        // dump($credentials); // Dump the credentials

        if(!Auth::attempt($credentials, $request->remember)){
            return redirect()->back()->withErrors('Invalid Credentials');
        }

        $user = Auth::user();
        return redirect()->route('homepage', compact('user'));
    }

    public function register(Request $request){
        $request->validate([
            'name' =>'required|string|max:25',
            'student_id' => 'required|numeric|digits:10',
            'faculty' => 'required|in:Faculty of Economics and Communication,Faculty of Humanities,Faculty of Computing Multimedia and Technology,
            Faculty of Engineering,School of Computer Science,School of Information Systems,Binus Business School,School of Design',
            'email' => 'required|email|ends_with:@binus.ac.id',
            'password' => 'required|confirmed|min:8',
            'checkbox' =>'accepted',
        ]);

        $newUser = new User();
        $newUser->name =$request->input('name');
        $newUser->student_id = $request->input('student_id');
        $newUser->faculty = $request->input('faculty');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));

        $newUser->save();
        Session::flash('success', 'Registration successful!');
        return redirect()->route('loginIndex')->with('success', 'Registration successful!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function showProfile(Request $request){
        $user = Auth::user();
        // return view('profile', ['user' => $user]);
        return view('profile', compact('user'));
    }

    public function favouriteIndex() {
        return view('favourite');
    }

    public function notificationIndex() {
        return view('notification');
    }
}

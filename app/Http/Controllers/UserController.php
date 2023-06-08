<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if(!Auth::attempt($credentials, $request->remember)){
            return redirect()->back()->withErrors('Invalid Credentials');
        }
        return redirect()->route('home');
    }

    public function register(Request $request){
        $request->validate([
            'name' =>'required|string|max:25',
            'student_id' => 'required|string|length:10',
            'faculty' => 'required|in:Faculty of Economics and Communication,Faculty of Humanities,Faculty of Computing, Multimedia and Technology,
            Faculty of Engineering,School of Computer Science,School of Information Systems,Binus Business School,School of Design',
            'email' => 'required|email|ends_with:@binus.ac.id',
            'password' => 'required|confirmed|min:8'
        ]);

        $newUser = new User();
        $newUser->name =$request->input('name');
        $newUser->student_id = $request->input('student');
        $newUser->faculty = $request->input('faculty');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));

        $newUser->save();
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}

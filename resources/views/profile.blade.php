@extends('layouts.app')

@section('title', 'Profile')

@section('cssjs')
<link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-page">
    <h1>Profile</h1>

    <div class="user-profile">
        <div class="personal-information">
            <!-- <div class="greetings">
                <img src="https://e0.pxfuel.com/wallpapers/8/62/desktop-wallpaper-faceless-girl-aesthetic-light-color-ulzzang-aesthetic.jpg" id="pp" alt="profile-picture">
                <p>Welcome back, Angeline!</p>
            </div> -->

            <div class="menu">
                <a href="/Profile Page/indexProfile.html" id="editAccountMenu">Edit Account Information</a>
                <a href="#">Change Password</a>
                <a href="#">Certificate</a>
                <a href="#">Event History</a>
                <a href="#">Favourite Events</a>
            </div>
        </div>

        <div class="edit-account">
            <div class="basic-information">
                <div class="user-req-info">
                    <p class="req-info">Name</p>
                    <p class="user-info">{{$user->name}}</p>
                </div>

                <div class="user-req-info" id="email">
                    <p class="req-info">Email</p>
                    <p class="user-info">{{$user->email}}</p>
                </div>

                <div class="user-req-info">
                    <p class="req-info">NIM</p>
                    <p class="user-info">{{$user->student_id}}</p>
                </div>

                <div class="user-req-info">
                    <p class="req-info">Faculty</p>
                    <p class="user-info">{{$user->faculty}}</p>
                </div>

                {{-- BUTTON EDIT PROFILE     --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="mx-1 row btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


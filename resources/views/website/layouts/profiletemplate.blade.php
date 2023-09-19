@extends('website.layouts.master')
@section('title','User Profile')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 bg-info">
                <h2 class="text-center pt-5">{{ Auth::user()->name }}</h2>
                <hr class="mt-5"/>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Dashboard</a>
                        <a href="{{ route('pending-order') }}" class="nav-link">Pending Order</a>
                        <a href="{{ route('history') }}" class="nav-link">History</a>
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <form action="{{ route('logout') }}" method="POST" id="logout">
                                @csrf
                            </form>
                            LogOut
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                @yield('user_content')
            </div>
        </div>
    </div>
@endsection



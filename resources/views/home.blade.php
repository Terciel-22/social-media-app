@extends('layouts.app')

@section('content')
<div class="home d-flex">
    <div class="sidebar">
        <div class="header-box">
            <h1 class="fs-4 d-flex">
                <span class="px-2">
                    <i class="material-icons">forum</i>
                </span>
                <span>Dashboard</span>
            </h1>
        </div>
        <ul class="list-unstyled mb-4">
            <li><a class="text-decoration-none" href="#">Home</a></li>
            <li><a class="text-decoration-none" href="#">Profile</a></li>
            <li><a class="text-decoration-none" href="#">Message</a></li>
            <li><a class="text-decoration-none" href="#">History</a></li>
            <li><a class="text-decoration-none" href="#">Task</a></li>
            <li><a class="text-decoration-none" href="#">Communities</a></li>
        </ul>
        <ul class="list-unstyled">
            <li><a class="text-decoration-none" href="#">Settings</a></li>
            <li><a class="text-decoration-none" href="#">Support</a></li>
            <li><a class="text-decoration-none" href="#">Privacy</a></li>
        </ul>
    </div>
    <div class="content"></div>
<div>
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

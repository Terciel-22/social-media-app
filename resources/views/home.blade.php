@extends('layouts.app')

@section('content')
<div class="home d-flex">
    <div class="sidebar">
        <div class="header-box px-2 pt-3 d-flex justify-content-between">
            <h1 class="fs-4 d-flex">
                <span class="px-2">
                    <i class="material-icons">apps</i>
                </span>
                <span>Dashboard</span>
            </h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 mb-1 text-white">
                <i class="material-icons">close</i>
            </button>
        </div>
        <ul class="list-unstyled my-4">
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">house</i></span>
                    Home
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">account_box</i></span>
                    Profile
                </a>
            </li>
            <li>
                <a class="text-decoration-none position-relative d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">chat_bubble</i></span>
                    Messages
                    <span class="position-absolute top-0 start-75 badge rounded-pill bg-secondary">+99</span>
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">history</i></span>
                    History
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">task</i></span>
                    Task
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">forum</i></span>
                    Communities
                </a>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">manage_accounts</i></span>
                    Settings
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">help</i></span>
                    Support
                </a>
            </li>
            <li>
                <a class="text-decoration-none d-flex" href="#">
                    <span class="ms-4 me-2"><i class="material-icons">verified_user</i></span>
                    Privacy
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-md-none d-block">
                    <button class="open-btn">
                        <i class="material-icons">menu_open</i>
                    </button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex">
                        <button type="submit">
                            <i class="material-icons">search</i>
                        </button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="#">
                        <i class="material-icons">notifications_active</i>
                    </a>
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
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection

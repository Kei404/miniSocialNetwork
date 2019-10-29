@extends('layouts.app')

<style type="text/css">
    .profile-img {
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
</style>


@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <img class="profile-img" src="https://avatarfiles.alphacoders.com/827/82734.jpg">

                <h1>{{ $user->name }}</h1>
                <h2>{{ $user->email }}</h2>
                <h3>{{ $user->dob->format('l j F Y') }} ({{ $user->dob->age }} years old)</h3>

                <button class="btn btn-danger">Follow</button>
            </div>
        </div>    
    </div>
</div>
@endsection
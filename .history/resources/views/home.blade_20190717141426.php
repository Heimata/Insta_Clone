@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"> <!-- Logo -->
            <img src="/svg/react.svg" alt="" style="max-height: 150px; background-color: grey;" class="rounded-circle"/>
        </div>
        <div class="col-9 p-5"> <!-- Logo -->
            <div class="d-felx justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts</div>
                <div class="pr-5"><strong>35</strong> follwers</div>
                <div class="pr-5"><strong>12</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://picsum.photos/id/237/200/300" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/200/300?grayscale" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/200/300/?blur" class="w-100">
        </div>
    </div>
</div>
@endsection

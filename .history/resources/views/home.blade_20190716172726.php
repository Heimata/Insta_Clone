@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"> <!-- Logo -->
            <img src="/svg/react.svg" alt="" style="max-height: 150px; background-color: grey;" class="rounded-circle"/>
        </div>
        <div class="col-9 p-5"> <!-- Logo -->
            <div><h1>Instagram Clone</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>100</strong> posts</div>
                <div class="pr-5"><strong>35</strong> follwers</div>
                <div class="pr-5"><strong>12</strong> following</div>
            </div>
            <div class="pt-4">InstagramClone.org</div>
        </div>
    </div>
</div>
@endsection

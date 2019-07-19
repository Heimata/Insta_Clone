@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="">
      </div>
         <div class="col-4">
         <div>
            <h3>{{ $post->user->username }}</h3>
         </div>
         </div>
   </div>
</div>
@endsection

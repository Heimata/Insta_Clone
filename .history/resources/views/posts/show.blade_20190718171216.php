@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-8">
         <img src="/storage/{{$post->image}}" alt="">
      </div>
   </div>
</div>
@endsection

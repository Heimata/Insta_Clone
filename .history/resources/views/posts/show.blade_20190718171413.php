@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-4">
         <img src="/storage/{{$post->image}}" alt="">
      </div>
   </div>
</div>
@endsection

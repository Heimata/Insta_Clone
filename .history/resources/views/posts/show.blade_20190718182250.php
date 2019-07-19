@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-4">
         <h3>{{ $post->user->username }}</h3>
      </div>
   </div>
</div>
@endsection

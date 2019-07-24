@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)
   <div class="row">
      <div class="col-8 offset-2">
            <img src="/storage/{{ $post->image }}" class="w-100">
      </div>
      <div class="row">
         <div class="col-4 offset-2">
            <div>
               <p>
                  <span class="font-weight-bold">
                     <a href="/profile/{{$post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                     </a>
                  </span> {{ $post->user->username }}
               </p>

            </div>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection

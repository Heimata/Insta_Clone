@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="">
      </div>
      <div class="col-4">
         <div>
            <div>
               <div>
               
               </div>
            </div>
            
            <p> {{ $post->caption }} </p>
         </div>
      </div>
   </div>
</div>
@endsection

@extends('Layouts.index')

@section('content')

<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
           @include('partials.Post', ['post' => $post])
          @endforeach
  {{ $posts->links() }}
          
  </div>
    
@stop
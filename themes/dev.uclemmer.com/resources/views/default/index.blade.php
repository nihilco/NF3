@extends('layouts.main')

@section('title', 'Home')

@section('meta', '')

{{ Breadcrumbs::push('Home') }}

@section('content')

@php

$latestThreePosts = \App\Models\Post::where('published_at', '!=', 'null')->orderByDesc('published_at')->take(3)->get();

@endphp

<div class="container">
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">{{ $latestThreePosts[0]->name }}</h1>
      <p class="lead my-3">{{ $latestThreePosts[0]->description }}</p>
      <p class="lead mb-0"><a href="{{ $latestThreePosts[0]->path() }}" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">{{ $latestThreePosts[1]->name }}</a>
          </h3>
          <div class="mb-1 text-muted">{{ $latestThreePosts[1]->published_at->toFormattedDateString() }}</div>
          <p class="card-text mb-auto">{{ $latestThreePosts[1]->description }}</p>
          <a href="{{ $latestThreePosts[1]->path() }}">Continue reading</a>
         </div>
         <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
       </div>
     </div>
     <div class="col-md-6">
       <div class="card flex-md-row mb-4 shadow-sm h-md-250">
         <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-success">Design</strong>
           <h3 class="mb-0">
             <a class="text-dark" href="#">{{ $latestThreePosts[2]->name }}</a>
           </h3>
           <div class="mb-1 text-muted">{{ $latestThreePosts[2]->published_at->toFormattedDateString() }}</div>
           <p class="card-text mb-auto">{{ $latestThreePosts[2]->description }}</p>
           <a href="{{ $latestThreePosts[2]->path() }}">Continue reading</a>
         </div>
         <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
       </div>
     </div>
   </div>
  </div>
</div>

@endsection
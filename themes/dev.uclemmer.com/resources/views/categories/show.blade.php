@extends('layouts.main')

@section('title', $category->name)

@section('meta', '')

{{ Breadcrumbs::push('Categories', url('/categories') ) }}
{{ Breadcrumbs::push($category->name) }}

@section('content')

<div class="container">

<h1>{{ $category->name }}</h1>

<p>{{ $category->description }}</p>

</div>

<div class="container">
  <div class="row mb-2">

@foreach($category->posts as $post)
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <h3 class="mb-0">
            <a class="text-dark" href="#">{{ $post->name }}</a>
          </h3>
          <div class="mb-1 text-muted">{{ $post->published_at->toFormattedDateString() }}</div>
          <p class="card-text mb-auto">{{ $post->description }}</p>
          <a href="{{ $post->path() }}">Continue reading</a>
         </div>
       </div>
     </div>
@endforeach

  </div>
</div>

@endsection
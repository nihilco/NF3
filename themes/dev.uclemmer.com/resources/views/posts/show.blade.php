@extends('layouts.main')

@section('title', $post->name)

@section('meta', '')

{{ Breadcrumbs::push('Posts', url('/posts') ) }}
{{ Breadcrumbs::push($post->name) }}

@section('content')

<div class="container">

<h1>{{ $post->name }}</h1>
by {{ $post->owner->contact->name->fullName }} on {{ $post->published_at }}
<p>{{ $post->description }}</p>

{!! $post->content !!}

</div>

@endsection
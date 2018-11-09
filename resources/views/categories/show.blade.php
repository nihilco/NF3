@extends('layouts.admin')

@section('title', $category->name)

@section('meta', '')

{{ Breadcrumbs::push('Categories', url('/categories') ) }}
{{ Breadcrumbs::push($category->name) }}

@section('content')

<div class="container">

<h1>{{ $category->name }}</h1>

<p>{{ $category->description }}</p>

</div>

@endsection
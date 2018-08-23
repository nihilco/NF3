@extends('layouts.main')

@section('title', 'Home')

@section('meta', '')

{{ Breadcrumbs::push('Home') }}

@section('content')
{{ dd(view()) }}
@endsection
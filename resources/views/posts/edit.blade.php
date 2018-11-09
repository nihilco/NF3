@extends('layouts.admin')

@section('title', 'Edit Post')

@section('meta', '')

{{ Breadcrumbs::push('Posts', url('/posts') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($post->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Post</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ (old('name')) ? old('name') : $post->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="slug">Slug</label>
                      <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ (old('slug')) ? old('slug') : $post->slug }}" />
		      @if($errors->first('slug'))
		      <small id="slugHelp" class="form-text invalid-feedback">{{ $errors->first('slug') }}</small>
		      @endif
	            </div>		    
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ (old('description')) ? old('description') : $post->description }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
     	            <div class="form-group">
		      <label for="content">Content</label>
		      <textarea class="form-control wysiwyg-area {{ $errors->first('content') ? ' is-invalid' : '' }}" id="content" name="content" rows="3">{{ (old('content')) ? old('content') : $post->content }}</textarea>
		      @if($errors->first('content'))
		      <small id="contentHelp" class="form-text invalid-feedback">{{ $errors->first('content') }}</small>
		      @endif
		    </div>
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Edit</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
		  </form>

@endsection
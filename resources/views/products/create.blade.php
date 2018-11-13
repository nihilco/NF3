@extends('layouts.app')

@section('title', 'Create Product')

@section('meta', '')

{{ Breadcrumbs::push('Products', url('/products') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

            <form method="POST" action="{{ url('/products') }}">
	      {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Product</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="slug">Slug</label>
                      <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ old('slug') }}" />
		      @if($errors->first('slug'))
		      <small id="slugHelp" class="form-text invalid-feedback">{{ $errors->first('slug') }}</small>
		      @endif
	            </div>		    
     	            <div class="form-group">
		      <label for="description">Description</label>
		      <textarea class="form-control{{ $errors->first('description') ? ' is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description') }}</textarea>
		      @if($errors->first('description'))
		      <small id="descriptionHelp" class="form-text invalid-feedback">{{ $errors->first('description') }}</small>
		      @endif
		    </div>
                    <div class="form-group">
                      <label for="cost">Cost</label>
                      <input type="text" class="form-control{{ $errors->first('cost') ? ' is-invalid' : '' }}" id="cost" name="cost" value="{{ old('cost') }}" />
		      @if($errors->first('cost'))
		      <small id="costHelp" class="form-text invalid-feedback">{{ $errors->first('cost') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control{{ $errors->first('price') ? ' is-invalid' : '' }}" id="price" name="price" value="{{ old('price') }}" />
		      @if($errors->first('price'))
		      <small id="priceHelp" class="form-text invalid-feedback">{{ $errors->first('price') }}</small>
		      @endif
	            </div>		    
		</div>
		<div class="card-footer text-muted">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <button type="reset" class="btn btn-link">Reset</button>
		</div>
	      </div>
		  </form>

@endsection
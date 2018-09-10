@extends('layouts.admin')

@section('title', 'Create Ticket')

@section('meta', '')

{{ Breadcrumbs::push('Tickets', url('/tickets') ) }}
{{ Breadcrumbs::push('Create') }}

@section('content')

                  <form method="POST" action="{{ url('/tickets') }}">
		    {{ csrf_field() }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Create Ticket</h5>
		</div>
		<div class="card-body">
		    <div class="form-group">
                      <label for="country">Type</label>
       		      <select class="form-control{{ $errors->first('type') ? ' is-invalid' : '' }}" id="type" name="type">
		        <option></option>
			@foreach($types->where('name', 'Ticket')->first()->children as $t)
		        <option value="{{ $t->id }}"{{ (old('type') == $t->id) ? ' selected' : '' }}>{{ $t->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('type'))
		      <small id="typeHelp" class="form-text invalid-feedback">{{ $errors->first('type') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="country">Status</label>
       		      <select class="form-control{{ $errors->first('status') ? ' is-invalid' : '' }}" id="status" name="status">
		        <option></option>
			@foreach($types->where('name', 'Status')->first()->children as $type)
		        <option value="{{ $type->id }}"{{ (old('status') == $type->id) ? ' selected' : '' }}>{{ $type->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('status'))
		      <small id="statusHelp" class="form-text invalid-feedback">{{ $errors->first('status') }}</small>
		      @endif
	            </div>		    
		    <div class="form-group">
                      <label for="country">Priority</label>
       		      <select class="form-control{{ $errors->first('priority') ? ' is-invalid' : '' }}" id="priority" name="priority">
		        <option></option>
			@foreach($types->where('name', 'Priority')->first()->children as $type)
		        <option value="{{ $type->id }}"{{ (old('priority') == $type->id) ? ' selected' : '' }}>{{ $type->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('priority'))
		      <small id="priorityHelp" class="form-text invalid-feedback">{{ $errors->first('priority') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="country">Resolution</label>
       		      <select class="form-control{{ $errors->first('resolution') ? ' is-invalid' : '' }}" id="resolution" name="resolution">
		        <option></option>
			@foreach($types->where('name', 'Resolution')->first()->children as $type)
		        <option value="{{ $type->id }}"{{ (old('resolution') == $type->id) ? ' selected' : '' }}>{{ $type->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('resolution'))
		      <small id="resolutionHelp" class="form-text invalid-feedback">{{ $errors->first('resolution') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="name">Subject</label>
                      <input type="text" class="form-control{{ $errors->first('subject') ? ' is-invalid' : '' }}" id="subject" name="subject" value="{{ old('subject') }}" />
		      @if($errors->first('subject'))
		      <small id="subjectHelp" class="form-text invalid-feedback">{{ $errors->first('subject') }}</small>
		      @endif
	            </div>
                    <div class="form-group">
                      <label for="code">Slug</label>
                      <input type="text" class="form-control{{ $errors->first('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ old('slug') }}" />
		      @if($errors->first('slug'))
		      <small id="slugHelp" class="form-text invalid-feedback">{{ $errors->first('slug') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="country">Assignee</label>
       		      <select class="form-control{{ $errors->first('assignee') ? ' is-invalid' : '' }}" id="assignee" name="assignee">
		        <option></option>
			@foreach($users as $user)
		        <option value="{{ $user->id }}"{{ (old('assignee') == $user->id) ? ' selected' : '' }}>{{ $user->email }}</option>
			@endforeach
		      </select>
		      @if($errors->first('assignee'))
		      <small id="assigneeHelp" class="form-text invalid-feedback">{{ $errors->first('assignee') }}</small>
		      @endif
	            </div>		    
     	            <div class="form-group">
		      <label for="description">Content</label>
		      <textarea class="form-control{{ $errors->first('content') ? ' is-invalid' : '' }}" id="content" name="content" rows="3">{{ old('content') }}</textarea>
		      @if($errors->first('content'))
		      <small id="contentHelp" class="form-text invalid-feedback">{{ $errors->first('content') }}</small>
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
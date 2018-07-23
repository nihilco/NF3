@extends('layouts.admin')

@section('title', 'Edit Address')

@section('meta', '')

{{ Breadcrumbs::push('Addresses', url('/addresses') ) }}
{{ Breadcrumbs::push('Edit') }}

@section('content')

                  <form method="POST" action="{{ url($address->path()) }}">
		    {{ csrf_field() }}
		    {{ method_field('PATCH') }}
	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Edit Address</h5>
		</div>
		<div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control{{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') ?? $address->name }}" />
		      @if($errors->first('name'))
		      <small id="nameHelp" class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="address1">Address1</label>
                      <input type="text" class="form-control{{ $errors->first('address1') ? ' is-invalid' : '' }}" id="address1" name="address1" value="{{ old('address1') ?? $address->address1 }}" />
		      @if($errors->first('address1'))
		      <small id="address1Help" class="form-text invalid-feedback">{{ $errors->first('address1') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="address2">Address2</label>
                      <input type="text" class="form-control{{ $errors->first('address2') ? ' is-invalid' : '' }}" id="address2" name="address2" value="{{ old('address2') ?? $address->address2 }}" />
		      @if($errors->first('address2'))
		      <small id="address2Help" class="form-text invalid-feedback">{{ $errors->first('address2') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="address3">Address3</label>
                      <input type="text" class="form-control{{ $errors->first('address3') ? ' is-invalid' : '' }}" id="address3" name="address3" value="{{ old('address3') ?? $address->address3 }}" />
		      @if($errors->first('address3'))
		      <small id="address3Help" class="form-text invalid-feedback">{{ $errors->first('address3') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="city">City</label>
                      <input type="text" class="form-control{{ $errors->first('city') ? ' is-invalid' : '' }}" id="city" name="city" value="{{ old('city') ?? $address->city }}" />
		      @if($errors->first('city'))
		      <small id="cityHelp" class="form-text invalid-feedback">{{ $errors->first('city') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="province">Province</label>
       		      <select class="form-control{{ $errors->first('province') ? ' is-invalid' : '' }}" id="province" name="province">
		        @php
			    $v = old('province') ?? $address->province_id;
			@endphp
		        <option></option>
			@foreach($provinces as $province)
		        <option value="{{ $province->id }}"{{ ($v == $province->id) ? ' selected' : '' }}>{{ $province->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('province'))
		      <small id="provinceHelp" class="form-text invalid-feedback">{{ $errors->first('province') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="postalCode">Postal Code</label>
                      <input type="text" class="form-control{{ $errors->first('postalCode') ? ' is-invalid' : '' }}" id="postalCode" name="postalCode" value="{{ old('postalCode') ?? $address->postal_code }}" />
		      @if($errors->first('postalCode'))
		      <small id="postalCodeHelp" class="form-text invalid-feedback">{{ $errors->first('postalCode') }}</small>
		      @endif
	            </div>
		    <div class="form-group">
                      <label for="country">Country</label>
       		      <select class="form-control{{ $errors->first('country') ? ' is-invalid' : '' }}" id="country" name="country">
		        @php
			    $v = old('country') ?? $address->country_id;
			@endphp
		        <option></option>
			@foreach($countries as $country)
		        <option value="{{ $country->id }}"{{ ($v == $country->id) ? ' selected' : '' }}>{{ $country->name }}</option>
			@endforeach
		      </select>
		      @if($errors->first('country'))
		      <small id="countryHelp" class="form-text invalid-feedback">{{ $errors->first('country') }}</small>
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
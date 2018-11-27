@extends('layouts.app')

@section('title', 'Cities')

@section('meta', '')

{{ Breadcrumbs::push('Cities') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($cities->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
			<th scope="col">City</th>
			<th scope="col">Province</th>
		        <th scope="col">Country</th>
			<th>Addresses</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($cities as $city)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
			<td>{{ $city->name }}</td>
		        <td><a href="{{ $city->province->path() }}">{{ $city->province->name }}</a></td>
		        <td><a href="{{ $city->country->path() }}">{{ $city->country->name }}</a></td>
			<td>{{ $city->addresses_count }}</td>
		        <td class="td-action">
			  <a href="{{ url($city->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($city->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $city->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $city->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $city->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete City?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $city->name }} City?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
			</td>
		      </tr>

		      @php
		        $c++;
		      @endphp

		@empty

		      <tr>
		        <td colspan="6">No cities at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection
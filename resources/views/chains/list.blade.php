@extends('layouts.admin')

@section('title', 'List Countries')

@section('meta', '')

{{ Breadcrumbs::push('Countries', url('/countries')) }}
{{ Breadcrumbs::push('List') }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">Countries List</h5>
		</div>
		<div class="card-body">

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Code</th>
		        <th scope="col">Name</th>
			<th scope="col">Provinces</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($countries as $country)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $country->code }}</td>
		        <td>{{ $country->name }}</td>
			<td>{{ $country->provinces_count }}</td>
		        <td class="td-action">
			  <a href="{{ url($country->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($country->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $country->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $country->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $country->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Country?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $country->name }} Country?</p>
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
		        <td colspan="5">No counties at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>


		</div>
	      </div>

@endsection
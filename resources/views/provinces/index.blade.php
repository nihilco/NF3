@extends('layouts.app')

@section('title', 'Provinces')

@section('meta', '')

{{ Breadcrumbs::push('Provinces') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($provinces->count()) ? 'table-hover ' : '' }}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
	                <th scope="col">Code</th>			
		        <th scope="col">Name</th>
			<th scope="col">Country</th>
			<th>Cities</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp
		
		@forelse($provinces as $province)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $province->code }}</td>			
		        <td>{{ $province->name }}</td>
			<td><a href="{{ $province->country->path() }}">{{ $province->country->name }}</a></td>
			<td>{{ $province->cities_count }}</td>
		        <td class="td-action">
			  <a href="{{ url($province->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($province->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $province->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $province->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $province->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Province?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $province->name }} Province?</p>
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
		        <td colspan="6">No provinces at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection
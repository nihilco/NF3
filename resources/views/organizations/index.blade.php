@extends('layouts.app')

@section('title', 'Organizations')

@section('meta', '')

{{ Breadcrumbs::push('Organizations') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($organizations->count()) ? 'table_hover ' : '' }}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Name</th>
			<th scope="col">Website</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = ($organizations->perPage() * $organizations->currentPage()) - ($organizations->perPage() -1);
                @endphp
		
		@forelse($organizations as $organization)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $organization->name_display }}</td>
		        <td><a href="https://{{ $organization->website }}" target="_blank">{{ $organization->website }}</a></td>
		        <td class="td-action">
			  <a href="{{ url($organization->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($organization->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $organization->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $organization->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $organization->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Organizaion?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $organization->name_display }} Organization?</p>
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
		        <td colspan="4">No organizations at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		  {{ $organizations->links() }}

@endsection
@extends('layouts.app')

@section('title', $organization->name_display)

@section('meta', '')

{{ Breadcrumbs::push('Organizations', url('/organizations') ) }}
{{ Breadcrumbs::push($organization->name_display) }}

@section('content')

	      <div class="card">
		<div class="card-header">
		  <h5 class="card-title mb-0">{{ $organization->name_display }}</h5>
		</div>
		<div class="card-body">
		  <p>{{ $organization->description }}</p>
		</div>
	      </div>

                  <table class="table table-responsive-sm {{ ($organization->contacts->count()) ? 'table_hover ' : '' }}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
                @php
                  $c = 1;
                @endphp

		@forelse($organization->contacts as $contact)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $contact->name->fullName }}</td>
			<td>{{ $contact->owner->email }}</td>
		        <td class="td-action">
			  <a href="{{ url($contact->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($contact->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $contact->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $contact->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $contact->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Contact?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $contact->name->fullName }} Contact?</p>
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
		        <td colspan="3">No contacts at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

@endsection
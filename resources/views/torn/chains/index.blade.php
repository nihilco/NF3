@extends('layouts.app')

@section('title', 'Chains')

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn')) }}
{{ Breadcrumbs::push('Chains') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($chains->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Torn ID</th>
			<th scope="col">Faction</th>
			<th scope="col">Links</th>
			<th scope="col">Respect</th>
			<th scope="col">Players</th>
			<th scope="col">Attacks</th>
			<th scope="col" class="td-action">&nbsp;</th>
		      </tr>
   	            </thead>
		    <tbody>
		    
                @php
		  if(isset($_GET['page'])) {
		      $p = $_GET['page'];
		      $c = 1 + (25 * ($p-1));
		  }else {
                      $c = 1;
		  }
                @endphp

		@forelse($chains as $chain)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $chain->torn_id }}</td>
		        <td>{{ $chain->faction->name }}</td>
		        <td>{{ $chain->links }}</td>
			<td>{{ $chain->respect }}</td>
			<td>{{ $chain->players_count }}</td>
			<td>{{ $chain->attacks_count }}</td>
		        <td class="td-action">
			  <a href="https://www.torn.com/chains.php?XID={{ $chain->torn_id }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-globe"></i></a>
			  <a href="{{ url($chain->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($chain->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $chain->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $chain->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $chain->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Chain?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $chain->id }} Chain?</p>
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
		        <td colspan="8">No chains at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		  {{ $chains->links() }}

@endsection
@extends('layouts.app')

@section('title', 'Factions')

@section('meta', '')

{{ Breadcrumbs::push('Torn', url('/torn')) }}
{{ Breadcrumbs::push('Factions') }}

@section('content')

                  <table class="table table-responsive-sm {{ ($factions->count()) ? 'table-hover ' : ''}}table-outline">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="td-count">#</th>
		        <th scope="col">Torn ID</th>
			<th scope="col">Name</th>
			<th scope="col">Leader</th>
			<th scope="col">Co-Leader</th>
			<th scope="col">Members</th>
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

		@forelse($factions as $faction)

		      <tr>
		        <th scope="row" class="td-count">{{ $c }}</th>
		        <td>{{ $faction->torn_id }}</td>
		        <td>{{ $faction->name }}</td>
		        <td>{{ ($faction->leader) ? $faction->leader->name : 'N/A' }}</td>
			<td>{{ ($faction->coleader) ? $faction->coleader->name : 'N/A'}}</td>
			<td>{{ $faction->players_count }}</td>
		        <td class="td-action">
			  <a href="https://www.torn.com/factions.php?XID={{ $faction->torn_id }}" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-globe"></i></a>
			  <a href="{{ url($faction->path()) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
			  <a href="{{ url($faction->path() . '/edit') }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
			  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $faction->id }}"><i class="fas fa-trash-alt"></i></button>
                          <form action="{{ $faction->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div id="deleteModal-{{ $faction->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Faction?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure you want to delete the {{ $faction->name }} Faction?</p>
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
		        <td colspan="6">No factions at this time.</td>
		      </tr>

		@endforelse

                    </tbody>
		  </table>

		  {{ $factions->links() }}
		  
@endsection
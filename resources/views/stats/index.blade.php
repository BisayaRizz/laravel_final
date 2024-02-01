@extends('layouts.app')
  
@section('title', 'Stats')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Stats</h1>
        <a href="{{ route('stats.create') }}" class="btn btn-primary">Add Stats</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Boxer_name</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Weight_class</th>
                <th>Reach</th>
                <th>Ape_index</th>
                <th>Stance</th>
                <th>BoxersId</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($stats->count() > 0)
                @foreach($stats as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->boxer_name }}</td>
                        <td class="align-middle">{{ $rs->height }}</td>
                        <td class="align-middle">{{ $rs->weight }}</td>
                        <td class="align-middle">{{ $rs->weight_class }}</td>  
                        <td class="align-middle">{{ $rs->reach }}</td> 
                        <td class="align-middle">{{ $rs->ape_index }}</td> 
                        <td class="align-middle">{{ $rs->stance }}</td>
                        <td class="align-middle">{{ $rs->boxersid }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('stats.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('stats.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('stats.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Stats not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
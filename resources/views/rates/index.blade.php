@extends('layouts.app')
  
@section('title', 'Rates')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Rates</h1>
        <a href="{{ route('rates.create') }}" class="btn btn-primary">Add Rates</a>
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
                <th>Id</th>
                <th>Boxer</th>
                <th>Rank</th>
                <th>Ratings</th>
                <th>BoxersId</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($rates->count() > 0)
                @foreach($rates as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->boxer }}</td>
                        <td class="align-middle">{{ $rs->rank }}</td>
                        <td class="align-middle">{{ $rs->ratings }}</td>
                        <td class="align-middle">{{ $rs->boxers_id }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('rates.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('rates.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('rates.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Rates not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
@extends('layouts.app')
  
@section('title', 'Welters Divisions')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Welters Divisions</h1>
        <a href="{{ route('welters.create') }}" class="btn btn-primary">Add Welters</a>
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
                <th>Boxer</th>
                <th>Weight</th>
                <th>Class</th>
                <th>RatesId</th>
                <th>BoxersId</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($welters->count() > 0)
                @foreach($welters as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->boxer }}</td>
                        <td class="align-middle">{{ $rs->weight }}</td>
                        <td class="align-middle">{{ $rs->class }}</td>
                        <td class="align-middle">{{ $rs->rates_id }}</td> 
                        <td class="align-middle">{{ $rs->boxersid }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('welters.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('welters.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('welters.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">welters not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
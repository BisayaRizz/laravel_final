@extends('layouts.app')
  
@section('title', 'Boxers')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Boxers</h1>
        <a href="{{ route('boxers.create') }}" class="btn btn-primary">Add Boxers</a>
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
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Division</th>
                <th>Nickname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($boxers->count() > 0)
                @foreach($boxers as $rs)
                    <tr>
                        <td class="align-middle">{{ $rs->id }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->age }}</td>
                        <td class="align-middle">{{ $rs->gender }}</td>
                        <td class="align-middle">{{ $rs->nationality }}</td>
                        <td class="align-middle">{{ $rs->division }}</td>  
                        <td class="align-middle">{{ $rs->nickname }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('boxers.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('boxers.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('boxers.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Boxers not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
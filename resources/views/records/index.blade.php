@extends('layouts.app')
  
@section('title', 'Records')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Records</h1>
        <a href="{{ route('records.create') }}" class="btn btn-primary">Add Records</a>
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
                <th>Win</th>
                <th>Lose</th>
                <th>Draw</th>
                <th>KO</th>
                <th>Bouts</th>
                <th>BoxersId </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($records->count() > 0)
                @foreach($records as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->boxer }}</td>
                        <td class="align-middle">{{ $rs->win }}</td>
                        <td class="align-middle">{{ $rs->lose }}</td>
                        <td class="align-middle">{{ $rs->draw }}</td>  
                        <td class="align-middle">{{ $rs->ko }}</td>  
                        <td class="align-middle">{{ $rs->bouts }}</td>
                        <td class="align-middle">{{ $rs->boxers_id }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('records.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('records.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('records.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Records not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
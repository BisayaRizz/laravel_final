@extends('guests.guests_layout')
  
@section('title', 'Welters Divisions')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Welters Divisions</h1>
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
                        <a href="{{ route('guests.welters_details', ['id' => $rs->id]) }}" type="button" class="btn btn-secondary">Detail</a>  
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
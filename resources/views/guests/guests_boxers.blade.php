@extends('guests.guests_layout')
  
@section('title', 'Guests Boxers')
  
@section('contents')
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
                        <td class="align-middle">{{ $rs->gender}}</td>
                        <td class="align-middle">{{ $rs->nationality }}</td>
                        <td class="align-middle">{{ $rs->division }}</td>  
                        <td class="align-middle">{{ $rs->nickname }}</td> 
                        <td class="align-middle">
                        <td>
                        <a href="{{ route('guests.boxer_details', ['id' => $rs->id]) }}" type="button" class="btn btn-secondary">Detail</a>
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
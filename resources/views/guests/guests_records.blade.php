@extends('guests.guests_layout')
  
@section('title', 'Records')
  
@section('contents')
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
                          <a href="{{ route('guests.records_details', ['id' => $rs->id]) }}" type="button" class="btn btn-secondary">Detail</a>
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
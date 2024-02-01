@extends('layouts.app')
  
@section('title', 'Create Records')
  
@section('contents')records
    <h1 class="mb-0">Add Records</h1>
    <hr />
    <form action="{{ route('records.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="boxer" class="form-control" placeholder="Boxer">
            </div>
            <div class="col">
                <input type="text" name="win" class="form-control" placeholder="Win">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="lose" class="form-control" placeholder="Lose">
            </div>
            <div class="col">
                <input type="text" name="draw" class="form-control" placeholder="Draw">
            </div>
            <div class="col">
                <input type="text" name="ko" class="form-control" placeholder="KO">
            </div>
            <div class="col">
                <input type="text" name="bouts" class="form-control" placeholder="bouts">
            </div>
            <div class="col">
                <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br><br>
            <a href="{{ route('records') }}" type="button" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
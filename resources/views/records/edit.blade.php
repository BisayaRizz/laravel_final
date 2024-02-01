@extends('layouts.app')
  
@section('title', 'Edit Records')
  
@section('contents')
    <h1 class="mb-0">Edit Records</h1>
    <hr />
    <form action="{{ route('records.update', $records->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Boxer</label>
                <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $records->boxer }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Win</label>
                <input type="text" name="win" class="form-control" placeholder="Win" value="{{ $records->win }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Lose</label>
                <input type="text" name="lose" class="form-control" placeholder="Lose" value="{{ $records->lose }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Draw</label>
                <input type="text" name="draw" class="form-control" placeholder="Draw" value="{{ $records->draw }}" >
            </div>
            <div class="row">
            <div class="col mb-3">
                <label class="form-label">KO</label>
                <input type="text" name="ko" class="form-control" placeholder="KO" value="{{ $records->ko }}" >
            </div>
            <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bouts</label>
                <input type="text" name="bouts" class="form-control" placeholder="Bouts" value="{{ $records->bouts }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BoxersId</label>
                <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId" value="{{ $records->boxers_id }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <br><br><br><br>
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('records') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
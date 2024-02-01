@extends('layouts.app')
  
@section('title', 'Show Records')
  
@section('contents')
    <h1 class="mb-0">Detail Records</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Boxer</label>
            <input type="text" name="boxer" class="form-control" placeholder="boxer" value="{{ $records->boxer }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Win</label>
            <input type="text" name="win" class="form-control" placeholder="Win" value="{{ $records->win }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lose</label>
            <input type="text" name="lose" class="form-control" placeholder="Lose" value="{{ $records->lose }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Draw</label>
            <input type="text" name="draw" class="form-control" placeholder="Draw" value="{{ $records->draw }}" readonly>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">KO</label>
            <input type="text" name="ko" class="form-control" placeholder="KO" value="{{ $records->ko }}" readonly>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bouts</label>
            <input type="text" name="bouts" class="form-control" placeholder="Bouts" value="{{ $records->bouts }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BoxersId</label>
            <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId" value="{{ $records->boxers_id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $records->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $records->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('records') }}" type="button" class="btn btn-danger">Back</a>
@endsection
@extends('guests.guests_layout')
  
@section('title', 'Show Superbantams')
  
@section('contents')
    <h1 class="mb-0">Detail Superbantams</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Boxer</label>
            <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $superbantams->boxer }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $superbantams->weight }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Class</label>
            <input type="text" name="class" class="form-control" placeholder="Class" value="{{ $superbantams->class }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">RatesId</label>
            <input type="text" name="rates_id" class="form-control" placeholder="RatesId" value="{{ $superbantams->rates_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BoxersId</label>
            <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $superbantams->boxersid }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $superbantams->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $superbantams->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('guests.dashboard') }}" type="button" class="btn btn-danger">Back</a>
@endsection
@extends('layouts.app')
  
@section('title', 'Show Rates')
  
@section('contents')
    <h1 class="mb-0">Detail Rates</h1>
    <hr />
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Id</label>
            <input type="text" name="id" class="form-control" placeholder="Id" value="{{ $rates->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Boxer</label>
            <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $rates->boxer }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Rank</label>
            <input type="text" name="rank" class="form-control" placeholder="Rank" value="{{ $rates->rank }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Ratings</label>
            <input type="text" name="ratings" class="form-control" placeholder="Ratings" value="{{ $rates->ratings }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BoxersId</label>
            <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId" value="{{ $rates->boxers_id }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $rates->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $rates->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('rates') }}" type="button" class="btn btn-danger">Back</a>
@endsection
@extends('layouts.app')
  
@section('title', 'Edit Rates')
  
@section('contents')
    <h1 class="mb-0">Edit Rates</h1>
    <hr />
    <form action="{{ route('rates.update', $rates->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
                <label class="form-label">Id</label>
                <input type="text" name="id" class="form-control" placeholder="Id" value="{{ $rates->id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Boxer</label>
                <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $rates->boxer }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Rank</label>
                <input type="text" name="rank" class="form-control" placeholder="Rank" value="{{ $rates->rank }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Ratings</label>
                <input type="text" name="ratings" class="form-control" placeholder="Ratings" value="{{ $rates->ratings }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BoxersId</label>
                <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId" value="{{ $rates->boxers_id }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <br><br><br><br>
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('rates') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
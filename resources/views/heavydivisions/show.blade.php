@extends('layouts.app')
  
@section('title', 'Show Heavy Divisions')
  
@section('contents')
    <h1 class="mb-0">Detail Heavy Divisions</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Boxer</label>
            <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $heavydivisions->boxer }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $heavydivisions->weight }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Class</label>
            <input type="text" name="class" class="form-control" placeholder="Class" value="{{ $heavydivisions->class }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">RatesId</label>
            <input type="text" name="rates_id" class="form-control" placeholder="RatesId" value="{{ $heavydivisions->rates_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BoxersId</label>
            <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $heavydivisions->boxersid }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $heavydivisions->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $heavydivisions->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('heavydivisions') }}" type="button" class="btn btn-danger">Back</a>
@endsection
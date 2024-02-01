@extends('guests.guests_layout')
  
@section('title', 'Show Stats')
  
@section('contents')
    <h1 class="mb-0">Detail Stats</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Boxer_name</label>
            <input type="text" name="boxer_name" class="form-control" placeholder="Boxer_name" value="{{ $stats->boxer_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Height</label>
            <input type="text" name="height" class="form-control" placeholder="Height" value="{{ $stats->height }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $stats->weight }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Weight_class</label>
            <input type="text" name="weight_class" class="form-control" placeholder="Weight_class" value="{{ $stats->weight_class }}" readonly>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Reach</label>
            <input type="text" name="reach" class="form-control" placeholder="Reach" value="{{ $stats->reach }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Ape_index</label>
            <input type="text" name="ape_index" class="form-control" placeholder="Ape_index" value="{{ $stats->ape_index }}" readonly>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Stance</label>
            <input type="text" name="stance" class="form-control" placeholder="Stance" value="{{ $stats->stance }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BoxersId</label>
            <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $stats->boxersid }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $stats->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $stats->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('guests.dashboard') }}" type="button" class="btn btn-danger">Back</a>
@endsection
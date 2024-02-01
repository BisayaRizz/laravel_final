@extends('layouts.app')
  
@section('title', 'Edit Stats')
  
@section('contents')
    <h1 class="mb-0">Edit Stats</h1>
    <hr />
    <form action="{{ route('stats.update', $stats->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Boxer_name</label>
                <input type="text" name="boxer_name" class="form-control" placeholder="Boxer_name" value="{{ $stats->boxer_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Height</label>
                <input type="text" name="height" class="form-control" placeholder="Height" value="{{ $stats->height }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $stats->weight }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Weight_class</label>
                <input type="text" name="weight_class" class="form-control" placeholder="Weight_class" value="{{ $stats->weight_class }}" >
            </div>
            <div class="row">
            <div class="col mb-3">
                <label class="form-label">Reach</label>
                <input type="text" name="reach" class="form-control" placeholder="Reach" value="{{ $stats->reach }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ape_index</label>
                <input type="text" name="ape_index" class="form-control" placeholder="Ape_index" value="{{ $stats->ape_index }}" >
            </div>
            <div class="row">
            <div class="col mb-3">
                <label class="form-label">Stance</label>
                <input type="text" name="stance" class="form-control" placeholder="Stance" value="{{ $stats->stance }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BoxersId</label>
                <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $stats->boxersid }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <br><br><br><br>
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('stats') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
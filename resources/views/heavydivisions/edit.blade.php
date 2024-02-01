@extends('layouts.app')
  
@section('title', 'Edit Heavy Divisions')
  
@section('contents')
    <h1 class="mb-0">Edit Heavy Divisions</h1>
    <hr />
    <form action="{{ route('heavydivisions.update', $heavydivisions->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Boxer</label>
                <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $heavydivisions->boxer }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $heavydivisions->weight }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Class</label>
                <input type="text" name="class" class="form-control" placeholder="Class" value="{{ $heavydivisions->class }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">RatesId</label>
                <input type="text" name="rates_id" class="form-control" placeholder="RatesId" value="{{ $heavydivisions->rates_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BoxersId</label>
                <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $heavydivisions->boxersid }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <br><br><br><br>
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('heavydivisions') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
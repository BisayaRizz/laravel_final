@extends('layouts.app')
  
@section('title', 'Edit Superbantams')
  
@section('contents')
    <h1 class="mb-0">Edit Superbantams</h1>
    <hr />
    <form action="{{ route('superbantam.update', $superbantams->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Boxer</label>
                <input type="text" name="boxer" class="form-control" placeholder="Boxer" value="{{ $superbantams->boxer }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Weight" value="{{ $superbantams->weight }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Class</label>
                <input type="text" name="class" class="form-control" placeholder="Class" value="{{ $superbantams->class }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">RatesId</label>
                <input type="text" name="rates_id" class="form-control" placeholder="RatesId" value="{{ $superbantams->rates_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BoxersId</label>
                <input type="text" name="boxersid" class="form-control" placeholder="BoxersId" value="{{ $superbantams->boxersid }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <br><br><br><br>
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('superbantams') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
@extends('layouts.app')
  
@section('title', 'Create Superbantams')
  
@section('contents')superbantams
    <h1 class="mb-0">Add  Superbantams</h1>
    <hr />
    <form action="{{ route('superbantams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="boxer" class="form-control" placeholder="Boxer">
            </div>
            <div class="col">
                <input type="text" name="weight" class="form-control" placeholder="Weight">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="class" class="form-control" placeholder="Class">
            </div>
            <div class="col">
                <input type="text" name="rates_id" class="form-control" placeholder="RatesId">
            </div>
            <div class="col">
                <input type="text" name="boxersid" class="form-control" placeholder="BoxersId">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br><br>
            <a href="{{ route('superbantams') }}" type="button" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
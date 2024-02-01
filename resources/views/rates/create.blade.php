@extends('layouts.app')
  
@section('title', 'Create Rates')
  
@section('contents')rates
    <h1 class="mb-0">Add Rates</h1>
    <hr />
    <form action="{{ route('rates.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
                <input type="text" name="id" class="form-control" placeholder="Id">
            </div>
            <div class="col">
                <input type="text" name="boxer" class="form-control" placeholder="Boxer">
            </div>
            <div class="col">
                <input type="text" name="rank" class="form-control" placeholder="Rank">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="ratings" class="form-control" placeholder="Ratings">
            </div>
            <div class="col">
                <input type="text" name="boxers_id" class="form-control" placeholder="BoxersId">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <br><br>
            <a href="{{ route('rates') }}" type="button" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
@extends('layouts.app')
  
@section('title', 'Create Stats')
  
@section('contents')stats
    <h1 class="mb-0">Add Stats</h1>
    <hr />
    <form action="{{ route('stats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="boxer_name" class="form-control" placeholder="Boxer_name">
            </div>
            <div class="col">
                <input type="text" name="height" class="form-control" placeholder="Height">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="weight" class="form-control" placeholder="Weight">
            </div>
            <div class="col">
                <input type="text" name="weight_class" class="form-control" placeholder="Weight_class">
            </div>
            <div class="col">
                <input type="text" name="reach" class="form-control" placeholder="Reach">
            </div>
            <div class="col">
                <input type="text" name="ape_index" class="form-control" placeholder="Ape_index">
            </div>
            <div class="col">
                <input type="text" name="stance" class="form-control" placeholder="Stance">
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
            <a href="{{ route('stats') }}" type="button" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
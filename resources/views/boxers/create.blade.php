@extends('layouts.app')
  
@section('title', 'Create Boxers')
  
@section('contents')boxers
    <h1 class="mb-0">Add Boxers</h1>
    <hr />
    <form action="{{ route('boxers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
                <input type="text" name="id" class="form-control" placeholder="id">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
            <div class="col">
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nationality" class="form-control" placeholder="Nationality">
            </div>
            <div class="col">
                <input type="text" name="division" class="form-control" placeholder="Division">
            </div>
            <div class="col">
                <input type="text" name="nickname" class="form-control" placeholder="Nickname">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <a href="{{ route('boxers') }}" type="button" class="btn btn-danger">Back</a>
        </div>
    </form>
@endsection
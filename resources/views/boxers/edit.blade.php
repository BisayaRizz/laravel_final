@extends('layouts.app')
  
@section('title', 'Edit Boxers')
  
@section('contents')
    <h1 class="mb-0">Edit Boxers</h1>
    <hr />
    <form action="{{ route('boxers.update', $boxers->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
        <label class="form-label">Id</label>
                <input type="text" name="id" class="form-control" placeholder="id" value="{{ $boxers->Id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $boxers->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $boxers->age }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $boxers->gender }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nationality</label>
                <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{ $boxers->nationality }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Division</label>
                <input type="text" name="division" class="form-control" placeholder="Division" value="{{ $boxers->division }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nickname</label>
                <input type="text" name="nickname" class="form-control" placeholder="Nickname" value="{{ $boxers->nickname }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
    <a href="{{ route('boxers') }}" type="button" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
@endsection
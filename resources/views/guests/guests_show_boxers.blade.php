@extends('guests.guests_layout')
  
@section('title', 'Guests Details')
  
@section('contents')
    <h1 class="mb-0">Detail Boxers</h1>
    <hr />
    <div class="row">
    <div class="col mb-3">
            <label class="form-label">Id</label>
            <input type="text" name="id" class="form-control" placeholder="id" value="{{ $boxers->id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $boxers->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $boxers->age }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nationality</label>
            <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{ $boxers->nationality }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Bio</label>
            <input type="text" name="bio" class="form-control" placeholder="Bio" value="{{ $boxers->bio }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nickname</label>
            <input type="text" name="nickname" class="form-control" placeholder="Nickname" value="{{ $boxers->nickname }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $boxers->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $boxers->updated_at }}" readonly>
        </div>
    </div>
    <a href="{{ route('guests.dashboard') }}" type="button" class="btn btn-danger">Back</a>
@endsection
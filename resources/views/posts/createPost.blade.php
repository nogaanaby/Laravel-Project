@extends('layouts.app')

@section('content')
  <form>
    <div class="form-group">
      <label>Post Title</label>
      <input type="text" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label>Post Body</label>
      <textarea class="form-control" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
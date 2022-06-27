@extends('layout/home')
@section('content')
 <h2>Edit Candidate</h2>
<form method="POST" action="/editCandidate/{{ $candidate->id }}">
  @csrf
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" value="{{ $candidate->name }}" name = 'name'>
    </div>
    <div class="mb-3">
      <select class="form-select" name='category'>
        <option  value= "{{ $candidate->category }}" selected>{{ $candidate->category }}</option>
        <option value="Deawa">Deawa</option>
        <option value="Neshida">Neshida</option>
        <option value="Charity">Charity</option>
      </select>
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <textarea name = 'desc'  value = {{ $candidate->desc }} placeholder="{{ $candidate->desc }}" style="height:150px;" class="form-control" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
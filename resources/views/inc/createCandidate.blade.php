@extends('layout/home')
@section('content')
 
<form method="POST" action="/storeCandidate">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name = 'name'>
    </div>
    <div class="mb-3">
        <select class="form-select" name='category'>
            <option  value= "" selected>Category</option>
            <option value="Deawa">Deawa</option>
            <option value="Neshida">Neshida</option>
            <option value="Charity">Charity</option>
          </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <textarea name = 'desc' style="height:150px;" class="form-control" placeholder="Description"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
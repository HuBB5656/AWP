@extends('layout/home')

@section('content')
<h3>List of Candidates</h3>
@if($allCandidate)
<div class="grid">
   @foreach($allCandidate as $candidate)
  
        <div class="g-col-6">
            <h4><a href="candidate/{{ $candidate->id }}">{{ $candidate->name }}</a></h4>
            <small>Selected on {{ $candidate->created_at }}</small>
        </div>
   @endforeach
</div>
@else
  <h3>No Candidate</h3>
@endif
{{-- <h5>{{ $name }}</h5> --}}
@endsection
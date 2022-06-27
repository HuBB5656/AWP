@extends('layout/home')
@section('content')
<h4>{{ $candidate->name }}</h4>
<h5>{{ $candidate->category }}</h5>
<p>{{ $candidate->desc }}</p>
<small>Selected on {{ $candidate->created_at }}</small><hr>

<a href="/editCandidate/{{ $candidate->id }}" class="btn btn-primary">Edit</a>

<form class="pull-right" method="Post" action="/getCandidate" >
    <a href="/delete/{{ $candidate->id }}" class="btn btn-danger">Delete</a>
</form>
@endsection
@extends('layout/home')
@section('content')
<h4>{{ $candidate->name }}</h4>
<p>{{ $candidate->desc }}</p>
<small>Selected on {{ $candidate->created_at }}</small>

@endsection
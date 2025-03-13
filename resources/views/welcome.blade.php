@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="my-4"> Welcome to My Laravel App</h1>
<p> Manage students and courses easily.</p>
<a href="{{ route('index' }}" class="btn btn-info btn-sm">Manage Students</a>
<a href="{{ route('index'}}" class="btn btn-warning btn-sm">Manage Courses</a>
</div>

@endsection
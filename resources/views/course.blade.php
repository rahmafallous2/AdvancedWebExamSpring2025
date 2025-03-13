@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Add New Course</h1>
            <a href="{{ route('index') }}" class="btn btn-secondary mb-3">Back to Courses</a>
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
            
                    <button type="submit" class="btn btn-primary">Add new Course</button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
        <div class="container">
       <div class="container">
       @foreach($courses as $course)
                        <div>
                            <h2>{{ $course->name }}</h2>
                            <p>{{ $course->description }}</p>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </div>
        @endforeach
    
      
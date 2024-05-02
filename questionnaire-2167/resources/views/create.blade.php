@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!-- Card Header -->
                <div class="card-header">Create a questionnaire</div>

                <!-- Form to create a questionnaire -->
                <form action="/questionnaire">

                    <!-- Title Input -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Title">
                        <!-- Title Input Validation Error -->
                        @error('title')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <small id="titleHelp" class="form-text text-muted">Give the questionnaire a title.</small>
                    </div>

                    <!-- Description Input -->
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input name="description" type="text" class="form-control" id="description" aria-describedby="descriptionSupport" placeholder="Description">
                        <!-- Description Input Validation Error -->
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <small id="descriptionSupport" class="form-text text-muted">Give the questionnaire a description.</small>
                    </div>

                    <!-- Submit Button -->
                    <button href="/questionnaire" type="create" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
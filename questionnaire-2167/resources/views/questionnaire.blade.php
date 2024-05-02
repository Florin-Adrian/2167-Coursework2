@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <!-- Card Header -->
                <div class="card-header">Create Questionnaire</div>

                <div class="card-body">
                    <!-- Display Success Message if Available -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Question Input -->
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input name="question" type="text" class="form-control" id="question" aria-describedby="questionHelp" placeholder="Question">
                        <small id="questionHelp" class="form-text text-muted">Write the question.</small>
                    </div>

                    <!-- Answer Inputs -->
                    <div class="form-group">
                        <label for="answer1">Answer 1</label>
                        <input name="answer1" type="text" class="form-control" id="answer1" aria-describedby="answer1Help" placeholder="Answer 1">
                        <small id="answer1Help" class="form-text text-muted">Write answer 1.</small>
                    </div>

                    <div class="form-group">
                        <label for="answer2">Answer 2</label>
                        <input name="answer2" type="text" class="form-control" id="answer2" aria-describedby="answer2Help" placeholder="Answer 2">
                        <small id="answer2Help" class="form-text text-muted">Write answer 2.</small>
                    </div>

                    <div class="form-group">
                        <label for="answer3">Answer 3</label>
                        <input name="answer3" type="text" class="form-control" id="answer3" aria-describedby="answer3Help" placeholder="Answer 3">
                        <small id="answer3Help" class="form-text text-muted">Write answer 3.</small>
                    </div>

                    <div class="form-group">
                        <label for="answer4">Answer 4</label>
                        <input name="answer4" type="text" class="form-control" id="answer4" aria-describedby="answer4Help" placeholder="Answer 4">
                        <small id="answer4Help" class="form-text text-muted">Write answer 4.</small>
                    </div>

                    <!-- Buttons -->
                    <button class="btn btn-dark">Add Question</button>
                    <button class="btn btn-dark">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
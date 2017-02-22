@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('question-answer.submenu')

            <hr>

            <form method="post" action="{{ url('question-answer') }}">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label for="title">Question</label>
                    <textarea name="question" id="question"></textarea>
                </div>

                <div class="form-group">
                    <label for="title">Answer</label>
                    <textarea name="answer" id="answer"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('question');
            CKEDITOR.replace('answer');
        })
    </script>
@endsection

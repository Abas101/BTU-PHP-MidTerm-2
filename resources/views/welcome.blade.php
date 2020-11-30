<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="quiz-wrapper">
{{--                <h1>{{ $question->body }}</h1>--}}
{{--                {!! Form::open() !!}--}}
{{--                @foreach($question->answer->shuffle() as $answer)--}}
                    <h3>
                        <div class="form-group">
                            <div class="radio">
{{--                                {{Form::radio('result', $answer->is_correct) }}--}}
{{--                                {{ Form::label('answer', $answer->answer) }}--}}
                            </div>
                        </div>
                    </h3>
{{--                @endforeach--}}
{{--                {{Form::submit('Submit answer') }}--}}
{{--                {!! Form::close() !!}--}}
            </div>
        </div>
    </div>
</div>

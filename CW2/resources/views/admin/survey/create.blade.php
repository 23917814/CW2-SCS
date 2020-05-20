<!doctype html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>Create Survey</title>
  </head>
  <body>
      <article class="row">
          <h1>Create a new survey</h1>
          {!! Form::open(['url' => 'admin/surveys']) !!}
            <div>
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}<br>
            </div>
            <div>
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}<br>
            </div>

            <h2>Questions</h2>
                {!! Form::label('question', 'Question 1:') !!}
                {!! Form::text('question', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer', 'Answer 1:') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer2', 'Answer 2:') !!}
                {!! Form::text('answer2', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer3', 'Answer 3') !!}
                {!! Form::text('answer3', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('question', 'Question 2:') !!}
                {!! Form::text('question', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer', 'Answer 1:') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer2', 'Answer 2:') !!}
                {!! Form::text('answer2', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer3', 'Answer 3') !!}
                {!! Form::text('answer3', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('question', 'Question 3:') !!}
                {!! Form::text('question', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer', 'Answer 1:') !!}
                {!! Form::text('answer', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer2', 'Answer 2:') !!}
                {!! Form::text('answer2', null, ['class' => 'form-control']) !!}<br>

                {!! Form::label('answer3', 'Answer 3') !!}
                {!! Form::text('answer3', null, ['class' => 'form-control']) !!}<br>    
            

            <div>
                {!! Form::submit('Add Survey', ['class' => 'btn btn-primary form-control']) !!}

          {!! Form::close() !!}
      </article>
  </div>
  </body>
  </html>
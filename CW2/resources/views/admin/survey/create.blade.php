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
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div>
                {!! Form::label('description', 'Description:') !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div>

            <div>
                {!! Form::submit('Add Survey', ['class' => 'btn btn-primary form-control']) !!}

          {!! Form::close() !!}
      </article>
  </div>
  </body>
  </html>
<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <h1>Создать сертификат</h1>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif

    <form method="POST" action="{{ route('generate') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label>номер сертификата:</label>
            <input type="text" name="number" class="form-control" placeholder="number">
            @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>название курса:</label>
            <input type="text" name="course" class="form-control" placeholder="course">
            @if ($errors->has('course'))
                <span class="text-danger">{{ $errors->first('course') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>ваше имя:</label>
            <input type="text" name="name" class="form-control" placeholder="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>дата завершения:</label>
            {!! Form::input('date', 'end_course', null, ['class' => 'form-control']) !!}

            @if ($errors->has('end_course'))
                <span class="text-danger">{{ $errors->first('end_course') }}</span>
            @endif
        </div>

            <div class="form-group">
                <button class="btn btn-success btn-submit">Получить сертификат</button>
            </div>
        </form>
    </div>
</body>
</html>

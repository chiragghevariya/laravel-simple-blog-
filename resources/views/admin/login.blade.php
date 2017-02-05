<!DOCTYPE html>
<html>
<head>
  <title>hello</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/master.css">

</head>
<body>

<a href="{{route('admin.login')}}">Admin</a>

{!! Form::open(['method'=>'POST','action'=>'Admincontroller@postlogin']) !!}

<div class="form-group">

    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}

</div>


<div class="form-group">

    {!! Form::label('name','password:') !!}
    {!! Form::text('password',null,['class'=>'form-control']) !!}

</div>


<div class="form-group">

    {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
</div>


{!! Form::close() !!}



</body>
</html>


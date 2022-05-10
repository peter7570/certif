<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>

    <meta http-equiv = "Content-Type" content = "text/html; charset = utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>body { font-family: DejaVu Sans }</style>
<style type="text/css">
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
    }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;

    }

    .qr-code{
        margin-top:150px;


    }
    .pdf-btn{
        margin-top:30px;
    }
</style>
<body>
<div class="container">
    <div class="panel-heading">
        <h2>Certificate</h2>
    </div>
    <div class="section">
        <p>сертификат номер: <b>{{  $data['number'] }}</b></p>
        <p>выдан:  <b>{{  $data['name'] }}</b></p>
        <p>прошел курс: <b>{{  $data['course'] }}</b></p>
            <p>дата окончания: <b>{{  $data['end_course'] }}</b></p>

        <div class="qr-code">

            @php
                $qr = 'cert.com/cid/'.$data['number'];
            @endphp

            {!! DNS1D::getBarcodeHTML($qr, "C128",1.0,100) !!}


        </div>


    </div>




</div>
</body>
</html>

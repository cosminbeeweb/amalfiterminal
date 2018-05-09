<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="
    background: #e5e5e5;
    margin: 50px auto;
    padding: 20px 10px;
    text-align: center;
    ">

    <div style="
        background: #ffffff;
        color: #003D6A;
        font-size: 20px;
        max-width: 600px;
        text-align: justify;
        font-family: Calibri;
            margin: 0 auto;
        border-radius: 5px;
        box-shadow: 0 2px 13px -4px #003d6a;
        -webkit-box-shadow: 0 2px 13px -4px #003d6a;
        -moz-box-shadow: 0 2px 13px -4px #003d6a;
        box-shadow: 0 2px 13px -4px #003d6a;
">
        <img style="
            max-width: 100px;
            float: right;
        " src="http://amalfiterminal.it/images/bg_at_reversed.png"/>

        <div style="padding: 30px 30px;">
            <p style="font-weight: bold;">
                <span style="font-weight: normal;">Nome: </span>
                {{ $data['nome'] }}
            </p>
            <p style="font-weight: bold;">
                <span style="font-weight: normal;">Cognome: </span>
                {{ $data['cognome'] }}
            </p>
            <p style="font-weight: bold;">
                <span style="font-weight: normal;">Telefono: </span>
                {{ $data['telefono'] }}
            </p>
            <p style="font-weight: bold;">
                <span style="font-weight: normal;">Email: </span>
                {{ $data['email'] }}
            </p>
            <p style="font-weight: bold;">
                <span style="font-weight: normal;">Note: </span>
                {{ $data['note'] }}
            </p>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Trains</title>
</head>
<body>
    <div class="container">
        @foreach($trains_list as $train) 
            <div class="card">
                <h5>{{$train['codice_treno']}}</h5>
                <h5>{{$train['azienda']}}</h5>
                <h5>{{$train['stazione_di_partenza']}}</h5>
                <h5>{{$train['orario_di_partenza']}}</h5>
                <h5>{{$train['stazione_di_arrivo']}}</h5>
                <h5>{{$train['orario_di_arrivo']}}</h5>
                <h5>{{$train['numero_di_carrozze']}}</h5>
                <h5>{{$train['in_orario']}}</h5>
                <h5>{{$train['cancellato']}}</h5>
            </div>
        @endforeach
    </div>
</body>
</html>
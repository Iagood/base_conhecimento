@extends('layout.site')

@section('titulo','Base de Conhecimento')

@section('conteudo')

<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body>
    
    <p style="text-align: center;" class="flow-text"><strong> Cronograma - Nível 1</strong></p>

        <div class="card ">
            <div class="card-content">
            <p  style="text-align: center;" class="flow-text">Acompanhe abaixo a ordem correta de estudo:</p>
            </div>
            <div class="card-tabs">
            <ul class="tabs tabs-fixed-width ">
                <li class="tab">
                    <a href="#test4 ">Etapa 1</a>
                </li>
                <li class="tab "><a class="active" href="#test5 ">Etapa 2</a></li>
                <li class="tab"><a href="#test6">Etapa 3</a></li>
            </ul>
            </div>
            <div class="card-content grey lighten-4">
            <div id="test4">Etapa 1</div>
            <div id="test5">Etapa 2</div>
            <div id="test6">Etapa 3</div>
            </div>
        </div>
</body>

@endsection
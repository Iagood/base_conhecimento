@extends('layout.site')

@section('titulo','Base de Conhecimento')

@section('conteudo')

<link rel="stylesheet" href="css/app.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
    <body>
      <center>
        <p>
          <div class= row>
            <div class="col s10 m6">
                <div class="card center">
                    <div class="card-image" center>
                        <img src="{{asset('img/estudo.jpg')}}">
                    </div>
                    <div class="card-content" center>
                      <p style="text-align: center;" class="flow-text">Olá $fulano, seja bem vindo a SBC. Este site foi desenvolvido pensando no seu aprendizado! Nele você pode ter acesso a um planner de estudos em ordem cronológica, a acervo de tutoriais em pdf feitos pela sua equipe, e vídeo-aulas completas.</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </center>
    </body>

  



@endsection

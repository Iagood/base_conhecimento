@extends('layout.site')

@section('titulo','Base de Conhecimento')

@section('conteudo')
<div class="conteudo">
   <!-- Estilo da página -->
  <style>
    body {
      background-color: #90a4ae;

    }
    .conteudo {
      text-align: center;
    }

    .material-icons {
      font-size: 70px;
      color: #1a237e;
    }
  </style>

  <div class="row">
    <form class="" action="{{route('site.login.entrar')}}" method="post">
      {{ csrf_field() }}

      <div class="z-depth-3 y-depth-3 x-depth-3 grey black-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="icon-preview col s50 m10"><i class="material-icons dp48">layers</i></div>

        <div class="row">
          <div class="input-field col s12">
            <input class="validate" type="text" name="email" id="email" required="">
            <label style="text-align: left;" for="email">E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col m12">
            <input class="validate" type="password" name="senha" id="senha" required="">
            <label style="text-align: left;" for="password">Senha</label>
          </div>
          <label style="float: right;">
            <a><b style="color: #F5F5F5;">Forgot Password?</b></a>
          </label>
        </div>

        <div class="row">
          <button style="margin-left:65px;" type="submit" name="btn_login" class="col  s6 btn btn-small green black-text  waves-effect z-depth-1 y-depth-1">Entrar</button>
        </div>
      </div>
    </form>
  </div>

</div>

@endsection
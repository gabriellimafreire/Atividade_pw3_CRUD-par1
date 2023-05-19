<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAGEM DE SERVIÇOS - @gabriellimafreire</title>

    @vite(['resources/css/app.css', 
                'resources/js/app.js',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js'],)
</head>
<body>

<body style="background-color: #d3d3d3;"><br>
    <!-- Abrindo a tag container-->
<div class="container" style="background-color: white;">

     <!-- Iniciando Nav-bar -->
     <header >
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary" style="margin-top: -1rem; margin-left: -0.8rem; margin-right: -0.8rem;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">SISTEMA WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{url('/')}}">Cadastrar</a>
        <a class="nav-link  active" href="{{url('/consultar')}}">Consultar</a>
      </div>
    </div>
  </div>
</nav><br>
    </header>
    <!-- Finalizando Nav-bar --> 

    <!-- Iniciando Título --> 
        <h5>Consultar - Contatos Agendados</h5>
    <!-- Finalizando Título -->

 <!-- fechando a tag container-->
</body>
<table class="table">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Origem</th>
      <th scope="col">Contato</th>
      <th scope="col">Observação</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($agendamentos as $agendamento )
    <tr>
          <td>{{$agendamento->Nome}}</td>
          <td>{{$agendamento->Telefone}}</td>
          <td>{{$agendamento->Origem}}</td>
          <td>{{$agendamento->Data_Contato}}</td>
          <td>{{$agendamento->Observacao}}</td>
          <td>
            <a href="/editar/{{$agendamento->id}}" class="btn btn-primary">Editar</a>
            <a href="/excluir/{{$agendamento->id}}" class="btn btn-danger">Excluir</a>
          </td>
    </tr>

    @endforeach
  </tbody>
</table>

</body>
</html>
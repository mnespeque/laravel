<!DOCTYPE html>
<html>
<head>
    <title>Lista</title>
 
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
 
    <h1>Lista de aniversariantes</h1>
 
    <hr />
 
    <table class="table table-striped">
    <tr class="active">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Email</th>
          <th>Aniversário</th>
        </tr>
      </tr>
      </thead>
      <tbody>
        @foreach($contatos as $row)
        <tr>
          <th scope="row">{{ $row->id }}</th>
          <td>{{ $row->nome }}</td>
          <td>{{ $row->sobrenome }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->aniversario }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
 
</div>
 
</body>
</html>
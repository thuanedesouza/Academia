<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Avaliação </title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3> Avaliações</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
   
                         
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>   
        <th>Nome</th>
     <th>Avaliação - ID</th>
          
         <th>Qtde. de Avaliações </th>
         <th>Data da Ultima Avaliaçães </th>
         <th>Indice IMC </th>
         <th>Porcentagem </th>
        </tr>   
        </thead>
        <tbody>
          <?php get_avaliacao_details(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Registrar Nova Avaliação</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>Avaliado - ID</label>
<input type="text" name="Avaliado_id" class="form-control"><br>
 <label>Numero da Avaliação</label>
                    <input type="text" name="QtdeAvaliacoes
" class="form-control"><br>
                    <label>Data</label>
<input type="text" name="DataUltima" class="form-control"><br> 
<label>Indice IMC</label>
<input type="text" name="IMC" class="form-control"><br> 
<label>Porcentagem de Gordura</label>
<input type="text" name="PorctgGordura" class="form-control"><br> 

<input type="submit" class="btn btn-primary" name="tra_submit" value="Registrar">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
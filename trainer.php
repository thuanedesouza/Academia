<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Treinadores - Detalhes</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/0.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#636e72;color:#f5f6fa;">
         <div class="row">
             <div class="col-md-1">
             <a href="admin-panel.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-3"><h3> Treinadores Informação</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
   
                         
                 </form></div></div></div>
     <div class="card-body" style="background-color:#636e72;color:#f5f6fa;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Treinador - ID</th>
            <th>Nome</th>
         <th>Contato</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#636e72;color:#f5f6fa;">
                <h3>Registrar novo Treinador</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>Treinador ID</label>
<input type="text" name="Trainer_id" class="form-control"><br>
 <label>Nome</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>Contato</label>
<input type="text" name="phone" class="form-control"><br> 
<input type="submit" class="btn btn-primary" style="background-color:#636e72;color:#f5f6fa;" name="tra_submit" value="Registrar">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
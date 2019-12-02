<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Membros</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/0.jpg') no-repeat;background-size: cover;height: 300px;background-color:#636e72;color:#f5f6fa;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#636e72;color:#f5f6fa;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-3"><h3>Membros</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="trainer_search.php" method="post">
          <div class="row">
   <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Nome"></div>
              <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"> </div></div>           
                 </form></div></div></div>
     <div class="card-body" style="background-color:#636e72;color:#f5f6fa;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Primeiro Nome</th>
            <th>Segundo Nome</th>
         <th>Email - ID</th>
         <th>Membro - ID</th>
         <th>Trainador - ID</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_client_details(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
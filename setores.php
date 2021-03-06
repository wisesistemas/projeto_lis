<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
        
        <title>Postos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/laboratorio.svg"/>

    </head>
    <body>
    	
    	<?php
    	require_once('camada1.php');
    	
    	require_once('camada2.php');
    	?>
    	
    	
	<div class="container-fluid col-md-12">
    	<div class="card">
  			<div class="card-header">
    			<strong>Cadastro de Setores</strong>
  			</div>
  			<div class="card-body">

  				<form class="form-group row">
					<div class="form-group col-md-3">
				    	<label for="exampleFormControlInput1">Código</label>
				    	<input type="number" min="1" max="999" class="form-control" id="exampleFormControlInput1" placeholder="000">
				  	</div>
				  	<div class="form-group col-md-9">
				    	<label for="exampleFormControlInput1">Nome do Setor</label>
				    	<input type="text" class="form-control" style="text-transform: uppercase;" id="exampleFormControlInput1"  placeholder="NOME DO SETOR">
				  	</div>
				  	<div class="form-group col-md-12">
						<button type="submit" class="btn btn-success">Cadastrar</button>
						<a class="button btn btn-secondary" href="home.php">Cancelar</a>
					</div>

				</form>
    			
    		
  			</div>
		</div>
 	</div>  	
    	
   
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</html>

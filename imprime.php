<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script></head>

	<title></title>
	<style>
		label{color: white;}
		body{
  background-image: url('ppp.jpg');

}
 table{font-weight: bold;font-size: 30px ;color: black;border:solid ;border-radius: 19px;}
        td{border:solid black;}
    

        tr{border:solid ;background-color:rgb(234,219,200,0.6);}
.kp:hover{border:solid black;background-color:blue;color:white;}
.table-active:hover{border:solid black;background-color:orange;color:white;}
        tr:hover{border:solid ;background-color:rgb(0,255,255);}
      


	</style>

</head>

<body onload="myFunction()">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="somatimepage1.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Facture.php">Facture</a>
        </li>
         <li class="nav-item">
<a class="nav-link" href="imprime.php">Historique de personnalisation</a>
        </li>
              
      </ul>
    </div>
  </div>
</nav><br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
    <div id="loading"> 
</div>

	
   <center> <table class="table table-hover"border=1>
    <tr class="table-active"><td colspan="5"><center><h1><i>Historique</i></h1></center></td></tr>
    <tr class="kp"><td><center><i>Nom</i></center></td><td><center><i>Adresse</i></center></td><td> <center><i>Code postal</i></center></td><td><center><i>Ville</i></center></td><td><i><center>Telephone</center></i></td></tr>
    <?php

    $connect=mysqli_connect("localhost","root","","oter");
    $stmt= $connect->prepare("select*from socier ;");
    $stmt->execute();
    $result=$stmt->get_result();
    while($row=$result->fetch_assoc()){
        echo "<tr><td>"."<center><i>".$row["Nom"]."</i></center>"." </td><td> "."<center><i>".$row["Adresse"]."</i></center>"." </td><td> "."<center><i>".$row["Codepostal"]."</i></center>"."</td><td>"."<center><i>".$row["Ville"]."</i></center>"."</td><td>"."<center><i>".$row["telephone"]."</i></center>"."</td></tr>";
    }

    ?>
    
</table></center>
</div>
<script>
   var preloader = document.getElementById("loading");
function myFunction()
{
    preloader.style.display ='none';
  }
</script>
<br>
<br>
<br>
<br>

 
</body>
</html>
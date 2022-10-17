<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script></head>

<style>
  #loading{
  width: 100%;
  height: 100vh;
  background:#fff 
  url('gis.gif')no-repeat  center;
background-size: 20%;
  z-index:99999 ;
  
}
body{background-color: #AED6F1 ;}
  .d1{color:  #AED6F1;}


.bp{background-color: rgb(0, 0, 0,0.10);}
 fieldset{background-color: rgb(39, 147, 7,0.4);border-radius: 20px ;font-style:italic;}
         table{font-weight: bold;font-size: large;color: hsl(0, 0%, 100%);font-style:italic;}
                 .t1{font-weight: bold;font-size: large;color: black;border: solid rgb(69, 156, 69);background-color:rgb(238, 6, 6,0.6);border-radius: 20px;}
        .t2{font-weight: bold;font-size: large;color: blue;border: solid rgb(69, 156, 69);background-color:rgb(170, 22, 113,0.6);border-radius: 20px;}

             input{font-size: 20px;color: blue;border-radius: 4px;}
         .kb{background-color: rgb(43, 226, 98);color: red;}
                 .red{color: red;}
}
}

.ka{background-color: blueviolet;color: white;}
button{font-size: 20px;border-radius: 5px;font-weight: bold;font-style:italic;}
.ml:hover{background-color:rgb(47, 224, 255);box-shadow:black 5px 5px;color:white;}
.mp:hover{background-color:red;box-shadow:black 5px 5px;color:white;}
</style>
<script>

function cancel(){
document.getElementById("v1").value="";
document.getElementById("v2").value="";
document.getElementById("v3").value="";
document.getElementById("v4").value="";
document.getElementById("v5").value="";
document.getElementById("v6").value="";
document.getElementById("v7").value="";
document.getElementById("a1").value="";
document.getElementById("a2").value="";
document.getElementById("a3").value="";
document.getElementById("a4").value="";
document.getElementById("a5").value="";
document.getElementById("a6").value="";
document.getElementById("a7").value="";
document.getElementById("a8").value="";
document.getElementById("a9").value="";
}
 
</script>

<body onload="myFunction()">
  
<div id="loading"> 
  </div>

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
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="oppp.png" height="400"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="ppp.jpg"height="400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="mmm.jpg" height="400"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="kkk.jpg"height="400" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<center>
<h1><i>PERSONNALISER VOTRE FACTURE [4]</i></h1></center>

<hr>
<br>
<br>
<br>
<center><b><i>Tapez les informations sur la société... [5]</i></b></center>
  <form method="POST"action="imprime1.php">

<fieldset>
<center>
<table>
<tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nom :<input type="Text" id="v1"name="Nom"></td>
<td>
Téléphone :<input type="Tele" id="v6"class="kb"name="telephone"><br></td></tr><tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adresse :<input type="Text" id="v2"name="Adresse"><br></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax :<input type="Tele" id="v7"class="ka"name="Fax"><br></td></tr>
<tr>
<td>Code postal :<input type="Text" id="v3"name="Codepostal"></td>
<td></td><tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ville :<input type="Text" id="v4"name="Ville"></td>
<td></td></tr><tr>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pays :<input type="Text" id="v5"name="Pays"><br>
</td><td></td><tr>
</table>
</center>
</fieldset>
 
<center><b><i>Spécifiez les informations par défaut... [6]</i></b></center>
<fieldset>

<table>
<tr><td><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<table>
<tr><td>Taux de TVA à appliquer</td></tr>
<tr><td>1 .<input type="Text" id="a1"name="tva1"></td></tr>
<tr><td>2 .<input type="Text" id="a2"name="tva2"></td></tr>
<tr><td>3 .<input type="Text" id="a3"name="tva3"></td></tr>
</table>
</td><td>
<table>
<tr><td>Cartes de crédit acceptées</td></tr>
<tr><td>1 .<input type="Text" id="a4"name="credit1"></td></tr>
<tr><td>2 .<input type="Text" id="a5"name="credit2"></td></tr>
<tr><td>3 .<input type="Text" id="a6"name="credit3"></td></tr>
<tr><td></td></tr>
<tr><td>Frais de livraison :<input type="Text" id="a7"name="livraison"></td></tr>
</td></tr>

</table>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Partage de la numérotation du [3]</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modèle de facture sur le réseau</td>
<td>Emplacement du compteur :<input type="Text" id="a8"name="Ec"></td></tr>
<tr><td colspan="2"><center>
Base de données de l'Assistant Modèle :<input type="Text" id="a9"name="basen"></center></center>
</td></tr>
</table>

</fieldset>
<center>
<button type="submit"class="ml"name="submit">Ajouter</button> <center>
 </form><br>
<script>
   var preloader = document.getElementById("loading");
function myFunction()
{
    preloader.style.display ='none';
  }
</script>

<center>
<button type="reset"onclick="cancel()"class="mp">Annuler</button><center>

<form  method="post"><br>
    <table class="t1">
 <tr><td>Nom</td> <td> <input type="text"class="red" name="Nom" ></td> </tr><br>
    <tr><td></td><td><button type="submit"  class="mp" name="submit"value="delete">Supprimer</button></td></tr>
    </table>
  </form>
 <b class="d1"> 
<?php
if (isset($_POST['submit'])) {
 
$Nom=$_POST["Nom"];
$connect=mysqli_connect("localhost","root","","oter");
$stmt= $connect->prepare("delete from socier  where Nom=?;");
$stmt->bind_param("s",$Nom);
$stmt->execute();
echo'<script>alert("bien Supprimer");</script>';
}
?>
</b>

<iframe width="0" height="0" src=" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>
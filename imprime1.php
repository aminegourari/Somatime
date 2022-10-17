<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
	<title></title>
</head>


<style>
	img{width:400px;height: 200px;}
	div{color:white ;}
    body {
  background-image: url("img/mop.jpg");
}
            fieldset{background-color: #08C40B;border-radius: 20px;border: solid rgb(69, 156, 69);}
            table{font-weight: bold;color: white;border:solid ;border-radius: 12px;font-size: large;}
                  
                  .lm{border:solid white;}
                  .la{border:solid white;}
.m11{border:solid white;}
            .ml{font-weight: bold;font-size: large;color: red;background-color: white;}
            .mf{font-weight: bold;font-size: large;color: black;background-color: white;}
            .md{font-weight: bold;font-size: large;color: blueviolet;background-color: white;}
            .mm{font-weight: bold;font-size: large;color: #0413AD ;background-color: white;}
            .ms{font-weight: bold;font-size: large;color: rgb(43, 226, 98);background-color: white;}
            .mi{font-weight: bold;font-size: large;color: green;background-color: white;}
            #logo{width:156px;height: 200px;}
h1{color:darkblue;}
h3{color:darkblue;}
.op{color:black;}
i{color:#9E9707;}


    </style>
        <body onload="myFunction()">
        	  <div id="loading">   <?php
if (isset($_POST['submit'])) {
  $Nom=$_POST['Nom'];
    $Adresse=$_POST['Adresse'];
  $Codepostal=$_POST['Codepostal'];
    $Ville=$_POST['Ville'];
    $telephone=$_POST['telephone'];

$connec=mysqli_connect("localhost","root","","oter");
$sql=$connec->prepare("INSERT INTO socier(Nom,Adresse,Codepostal,Ville,telephone)values('$Nom','$Adresse','$Codepostal','$Ville','$telephone')");
var_dump($sql);
if($sql->execute()){
echo'<script>alert("bien ajouter");</script>';
}
else{
  echo 'nonbien';
}


}
if (isset($_POST['submit'])) {
  $Pays=$_POST['Pays'];
    $Fax=$_POST['Fax'];
  $tva1=$_POST['tva1'];
    $tva2=$_POST['tva2'];
    $tva3=$_POST['tva3'];

$connec=mysqli_connect("localhost","root","","oter");
$sql=$connec->prepare("INSERT INTO socier1(Pays,Fax,tva1,tva2,tva3)values('$Pays','$Fax','$tva1','$tva2','$tva3')");
var_dump($sql);
if($sql->execute()){
echo 'bien';}
else{
  echo 'nonbien';
}


}
if (isset($_POST['submit'])) {
  $credit1=$_POST['credit1'];
    $credit2=$_POST['credit2'];
  $credit3=$_POST['credit3'];
    $livraison=$_POST['livraison'];
    $Ec=$_POST['Ec'];

$connec=mysqli_connect("localhost","root","","oter");
$sql=$connec->prepare("INSERT INTO socier3(credit1,credit2,credit3,livraison,Ec)values('$credit1','$credit2','$credit3','$livraison','$Ec')");
var_dump($sql);
if($sql->execute()){
echo 'bien';}
else{
  echo 'nonbien';
}
}
if (isset($_POST['submit'])) {
  $basen=$_POST['basen'];
  
$connec=mysqli_connect("localhost","root","","oter");
$sql=$connec->prepare("INSERT INTO socier4(basen)values('$basen')");
var_dump($sql);
if($sql->execute()){
echo 'bien';}
else{
  echo 'nonbien';
}
}
?></div>

<img src="oppp.png" ><br>
            <br>
    </table><center><h3 class="op"><?php echo $Nom; ?></h3></center>
            <br>
            <br>
            <br>
            <br>

<center> 
 <table  class="table table-hover">
                <tr class="table-active"><td>Nom:</td><td><div class="ml"><?php echo $Nom; ?></div></td><td>Adresse:</td><td><div class="mf"><?php echo $Adresse; ?></div></td></tr>
                <tr class="table-primary"><td>Codepostal:</td><td><div class="ml"><?php echo $Codepostal; ?></div></td><td>Ville:</td><td><div class="ml"><?php echo $Ville; ?></div></td></tr>
                <tr class="table-secondary"><td>Téléphone:</td><td><div class="mf"><?php echo $telephone; ?></div></td><td>Fax :</td><td><div class="mf"><?php echo $Fax; ?></div></td></tr>
                <tr class="table-success"><td>Taux de TVA à appliquer:</td><td>1.<div class="mf"><?php echo $tva1; ?></div>2.<div class="mf"><?php echo $tva2; ?></div>3.<div class="mf"><?php echo $tva3; ?></div></td><td>Cartes de crédit acceptées</td><td>1.<div class="mf"><?php echo $credit1; ?></div>2.<div class="mf"><?php echo $credit2; ?></div>3.<div class="mf"><?php echo $credit3; ?></div></td></tr>
                <tr class="table-danger"><td>Frais de livraison :</td><td><div class="mf"><?php echo $livraison; ?></div></td><td>Emplacement du compteur :</td><td><div class="md"><?php echo $Ec; ?></div></td></tr>
                <tr class="table-warning"><td>Base de données de l'Assistant Modèle :</td><td><div class="mm"><?php echo $basen; ?></div></td></tr>
            </table>
           
    </center>
    <script>
   var preloader = document.getElementById("loading");
function myFunction()
{
    preloader.style.display ='none';
  }
</script>
    </body>
</html>
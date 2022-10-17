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
            <div id="loading">    <?php
if (isset($_POST['submit'])) {
  $Nomcomp=$_POST['Nomcomp'];
    $Numfactur=$_POST['Numfactur'];
  $MV=$_POST['MV'];
    $DU=$_POST['DU'];
    $CNTN=$_POST['CNTN'];
        $DestPrev=$_POST['DestPrev'];
                $NombreN=$_POST['NombreN'];
        $Poids=$_POST['Poids'];
        $EXPEDITEUR=$_POST['EXPEDITEUR'];
        $DESTINATAIRE=$_POST['DESTINATAIRE'];
                $DUMN=$_POST['DUMN'];
        $Reportsoumistaxe=$_POST['Reportsoumistaxe'];
                $Reportsoumistaxe=$_POST['Reportsoumistaxe'];
        $TaxeREG=$_POST['TaxeREG'];
                $TVA=$_POST['TVA'];
            $TOTALGENERAL=$_POST['TOTALGENERAL'];
$connec=mysqli_connect("localhost","root","","oter");
$sql=$connec->prepare("INSERT INTO facture(Nomcomp,Numfactur,MV,DU,CNTN,DestPrev,NombreN,Poids,EXPEDITEUR,DESTINATAIRE,DUMN,Reportsoumistaxe,TaxeREG,TVA,TOTALGENERAL)values('$Nomcomp','$Numfactur','$MV','$DU','$CNTN','$DestPrev','$NombreN','$Poids','$EXPEDITEUR','$DESTINATAIRE','$DUMN','$Reportsoumistaxe','$TaxeREG','$TVA','$TOTALGENERAL')");
var_dump($sql);
if($sql->execute()){
echo'<script>alert("bien ajouter");</script>';
}
else{
  echo 'nonbien';
}


}

?></div>




    <center>
<table class="table table-hover"><tr class="table-active"><td><div class="ml">
<?php echo $Nomcomp; ?></div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facture n°:<div class="ml"><?php echo $Numfactur; ?></div></td></tr>
<tr class="table-primary"><td>M/V<div class="ml"><?php echo $MV; ?></div>DU<div class="ml"><?php echo $DU; ?></div>CNT N°<div class="ml"><?php echo $CNTN; ?></div ></td><td>Dest. /Prev. :<div class="ml"><?php echo $DestPrev; ?></div></td><tr>
<tr class="table-secondary"><td>Nombre de colis, Marques et N°<div class="ml"><?php echo $NombreN; ?></div></td><td>Poids :<div class="ml"><?php echo $Poids; ?></div ></td></tr>
<tr class="table-success"><td>EXPEDITEUR : <div class="ml"><?php echo $EXPEDITEUR; ?></div></td><td>DUM N° :<div class="ml"><?php echo $DU; ?></div></td></tr>
<tr class="table-danger"><td colspan="2">DESTINATAIRE :<div class="ml"><?php echo $DESTINATAIRE; ?></div></td></tr>
<tr class="table-warning"><td colspan="2">Report soumis à la taxe :<div class="ml"><?php echo $Reportsoumistaxe; ?></div></td></tr>
<tr class="table-info"><td colspan="2">Taxe REG.2,5% :<div class="ml"><?php echo $TaxeREG; ?></div></td></tr>
<tr class="table-light"><td colspan="2">taxe de transaction TVA :<div class="ml"><?php echo $TVA; ?></div></td></tr>
<tr class="table-dark"><td colspan="2">TOTAL GENERAL S.E.O.O :<div class="ml"><?php echo $TOTALGENERAL; ?></div></td></tr>

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
</html>
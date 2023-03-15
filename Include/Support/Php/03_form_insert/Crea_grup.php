<?php 
include ("db.php");

   
   if (isset($_POST['insert'])){
       $id = $_POST['id'];
       $nom = $_POST['nom'];
       $origen = $_POST['origen'];
       $anyFundacio = $_POST['anyFundacio'];

       $inserir="INSERT INTO grups (id,nom,origen,anyFundacio)  values ($id,'$nom','$origen',$anyFundacio)";
       $executar=mysqli_query($con,$inserir);
       if($executar){
        echo"<script>alert('Datos actualizados!');</script>";
        echo"<script>window.open('index.php', '_self');</script>";
           // echo "<h3>Grup Inserit Correctament</h3>
             //     <p><a href='index.php'> Tornar</a></p>";
            //header("Location: index.php");//redirecciona a index.php
        }
        else die("Inserció errònia:  ".mysqli_error($con)); //finalitza l'aplicació
   }
?>
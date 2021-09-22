<?php
include("con_db.php");
if(isset($_POST['Enviar'])){
if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $fechaini=date("d/m/y");
    $consulta="INSERT INTO datos(Usuario, Email,fecha_inicio) VALUES ('$name','$email','$fechaini')";
    $resultado=mysqli_query($conex,$consulta);
    if ($resultado){

      echo "<h1>Bienvenidos a compensar</h1>"
        ?>
        <h3 class='ok'> Bienvenido!</h3>
        
         <?php  
   
    }else{
        ?>
       <h3 class='bad'>Ups ha ocurrido un error!</h3>
       <?php
    }
}else{
    ?>
    <h3 class='bad'>Por favor complete los campos!</h3>
    <?php
}
}
?>
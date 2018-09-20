<?php
    require_once("Autoload.php");
    use Modelo\Usuario as Usuario;
    
    $noPost = false;

    if($_POST){
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "Nombre no cargado";
        $password = isset($_POST["password"]) ? $_POST["password"] : "Apellido no cargado";
        $email = isset($_POST["email"]) ? $_POST["email"] : "Email no cargado";
        
        $defaultEmail= "admin";
        $defaultPassword= "admin";

        if(($email == $defaultEmail) && ($password == $defaultPassword))
        {
            
            $user= new Usuario();
            $user->setEmail($email);
            $user->setName($nombre);
            $user->setPassword($password);
            
//            session_start();
//            
          $_SESSION["userLogged"] = $user;
            
            header("location:Main.php");
        }
        else
            echo "chau";
     
 }
    else{
        echo "<h1>No hay post</h1>";
        $noPost = true; //variable para esconder todo el html en caso de que no halla post
    } 
?>
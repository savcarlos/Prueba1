  <?php
        session_start();
        if(isset($_SESSION['u_usuario'])){
            echo "Sesion exitosa\n Bienvenido";
            
        }
        else{
            header("Location: index.php");
            
        }
        
        
    ?>
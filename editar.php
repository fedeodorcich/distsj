<?php

  include("conexbd.php");

      if(isset($_GET['id'])){

           $id= $_GET['id'];
           /*$query ="SELECT * FROM usuario WHERE id = $id";
           $result = mysqli_query($conex, $query);*/
           $result = $conexion->prepare("SELECT * FROM usuario WHERE id = $id");
           $result->execute();
           $row = $result->fetchAll();
           $admin = $row[0]['admn'];
      }
      
     if(isset($_POST['update'])){
        /*$id=$_GET['id'];*/
        $admin= $_POST['admin'];
        
        /*$query = "UPDATE usuario set admin='$admin' WHERE id = '$id'";
        mysqli_query($conex,$query);*/
        $result = $conexion->prepare("UPDATE usuario SET admn = $admin WHERE id = $id");
        $result->execute();
      
        header("Location: crudadmin.php");
    }

?>

<?php include("view/headeradmin.html")?>

   <div class="container p-4">
      <div class="row"> 
       <div class="col-md-4 mx-auto"> 
         <div class="card card-body"> 
             <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">
              <div class="form-group">     
              <strong>Admin </strong>
               <br>
               <input type="int" name="admin" value="<?php echo $admin;?>" class="form-control" placeholder="Editar Admin">
              </div>
              <button class="btn-success" name="update" conet>Update</button>
            </form>
         </div>
       </div>
      </div>
   </div>

<?php include("view/footeradmin.html")?>
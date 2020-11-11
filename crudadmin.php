<?php 

include("conexbd.php");

?>

<?php include("view/header.html")?> 
<div class="container p-4">
 <div class="row">
    <div class="col-md-4">
    
    <?php if(isset($_SESSION['message'])){ ?>

         <div class="alert alert-Success alert-<?=$_SESSION['message_type']?> fade show" role="alert">
         <?= $_SESSION['message']?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
    <?php session_unset(); } ?>
    

  <div class="col-md-8">
       <table  class="table table-bordered"> 
       <thead> 
           <tr>
           <th>Nombre</th>
           <th>Correo</th> 
           <th>Telefono</th> 
           <th>Pass</th>
           <th>Admin</th>
           <th>Accion</th>          
           </tr>
       </thead>
       <tbody>
         <?php
            /*$query = "SELECT * FROM usuario";*/
            /*$result_tablitas = mysqli_query($conexion, $query);*/
            $statament = $conexion->prepare('SELECT * FROM usuario');
            $statament->execute();
            $resultado = $statament->fetchAll();

           foreach ($resultado as $row)
           /*while($row = mysqli_fetch_array($result_tablitas))*/ { ?>
                <tr>
                        <td><?php echo $row['nombre']  ?></td>
                        <td><?php echo $row['correo']  ?></td>
                        <td><?php echo $row['telefono']  ?></td>
                        <td><?php echo $row['pass']  ?></td>
                        <td><?php echo $row['admn']  ?></td>
                      <!--  <td><?php// echo $row['created_ad']  ?></td> -->
                        <td>
                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                         <i class="fas fa-marker"></i>
                        </a>
                        </td>
                        <td>
                          <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                              </a>
                        </td>
                </tr>
       <?php } ?>
       </tbody>
       </table>


       
  </div>
 </div>
</div>

<?php include("view/footer.html")?>

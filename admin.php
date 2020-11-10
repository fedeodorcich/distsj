<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <!-- require'': will produce a fatal error (E_COMPILE_ERROR) and stop the script
         include'': will only produce a warning (E_WARNING) and the script will continue-->
    <?php require "view/headeradmin.html" ?>

    
    <a href="crudadmin.php" id="usuario" class="text-center secondary-link center-block">usurio</a>
    <div>
	<a href="crudprod.php" id="producto" class="text-center secondary-link center-block">producto</a>

    <?php require "view/footeradmin.html" ?>
</body>
</html>
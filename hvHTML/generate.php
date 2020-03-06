<?php

$nombre = $_POST['txtNombre'];
$correo = $_POST['email'];
$celular = $_POST['txtTelefono'];
$localidad = $_POST['opLocalidad'];
$descripcion = $_POST['txtDescripcion'];
$empresa = $_POST['txtEmpresa'];
$cargo = $_POST['txtCargo'];
$estudio = $_POST['opEstudio'];
$institucion = $_POST['txtInstitucion'];
$titulo = $_POST['txtTitulo'];

copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
$nombre_f = $_FILES['foto']['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOJA DE VIDA GENERADA</title>
</head>
<body>
    <div class="photo-section">
        <p class="text-nombre"><?php echo $nombre; ?></p>
        <p class="photo"><?php echo "<img src=\"$nombre_f\">"; ?></p>
    </div> 
    <div class="personal-data">
        <p class="text-section">Datos personales</p>
        <p class="text-hv">Correo electrónico: <?php echo $correo; ?></p>
        <p class="text-hv">Numero de celular: <?php echo $celular; ?></p>
        <p class="text-hv">Localidad: <?php echo $localidad; ?></p>
    </div>
    <div class="description-hv">
        <p class="text-section">Descripción</p>
        <p class="text-hv"><?php echo $descripcion; ?></p>
    </div>
    <div class="experience-hv">
        <p class="text-section">Experiencia laboral</p>
        <p class="text-hv">Empresa: <?php echo $empresa; ?></p>
        <p class="text-hv">Cargo: <?php echo $cargo; ?></p>
    </div>
    <div class="studies-hv">
        <p class="text-section">Educacion</p>
        <p class="text-hv">Nivel educativo: <?php echo $estudio; ?></p>
        <p class="text-hv">Institucíon: <?php echo $institucion; ?></p>
        <p class="text-hv">Título: <?php echo $titulo; ?></p>
    </div> 

    <!--- ESTILO---------------------------->
    <style type="text/css">
        body{
            background-image: url(../hvHTML/img/53.jpg);
            background-size: cover;
            box-sizing: border-box;
            background-attachment: fixed;
        }
        .photo-section{
            text-align: center;
            padding-bottom: 20px;
        }
        .text-section{
            width: 100%;
            text-align: center;
            font-family: verdana;
            font-size: 24px;
            color: #F0B200;
        }
        .text-hv{
            font-family: verdana;
            text-align: left;
            color: rgb(255, 255, 255);
        }
        .text-nombre{
            text-align: center;
            font-size: 30px;
            font-family: verdana;
            color: #F0B200;
        }
        div{ 
            text-align: left;          
            max-width: 600px;
            border: .3px solid rgb(0,0,0);
            border-radius: 4px;
            background: rgba(42, 105, 71,.8);
        }
        img {
            border: 1px solid #F0B200;
            border-radius: 4px;
            padding: 5px;
            width: 350px;
        }

        img:hover{
            cursor: pointer;
        }
    </style>
</body>
</html>


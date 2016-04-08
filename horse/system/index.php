<?php
error_reporting(1);

session_start();
include '../assets/db/functions_db_ms.php';
include './controller/Process.php';
if (!isset($_SESSION['name'])) {
    header("Location: ../index.php");
}
$obj = new process();
$primer = $obj->permisosTabla();

function chec() {
    if ($_SESSION['sentencias'] == "*") {
        return true;
    } else {
        return false;
    }
}

if ($primer == "*") {
    $_SESSION['sentencias'] = "*";
    $_SESSION['Tabla'] = "*";
} else {
    $_SESSION['sentencias'] = $primer;
    $_SESSION['Tabla'] = $obj->permisosTipo();
}
$query_gral = "";
if ($_SESSION['Tabla'] == "*") {
    $query_gral = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES where  table_schema = 'horsefarm'";
} else {
    $query_gral = $_SESSION['Tabla'];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Horse</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="../assets/js/js.js"></script>
        <link href="../css/data.css" rel="stylesheet">
        <script src="../js/datatable.js"></script>
        <script src="../js/datatable.min.js"></script>

    </head>
    <body style="background: #34495e">
        <div class="container-fluid">
            <div class="row">
                <!--                div de el header-->
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6">    
                                <a class="navbar-brand" href="#" title=Horse" >
                                    <img width="50px" src="../assets/img/logo.jpg " alt="Horse" >
                                </a>
                            </div>             
                            <div class="col-md-4 col-sm-6 col-xs-6"  style="border-right: solid #ddd 1px;height: 100px; text-align: right">    
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!--                comienza el body en el bootstrap-->
                <div class="col-md-12">
                    <div class="jumbotron col-md-12">
                        <div class="col-md-2">
                            <div class="alert alert-dismissable alert-success">
                                <h3>Tableaux disponibles</h3>
                                <?php
                                $arreglotablas = explode("|", $obj->tablas($query_gral));
                                for ($index = 0; $index < count($arreglotablas); $index++) {
                                    echo "<p onclick=tabla('" . $arreglotablas[$index] . "') class='btn' style='font-size:14px'>" . $arreglotablas[$index] . "</p><br>";
                                }
                                ?>
                            </div>
                        </div> 
                        <div class="col-md-10" id="contenido">

                        </div>
                        <a href="../index.php">Fermer session</a>
                        <!--<br><br><br><br><br>Good bye-->


                    </div>
                </div>
            </div>
        </div>

        <?php
        include './ajax/modales.php';
        ?>
        <!--<script src="../assets/js/jquery.min.js"></script>-->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/scripts.js"></script>

        <script type="text/javascript" src="../js/index1.js"></script>
        <script>

        </script>
    </body>
</html>

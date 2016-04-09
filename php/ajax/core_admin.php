<?php
error_reporting(1);
session_start();

include '../../assets/db/functions_db_ms.php';
conecta(3);

$id = $_POST['id'];


if ($id == "tabla") {
    $sentencias = explode(",", $_SESSION['sentencias']);
    function sentencias($param, $sentencias) {
        for ($index = 0; $index < count($sentencias); $index++) {
            if ($sentencias[$index] == $param) {
                return true;
            }
        }
        return FALSE;
    }
    $nom = $_POST['nomtabla'];
    ?>
    <div class="col-md-12" style="text-align: right">
        <?php
        if (sentencias("Insert", $sentencias)) {
            ?>
            <input type="button" value="Registrar" class="btn btn-success" onclick="agregar('<?= $nom ?>')"><hr>
            <?php
        }
        ?>
    </div>
    <?php
    mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("information_schema") or die(mysql_error());
    $query = "SELECT * FROM COLUMNS WHERE TABLE_SCHEMA = 'horsefarm' AND TABLE_NAME = '" . $nom . "'";
    $query = mysql_query($query);
    $num1 = num($query);
    ?>
    <table border="1" cellpadding="12" cellspacing="3" id="example" class="display table">
        <thead>
            <tr>
                <td style="text-align: center"></td>
                <?php
                if (sentencias("Update", $sentencias)) {
                    ?>
                    <td style="text-align: center">Editar</td>
                <?php
                }
                if (sentencias("Delete", $sentencias)) {
                    ?>
                    <td style="text-align: center">Borrar</td>
                    <?php
                }
                for ($index = 0; $index < $num1; $index++) {
                    $arreglo = arreglo($query);
                    ?>
                    <td style="text-align: center"><?= $arreglo["COLUMN_NAME"] ?></td>

                    <?php
                }
                mysql_close();
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            mysql_connect("localhost", "root", "") or die(mysql_error());
            mysql_select_db("horsefarm") or die(mysql_error());
            $query = "SELECT * FROM  " . $nom . "";

            $query = mysql_query($query);
            $num = num($query);
            if ($num > 0) {
                for ($index2 = 0; $index2 < $num; $index2++) {
                    $arreglod = arreglo($query);
                    echo '<tr>';
                    ?>
                <td><input type="checkbox"></td>
                <?php
                if (sentencias("Update", $sentencias)) {
                    ?>
                    <td><a    role="button"data-toggle="modal"  class="btn" onclick="editar('<?= $arreglod[0] ?>')">editar</a></td>
                <?php
                }
                if (sentencias("Delete", $sentencias)) {
                    ?>
                    <td><a   role="button"data-toggle="modal"  class="btn" onclick="eliminar('<?= $arreglod[0] ?>')">eliminar</a></td>
                    <?php
                }
                for ($index1 = 0; $index1 < $num1; $index1++) {
                    echo '<td>' . $arreglod[$index1] . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <?php
    } else {
        ?>
        <br><br><br>        <div class="alert alert-dismissable alert-warning">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            <strong>Tabla sin datos </strong> 
        </div>
        <?php
    }
}
elseif ($id == "eliminar") {
    $id_ = $_POST['p'];
    echo $id_;
} elseif ($id == "edicion") {
    $id_ = $_POST['p'];
    echo $id_;
} elseif ($id == "agregar") {
    $id_ = $_POST['p'];
    echo $id_;
}

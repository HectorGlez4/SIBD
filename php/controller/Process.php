<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(1);

/**
 * Description of process
 *
 * @author charls
 */
class Process {
    function tablas($sentencia) {
        if ($_SESSION['sentencias'] == "*") {

            $query = query($sentencia);
            $num = num($query);
            $c="";
            for ($index = 0; $index < $num; $index++) {
                $arreglo = arreglo($query);
                $c= $c.$arreglo[0] . "|";
            }
            return $c;
        } else {
            return $sentencia;
        }
    }

    function permisosTipo() {
        $query = "SELECT * FROM tables_priv where user='" . $_SESSION['name'] . "'";
        $query = query($query);
        $num = num($query);
        if ($num > 0) {
            $arreglo = arreglo($query);
            $arreglo = $arreglo['Table_name'];
            return $arreglo;
        } else {
            return '*';
        }
    }

    function permisosTabla() {
        $query = "SELECT * FROM tables_priv where user='" . $_SESSION['name'] . "'";
        $query = query($query);
        $num = num($query);
        if ($num > 0) {
            $arreglo = arreglo($query);
            $arreglo = $arreglo['Table_priv'];
            return $arreglo;
        } else {
            return '*';
        }
    }

}

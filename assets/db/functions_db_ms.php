<?php



/*funci�n que permite la conexi�n a la base de datos, es invocada desde
 * las funciones de base de datos, insert, select, update, etc.
 */
function conecta($tipo)
{

     $server='localhost';
    $port='';
    $db="mysql";
    switch ($tipo){
        case 1://case que permite solo seleccionar
            $user="";
            $pass="";
            break;
        case 2://case que permite actualizar e insertar, pero no borrar
            $user="";
            $pass="";
            break;
        case 3://case que permite modificar todos los datos (insert, update, delete)
            $user="root";
            $pass="";
            break;
        default://nada
            $user="";
            $pass="";
            break;
    }
    //$con=  pg_connect($server,$db,$user,$pass)or die("Error de base de datos. <br>Intente m&aacute;s tarde o consulte al administrador.");
    mysql_connect($server, $user, $pass) or die(mysql_error()) ;
    mysql_select_db($db) or die(mysql_error()) ;    
}

function cierra() {
   // pg_close();
   mysql_close();
}

function inserta($tabla,$cols,$values) {
    
    conecta(3);
    $ins="insert into $tabla ($cols) values ($values);";
   // $res=  pg_query($ins);
    mysql_query("SET NAMES 'utf8'"); 
    $res= mysql_query($ins);
    //cierra();
    return $ins;
}

function select($campos,$tabla,$cond) {
    conecta(3);
    $sel='select '. $campos.' from '. $tabla.' where '. $cond.'';
    mysql_query("SET NAMES 'utf8'"); 
    // $res=  pg_query($sel);
    $res= mysql_query($sel);
    //cierra();
    return $res;
}

function update($tabla,$valor,$cond) {
     conecta(3);
     mysql_query("SET NAMES 'utf8'"); 
    $upd="update $tabla set $valor where $cond;";
   // $res=  pg_query($upd);
    $res= mysql_query($upd);
   // cierra();
    return $res;
}
function delete($tabla,$cond) {
    $del="delete from $tabla where $cond;";
   // $res=  pg_query($upd);
    $res= mysql_query($del);
    //cierra();
    return $res;
}
function num($query) {
    
   // $res=  pg_query($upd);
    
    $res= mysql_num_rows($query);
   // $res=  mysqli_num_rows($query);
    //cierra();
    return $res;
}
function arreglo($query) {
    
   // $res=  pg_query($upd);
    $res= mysql_fetch_array($query);
    //cierra();
    return $res;
}
function escape_cara($query) {
    conecta(3);
   // $res=  pg_query($upd);
    $res= mysql_real_escape_string($query);
    //cierra();
    return $res;
}
function error_base() {
    
   // $res=  pg_query($upd);
    $res= mysql_error();
    //cierra();
    return $res;
}

function row($query){
    
    $res=  mysql_fetch_row($query);
    return $res;
}
function query($query){
    conecta(3);
    mysql_query("SET NAMES 'utf8'");
    $res= mysql_query($query);
    return $res;
}

?>

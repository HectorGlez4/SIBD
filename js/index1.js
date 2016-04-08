function eliminar(n) {

    $('#modal-container-583538').modal('show');
    var xmlhttp;
    var id = 'eliminar';
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {


        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("body-eliminar").innerHTML = xmlhttp.responseText;

        }


    }
    xmlhttp.open("POST", "ajax/core_admin.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("&id=" + id + "&p=" + n)
}
function editar(n) {

    $('#modal-container-583537').modal('show');
    var xmlhttp;
    var id = 'edicion';
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {


        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("body-edicion").innerHTML = xmlhttp.responseText;

        }


    }
    xmlhttp.open("POST", "ajax/core_admin.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("&id=" + id + "&p=" + n)
}
function agregar(n) {

    $('#modal-container-583539').modal('show');
    var xmlhttp;
    var id = 'agregar';
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {


        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("body-agregar").innerHTML = xmlhttp.responseText;

        }


    }
    xmlhttp.open("POST", "ajax/core_admin.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("&id=" + id + "&p=" + n)
}
function tabla(n) {
    var xmlhttp;
    var id = 'tabla';
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function ()
    {


        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("contenido").innerHTML = xmlhttp.responseText;
            $('#example').DataTable({
                "scrollY": 200,
                "scrollX": true,
                "scrollY": true,
            });
        }


    }
    xmlhttp.open("POST", "ajax/core_admin.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("&id=" + id + "&nomtabla=" + n)

}
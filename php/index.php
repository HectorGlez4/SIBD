<!DOCTYPE html>
<html >
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        session_destroy();
    }
    if (isset($_POST['user'])) {
        $db = new PDO('mysql:host=localhost;dbname=mysql', "root", "");
        $req = $db->query("SELECT * FROM user WHERE User = '" . $_POST['user'] . "' AND Password = Password('" . $_POST['pass'] . "')");
        $res = $req->fetch();
        if ($res) {
            $_SESSION['name'] = $res['User'];
            header('Location: system/index.php');
        } else {
            return false;
        }
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Horse</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script type="text/javascript" src="assets/js/js.js"></script>
    </head>
    <body style="background: #2c3e50">
        <div class="row " style="margin-top: 100px">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-1 col-xs-1">
                </div>
                <div class="col-md-6 col-sm-9 col-xs-11">
                    <div class="formholder">
                        <div class="randompad">
                            <form method="post" action="">
                                <fieldset>
                                    <label name="email">User</label>
                                    <input name="user" type="text" placeholder="User">
                                    <label name="password">Password</label>
                                    <input name="pass" type="password" placeholder="password">
                                    <div id="validar"></div>
                                    <input type="submit" value="Login" >
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <script src="js/index.js"></script>
        <!--        estos js son sumamente necesarios para trabajar el bootstrap-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>

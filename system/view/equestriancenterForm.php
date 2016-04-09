<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="capacity">capacity :</label>
                        <input id="capacity" type="number" class="form-control" name="capacity"/>
                    </div>
                  <div class="form-group">
                        <label  for="id_account">id account :</label>
                        <input id="id_account" type="number" class="form-control" name="id_account"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_infrastucture">id infrastructure :</label>
                        <input id="id_infrastucture" type="number" class="form-control" name="id_infrastucture"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_shop">id shop :</label>
                        <input id="id_shop" type="number" class="form-control" name="id_shop"/>
                    </div>
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


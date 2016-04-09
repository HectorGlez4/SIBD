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
                        <label  for="infrastucture_list">infrastucture_list :</label>
                        <input id="infrastucture_list" type="text" class="form-control" name="infrastucture_list"/>
                    </div>
                     <div class="form-group">
                        <label  for="competition_list">competition list :</label>
                        <input id="competition_list" type="text" class="form-control" name="competition_list"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_account">id_account :</label>
                        <input id="id_account" type="number" class="form-control" name="id_account"/>
                    </div>
                  <div class="form-group">
                        <label  for="id_account">id_account :</label>
                        <input id="id_account" type="number" class="form-control" name="id_account"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_manager">id_manager :</label>
                        <input id="id_manager" type="number" class="form-control" name="id_manager"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_comp">id_comp :</label>
                        <input id="id_comp" type="number" class="form-control" name="id_comp"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_shop">id_shop :</label>
                        <input id="id_shop" type="number" class="form-control" name="id_shop"/>
                    </div>
                    <div class="form-group">
                        <label  for="id_infrastucture">id_infrastucture :</label>
                        <input id="id_infrastucture" type="number" class="form-control" name="id_infrastucture"/>
                    </div>
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


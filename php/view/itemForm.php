<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="level">level :</label>
                        <input id="level" type="number" class="form-control" name="level"/>
                    </div>
                  <div class="form-group">
                        <label  for="price">price :</label>
                        <input id="price" type="number" class="form-control" name="price"/>
                    </div>
                      <div class="form-group">
                        <label  for="description">description :</label>
                        <input id="description" type="text" class="form-control" name="description"/>
                    </div>
                      <div class="form-group">
                        <label  for="type">type :</label>
                        <input id="type" type="text" class="form-control" name="type"/>
                    </div>
                      <div class="form-group">
                        <label  for="id_shop">id_shop :</label>
                        <input id="id_shop" type="number" class="form-control" name="id_shop"/>
                    </div>
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


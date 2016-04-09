<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="date">date :</label>
                        <input id="date" type="date" class="form-control" name="date"/>
                    </div>
                  <div class="form-group">
                        <label  for="news">news :</label>
                        <input id="news" type="text" class="form-control" name="news"/>
                    </div>
                      <div class="form-group">
                        <label  for="specific_key_point">specific_key_point :</label>
                        <input id="specific_key_point" type="text" class="form-control" name="specific_key_point"/>
                    </div>
                      <div class="form-group">
                        <label  for="id_agenda">id_agenda :</label>
                        <input id="id_agenda" type="number" class="form-control" name="id_agenda"/>
                    </div>
                      <div class="form-group">
                        <label  for="id_article">id_article :</label>
                        <input id="id_article" type="number" class="form-control" name="id_article"/>
                    </div>
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

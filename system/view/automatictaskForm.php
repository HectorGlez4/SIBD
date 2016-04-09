<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="frequence">Frequence :</label>
                        <input id="frequence" type="number" class="form-control" name="frequence"/>
                    </div>
                    <div class="form-group">
                        <label for="id_task">id_task :</label>
                        <input id="id_task" type="number" class="form-control" name="id_task"/>
                    </div>
                
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Accepter</button>
       </form>
     </div>
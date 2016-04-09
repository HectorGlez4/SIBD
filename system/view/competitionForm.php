<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="involved_item">Involved item :</label>
                        <input id="involved_item" type="text" class="form-control" name="involved_item"/>
                    </div>
                  <div class="form-group">
                        <label  for="start_date">start date :</label>
                        <input id="start_date" type="date" class="form-control" name="start_date"/>
                    </div>
                   <div class="form-group">
                        <label  for="end_date">end_date :</label>
                        <input id="end_date" type="date" class="form-control" name="end_date"/>
                    </div>
             <div class="form-group">
                        <label  for="id_manager">id manager :</label>
                        <input id="id_manager" type="number" class="form-control" name="id_manager"/>
                    </div>
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


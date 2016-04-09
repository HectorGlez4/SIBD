<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
Agenda    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="date">Date :</label>
                        <input id="date" type="date" class="form-control" name="date"/>
                    </div>
                    <div class="form-group">
                        <label for="time">time :</label>
                        <input id="time" type="time" class="form-control" name="time"/>
                    </div>
                    <div class="form-group">
                        <label for="description">description :</label>
                        
                        <textarea id="description" type="text" class="form-control" name="description" placeholder="description"></textarea>
                    </div>
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


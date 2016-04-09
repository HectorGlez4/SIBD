<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="title">Texte :</label>
                        <input id="title" type="text" class="form-control" name="title"/>
                    </div>
                    <div class="form-group">
                        <label for="texte">Texte :</label>
                        <input id="texte" type="text" class="form-control" name="texte"/>
                    </div>
                    <div class="form-group">
                        <label for="image">Image :</label>
                        
                        <input id="image" type="file" class="form-control" name="image" />
                    </div>
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Accepter</button>
       </form>
     </div>


<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="name">name :</label>
                        <input id="name
                        " type="text" class="form-control" name="name
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="description">description :</label>
                        <input id="description
                        " type="text" class="form-control" description="description
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="id_article">id_article :</label>
                        <input id="id_article
                        " type="text" class="form-control" id_article="id_article
                        "/>
                    </div>
                
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

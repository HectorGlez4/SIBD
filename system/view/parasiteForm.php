<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="description
                        ">description
                         :</label>
                        <input id="description
                        " type="text" class="form-control" name="description
                        "/>
                    </div>
                  <div class="form-group">
                        <label  for="intelligence">intelligence :</label>
                        <input id="intelligence" type="number" class="form-control" name="intelligence"/>
                    </div>
                      <div class="form-group">
                        <label  for="humeur">humeur :</label>
                        <input id="humeur" type="number" class="form-control" name="humeur"/>
                    </div>
                      <div class="form-group">
                        <label  for="id_horse_attrib">id_horse_attrib :</label>
                        <input id="id_horse_attrib" type="number" class="form-control" name="id_horse_attrib"/>
                    </div>
                   
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

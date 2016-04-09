<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="resistance">resistance :</label>
                        <input id="resistance
                        " type="number" class="form-control" name="resistance
                        "/>
                    </div>
                  <div class="form-group">
                        <label  for="endurance">endurance :</label>
                        <input id="endurance" type="number" class="form-control" name="endurance"/>
                    </div>
                      <div class="form-group">
                        <label  for="detente">detente :</label>
                        <input id="detente" type="number" class="form-control" name="detente"/>
                    </div>
                      <div class="form-group">
                        <label  for="speed">speed :</label>
                        <input id="speed" type="number" class="form-control" name="speed"/>
                    </div>
                      <div class="form-group">
                        <label  for="id_horse_attrib">id_horse_attrib :</label>
                        <input id="id_horse_attrib" type="number" class="form-control" name="id_horse_attrib"/>
                    </div>
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="name">name :</label>
                        <input id="name" type="text" class="form-control" name="name"/>
                    </div>
                  <div class="form-group">
                        <label  for="general_state">general state :</label>
                        <input id="general_state" type="text" class="form-control" name="general_state"/>
                    </div>
                     <div class="form-group">
                        <label  for="description">description :</label>
                        <input id="description" type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group">
                        <label  for="race">race :</label>
                        <input id="race" type="text" class="form-control" name="race"/>
                    </div>
                  <div class="form-group">
                        <label  for="level">level :</label>
                        <input id="level" type="number" class="form-control" name="level"/>
                    </div>
                     <div class="form-group">
                        <label  for="experience">experience :</label>
                        <input id="experience" type="number" class="form-control" name="experience"/>
                    </div>
             <div class="form-group">
                        <label  for="id_sickness">id_sickness :</label>
                        <input id="id_sickness" type="number" class="form-control" name="id_sickness"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_injury">id_injury :</label>
                        <input id="id_injury" type="number" class="form-control" name="id_injury"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_parasite">id_parasite :</label>
                        <input id="id_parasite" type="number" class="form-control" name="id_parasite"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_infrastucture">id_infrastructure :</label>
                        <input id="id_infrastucture" type="number" class="form-control" name="id_infrastucture"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_state">id_state :</label>
                        <input id="id_state" type="number" class="form-control" name="id_state"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_item">id_item :</label>
                        <input id="id_item" type="number" class="form-control" name="id_item"/>
                    </div>
                     <div class="form-group">
                        <label  for="id_horse_attrib">id_horse_attrib :</label>
                        <input id="id_horse_attrib" type="number" class="form-control" name="id_horse_attrib"/>
                    </div>
            
            
            
            
            
            
            
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="health">health :</label>
                        <input id="health
                        " type="number" class="form-control" health="health
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="moral">moral :</label>
                        <input id="moral
                        " type="number" class="form-control" moral="moral
                        "/>
                    </div>
                   
                    <div class="form-group">
                        <label  for="stress">stress :</label>
                        <input id="stress
                        " type="number" class="form-control" stress="stress
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="tiredness">tiredness :</label>
                        <input id="tiredness
                        " type="number" class="form-control" tiredness="tiredness
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="hunger">hunger :</label>
                        <input id="hunger
                        " type="number" class="form-control" hunger="hunger
                        "/>
                    </div>
                     <div class="form-group">
                        <label  for="cleanliness">cleanliness :</label>
                        <input id="cleanliness
                        " type="number" class="form-control" cleanliness="cleanliness
                        "/>
                    </div>
            
                    
                  
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>

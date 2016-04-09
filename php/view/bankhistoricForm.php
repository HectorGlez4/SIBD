<?php
include("head.php");
?>
<div class='container'>
    <div class="jumbotron">
    </div>

           <form action="../updateClass" method="POST">
                    <div class="form-group">
                        <label  for="transaction">Transaction :</label>
                        <input id="transaction" type="text" class="form-control" name="transaction"/>
                    </div>
                  <div class="form-group">
                        <label  for="id_account">id_account :</label>
                        <input id="id_account" type="number" class="form-control" name="id_account"/>
                    </div>
                   <div class="form-group">
                        <label  for="id_bank_account">id_bank_account :</label>
                        <input id="id_bank_account" type="number" class="form-control" name="id_bank_account"/>
                    </div>
            
         
    <button class="btn btn-md btn-primary btn-block" type="submit">Envoyer</button>
       </form>
     </div>


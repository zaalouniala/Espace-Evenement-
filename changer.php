<?php
require 'autoload.php';

?>
<fieldset>
    <legend> Changer Mot de passe oublié</legend>

    <form action="Controller/TraitChanMdp.php" method="post">
        <label for="">nouveau mot de passe</label><br>
        <input type="password" class="form-control" name="pwd" placeholder="nouveau mot de passe"><br>
        <label for="">confirmer mot de passe</label><br>
        <input type="password" class="form-control" name="pwd1" placeholder="confirmet nouveau mot de passe"><br>
        <input type="submit" name="changer"><br>
    </form>
</fieldset>




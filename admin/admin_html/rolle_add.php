<?php
if($_SESSION['rolle_name']!='Admin'){
    header('Location:../index.php');
}?>
<div class="container">

        <h2>Rolle Add</h2>
    <form class="m-1 p-1"  method="post" action="control/operation.php">
        <div class="form-group">
            <input name="rolle_name" class="form-control" placeholder="Rolle Name">
        </div>
        <input type="submit" name="add_rolle" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-danger" value="Clear">
    </form>
</div>


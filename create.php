<?php
include __DIR__ .'/partials/templates/header.php';
?>
<div class="container p-3">
    <form action="partials/create/server.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della stanza</label>
            <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci il numero della stanza" id="roomNumber">
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="number" class="form-control" name="floor" placeholder="Inserisci il numero del piano" id="floor">
        </div>
        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="number" class="form-control" name="beds" placeholder="Inserisci i letti" id="beds">
        </div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Insert">
        </div>
    </form>
</div>
<?php
include __DIR__ .'/partials/templates/footer.php';
?>

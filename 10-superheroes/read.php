<?php

require_once "Database.php";

$db = new Database;
$db = $db->connect();

$sql = "SELECT * FROM `superheroe`";
// Execution de la requete
$r = $db->query($sql);

// Recupération des résultats
$superheroes = $r->fetchAll(PDO::FETCH_OBJ);


require_once "partials/header.php";
?>
<div class="card shadow">
    <table class="table border shadow mb-0">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Power</th>
                <th scope="col">Identity</th>
                <th scope="col">Universe</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($superheroes as $superheroe): ?>
            <tr>
                <td scope="row">
                    <?= $superheroe->id ?>
                </td>
                <td>
                    Image
                </td>
                <td>
                    <?= $superheroe->name ?>
                </td>
                <td>
                    <?= $superheroe->power ?>
                </td>
                <td>
                    <?= $superheroe->identity ?>
                </td>
                <td>
                    <?= $superheroe->universe ?>
                </td>
                <td>
                    <a href="#" class="btn btn-secondary">Révéler</a>           
                    <a href="update.php?id=<?= $superheroe->id ?>" class="btn btn-primary">Modifier</a>
                    <a href="delete.php?id=<?= $superheroe->id ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php 
require_once "partials/footer.php"; 
?>
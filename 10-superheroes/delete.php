<?php
include_once "partials/header.php";
require_once "Database.php";

$id = isset($_GET['id'])? trim($_GET['id']): null;

if (ctype_digit($id))
{
    $id = $_GET['id'];
    $db = new Database;
    $db = $db->connect();

    $sql = "SELECT * FROM `superheroe` WHERE `id`=:id";
    // Execution de la requete
    $query = $db->prepare($sql);

    $query->bindValue(':id',$id, PDO::PARAM_INT);

    $query->execute();

    // Recupération des résultats
    $superheroes = $query->fetch(PDO::FETCH_OBJ);

}

if ($_SERVER['REQUEST_METHOD'] === "POST")
{

    $sql = "DELETE FROM `superheroe` WHERE id=:id";
    // Préparation de la requete
    $q = $db->prepare($sql);
    $q->bindParam(':id', $id, PDO::PARAM_INT);
    // Execution de la requete
    $q->execute();
    // Redirection de l'utilisateur vers la page de détail du film
    header("location: read.php");
    exit;
}
?>

<h1>Suppresion de <?= $superheroes->name?></h1>

<p>Confirmer la suppression du logement : "<?= $superheroes->name ?>"</p>
<div class="row justify-content-center">
    <div class="col-2">
        <form method="post">
            <button class="btn btn-danger" type="submit">OUI</button>
        </form>
    </div>
    <div class="col-2">
        <a class="btn btn-primary" href="read.php">NON</a>
    </div>
</div>
<?php 
include_once "partials/footer.php"; 
?>
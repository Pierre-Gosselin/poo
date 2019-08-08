<?php
include_once "partials/header.php";
require_once "Database.php";

$id = isset($_GET['id']) ? trim($_GET['id']) : null;

$name = null;
$power = null;
$identity = null;
$universes = ['Marvel','DC'];


if( $_SERVER['REQUEST_METHOD'] === "POST"){
    // 1. Initialisation des erreurs
    $errors = [];

    // 2. Récupération des données
    $name = isset($_POST['name']) ? trim(htmlentities($_POST['name'])): null;
    $power = isset($_POST['power']) ? trim(htmlentities($_POST['power'])): null;
    $identity = isset($_POST['identity']) ? trim(htmlentities($_POST['identity'])): null;
    $universe = isset($_POST['universe']) ? trim(htmlentities($_POST['universe'])): null;

    // 3. Vérification des données
    if (strlen($name)<2)
    {
        $errors['name'] = "name doit être d'au moins 2 caractères";
    }

    if (strlen($power)<2)
    {
        $errors['power'] = "power doit être d'au moins 2 caractères";
    }

    if (strlen($identity)<2)
    {
        $errors['identity'] = "identity doit être d'au moins 2 caractères";
    }

    if (strlen($universe)<2)
    {
        $errors['universe'] = "universe doit être d'au moins 2 caractères";
    }

    if (empty($errors))
    {
        $sql = "UPDATE `superheroe` SET `name`=:name, `power`=:power, `identity`=:identity, `universe`=:universe WHERE `id`=:id";

        $db = new Database;
        $db = $db->connect();
        $query = $db->prepare($sql);
        
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->bindValue(':name',$name);
        $query->bindValue(':power',$power);
        $query->bindValue(':identity',$identity);
        $query->bindValue(':universe',$universe);

        $query->execute();

        // Redirection de l'utilisateur vers la page de détail du film
        header("location: read.php");
        exit;
    }
}

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
    $name = $superheroes->name;
    $power = $superheroes->power;
    $identity = $superheroes->identity;
    $universe = $superheroes->universe;
}
?>

<h1>Modification un superhéros</h1>
<form method="POST">
    <?php
        include_once "form.php";
    ?>
    <button class="btn btn-primary">Modifier</button>
</form>

<?php 
include_once "partials/footer.php"; 
?>
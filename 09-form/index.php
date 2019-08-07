<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Formulaire POO</title>
</head>
<body>
<div class="container">
<?php
require_once "Form.php";

$form = new Form();

$form
    ->input('email')
    ->input('firstname')
    ->input('subject')
    ->textarea('message')
    ->select('status',['Particulier', 'Professionel'])
    ->button('Envoyer')
;

echo $form; // Affichera le formulaire
// On pourra soumettre le formulaire
// et les données saisies resteront dans les champs.
// Une méthode nous permettra de récupérer les données du formulaire

if ($form->isSubmit()) {
    /**
     * ['email' => '...', 'subject' => '...', 'message' => '...']
     */
    var_dump($form->getData());
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
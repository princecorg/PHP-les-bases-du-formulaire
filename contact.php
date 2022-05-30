<!-- Page de traitement du formulaire -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <!-- Je vérifie que les données en post ont bien été transmises -->
    <?php if (!isset($_POST['prenom']) || (!isset($_POST['nom']))) {
        echo ' Le formulaire doit être complété avant d\'être soumis';
        // Puis je vérifie si elles ne sont pas vides
    } elseif ($_POST['prenom'] === "" || empty($_POST['nom'])) {
        echo ' Les données du formulaires ne doivent pas être vides';
        // Enfin je les affiche
    } else {
        // Nettoyage des données passées en Post
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);

        echo '
        <h1> Bienvenue à toi </h1>
        Sois le bienvenu ' . $prenom . ' ' . $nom;
    }
    ?>
</body>

</html>
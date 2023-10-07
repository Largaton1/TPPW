<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Contact</title>
    <!-- Ajoutez ici vos liens CSS ou styles pour la mise en forme -->
</head>
<body>
    <h1>Modifier un Contact</h1>
    <a href="index.php">Retour à la liste des contacts</a>


        <form action="modifier_contact.php?id=<?php echo echo ???; ?>" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo echo ???; ?>" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo echo ???; ?>" required><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo echo ???; ?>"><br>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" value="<?php echo echo ???; ?>"><br>

            <input type="submit" value="Modifier">
        </form>

        <p>Le contact n'a pas été trouvé.</p>


</body>
</html>


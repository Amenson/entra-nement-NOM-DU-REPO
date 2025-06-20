<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <form  method="post" action="traitement.php">
<label for="non">Nom</label>
<input type="text" name="nom" id="nom" placeholder="Entrez votre Nom"><br/>
<label for="prenon">Prenom</label>
<input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom"><br/>

<label for="pass">mots de passe</label>
<input type="password" name="pass" id="pass" placeholder="Entrez votre mots de passe"><br/>
 
<label for="email">Email</label>
<input type="text" name="email" id="email" placeholder="Entrez votre email"><br/> 
<input type="submit" value=inscrire name="ok">
</form>
</body>
</html>
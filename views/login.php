<?php
require_once 'parts/head.php';
session_start();
?>

<body>

<div class="cv2">
    <button class="ml-3 mt-3" ><a href="index.php?controller=accueil">Accueil</a></button>
</div>


<div class="login">
    <h2>Connexion</h2>
    <div class="connexion">
        <form method="post" action="index.php?controller=user&action=connect">
            <label>Adresse mail </label>
            <input name="email" type="text" placeholder="email" > <br><br>
            <label>Password : </label>
            <input name="mot_de_passe" type="password" placeholder="Mot de passe" > <br><br>

            <input type="submit" >
        </form>
    </div>
</div>


<div class="erreur">
<h3><?php
//displayError($errors);
//displayError($errors2);

?></h3>
</div>

<?php require_once 'parts/footer.php';?>
</body>

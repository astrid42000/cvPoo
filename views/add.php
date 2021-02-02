<?php
require_once 'parts/head.php';
session_start();

if (! isset( $_SESSION [ 'email' ]) || empty( $_SESSION [ 'email' ])) {
    header( 'Location: index.php?controller=login' );
}
?>
<body>
<div id="header">
    <div class="cv2"><button><a href="index.php?controller=accueil">Accueil</a></button></div>
    <div class="cv2"><button><a href="index.php?controller=deconnect">Se déconnecter</a></button></div>
</div>

<div class="bonjour">
    <h2>CV d'<?php echo($_SESSION['prenom']) ?></h2>
</div>


<div class="accordion">


    <div class="button">
        <button data-toggle="collapse" data-target="#experience">Expériences</button>
    </div>
    <div id="experience" class="collapse" >
        <div class="card-body">
            <form id="experience" method="post" class="experience" action="index.php?controller=experience&action=add">
                <label>Titre</label><br>
                <input type="texte" name="titre" ><br>
                <label>Date de début</label><br>
                <input type="texte" name="date_debut" ><br>
                <label>Date de fin</label><br>
                <input type="texte" name="date_fin" ><br>
                <label>Description du poste</label><br>
                <textarea name="description"></textarea><br>
                <label>Lieu</label><br>
                <input type="texte" name="lieu" ><br>
                <input type="submit"><br>


            </form>

        </div>
    </div>


    <div class="button">
            <button data-toggle="collapse" data-target="#competence" >Compétences</button>
        </div>
        <div id="competence" class="collapse" >
            <div class="card-body">
                <form id="competence" method="post" class="experience" action="index.php?controller=competence&action=add">
                    <label >Titre</label><br>
                    <input type="texte" name="intitule"><br>
                    <label for="degres">Degrés de compétences (0 à 5)</label><br>
                    <input id="degres" type="number" name="note" min="0" max="5"><br><br>
                    <input type="submit"><br>


                </form>

            </div>
        </div>

        <div class="button">
            <button data-toggle="collapse" data-target="#formation">Formations</button>
        </div>
        <div id="formation" class="collapse" >
            <div class="card-body">
                <form id="formation" method="post" class="experience" action="index.php?controller=formation&action=add">
                    <label>Libellé</label><br>
                    <input type="texte" name="libelle" ><br>
                    <label>Année</label><br>
                    <input type="texte" name="annee" ><br>
                    <label>Lieu</label><br>
                    <input type="texte" name="lieu" ><br>
                    <label>Diplome</label><br>
                    <textarea name="diplome"></textarea><br>
                    <input type="submit"><br>


                </form>

            </div>
        </div>
    </div>

<?php require_once 'parts/footer.php';?>
</body>
</html>

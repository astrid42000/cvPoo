<?php
require_once 'parts/head.php';
session_start();


if (! isset( $_SESSION [ 'email' ]) || empty( $_SESSION [ 'email' ])) {
    header( 'Location: index.php?controller=accueil' );
}
?>


<body>
<div id="header">
    <div class="cv2"><button><a href="index.php?controller=accueil">Accueil</a></button></div>
    <div class="cv2"><button><a href="index.php?controller=deconnect">Se déconnecter</a></button></div>
</div>

<div class="bonjour">
    <h2>Bonjour <?php echo($_SESSION['prenom']) ?></h2>
    <div>
    <button class="crud"><a href="index.php?controller=user&action=add">Ajouter</a></button>
    </div>
</div>


<div class="tableaux">
    <h2> Liste des Formations</h2>

    <table class="table p-3 ">
        <thead class="thead-light">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Lieu</th>
            <th scope="col">Liens</th>

        </tr>
        </thead>
        <tbody class="w-100">
        <?php 
            foreach((array)$formations as $formation){?>   
            <tr>
                <td><?php echo $formation->getLibelle(); ?></td>
                <td><?php echo $formation->getLieu(); ?></td>

                <td>
                    <a class="text-reset" title="modifier" href="index.php?controller=formation&action=update&id=<?php echo $formation->getId_formation(); ?>">
                        Modifier
                    </a>
                    <a class="text-reset" title="supprimer" href="index.php?controller=formation&action=delete&id=<?php echo $formation->getId_formation(); ?>">
                    Supprimer
                    </a>
                </td>
            </tr>

    <?php }
    ?>
        </tbody>
    </table>
</div>


<div class="tableaux">
    <h2> Liste des Expériences</h2>

    <table class="table p-3 ">
        <thead class="thead-light">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Liens</th>

        </tr>
        </thead>
        <tbody class="w-100">
        <?php 
            foreach((array)$experiences as $exp){?>   
            <tr>
                <td><?php echo $exp->getTitre(); ?></td>
                <td><?php echo $exp->getDescription(); ?></td>

                <td>
                    <a class="text-reset" title="modifier" href="index.php?controller=experience&action=update&id=<?php echo $exp->getId_experience(); ?>">
                        Modifier
                    </a>
                    <a class="text-reset" title="supprimer" href="index.php?controller=experience&action=delete&id=<?php echo $exp->getId_experience(); ?>">
                    Supprimer
                    </a>
                </td>
            </tr>

    <?php }
    ?>
        </tbody>
    </table>
</div>




<div class="tableaux">
    <h2> Liste des Compétences</h2>

    <table class="table p-3">
        <thead class="thead-light ">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Liens</th>

        </tr>
        </thead>
        <tbody class="w-100 ">
        <?php 
            foreach((array)$competences as $comp){?>   
            <tr>
                <td><?php echo $comp->getIntitule(); ?></td>
                <td><?php echo $comp->getNote(); ?></td>

                <td>
                    <a class="text-reset" title="modifier" href="index.php?controller=competence&action=update&id=<?php echo $comp->getId_competence(); ?>">
                        Modifier
                    </a>
                    <a class="text-reset" title="supprimer" href="index.php?controller=competence&action=delete&id=<?php echo $comp->getId_competence(); ?>">
                    Supprimer
                    </a>
                </td>
            </tr>

    <?php }
    ?>
        </tbody>
    </table>
</div>


<?php require_once 'parts/footer.php';?>
</body>

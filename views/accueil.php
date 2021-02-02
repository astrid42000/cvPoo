<?php
require_once 'parts/head.php';
session_start();
?>

<body>
<div>

    <div id="header">
    <div class="cv2 mt-4 ml-4"><button><a href="index.php?controller=login">Se connecter</a></button></div>
    <div class="cv2 mt-4 mr-4"><button><a href="index.php?controller=session">Mon espace</a></button></div>
    </div>

    <section id="main">
        <!--------HEADER---------->
        <header>
            <hr/><div class="image"><img class="photo" src="views/uploads/avatar2.jpg"></div><hr/>
            <h1>Astrid Soulier</h1>
            <p>Developpeuse web et web mobile</p>
        </header>
        <!--------HEADER---------->
        <hr/>
        <!--------ACCORDEON---------->
        <div class="accordion">

            <div class="button">
                <button  data-toggle="collapse" data-target="#collapseOne" >Formations</button>
            </div>
            <div id="collapseOne" class="collapse" >
                <div class="card-body">
                        <?php 
                        foreach((array)$formations as $formation){?>
                        <div class="mt-1 mb-1">
                            <li><?php echo $formation->getAnnee();?></li>
                            <p class="titre"><?php echo $formation->getLibelle();?></p>
                            <p class="sous"><?php echo $formation->getLieu();?></p>
                            <p class="sous"><?php echo $formation->getDiplome();?></p>
                        </div>
                        <?php } ?>
                </div>
            </div>



            <div class="button">
                <button data-toggle="collapse" data-target="#collapseTwo">Expériences</button>
            </div>
            <div id="collapseTwo" class="collapse" >
                <div class="card-body">
                    <?php 
                    foreach((array)$experiences as $exp){?>
                    <li><?php echo $exp->getDate_debut(); ?>-<?php echo $exp->getDate_fin(); ?></li>
                        <p class="titre"><?php echo $exp->getTitre(); ?></p>
                        <p class="sous"><?php echo $exp->getLieu(); ?></p>
                        <p class="sousMenu"><?php echo $exp->getDescription(); ?></p>
                    <?php } ?>
                </div>
            </div>



            <div class="button">
                <button data-toggle="collapse" data-target="#collapseThree" >Compétences</button>
            </div>
            <div id="collapseThree" class="collapse" >
                <div class="carte">
                    <ul class="competence">
                        <?php 
                        foreach((array)$competences as $comp){?>
                        <div class="mb-3">
                            <p class="titre"><?php echo $comp->getIntitule(); ?></p>
                            <div><?php echo $comp->getNoteImage();?></div>
                        </div>
                            
                        <?php } ?>
                  
                    </ul>
                </div>
            </div>



            <div class="button">
                <button class="dernier" data-toggle="collapse" data-target="#collapseFour" >Intérêts</button>
            </div>
            <div id="collapseFour" class="collapse" >
                <div class="card-body">
                    <p class="sous1">J'aime beaucoup la patisserie avec le cake design.</p>
                    <p class="sous1">Pratique instrumentale (flûte traversière et piano) depuis 25 ans</p>
                </div>
            </div>
        </div>
        <!--------ACCORDEON---------->
        <hr/>


        <!--------RESEAUX---------->
        <div class="reseaux">
            <a href="mailto:astrid_42@hotmail.fr" target="_blank" class="email"></a>
            <a href="https://www.linkedin.com/in/astrid-soulier-a82389140/" target="_blank" class="link"></a>
            <a href="https://github.com/astrid42000" target="_blank" class="git"></a>
        </div>
        <!--------RESEAUX---------->
        <div class="cv ">
            <button><a href="uploads/cv.pdf" target="_blank" download="cv Soulier Astrid">CV à imprimer</a></button>

        </div>


    </section>
</div>
<?php
include_once 'parts/footer.php';
?>
</body>


</html>



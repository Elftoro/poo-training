<?php
spl_autoload_register();

use App\Views\Question;
use App\Views\Page;


use App\Objects\Student;
use App\Objects\HighSchool;
use App\Objects\SecondarySchool;

$pageContent = '';

$samir = new Student("Damoui", "Samir", new DateTime("2006-08-11"), "1ère");
$sophie = new Student("Lunima", "Sophie", new DateTime("2010-05-12"), "5ème");

$q1 = new Question([
    'number' => 1,
    'question' => " Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
    Définir toutes les propriétés à l'instanciation.
    Créer 2 étudiants différents.",
    'answer' => "Nom: " .$samir->getLastname(). "<br>" . 
    " Prénom: " . $samir->getFirstname(). "<br>" . 
    " Age: " .$samir->getAge(). " ans " . "<br>" .
    " Classe: " .$samir->getGrade(). " <br> " . "<br>" . 
    "Nom: " .$sophie->getLastname(). "<br>" .
    " Prénom: " . $sophie->getFirstname(). "<br>" .
    " Age: " .$sophie->getAge(). " ans " . "<br>".
    " Classe: " .$sophie->getGrade(). " <br> "
]);

$pageContent .= $q1->getHtml();


$samir = new Student("Damoui", "Samir", new DateTime("2006-08-11"), "Terminale");
$sophie = new Student("Lunima", "Sophie", new DateTime("2010-05-12"), "4ème");

$q2 = new Question([
    'number' => 2,
    'question' => "Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
    Modifier le niveau scolaire des 2 élèves et les afficher.",
    'answer' => "Prénom: " .  $samir->getFirstname(). "<br>" . 
    " Classe: " .$samir->getGrade(). " <br> " . "<br>" . 
    "Prénom: ".$sophie->getFirstname()."<br>" . 
    " Classe: " .$sophie->getGrade()
]);
$pageContent .= $q2->getHtml();



$q3 = new Question([
    'number' => 3,
    'question' => "Remplacer la propriété d'âge par la date de naissance de l'élève.
    Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.",
    'answer' => "Date de naissance de " .$samir->getFirstname() . " : " .$samir->showBirthdate() . " <br> " . "Date de naissance de " .$sophie->getFirstname() . " : " .$sophie->showBirthdate()
]);
$pageContent .= $q3->getHtml();

$q4 = new Question([
    'number' => 4,
    'question' => "Donner la possibilité aux élèves de donner leur âge.
    Afficher l'âge des 2 élèves.",
    'answer' => ''
]);
$pageContent .= $q4->getHtml();

$q5 = new Question([
    'number' => 5,
    'question' => "On veut aussi savoir le nom de l'école où va un élève.
    Ajouter la propriété et ajouter la donnée sur les élèves.",
    'answer' => ''
]);
$pageContent .= $q5->getHtml();

$q6 = new Question([
    'number' => 6,
    'question' => "Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :
    'Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.'
    Afficher la phrase de présentation des 2 élèves.",
    'answer' => ''
]);
$pageContent .= $q6->getHtml();

$view = new Page([
    'title' => 'POO - Des vues',
    'headerTitle' => 'POO - Des vues',
    'content' => $pageContent
]);

$view->display();

exit;




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>POO - Des élèves</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Programmation Orientée Objet - Des élèves</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Des élèves</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Des profs</a></li>
                    <li><a href="exo3.php" class="main-nav-link">On s'organise</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Des écoles</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Des vues</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">
                Créer une classe permettant de créer des élèves ayant un nom, un prénom, un age et un niveau scolaire.
                <br>
                Définir toutes les propriétés à l'instanciation.
                <br>
                Créer 2 étudiants différents.
            </p>
            <div class="exercice-sandbox">
            <?php

            $samir = new Student("Damoui", "Samir", new DateTime("2006-08-11"), "1ère");
            $sophie = new Student("Lunima", "Sophie", new DateTime("2010-05-12"), "5ème");

            var_dump($samir, $sophie);
            ?>
            </div>
        </section>
        
        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">
                Créer les getters et les setters permettant de manipuler toutes les propriétés des élèves.
                <br>
                Modifier le niveau scolaire des 2 élèves et les afficher.
            </p>
            <div class="exercice-sandbox">
            <?php

            $samir->setGrade("2nde");
            $sophie->setGrade("4ème");
            echo $samir->getFirstname()." : ".$samir->getGrade()."<br>";
            echo $sophie->getFirstname()." : ".$sophie->getGrade();

            ?>
            </div>
        </section>
        
        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">
                Remplacer la propriété d'âge par la date de naissance de l'élève.
                <br>
                Mettez à jour l'instanciation des 2 élèves et afficher leur date de naissance.
            </p>
            <div class="exercice-sandbox">
            <?php
            // echo $samir->getBirthdate()->format("l j F Y")."<br>";
            // echo $sophie->getBirthdate()->format("l j F Y");

            echo $samir->getFirstname()." : ".$samir->showBirthdate()."<br>";
            echo $sophie->getFirstname()." : ".$sophie->showBirthdate()."<br>";

            Student::setDateFormat("l j F Y");

            echo $samir->getFirstname()." : ".$samir->showBirthdate()."<br>";
            echo $sophie->getFirstname()." : ".$sophie->showBirthdate()."<br>";

            ?>
            </div>
        </section>
        
        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de donner leur âge.
                <br>
                Afficher l'âge des 2 élèves.
            </p>
            <div class="exercice-sandbox">
            <?php

            echo $samir->getFirstname()." : ".$samir->getAge()."<br>";
            echo $sophie->getFirstname()." : ".$sophie->getAge()."<br>";

            ?>
            </div>
        </section>
        
        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">
                On veut aussi savoir le nom de l'école où va un élève.
                <br>
                Ajouter la propriété et ajouter la donnée sur les élèves.
            </p>
            <div class="exercice-sandbox">
            <?php

            $samir->setSchool(new HighSchool("Ecole André Malraux", "Bordeaux"));
            $sophie->setSchool(new SecondarySchool("Ecole Saint Charles", "Pau"));

            echo $samir->getFirstname()." : ".$samir->getSchool()->getName()."<br>";
            echo $sophie->getFirstname()." : ".$sophie->getSchool()->getName()."<br>";
            ?>
            </div>
        </section>
        
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">
                Donner la possibilité aux élèves de se présenter en affichant la phrase suivante :<br>
                "Bonjour, je m'appelle XXX XXX, j'ai XX ans et je vais à l'école XXX en class de XXX.".
                <br>
                Afficher la phrase de présentation des 2 élèves.
            </p>
            <div class="exercice-sandbox">
                <?php
                    echo $samir->introduceMySelf()."<br>";
                    echo $sophie->introduceMySelf()."<br>";

                    Student::setIntroduction("Yo, moi c'est ##firstname## ##lastname##, j'ai ##age## ans et je vais à ##school## et je suis en ##grade##.");

                    echo $samir->introduceMySelf()."<br>";


                ?>
            </div>
        </section>

    </div>
    <div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>

<?php
    foreach($numConference as $unNum)
    {
        echo "Numero de la conférence <input type='text' disable='true' id='num' value='".$unNum->idconference."'><br>";
    }
    echo "Titre de la conférence <input type='text' id='titre'><br>";
    echo "Contenu de la conférence <input type='text' id='contenu'><br>";
    echo "Choix du niveau <select id='niv'>";
    foreach($niveaux as $unNiveau)
    {
        echo "<option value='".$unNiveau->idniveau."'>".$unNiveau->niveau;
    }
    echo "</select><br>";
    echo "Choix du thème <select id='theme'>";
    foreach($themes as $unTheme)
    {
        echo "<option value='".$unTheme->idtheme."'>".$unTheme->libelletheme;
    }
    echo "</select><br>";
    foreach($technos as $uneTechno)
    {
        echo "<input type='checkbox' value='".$uneTechno->idtechno."'>".$uneTechno->nomtechno."<br>";
    }
    echo "<input type='button' value='Inserer une conférence' id='insertionConference' onclick='insertionConference()'>"
?>
<?php
foreach($Conferences as $uneConf)
{
    echo "<input type='checkbox' value='".$uneConf->idconference."'>".$uneConf->titre." ".$uneConf->nbvotes."<br>";
}
echo "<input type='button' value='Voter pour les conférences sélectionnées' onclick='AjouterVote()'>";
?>
<?php


if ($prenom != "" AND $nom != "" AND $subject != "" AND $email != "" AND $phone != "" AND $message != "") {
    echo
        '
        Merci ' . $prenom . ' ' . $nom . ' de nous avoir contacté à propos de “' . $subject . '”. <br/>
        
        Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :
        <br/>
        
        ' . $message . '
    ';
};
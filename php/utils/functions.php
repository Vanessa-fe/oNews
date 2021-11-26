<?php

function sendError($message)
{
    die($message . '<br><a href="index.php">Retour à l\'accueil</a>');
}
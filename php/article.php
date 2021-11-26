<?php
// Étape 3 : Dynamiser l'affichage de la page
require 'data/articles.php';
require 'utils/functions.php';

$article = getRequestedArticle();

include __DIR__ . '/templates/header.tpl.php';
include __DIR__ . '/templates/article.tpl.php';
include __DIR__ . '/templates/footer.tpl.php';
?>

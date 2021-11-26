<?php
require 'data/articles.php';

$articles = getArticles();

// __DIR__ fournit le dossier où se trouve le fichier en cours
// Chez moi (Djyp), __DIR__ vaut ici pour index.php:
//   /var/www/html/Qui-Gon/S02-E04-atelier-oNews-multipages-Djyp/php
// On le concatène avec le nécessaire pour obtenir un chemin aboslu vers header.tpl.php
// Ce qui donne : /var/www/html/Qui-Gon/S02-E04-atelier-oNews-multipages-Djyp/php/data/header.tpl.php
include __DIR__ . '/templates/header.tpl.php'; 
?>
<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">
  <?php foreach($articles as $index => $article) : ?>
  <article class="post">
    <a href="article.html" class="post__category post__category--color-<?= $article['category'] ?>"><?= $article['category'] ?></a>
    <h3><?= $article['title'] ?></h3>
    <div class="post__meta">
      <img class="post__author-icon" src="../images/<?= $article['author_image'] ?>" alt="">
      <strong class="post__author"><?= $article['author'] ?></strong>
      <time datetime="<?= $article['date'] ?>">le <?= date('d M Y', strtotime($article['date'])) ?></time>
    </div>
    <p><?= substr($article['text'], 0, 100) ?>…</p>
    <a href="article.php?index=<?= $index ?>" class="post__link">Continue reading</a>
  </article>
  <?php endforeach; ?>
</div>
<?php include __DIR__ . '/templates/footer.tpl.php';?>
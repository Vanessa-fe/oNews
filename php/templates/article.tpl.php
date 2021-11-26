<h2 class="right__title"><?= $article['title'] ?></h2>
<div class="posts">
  <article class="post post--solo">
    <a href="" class="post__category post__category--color-<?= $article['category'] ?>"><?= $article['category'] ?></a>
    <div class="post__meta">
        <img class="post__author-icon" src="../images/<?= $article['author_image'] ?>" alt="">
        <strong class="post__author"><?= $article['author'] ?></strong>
        <time datetime="<?= $article['date'] ?>">le <?= date('d M Y', strtotime($article['date'])) ?></time>
    </div>
    <?= $article['text'] ?>
    <a href="./index.php" class="post__link">Back to home</a>
  </article>
</div>

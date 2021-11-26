<?php include __DIR__ . '/templates/header.tpl.php'; ?>
<h2 class="right__title">Nous contacter</h2>
<div class="posts">
  <div class="post post--solo">
      <?php
      // Comment récupérer les données envoyées par un formulaire ?
      // Quand le formulaire utilise la méthode GET, on utilise une variable nommée $_GET
      // Quand le formulaire utilise la méthode POST, on utilise une variable nommée $_POST
      // Ces deux variables sont des tableaux associatifs
      // Elles existent toujours et elles sont accessibles de n'importe où
      // $_GET et $_POST sont des superglobales
      // Il existe d'autres superglobales, comme $_SERVER (pas lié aux formulaires)
      var_dump($_GET);
      var_dump($_POST);
    //   var_dump($_SERVER);
    //   var_dump(filter_input(INPUT_POST, 'email'));


      echo $_POST['email'] ?? 'aucun';
      
      if (isset($_POST['email'])) {
          echo $_POST['email'];
      } else {
          echo 'aucun';
      }
      ?>
    <form action="contact.php" method="post">
        <div>
            Je suis :
            <input type="radio" name="gender" id="gender_man" value="man" required>
            <label for="gender_man">Homme</label>
            <input type="radio" name="gender" id="gender_woman" value="woman" required>
            <label for="gender_woman">Femme</label>
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= filter_input(INPUT_POST, 'email') ?>" placeholder="adresse@exemple.com">
        </div>

        <div>
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" placeholder="Nantes/Paris/Lyon">
        </div>


        <div>
            <label for="message"></label>
            <textarea name="message" id="message" cols="30" rows="10" required><?= filter_input(INPUT_POST, 'message') ?></textarea>
        </div>

        <div>
            <button>Envoyer</button>
            <button type="reset">Réinitialiser</button>
        </div>
    </form>
    <a href="./index.php" class="post__link">back to home</a>
  </div>
</div>
<?php include __DIR__ . '/templates/footer.tpl.php'; ?>

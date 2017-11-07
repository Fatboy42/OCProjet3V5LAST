

<?php if ($errors):  ?>


  <div class="alert alert-danger">
   Pseudo et/ou mot de passe incorrect
  </div>


<?php endif; ?>


<h2>Connection à l'espace d'administration</h2>

<form method="post">
<?= $form->input('username', 'Pseudo');  ?>
<?= $form->input('password', 'Mot de Passe', ['type' => 'password']);  ?>
<button class="btn btn-primary">Connection</button>

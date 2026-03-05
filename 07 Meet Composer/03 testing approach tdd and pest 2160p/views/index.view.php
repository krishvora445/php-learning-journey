<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

  <main> 
    <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
      <p>Hello, <?= $_SESSION['user_id']['email'] ?? 'Guest' ?>. You are at home page</p>
    </div>
  </main>

<?php require base_path('views/partials/footer.php') ?>

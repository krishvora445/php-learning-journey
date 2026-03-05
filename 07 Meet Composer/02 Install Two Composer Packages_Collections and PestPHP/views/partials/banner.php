  <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-white">
        <!-- <?=  $heading ?> -->
          <?php echo 'hello ' . ($_SESSION['name'] ?? 'Guest'); ?>
      </h1>
    </div>
  </header>
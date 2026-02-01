<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="mb-8">
      <h1 class="text-3xl font-bold mb-6">Your Notes</h1>
      
      <?php if (count($notes) > 0) : ?>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <ul class="divide-y divide-gray-200">
            <?php foreach ($notes as $note) : ?>
              <li class="hover:bg-gray-50 transition duration-150">
                <a href="/note?id=<?= $note['id'] ?>" class="block px-4 py-5 sm:px-6 hover:text-blue-600">
                  <div class="flex items-center justify-between">
                    <div class="flex-1">
                      <p class="text-sm font-medium text-gray-900"><?php 
                      echo htmlspecialchars($note['body']);
                       ?></p>
                      <p class="text-xs text-gray-500 mt-1">ID: <?= $note['id'] ?></p>
                    </div>
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php else : ?>
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 text-center">
          <p class="text-gray-600 mb-4">You haven't created any notes yet.</p>
        </div>
      <?php endif; ?>
    </div>

    <div class="mt-8">
      <a href="/notes/create" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-150">
        + Create Note
      </a>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
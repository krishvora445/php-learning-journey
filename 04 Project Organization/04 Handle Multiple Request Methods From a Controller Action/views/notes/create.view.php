<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>
<main>
  <!-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form action="/notes" method="POST">
        <div>
          <label for="body" class="block text-sm font-medium text-gray-700">Note Body</label>
          <div class="mt-1">
            <textarea id="body" name="body" rows="4" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
          </div>x
        </div>
        <div class="mt-4">
          <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create Note</button>
        </div>
      </form>
    </div> -->

  <!-- <form  method="POST">
        <label for="body" class="text-white block text-sm font-medium text-gray-700">Note Body</label>
        <textarea id="body" name="body" rows="4" class="text-black block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        <p>
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create Note</button>
        </p>
      </form> -->

  <form method="POST" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 space-y-6">

    <div class="col-span-full">
      <label for="body" class="block text-sm/6 font-medium text-white">Body</label>
      <div class="mt-2">
        <textarea id="body" name="body" rows="3" required class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
        <!-- <?= isset($_POST['body']) ? $_POST['body'] : '' ?> // Old way -->

        <?php if (isset($errors['body'])) : ?>
          <p class="mt-2 text-sm text-red-600"><?= $errors['body'] ?></p> 
        <?php endif; ?>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
    </div>
  </form>

</main>

<?php require base_path('views/partials/footer.php') ?>
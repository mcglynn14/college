<?php 
    include '../partials/header.php';
    include '../config/config.php';
    include '../queries/newsQuery.php'
?>


<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Latest news</h2>
    <span class="text-center text-gray-500">Click on a news item to read the full article</span>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <?php while ($news->fetch()): ?>
        <div class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700 uppercase"><?=$title?></h3>
          <span class="text-gray-700 mb-10"><?=$description?></span>
          <a href="#" class="block mb-5 py-4 px-4 bg-amber-500 text-white hover:bg-cyan-600">Read more</a>
          <?php if(isset($_SESSION['student_num'])) : ?>
            <button onclick="window.location.href='s/comment?news_id=<?=$newsId?>';" class="py-4 px-4 bg-amber-500 text-white hover:bg-cyan-600">leave a comment</button>
          <?php endif ?>
        </div>
      <?php endwhile ?>
    </div>
  </div>
</div>

<?php
    include '../partials/footer.php';
?>
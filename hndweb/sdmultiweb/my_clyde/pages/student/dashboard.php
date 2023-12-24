<?php 
  include '../../partials/header.php';
  include '../../config/config.php';
  include '../../queries/student.php';
?>


<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-black text-center mb-36">Hi <?=$firstname?></h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <div class="group bg-fuchsia-700 px-10 py-16 rounded-md text-white">
        <h3 class="text-sm text-white text-center mb-7">My course</h3>
        <p>You are currently enrolled on <span class="text-lightBlue-400"><?=$course?></span> for the term <?=$term?> and working towwards an <?=$award?></p>
      </div>
      <a href="#" class="group bg-sky-950 px-10 py-16 rounded-md">
        
        <h3 class="text-sm text-white text-center">My details</h3>
      </a>
      <a href="<?= BASE_PATH?>news" class="group bg-red-600 px-10 py-16 rounded-md">
        
        <h3 class="text-sm text-white text-center">News</h3>
      </a>
      <a href="<?= BASE_PATH ?>events" class="group bg-amber-500 px-10 py-16 rounded-md">
        
        <h3 class="text-sm text-white text-center">Events</h3>
      </a>

    </div>
  </div>
</div>

<?php
    include '../../partials/footer.php';
?>
<?php
  session_start();
  include '../config/dbconfig.php';
  include '../partials/header.php';
  include '../partials/navigation.php';
  
  $blog = $conn->prepare('SELECT 
  
  b.id,
  b.title,
  b.blog_content,
  b.created_on,
  b.img_path,
  b.show_name

  FROM blog b  ');
  
  $blog->execute();
  $blog->store_result();
  $blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName);
  echo $blogID;
?>



<main>
  <div class="pt-5>
    <!-- only show if admin -->
    <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>
      <div class="mt-3 flex items-end justify-center mb-20">
        <div class="flex items-center space-x-1.5 bg-ctc-gold px-4 py-1.5 text-white duration-100 hover:bg-ctc-red">
          <button onclick="window.location.href='a/addBlog';" class="text-sm text-center">ADD BLOG ARTICLE</button>
        </div>
      </div>
      <?php endif ?>
      <section class="">
        <div class="container mx-auto pt-7">
          <h1 class="text-ctc-black font-heading font-semibold text-xl text-center mb-2">Blog</h1>
        </div>
      </section>
  </div>
  <!-- Product List -->
  <section class="py-10 mb-52">
    <div class="mx-auto grid max-w-6xl grid-cols-2 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3">
      <?php while ($blog->fetch()): ?>
        <article class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
          <div class="relative flex items-end overflow-hidden">
            <img src="<?= ROOT_DIR ?>img/<?= $imgPath ?>" alt="<?= $showName ?>" />
          </div>
          <div class="mt-1 p-2">
            <h2 class="text-black font-bold"><?= $blogTitle ?></h2>
            <p class="mt-1 text-sm text-black blog-content">
              <?= $blogContent ?>
            </p>
            <div class="mt-3 flex items-end justify-between">
              <div class="flex items-center space-x-1.5 bg-ctc-gold px-4 py-1.5 text-white duration-100 ">
                <button onclick="window.location.href='blogDetails/<?= $blogID ?>';" class="text-sm ">READ MORE...</button>
              </div>
            </div>
            <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>
              <div class="mt-3 flex items-end justify-between">
                <div class="flex items-center space-x-1.5 bg-ctc-twilight px-4 py-1.5 text-white duration-100 hover:bg-ctc-red">
                  <button onclick="window.location.href='<?= ROOT_DIR ?>dashboard/admin/config/unpublishBlog.php?bid=<?= $blogID ?>';" class="text-sm">UNPUBLISH</button>
                </div>
              </div>
            <?php endif ?>
          </div>
        </article>
      <?php endwhile ?>
  </section>
</main>
<footer class="border-t-2 border-ctc-black py-6 font-body">
    <div class="flex justify-between md:justify-evenly">
        <p class="ml-4">&copy; Clydeside Theatre Company</p>
        <div class="contents mr-4">
            <a class="text-2xl" href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="text-2xl mr-3" href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</footer>
<script src="js/hamburger.js"></script>
<?php
  include '../partials/footer.php';
?>
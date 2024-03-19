<?php
  include '../partials/header.php';
  include '../partials/navigation.php'
?>

      <main>
        <section class="pt-4 mb-40 mt-10">
          <h2 class="text-ctc-black text-center text-body mb-5">Login</h2>
          <form action="auth/authenticate.php" method="post" class="flex flex-col items-center pb-7">
            <div class="flex px-7 pb-7">
              <label class="text-ctc-black text-body pr-4">Username</label>
              <input type="text" name="username" id="username" class="py-4 px-4 border border-ctc-black">
            </div>
            <div class="flex px-7 items-center pb-7">
              <label class="text-ctc-black text-body pr-3">Password</label>
              <input type="password" name="password" id="password" class="py-4 px-4 border border-ctc-black">
            </div>
            <button type="submit" class="bg-ctc-gold py-4 px-4 text-white text-body" value='LOGIN'>Login</button>
          </form>
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
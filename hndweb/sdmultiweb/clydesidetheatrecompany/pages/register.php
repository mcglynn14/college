<?php include '../partials/header.php';?>
<body>
<header class="bg-white border-b-2 border-ctc-black">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="<?= ROOT_DIR ?>img/clydesidetclogo.svg" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">

      <a href="<?= ROOT_DIR ?>blog" class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
      <a href="<?= ROOT_DIR ?>contact" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
      <a href="<?= ROOT_DIR ?>register" class="text-sm font-semibold leading-6 text-gray-900">Register</a>
      <a href="<?= ROOT_DIR ?>login" class="text-sm font-semibold leading-6 text-gray-900">Login</a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="hidden fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="<?= ROOT_DIR ?>img/clydesidetclogo.svg" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <a href="<?= ROOT_DIR ?>blog" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
            <a href="<?= ROOT_DIR ?>contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
            <a href="<?= ROOT_DIR ?>register" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
            <a href="<?= ROOT_DIR ?>login" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Login</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

      <main>
        <section class="pt-4 mb-28 mt-10">
          <h2 class="text-ctc-black text-center text-body mb-5">Register</h2>
          <form action="../auth/register.php" method="post" class="flex flex-col items-center pb-7">
            <div class="flex px-7 pb-7">
              <label class="text-ctc-black text-body pr-4" for="username">Username</label>
              <input type="text" name="username" id="username" class="py-4 px-4 border border-ctc-black">
            </div>
            <div class="flex px-7 items-center pb-7">
              <label class="text-ctc-black text-body pr-3" for="email">Email</label>
              <input type="email" name="email" id="email" class="py-4 px-4 border border-ctc-black">
            </div>
            <div class="flex px-7 items-center pb-7">
              <label class="text-ctc-black text-body pr-3" for="password">Password</label>
              <input type="password" name="password" id="password" class="py-4 px-4 border border-ctc-black">
            </div>
            <button type="submit" class="bg-ctc-gold py-4 px-4 text-white text-body">Register</button>
          </form>
        </section>
      </main>
      <footer class="border-t-2 border-ctc-black py-6 font-body">
        <div class="flex justify-between">
          <p class="ml-4">&copy; Clydeside Theatre Company</p>
          <div class="contents mr-4">
            <a class="text-2xl" href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="text-2xl mr-3" href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
      </footer>
      <script src="/college/hndweb/sdmultiweb/clydesidetheatrecompany/js/hamburger.js"></script> 
<?php include '../partials/footer.php';?>
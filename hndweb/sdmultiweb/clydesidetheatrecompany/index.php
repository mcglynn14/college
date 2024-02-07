<?php
  session_start();
  include 'partials/header.php';
  include 'config/dbconfig.php';

?>
<body>
<header class="bg-white border-b-2 border-ctc-black">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="img/clydesidetclogo.svg" alt="">
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
          <img class="h-8 w-auto" src="img/clydesidetclogo.svg" alt="">
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
            <a href="" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Login</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

      <main>
        <section class="bg-[url('../img/ctcbackgroundimg.webp')] bg-cover bg-no-repeat h-52">
          <div class="container mx-auto pt-7">
            <h1 class="text-white font-heading font-semibold text-xl text-center mb-2">Welcome to Clydeside Theatre Company</h1>
            <h2 class="text-white font-heading font-semibold text-xl text-center">Unleash the Power of Performance</h2>
          </div>
        </section>
        <section class="bg-ctc-gold">
          <div class="container mx-auto pt-2 pb-9">
            <h2 class="text-white font-heading font-semibold text-xl text-center mb-2">About Us</h2>
            <p class="text-white font-body mx-auto px-9 pb-10">Welcome to Clydeside Theatre Company, where captivating stories come to life on stage. Nestled in the heart of the vibrant Clydeside community, we are more than just a theatre company – we are a creative hub, a cultural cornerstone, and a passionate advocate for the transformative power of the performing arts.</p>
          </div>
        </section>
        <section>
          <div class="container mx-auto pt-2">
            <h2 class="text-ctc-black font-heading font-semibold text-xl text-center mb-2">Our Mission</h2>
            <p class="text-ctc-black font-body mx-auto px-9 pb-10">At Clydeside Theatre Company, we believe in the magic of storytelling and the profound impact it can have on individuals and communities. Our mission is to inspire, entertain, and provoke thought through compelling performances that reflect the rich tapestry of human experiences. We strive to create a space where art transcends boundaries and connects people from all walks of life.</p>
          </div>
        </section>
        <hr class="border-solid w-11/12 mx-auto border-ctc-black">
        <section>
          <div class="container mx-auto pt-2">
            <h2 class="text-ctc-black font-heading font-semibold text-xl text-center mb-2">Upcoming Events</h2>
            <p class="text-ctc-black font-body mx-auto px-9 pb-10">Stay tuned for our exciting lineup of upcoming events! Whether you're a seasoned theatre enthusiast or a first-time attendee, Clydeside Theatre Company promises a calendar full of unforgettable experiences.</p>
            <img src="img/ctceventsimg1.webp" alt="" class="w-11/12 mx-auto mb-7">
          </div>
        </section>
        <section class="bg-ctc-twilight mb-8">
          <div class="container mx-auto pt-2">
            <h2 class="text-white font-heading font-semibold text-xl text-center mb-2">Support Us</h2>
            <p class="text-white font-body mx-auto px-9 pb-10">Your support ensures that Clydeside Theatre Company continues to thrive as a cultural beacon in our community. Explore various ways to contribute and be a part of the magic.

              Join us on this exhilarating journey of creativity, emotion, and expression. Clydeside Theatre Company – Where Stories Take Center Stage.</p>
          </div>
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
<?php include 'partials/footer.php';?>
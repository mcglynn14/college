<?php include '../partials/header.php';?>
<body>
<header class="bg-white border-b-2 border-ctc-black">
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
        <section class="mb-12">
          <div class="container mx-auto px-7">
            <h1 class="text-ctc-black font-heading font-semibold text-xl text-center mb-2">Contact</h1>
            <p class="text-ctc-black font-body mx-auto px-9">Thank you for your interest in Clydeside Theatre Company! We value your feedback, inquiries, and collaboration opportunities. Feel free to reach out to us using the following contact details:</p>
          </div>
        </section>
        <section class="pt-16">
          <h2 class="text-ctc-black text-center text-body mb-5">General enquires</h2>
          <div class="flex flex-col items-center pb-7">
            <div class="flex px-7 pb-7">
              <p class="text-ctc-black text-body pr-4">Name</p>
              <input type="text" class="py-4 px-4 border border-ctc-black">
            </div>
            <div class="flex px-7 items-center pb-7">
              <p class="text-ctc-black text-body pr-3">Phone number</p>
              <input type="text" class="py-4 px-4 border border-ctc-black">
            </div>
            <div class="flex px-7 items-center pb-7">
              <p class="text-ctc-black text-body pr-3">Message</p>
              <input type="text" class="py-4 px-4 border border-ctc-black">
            </div>
            <a href="" class="bg-ctc-gold py-4 px-4 text-white text-body">Submit</a>
          </div>
        </section>
        <section class="mb-16">
          <h2 class="mb-2 text-lg font-body text-ctc-black text-center">Ticketing and Reservations:</h2>
          <ul class="max-w-md space-y-1 text-ctc-black text-center list-disc list-inside dark:text-gray-400">
            <li class="list-disc">Email: tickets@clydesidetheatre.com</li>
            <li class="">Phone: +44 123 456 7891</li>
          </ul>
        </section>
        <section class="bg-ctc-gold mb-10">
          <h2 class="text-white font-heading text-center font-semibold text-xl mb-3">Feedback</h2>
          <p class="text-white font-body px-7 pb-7">Your opinions matter to us. Please share your thoughts, suggestions, or feedback by sending an email to feedback@clydesidetheatre.com.</p>
        </section>
        <section class="mb-9">
          <h2 class="text-ctc-black font-heading text-center font-semibold text-xl mb-3">Find us</h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d593.7224314373957!2d-4.263263778752076!3d55.82617627527806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488846fac7512f97%3A0x97841ecc6b9f0395!2sGlasgow%20Clyde%20College%20-%20Langside%20Campus!5e1!3m2!1sen!2suk!4v1706693872095!5m2!1sen!2suk" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="px-7 w-337"></iframe>
        </section>
        <section class="bg-ctc-twilight mb-9">
          <h2 class="text-white font-heading text-center font-semibold text-xl mb-3">Social Media</h2>
          <p class="text-white font-body px-7 mb-3">Connect with us on Facebook and Twitter to stay updated on our latest productions, events, and behind-the-scenes moments.</p>
          <div class="flex flex-row justify-center text-white pb-7">
            <a class="text-2xl mr-4" href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="text-2xl mr-3" href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
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
<?php include '../partials/footer.php';?>
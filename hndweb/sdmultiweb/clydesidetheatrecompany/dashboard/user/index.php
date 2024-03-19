<?php 
  session_start(); 
  include '../../partials/header.php';
  include '../../partials/navigation.php';
?>
<body>

<main class="h-97">
  <section class="px-3 h-337 md:lg:xl:px-40 border-t border-b py-10 bg-opacity-10">
    <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group gap-28 shadow-xl shadow-neutral-100 border">
      <div onclick="window.location.href='../blog'" class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-ctc-black cursor-pointer bg-ctc-twilight">
        <span class="p-5 rounded-full bg-ctc-gold text-white shadow-lg shadow-yellow-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
          </svg>
        </span>
        <p class="text-xl font-medium text-white mt-3">View Blogs</p>
        <p class="mt-2 text-sm text-white">View and comment on blog artices</p>
      </div>
      <div onclick="window.location.href='../u/comments'" class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-ctc-black cursor-pointer bg-ctc-twilight">
        <span class="p-5 rounded-full bg-ctc-gold text-white shadow-lg shadow-yellow-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
          </svg>
        </span>
        <p class="text-xl font-medium text-white mt-3">Your comments</p>
        <p class="mt-2 text-sm text-white">View your reviews on blog artices</p>
      </div>
    </div>
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

<?php 
  include '../partials/footer.php';
?>
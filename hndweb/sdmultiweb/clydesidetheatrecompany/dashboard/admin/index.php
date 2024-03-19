<?php
    session_start();
    include '../../partials/header.php';
    include '../../partials/navigation.php'; 
?>
  <div class="px-3 md:lg:xl:px-40   border-t border-b py-20 bg-opacity-10">
        <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 group shadow-xl shadow-neutral-100 border ">
            <div onclick="window.location.href='../a/allUsers';" class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-ctc-black cursor-pointer bg-ctc-twilight mb-5">
                <span class="p-5 rounded-full bg-ctc-red text-white shadow-lg shadow-red-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg></span>
                <p class="text-xl font-medium text-white mt-3">Users</p>
                <p class="mt-2 text-sm text-white">View, Delete and Update current users.</p>
            </div>

            <div onclick="window.location.href='../a/pendingComments';" class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-ctc-black cursor-pointer bg-ctc-twilight mb-5">
                <span class="p-5 rounded-full bg-ctc-black text-white shadow-lg shadow-orange-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></span>
                <p class="text-xl font-medium text-white mt-3">Pending Reviews</p>
                <p class="mt-2 text-sm text-white">Publish Reviews.</p>
            </div>

            <div onclick="window.location.href='../a/addBlog';" class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-ctc-black cursor-pointer bg-ctc-twilight">
                <span class="p-5 rounded-full bg-ctc-gold text-white shadow-lg shadow-yellow-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg></span>
                <p class="text-xl font-medium text-white mt-3">Add New Blog</p>
                <p class="mt-2 text-sm text-white">Update the blog page</p>
            </div>
          </div>
    </div>  
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
    include '../../../partials/footer.php'; 
?>


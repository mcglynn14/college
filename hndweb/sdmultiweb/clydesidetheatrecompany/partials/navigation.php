<header class="bg-white border-b-2 border-ctc-black">
  <nav class="z-0 relative" x-data="{open:false,menu:false, lokasi:false}">
    <div class="relative z-10 shadow">
      <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
          <div class="flex items-center lg:gap-40 px-2 lg:px-0">
            <a class="flex-shrink-0" href="<?= ROOT_DIR ?>">
            <img class="block lg:hidden h-12 w-16" src="<?= ROOT_DIR ?>img/clydesidetclogo.svg" alt="Logo">
            <img class="hidden lg:block h-12 w-auto" src="<?= ROOT_DIR ?>img/clydesidetclogo.svg" alt="Logo">
          </a>
          <div class="hidden lg:block lg:ml-2">
            <div class="lg:gap-96">
              <?php if (!isset($_SESSION['loggedin'])): ?>
                <a href="<?= ROOT_DIR ?>blog" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Blogs</a>
                <a href="<?= ROOT_DIR ?>login" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Login</a>
                <a href="<?= ROOT_DIR ?>register" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Register</a>
                <?php else: ?>
                  <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Home </a>
                  <a href="<?= ROOT_DIR ?>blog" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Blog </a>
                  <?php if ($_SESSION['is_admin'] == 1): ?>
                    <a href="<?= ROOT_DIR ?>a/pendingComments" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Pending Reviews </a>
                    <a href="<?= ROOT_DIR ?>a/allUsers" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Users </a>
                    <a href="<?= ROOT_DIR ?>a/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashboard </a>
                    <?php elseif ($_SESSION['is_user'] == 0): ?>
                      <a href="<?= ROOT_DIR ?>u/comments" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> My reviews </a>
                      <a href="<?= ROOT_DIR ?>u/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashboard </a>
                    <?php endif ?>
                    <a href="<?= ROOT_DIR ?>logout" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout </a>
                    <?php endif ?>
            </div>
          </div>
        </div>
        <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
        </div>
        <div class="flex lg:hidden">
          <button id="navbar-toggle" @click="menu = !menu" class="inline-flex items-center justify-center p-2 rounded-md text-ctc-black hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <svg id="open-toggle" x-show="!menu" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg id="close-toggle" x-show="menu" class=" h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div id="mobile-nav" x-show="menu" class=" flex-col">
      <div class="flex flex-col items-center justify-center px-2 pt-2 pb-3">
      <?php if (!isset($_SESSION['loggedin'])): ?>
                <a href="<?= ROOT_DIR ?>blog" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Blogs</a>
                <a href="<?= ROOT_DIR ?>login" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Login</a>
                <a href="<?= ROOT_DIR ?>register" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Register</a>
                <?php else: ?>
                  <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Home </a>
                  <a href="<?= ROOT_DIR ?>blog" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">Blog </a>
                  <?php if ($_SESSION['is_admin'] == 1): ?>
                    <a href="<?= ROOT_DIR ?>a/pendingComments" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Pending Reviews </a>
                    <a href="<?= ROOT_DIR ?>a/allUsers" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Users </a>
                    <a href="<?= ROOT_DIR ?>a/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashboard </a>
                    <?php elseif ($_SESSION['is_user'] == 0): ?>
                      <a href="<?= ROOT_DIR ?>u/comments" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> My reviews </a>
                      <a href="<?= ROOT_DIR ?>u/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashboard </a>
                    <?php endif ?>
                    <a href="<?= ROOT_DIR ?>logout" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-ctc-black hover:bg-purple-900 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout </a>
                    <?php endif ?>
    </div>
    </div>
  </div>
  </nav>
</header>

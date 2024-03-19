<?php 
    session_start();
    include '../../config/dbconfig.php';
    include '../../partials/header.php';
    include '../../partials/navigation.php';

    $userId = $_GET['uid'];

// edit user query

$users = $conn->prepare('SELECT 
u.id,
u.username,
u.email,
u.active,
u.is_admin

FROM users u

where u.is_admin = 0


');
$users->execute();
$users->store_result();
$users->bind_result($userId, $userName, $userEmail, $userActive, $admin);

// total comments for the selected user
$commentCount = $conn->prepare('SELECT 
	
COUNT(fk_user_id)


FROM userBlog
WHERE fk_user_id ='. $userId .'
');
$commentCount->execute();
$commentCount->store_result();
$commentCount->bind_result($commentsTotal);
$commentCount->fetch();

?>
<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-between flex-col">
        <h6 class="text-blueGray-700 text-xl font-bold">My account</h6>
        <div class="flex">
          <button onclick="window.location.href='../../u/comments';" class="bg-ctc-gold text-white active:bg-ctc-red font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
            User comments (<?=$commentsTotal ?>)
          </button>
          <button onclick="window.location.href='../allUsers';" class="bg-ctc-gold text-white active:bg-ctc-red font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
            All users
          </button>
        </div>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form method="POST" action="<?= ROOT_DIR ?>dashboard/admin/config/editUserConfig.php">
        <input type="hidden" name="userId" value="<?= $userId ?>">
        <?php while ($users->fetch()): ?>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="username">Username</label>
            <input type="text" name="username" id="username" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?= $userName ?>">
          </div>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="isActive">Is Active</label>
            <input type="text" name="isActive" id="isActive" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?= $userActive ?>">
          </div>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="isAdmin">Is Admin</label>
            <input type="text" name="isAdmin" id="isAdmin" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="<?= $admin ?>">
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-ctc-gold rounded-lg focus:ring-4 focus:ring-ctc-twilight hover:bg-ctc-red">Submit edit</button>
        <?php endwhile ?>
      </form>
    </div>
  </div>
</div>
</section>
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
  include '../../../../components/footer.php';
?>
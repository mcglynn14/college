<?php
    session_start();
     include '../../config/dbconfig.php';
     include '../../partials/header.php';
     include '../../partials/navigation.php';
    $userId = $_SESSION['id'];
     $userComments = $conn->prepare('SELECT 
	
     c.id,
     c.heading,
     c.comment,
     c.date_added,
     c.pending,
     u.id,
     b.img_path
     
     FROM comments c
     LEFT JOIN userBlog ub ON c.fk_userBlog = ub.id
     LEFT JOIN blog b ON ub.fk_blog_id = b.id
     LEFT JOIN users u ON ub.fk_user_id = u.id
     where ub.fk_user_id = '.$userId .' 
     order by date_added DESC
     ');
     $userComments->execute();
     $userComments->store_result();
     $userComments->bind_result($cID, $cHeading, $comment, $cDateAdded, $pending, $userID, $imgPath);
     

?>
<main>
    <section class="border border-ctc-black bg-white dark:bg-gray-900 mb-40">
        <?php while ($userComments->fetch()): ?>
            <div class="border border-ctc-black grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="hidden lg:mt-0 md:col-span-3 lg:flex">
                    <img src="<?= ROOT_DIR ?>img/<?= $imgPath ?>" alt="mockup">
                </div>   
                <div class="mr-auto place-self-center md:col-span-9 px-10">
                    <p class=" mb-2 font-light text-ctc-black  md:text-md lg:text-m dark:text-gray-400">Your added this comment on <?= $cDateAdded ?></p>
                    <p class="text-ctc-black max-w-2xl mb-4 text-2xl font-extrabold leading-none md:text-2xl xl:text-2xl dark:text-white"><?= $cHeading ?></p>
                    <p class=" mb-3 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"><?= $comment ?></p>
                    <?php if($pending == 0): ?>
                        <p class="bg-green-900 px-3 py-1 border rounded shadow inline-flex items-center justify-center text-base font-medium text-center text-white">
                        Published
                        </p>
                        <?php else: ?>
                            <p class="bg-ctc-red px-3 py-1 border rounded shadow inline-flex items-center justify-center text-base font-medium text-center text-white">
                                Pending
                            </p>                        
                    <?php endif ?>
                </div>        
            </div>
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
<?php
    include '../../partials/footer.php';
?>
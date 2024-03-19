<?php 
    session_start();
    include '../partials/header.php';
    include '../partials/navigation.php';
    include '../config/dbconfig.php';

    $blogID = $_GET['blog_id'];

    $blogDetails = $conn->prepare('SELECT 
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path
   FROM userblog ub
   LEFT JOIN blog b ON ub.fk_blog_id = b.id
   where b.id= '. $blogID .'
   
  ');
    $blogDetails->execute();
    $blogDetails->store_result();
    $blogDetails->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath);
    $blogDetails->fetch();

// comments
$comments = $conn->prepare('SELECT 
	
c.id,
c.heading,
c.comment,
c.date_added,
c.pending,
u.username,
u.active,
u.id

FROM comments c
LEFT JOIN userBlog ub ON c.fk_userBlog = ub.id
LEFT JOIN blog b ON ub.fk_blog_id = b.id
LEFT JOIN users u ON ub.fk_user_id = u.id
where ub.fk_blog_id= '. $blogID .' AND c.pending = 0 AND u.active = 1
');
$comments->execute();
$comments->store_result();
$comments->bind_result($cID, $cHeading, $comment, $cDateAdded, $pending, $username, $active, $userID);

?>
<body>
<main>
    <section class="bg-white dark:bg-gray-900">
        <div class="flex justify-center blog-mob">
            <!--<div class="flex justify-center items-center gap-8">
                    <a class="delete-id bg-ctc-red text-white py-4 px-4" href="#" onclick="window.location.href='../a/deleteblog/'">
                        <button  x-data="{ tooltip: 'Delete' }" class="delete-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                            </svg>
                        </button>
                        delete blog
                    </a>
                    <button class="bg-ctc-twilight text-white py-4 px-4">
                        <a x-data="{ tooltip: 'Edite' }" onclick="window.location.href='editUser/';">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/>
                            </svg>
                            edit blog
                        </a>
                    </button>
                </div>-->
            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        <?= $blogTitle ?>
                    </h1>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Added on: <?= $blogCreated ?></p>
                    <hr>
                    <div class="mt-6">
                        <p class="mt-4 w-7 text-gray-500 dark:text-gray-400"><?= $blogContent ?></p>    
                    </div>      
                </div>
            </div>
        </div>
    </section>
    <!-- if not logged in, display a link to login -->
    <section>
        <!-- main container round the login / add comment section -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-6">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <!-- the left column with image, this is always visible -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('<?= ROOT_DIR ?>img/<?= $imgPath ?>')"></div>
                    <!-- Col -->
                    <?php if (!isset($_SESSION['loggedin'])): ?>
                        <!-- this is the column that will diplay if they are not loggin in -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Already have an account?</h3>
                                <button onclick="window.location.href='../login';" class="w-full px-3 py-2 text-sm leading-tight text-white bg-ctc-gold border rounded shadow appearance-none focus:outline-none focus:shadow-outline">SIGN IN</button>
                            </div>
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Get involved</h3>
                                <p class="mb-4 text-sm text-gray-700"> Sign up today to get access to early bird tickets</p>
                                <button onclick="window.location.href='../register';" class="w-full px-3 py-2 text-sm leading-tight text-white bg-ctc-gold border rounded shadow appearance-none focus:outline-none focus:shadow-outline">SIGN UP</button>
                            </div>
                            <?php else: ?>
                                <!-- this is the column that will diplay if they are not loggin in -->
                                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                                    <div class="px-8 mb-4 text-center">
                                        <h3 class="pt-4 mb-2 text-2xl">Leave a comment</h3>
                                        <p class="mb-4 text-sm text-gray-700">Your post will be visible once it as been approved by our admin</p>
                                    </div>
                                    <div class="max-w-2xl mx-auto">
                                        <form action="<?= ROOT_DIR ?>dashboard/user/addComment.php?blog_id=<?= $blogID ?>" method="post">
                                        <input type="hidden" name="fk_user_id" value="<?= $userID ?>">
                                        <input type="hidden" name="fk_blog_id" value="<?= $blogID ?>">
                                        <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                            <label class="block mb-2 text-sm font-bold text-gray-700" for="heading">Comment Heading</label>
                                            <input class="w-full mb-4 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="heading" type="text" placeholder="Enter heading..." name="heading"/>
                                        </div>
                                        <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                            <label for="editor" class="sr-only"></label>
                                            <textarea name="comment" id="editor" rows="8" class="block px-0 w-full border rounded shadow py-5 px-5 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Add your comment" required></textarea>
                                        </div>
                                        <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-ctc-twilight focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-ctc-red">Comment</button>
                                    </form>
                                </div>  
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comments component -->
        <div class="px-8">
            <div class="bg-white p-4 rounded-lg shadow-xl py-8 mt-12">
                <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">Comments</h4>
                <div class="space-y-12 px-2 xl:px-16 mt-12">
                    <hr>
                    <?php while ($comments->fetch()): ?>
                        <?php if($comments->num_rows > 0 && $active == 1): ?>
                            <div class="mt-4 flex">
                                <div>
                                    <p>Comment by: <?= $username?> On: <?= $cDateAdded ?></p>
                                    <div class="flex items-center h-16">
                                        <span class="text-lg text-blue-600 font-bold"><?= $cHeading ?></span>
                                    </div>
                                    <div class="flex items-center py-2">
                                        <span class="text-gray-500"><?= $comment ?></span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <?php endif ?>
                    <?php endwhile ?>
                    <?php if($comments->num_rows < 1): ?>
                        <p class="mb-4 text-sm text-gray-700">There are no comments for this show yet</p>
                    <?php endif ?>
                </div>
            </div>
        </div>
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
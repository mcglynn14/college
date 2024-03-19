<?php
  session_start();
  include 'config/dbconfig.php';
  include 'partials/header.php';
  include 'partials/navigation.php';

?>
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
  include 'partials/footer.php';
?>
<!-- footer -->
  <!-- if user not admin then newsletter signup -->
<?php if (!isset($_SESSION['loggedin'])): ?>
<section class="bg-black">
  <div class="max-w-lg bg-black px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center">
      <h1 class="text-3xl font-extrabold leading-10 tracking-tight text-left text-white text-center sm:leading-none md:text-6xl text-4xl lg:text-7xl">
        <span class="sign-up inline sm:block">Sign up to our</span>
        <span class=" mt-2 bg-clip-text text-transparent bg-gradient-to-r from-white via-yellow-300 to-yellow-400 md:inline-block"> Newsletter
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 via-blue-100 to-blue-600"> for Exclusive Offers</span> </span>
      </h1>
      <div class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg">
        <button class="newsletter-btn bg-tkb border text-md text-white py-3 px-7" onclick="window.location.href='../../../theatre-project/pages/register/';">
        Sign Up!
        </button>
      </div>
  
    <div class="text-center right-0 left-0 flex justify-center space-x-4 mt-4 mb-0 bg-black">
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F" target="_blank">
            <svg class="hover:fill-white"fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
        </a>
        <a href="https://en-gb.facebook.com/" target="_blank">
            <svg class="hover:fill-white" fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <svg class="hover:fill-white" fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
      </div>
    <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4  bg-black">
      <div class="sm:flex sm:items-center sm:justify-between">
        <p class="footer-nav mt-4 pb-4 text-sm text-right text-gray-400 lg:text-right lg:mt-0">
          T&C &nbsp;
          <a href="<?= ROOT_DIR ?>pages/contact.php"> Contact</a>&nbsp;
          <a href="<?= ROOT_DIR ?>pages/login/"> Login </a> 
        </p>
      </div>
    </div>
    </div>
    

  <?php elseif (isset($_SESSION['loggedin']) &&($_SESSION['is_admin'] == 0) ):?>
    <section class="bg-black">
    
    <img src="<?= ROOT_DIR ?>assets/images/ltcLogonew.png" alt="logo" class="flex flex-col pt-8 bottom-0"/>

      <div class="max-w-lg bg-black px-4 pt-0 mx-auto items-center justify-center flex flex-col md:max-w-none md:flex-row md:text-center">
        
      <div class="flex items-center justify-center mb-4 mt-4">
          <p class="footer-nav text-sm text-center text-gray-400 lg:text-right lg:mt-0">
            <a href="<?= ROOT_DIR ?>pages/contact.php"> Contact</a>&nbsp;
            <a  href="<?= ROOT_DIR ?>u/dashboard"> Dashboard</a>&nbsp;
            <a  href="<?= ROOT_DIR ?>account/auth/logout.php"> Logout</a>
          </p>
        </div>
      <div class="text-center right-0 left-0 flex justify-center space-x-4 pb-4 bg-black">
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F" target="_blank">
            <svg class="hover:fill-white"fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
        </a>
        <a href="https://en-gb.facebook.com/" target="_blank">
            <svg class="hover:fill-white" fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <svg class="hover:fill-white" fill="#828283" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
      </div>

      </div>
      </div>

    </section>

  
  <!--if user is admin then admin nav-->
  <?php elseif (isset($_SESSION['loggedin']) && $_SESSION['is_admin'] == 1): ?>    
  <section>
    <footer class="bg-black pb-5">
          <div class="max-w-screen-xl px-4 pt-8 mx-auto bg-black ">
            <div class="sm:flex sm:items-center sm:justify-between">
              <div class="flex justify-center text-teal-300 sm:justify-start">
                  <img class="rounded-full" src="<?= ROOT_DIR ?>assets/images/cat-roof.jfif" width="400" height="400" />
              </div>
              <p class="mt-4 text-sm text-center text-gray-400 lg:text-right lg:mt-0">
                T&C &nbsp; Career &nbsp; Privacy & Policy &nbsp; Developers
              </p>
            </div>
          </div>
    </footer>       
  <?php endif ?>

</section>   



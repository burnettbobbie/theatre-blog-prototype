<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
?>


<script async>
  function closeAlert(){
  let close = document.getElementById("alert");
  close.style.display= "none"
  }
</script>
<?php if (!isset($_SESSION['loggedin'])): ?>
  <div id="alert" class="flex items-center bg-yellow-200 text-black text-sm font-bold px-4 py-3" role="alert" >
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
    <p>Please <a href="<?= ROOT_DIR ?>pages/login/" style="text-decoration: underline">login</a> to comment on blogs</p>
    <button
      type="button"
      class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
    onclick="closeAlert()">
      <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-6 w-6">
          <path
            fill-rule="evenodd"
            d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
  </div>
  <?php endif ?>


  <div class="home-banner flex items-center">   
    <section class="bg-black w-full bg-center home-banner flex items-center">
       <div class="max-w-lg bg-black px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center">
            <h1 class="text-3xl font-extrabold leading-10 tracking-tight text-left text-white text-center sm:leading-none md:text-6xl text-4xl lg:text-7xl">
              <span class="logo inline sm:block">The Local Theatre Company</span>
            </h1>
            <div class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg">
              <button onclick="window.location.href='pages/whatsOn.php'" class="whats-on bg-tkb border text-md text-white py-3 px-7 " onClick={signInNow}>
              WHAT'S ON
            </button>
            </div>
          </div>
    </section>   
  </div>



<?php include 'components/navigation.php'; ?>
<?php include 'components/latest.php'; ?>
<!-- Upcoming shows -->
<?php include 'components/blogSection.php'; ?>
<?php include 'components/footer.php'; ?>


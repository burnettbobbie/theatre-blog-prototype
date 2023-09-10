<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>

<section class="min-h-screen flex items-stretch text-white ">
    <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center" style="background-image: url(../../assets/images/theatre-chair.jpg);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Season 2023.</h1>
                <p class="text-3xl my-4">Stay  with the latest theatre news, upcoming shows blah blah.</p>
            </div>
            <div class="bottom-0 absolute p-4 text-center right-0 left-0 flex justify-center space-x-4">

            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0" style="background-color: #000000;">

            <div class="w-full py-6 z-20">
                <h1 class="login-title">REGISTER</h1>
                <form action="../../account/auth/register.php" method="post" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="pb-2 pt-4">
                        <input type="text" name="username" id="username" placeholder="username..." class="login-input block w-full p-4 text-lg rounded-lg bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input type="text" name="email" id="email" placeholder="email..." class="login-input block w-full p-4 text-lg rounded-lg bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="login-input block w-full p-4 text-lg rounded-lg bg-black" type="password" name="password" id="password" placeholder="*********">
                    </div>
                 
                    <div>
                        <button class="login-button" type="submit">SIGN UP!</button>
                    </div>
                </form>
            </div>
        </div>
        
    </section>


<?php include '../../components/footer.php'; ?>
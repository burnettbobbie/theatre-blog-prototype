<?php 
    session_start();
    include '../../components/header.php';
    include '../../components/navigation.php';
    include '../../account/auth/dbConfig.php';

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
u.username

FROM comments c
LEFT JOIN userblog ub ON c.fk_userblog = ub.id
LEFT JOIN blog b ON ub.fk_blog_id = b.id
LEFT JOIN users u ON ub.fk_user_id = u.id
where ub.fk_blog_id= '. $blogID .' AND c.pending = 0

');
$comments->execute();
$comments->store_result();
$comments->bind_result($cID, $cHeading, $comment, $cDateAdded, $pending, $username);
?>

<section class="bg-white dark:bg-gray-900 blog-article">
    <div class="flex justify-center blog-mob">
        <div class="flex items-center w-full p-1 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full" >
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                <?= $blogTitle ?>
                </h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400 ">Added on: <?= $blogCreated ?></p>
                <hr>
                <div class="mt-6">
                    <pre class="mt-4 text-gray-500 text-left  dark:text-gray-400">
                        <?= $blogContent ?>
                    </pre>    
                </div>      
            </div>           
        </div>
    </div>

</section>
<!-- Comments component -->
    <div class="comments">
        <div class="comments-title bg-white p-4 rounded-lg shadow-xl py-8 mt-12">
            <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">Comments</h4>
            <div class="">
                <?php if($comments->num_rows > 0): ?>
                    <?php while ($comments->fetch()): ?>
                    <div class="border-l blog-comment mb-0 pb-0 border-neutral-300 dark:border-neutral-500"> 
                            <div class=" flex-start flex items-center pt-3">
                                <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                                </div>        
                                <p class="date-added text-sm text-neutral-500 dark:text-neutral-300"><?= $username?> On: <?= $cDateAdded ?> </p>
                            </div>
                            <div class="mt-2 ml-4">
                                <div class="flex items-center h-16">
                                    <span class="comment-heading text-lg text-black font-bold"><?= $cHeading ?></span>
                                </div>
                                <div class="comment-text flex items-center ">
                                    <span class="text-gray-500 "><?= $comment ?></span>
                                </div> 
                            </div>
                    </div>
                    <?php endwhile ?>            
                <?php else: ?>
                    <p class="mb-4 text-sm text-gray-700">There are no comments for this show yet</p>
                <?php endif ?>           
            </div>
        </div>    
    </div>
    <?php if (!isset($_SESSION['loggedin'])): ?>
        <div class="" >
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('<?= ROOT_DIR ?>assets/images/<?= $imgPath ?>')"></div>
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">			
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
							<div class="mb-4">							
                                <h3 class="pt-4 mb-2 text-2xl">Sign in to leave a comment</h3>                               
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
								<input
									class="w-full mb-4 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									type="text"
									placeholder="Enter username..."/>
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Password
								</label>
								<input
									class="w-full mb-4 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
									placeholder="Password..."/>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"								
                                    type="submit"
                                    value="SIGN IN"/>
							<hr class="mb-6 border-t" />
						</form>
                        <div class="px-8 mb-4 text-center">
                            <h3 class="pt-4 mb-2 text-2xl">Get involved</h3>
                            <p class="mb-4 text-sm text-gray-700"> Sign up today to get access to early bird tickets</p>
                            <button class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">SIGN UP</button>
                        </div>
					</div>                   
				</div>
			</div>
		</div>        
    <?php else: ?>
            <?php $userID = $_SESSION['id']; ?>
        <!-- comment box -->
    <div >
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('<?= ROOT_DIR ?>assets/images/<?= $imgPath ?>')">
                </div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Leave a comment</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            Your post will be visible once it as been approved by our admin
                        </p>
                    </div>
                    <div class="max-w-2xl mx-auto">
                        <form action="../../account/dashboard/user/addComment.php?blog_id=<?= $blogID ?>" method="post">
                            <input type="hidden" name="fk_user_id" value="<?= $userID ?>">
                            <input type="hidden" name="fk_blog_id" value="<?= $blogID ?>">
                 

                            <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                <label class="block mb-2 text-sm font-normal text-gray-700" for="heading">
                                    Heading
                                </label>
                                <input  class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                                    id="heading"
                                    type="text"
                                    name="heading"/>
                            </div>
                            <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
                                <label for="editor" class="sr-only"></label>
                                <label class="block mb-2 text-sm font-normal text-gray-700" for="heading">
                                    Comment
                                </label>
                                <textarea name="comment" id="editor" rows="8"  class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"  placeholder="Add your comment..." required></textarea>
                            </div>
                            <button type="submit" class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium">
                                Comment
                            </button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>
    

<?php 
    include '../../components/footer.php';
?>
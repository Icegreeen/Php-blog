<?php 

    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;
    
        foreach($posts as $post) {
          if($post['id'] == $postId) {
            $currentPost = $post;
          }
        }
    
      }

?>
   <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptas vitae illum nulla officia sequi reiciendis, fugiat debitis est obcaecati, eius ullam soluta eum, corrupti modi voluptatum corporis doloremque ea.
                Cum architecto similique provident! Magni aliquid eaque quia, omnis totam cum at explicabo, est architecto, voluptates necessitatibus labore error perspiciatis possimus et quod nulla excepturi? Aut odio vel porro ab.
                Iure repellendus, saepe molestias laudantium repellat maiores architecto tenetur deserunt, nulla libero sit accusamus, aliquid distinctio odit sequi commodi ea tempore deleniti enim. Amet dolore aliquam, officiis assumenda nam aperiam?
                Sit, voluptatem nemo natus modi iure qui repellendus rerum nihil sint hic nisi, laudantium perferendis numquam quia, ipsam repellat harum iste? Repudiandae consectetur pariatur explicabo deleniti vero ad et maxime!
                Eius soluta consectetur impedit labore aspernatur porro sit iure quod illo officia dicta blanditiis cupiditate provident recusandae in molestiae ullam mollitia, architecto nisi, veniam velit nihil vel atque. Necessitatibus, numquam.
            </p>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptas vitae illum nulla officia sequi reiciendis, fugiat debitis est obcaecati, eius ullam soluta eum, corrupti modi voluptatum corporis doloremque ea.
                Cum architecto similique provident! Magni aliquid eaque quia, omnis totam cum at explicabo, est architecto, voluptates necessitatibus labore error perspiciatis possimus et quod nulla excepturi? Aut odio vel porro ab.
                Iure repellendus, saepe molestias laudantium repellat maiores architecto tenetur deserunt, nulla libero sit accusamus, aliquid distinctio odit sequi commodi ea tempore deleniti enim. Amet dolore aliquam, officiis assumenda nam aperiam?
                Sit, voluptatem nemo natus modi iure qui repellendus rerum nihil sint hic nisi, laudantium perferendis numquam quia, ipsam repellat harum iste? Repudiandae consectetur pariatur explicabo deleniti vero ad et maxime!
                Eius soluta consectetur impedit labore aspernatur porro sit iure quod illo officia dicta blanditiis cupiditate provident recusandae in molestiae ullam mollitia, architecto nisi, veniam velit nihil vel atque. Necessitatibus, numquam.
            </p>
        </div>

        <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
   </main>

<?php
    include_once("templates/footer.php")
?>
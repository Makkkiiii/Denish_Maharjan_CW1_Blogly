<?php

require '/Xampp/htdocs/Blogly/Partials/header.php';

$current_user_id = $_SESSION['user-id'];
$query = "SELECT id, title, category_id FROM posts WHERE author_id = $current_user_id ORDER BY id DESC";
$posts = mysqli_query($conn, $query);



?>

<section class="userdashboard">
    <!-- ? SHOWS ADD POST WAS SUCCESSFUL -->
    <?php if (isset($_SESSION['add-post'])) : ?>
        <div class="alert_message success container">
            <p>
                <?= $_SESSION['add-post']; ?>
                <?php unset($_SESSION['add-post']); ?>
            </p>
        </div>
    <?php endif; ?>

    <!-- ? SHOWS DELETE POST WAS SUCCESSFUL -->
    <?php if (isset($_SESSION['delete-post-success'])) : ?>
        <div class="alert_message success container">
            <p>
                <?= $_SESSION['delete-post-success']; ?>
                <?php unset($_SESSION['delete-post-success']); ?>
            </p>
        </div>
    <?php endif; ?>

    <!-- ? SHOWS DELETE POST ERROR -->
    <?php if (isset($_SESSION['delete-post-error'])) : ?>
        <div class="alert_message error container">
            <p>
                <?= $_SESSION['delete-post-error']; ?>
                <?php unset($_SESSION['delete-post-error']); ?>
            </p>
        </div>
    <?php endif; ?>
    <!-- ? SHOWS ADD POST WAS SUCCESSFUL -->
    <?php if (isset($_SESSION['add-post-success'])) : ?>
        <div class="alert_message success container">
            <p>
                <?= $_SESSION['add-post-success']; ?>
                <?php unset($_SESSION['add-post-success']); ?>
            </p>
        </div>
    <?php endif; ?>

    <!-- ? SHOWS ADD POST ERROR -->
    <?php if (isset($_SESSION['add-post-error'])) : ?>
        <div class="alert_message error container">
            <p>
                <?= $_SESSION['add-post-error']; ?>
                <?php unset($_SESSION['add-post-error']); ?>
            </p>
        </div>
    <?php endif; ?>
    <div class="container userdashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li>
                    <a href="<?= REGUSER ?>add-post-user.php">
                        <i class="uil uil-pen"></i>
                        <h5>Add Post</h5>
                    </a>
                </li>
                <li>
                    <a href="<?= REGUSER ?>userdash.php" class="active">
                        <i class="uil uil-setting"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manage Posts</h2>
            <?php if (mysqli_num_rows($posts) > 0) : ?>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                            <!-- GETTING CATGEGORY TITLE OF EACH POST -->
                            <?php
                            $category_id = $post['category_id'];
                            $category_query = "SELECT title FROM categories WHERE id = $category_id";
                            $category_result = mysqli_query($conn, $category_query);
                            $category = mysqli_fetch_assoc($category_result);
                            ?>
                            <tr>
                                <td><?= $post['title'] ?></td>
                                <td><?= $category['title'] ?></td>
                                <td><a href="<?= REGUSER ?>edit-post-user.php?id=<?= $post['id'] ?>" class="btn sm">Edit</a></td>
                                <td><a href="<?= REGUSER ?>delete-post-user-logic.php?id=<?= $post['id'] ?>" class="btn sm danger">Delete</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="alert_message error"><?= "No posts found" ?></div>
            <?php endif; ?>

        </main>
    </div>

</section>

<?php

require '/Xampp/htdocs/Blogly/Partials/footer.php'


?>
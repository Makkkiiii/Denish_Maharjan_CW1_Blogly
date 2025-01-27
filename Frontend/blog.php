<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogly | Blog</title>
    <link rel="icon" type="image/x-icon" href="/Blogly/assets/BloglyIcon.png">
    <link rel="stylesheet" href="/Blogly/CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php" class="nav_logo">
                <img src="/Blogly/assets/BloglyIcon.png" alt="logo_icon">Blogly</a>
            <ul class="nav_items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="signin.php">Sign In</a></li> -->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="/Blogly/assets/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="/Blogly/Backend/dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn"><i class="uil uil-times"></i></button>
        </div>
    </nav>
    <!-- END OF NAV -->
    <section class="search_section">
        <form class="search_form">
            <div class="search_input-container">
                <i class="uil uil-search search_icon"></i>
                <input type="text" class="search_input" placeholder="Search for blogs...">
            </div>
            <button type="submit" class="search_button">Search</button>
        </form>
    </section>
    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/Blogly/assets/blog3.jpg">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild life</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                            perspiciatis aspernatur tempora labore natus in, maiores quae ad officiis provident optio
                            aliquam. Quo alias cum sed, nam a libero eaque?</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Quisquam, quos.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="/Blogly/assets/avatar3.jpg">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Arthur Morgan</h5>
                            <small>June 13, 2025 - 07:13</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="/Blogly/assets/blog7.jpg">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild life</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                            perspiciatis aspernatur tempora labore natus in, maiores quae ad officiis provident optio
                            aliquam. Quo alias cum sed, nam a libero eaque?</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Quisquam, quos.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="/Blogly/assets/avatar4.jpg">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Arthur Morgan</h5>
                            <small>June 13, 2025 - 07:13</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="/Blogly/assets/blog5.jpg">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild life</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                            perspiciatis aspernatur tempora labore natus in, maiores quae ad officiis provident optio
                            aliquam. Quo alias cum sed, nam a libero eaque?</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Quisquam, quos.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="/Blogly/assets/avatar5.jpg">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Arthur Morgan</h5>
                            <small>June 13, 2025 - 07:13</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="post">
                <div class="post_thumbnail">
                    <img src="/Blogly/assets/blog8.jpg">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild life</a>
                    <h3 class="post_title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                            perspiciatis aspernatur tempora labore natus in, maiores quae ad officiis provident optio
                            aliquam. Quo alias cum sed, nam a libero eaque?</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos. Quisquam, quos.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="/Blogly/assets/avatar8.jpg">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Arthur Morgan</h5>
                            <small>June 13, 2025 - 07:13</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </section>
    <!-- END OF POSTS -->
    <section class="category_buttons">
        <div class="container category_buttons-container">
            <a href="" class="category_button">Wildlife</a>
            <a href="" class="category_button">Travel</a>
            <a href="" class="category_button">Photography</a>
            <a href="" class="category_button">Lifestyle</a>
            <a href="" class="category_button">Fashion</a>
            <a href="" class="category_button">Food</a>
            <a href="" class="category_button">Technology</a>
            <a href="" class="category_button">Business</a>
            <a href="" class="category_button">Sports</a>
        </div>
    </section>
    <!-- END OF CATEGORY -->

    <footer>
        <div class="footer_socials">
            <a href="https://www.youtube.com/@makkkiiiii" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://www.facebook.com/TheofficialFuncasmPage" target="_blank"><i
                    class="uil uil-facebook"></i></a>
            <a href="https://x.com/ilovemakiiiiii" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="https://www.linkedin.com/in/denish-maharjan/" target="_blank"><i class="uil uil-linkedin"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Wildlife</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Photography</a></li>
                    <li><a href="">Lifestyle</a></li>
                    <li><a href="">Fashion</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Business</a></li>
                    <li><a href="">Sports</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="/Blogly/Frontend/contact.html">Online Support</a></li>
                    <li><a href="/Blogly/Frontend/contact.html">Number</a></li>
                    <li><a href="/Blogly/Frontend/contact.html">Emails</a></li>
                    <li><a href="/Blogly/Frontend/contact.html">Social Support</a></li>
                    <li><a href="/Blogly/Frontend/contact.html">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>

                </ul>
            </article>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; 2025 Denish Maharjan </small>
        </div>
    </footer>

    <script src="/Blogly/JS/script.js"></script>
</body>

</html>
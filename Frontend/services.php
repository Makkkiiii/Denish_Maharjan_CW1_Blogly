<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogly | Services</title>
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
    <section class="services_page">
        <h1>
            Services
        </h1>
        <div class="services_content">
            <p>At Blogly, we offer a range of services to help you share your stories and connect with a wider audience.
                Our
                platform is designed to make blogging easy and accessible for everyone. Here are some of the services we
                provide:</p>
            <ul>
                <li><i class="uil uil-paint-tool"></i> <strong>Customizable Blog Templates:</strong> Choose from a
                    variety of beautiful templates to give your
                    blog a unique look and feel.</li>
                <li><i class="uil uil-search"></i> <strong>SEO Optimization:</strong> Our tools help you optimize your
                    content for search engines, so your
                    blog can reach more readers.</li>
                <li><i class="uil uil-chart-line"></i> <strong>Analytics:</strong> Track your blog's performance with
                    detailed analytics and insights.</li>
                <li><i class="uil uil-share-alt"></i> <strong>Social Media Integration:</strong> Easily share your posts
                    on social media platforms to increase
                    your reach.</li>
                <li><i class="uil uil-users-alt"></i> <strong>Community Support:</strong> Join our community of bloggers
                    to share tips, get feedback, and
                    collaborate on projects.</li>
            </ul>
            <p>Whether you're a seasoned blogger or just starting out, Blogly has everything you need to create and grow
                your blog. Join us today and start sharing your stories with the world!</p>
        </div>
    </section>
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
                    <li><a href="/Blogly/Backend/category-post.html">Wildlife</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Travel</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Photography</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Lifestyle</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Fashion</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Food</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Technology</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Business</a></li>
                    <li><a href="/Blogly/Backend/category-post.html">Sports</a></li>
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
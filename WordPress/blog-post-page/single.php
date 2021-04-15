<?php get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <!--Main Navigation-->
        <header>


            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
                <div class="container">
                    <!-- Navbar brand -->
                    <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                        <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy" style="margin-top: -3px;" />
                    </a>
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarExample01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" aria-current="page" href="#intro">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">Learn Bootstrap 5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav d-flex flex-row">
                            <!-- Icons -->
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->

            <!-- Jumbotron -->
            <div id="intro" class="p-5 text-center bg-light">
                <h1 class="mb-0 h4"><?php the_title() ?></h1>
            </div>
            <!-- Jumbotron -->
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="mt-4 mb-5">
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-8 mb-4">
                        <!--Section: Post data-mdb-->
                        <section class="border-bottom mb-4">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid shadow-2-strong rounded mb-4')); ?>

                            <div class="row align-items-center mb-4">
                                <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded shadow-1-strong me-2" height="35" alt="" loading="lazy" />
                                    <span> Published <u><?php echo get_the_date(); ?></u> by</span>
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>" class="text-dark"><?php the_author(); ?></a>
                                </div>

                                <div class="col-lg-6 text-center text-lg-end">
                                    <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                                        <i class="fab fa-linkedin"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary px-3 me-1">
                                        <i class="fas fa-comments"></i>
                                    </button>
                                </div>
                            </div>
                        </section>
                        <!--Section: Post data-mdb-->

                        <!--Section: Text-->
                        <section>
                            <?php the_content(); ?>
                        </section>
                        <!--Section: Text-->

                        <!--Section: Share buttons-->
                        <section class="text-center border-top border-bottom py-4 mb-4">
                            <p><strong>Share with your friends:</strong></p>

                            <button type="button" class="btn btn-primary me-1" style="background-color: #3b5998;">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary me-1" style="background-color: #55acee;">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary me-1" style="background-color: #0082ca;">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            <button type="button" class="btn btn-primary me-1">
                                <i class="fas fa-comments me-2"></i>Add comment
                            </button>
                        </section>
                        <!--Section: Share buttons-->

                        <!--Section: Author-->
                        <section class="border-bottom mb-4 pb-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg" class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-9">
                                    <p class="mb-2"><strong>Anna Maria Doe</strong></p>
                                    <a href="" class="text-dark"><i class="fab fa-facebook-f me-1"></i></a>
                                    <a href="" class="text-dark"><i class="fab fa-twitter me-1"></i></a>
                                    <a href="" class="text-dark"><i class="fab fa-linkedin me-1"></i></a>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                        inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                        Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                    </p>
                                </div>
                            </div>
                        </section>
                        <!--Section: Author-->

                        <!--Section: Comments-->
                        <section class="border-bottom mb-3">
                            <p class="text-center"><strong>Comments: 3</strong></p>

                            <!-- Comment -->
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(24).jpg" class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-10">
                                    <p class="mb-2"><strong>Marta Dolores</strong></p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                        inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                        Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                    </p>
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(25).jpg" class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-10">
                                    <p class="mb-2"><strong>Valeria Groove</strong></p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                        inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                        Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                    </p>
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="row mb-4">
                                <div class="col-2">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="img-fluid shadow-1-strong rounded" alt="" />
                                </div>

                                <div class="col-10">
                                    <p class="mb-2"><strong>Antonia Velez</strong></p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est ab iure
                                        inventore dolorum consectetur? Molestiae aperiam atque quasi consequatur aut?
                                        Repellendus alias dolor ad nam, soluta distinctio quis accusantium!
                                    </p>
                                </div>
                            </div>
                        </section>
                        <!--Section: Comments-->

                        <!--Section: Reply-->
                        <section>
                            <p class="text-center"><strong>Leave a reply</strong></p>

                            <form>
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form4Example1" class="form-control" />
                                    <label class="form-label" for="form4Example1">Name</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form4Example2" class="form-control" />
                                    <label class="form-label" for="form4Example2">Email address</label>
                                </div>

                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                    <label class="form-label" for="form4Example3">Text</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                                    <label class="form-check-label" for="form4Example4">
                                        Send me a copy of this comment
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Publish
                                </button>
                            </form>
                        </section>
                        <!--Section: Reply-->
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">
                        <!--Section: Sidebar-->
                        <section class="sticky-top" style="top: 80px;">
                            <!--Section: Ad-->
                            <section class="text-center border-bottom pb-4 mb-4">
                                <div class="bg-image hover-overlay ripple mb-4">
                                    <img src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp" class="img-fluid" />
                                    <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                                        <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                                    </a>
                                </div>
                                <h5>Material Design for Bootstrap 5</h5>

                                <p>
                                    500+ components, free templates, 1-min installation, extensive tutorial, huge
                                    community. MIT license - free for personal & commercial use
                                </p>
                                <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
                            </section>
                            <!--Section: Ad-->

                            <!--Section: Video-->
                            <section class="text-center">
                                <h5 class="mb-4">Learn the newest Bootstrap 5</h5>

                                <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                                    <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/c9B4TPnak1A" allowfullscreen></iframe>
                                </div>
                            </section>
                            <!--Section: Video-->
                        </section>
                        <!--Section: Sidebar-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
        </main>
        <!--Main layout-->

        <!--Footer-->
        <footer class="bg-light text-lg-start">
            <div class="py-4 text-center">
                <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                    Learn Bootstrap 5
                </a>
                <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank">
                    Download MDB UI KIT
                </a>
            </div>

            <hr class="m-0" />

            <div class="text-center py-4 align-items-center">
                <p>Follow MDB on social media</p>
                <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!--Footer-->
<?php
    } // end while
} // end if
get_footer();
?>
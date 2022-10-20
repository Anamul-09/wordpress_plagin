<?php get_template_part( 'template-parts/header/header', 'abc' );?>

    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="<?php echo get_template_directory_uri()?>/assets/img/banner/page-banner-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Blog</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Blog</span>
                                         </li>
                                      </ul>
                                   </nav> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- news-detalis-area-start -->
        <div class="blog-area mt-120 mb-75">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                    <div class="row">
                        

                        <?php get_template_part( 'template-parts/content/content','content_site' );?>

                        
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center pt-30 pb-30">
                                <nav>
                                   <ul>
                                      <li>
                                         <a href="blog.html" class="active">1</a>
                                      </li>
                                      <li>
                                         <a href="blog.html">2</a>
                                      </li>
                                      <li>
                                         <a href="blog.html">3</a>
                                      </li>
                                     <li>
                                        <a href="blog.html">5</a>
                                     </li>
                                     <li>
                                        <a href="blog.html">6</a>
                                     </li>
                                      <li>
                                         <a href="shop.html">
                                            <i class="fal fa-angle-double-right"></i>
                                         </a>
                                      </li>
                                   </ul>
                                 </nav>
                             </div>
                        </div>
                    </div>
                  </div>
                  <?php get_template_part( 'template-parts/sidebar/sidebar', 'right_sidebar' );?>
               </div>
            </div>
         </div>
         <!-- news-detalis-area-end  -->
         
        <!-- cta-area-start -->
        <?php get_template_part( 'template-parts/footer/social_footer', 'social_site' );?>
        <!-- cta-area-end -->

    </main>

    <!-- footer-start -->
    <?php get_template_part( 'template-parts/footer/footer', 'footer_site' );?>
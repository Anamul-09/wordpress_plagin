


<div class="col-xl-8 col-lg-8">
                    <div class="news-detalis-content mb-50">
                        <ul class="blog-meta mb-20">
                           <li><a href="blog-details.html"><i class="fal fa-eye"></i>100 Views</a></li>
                           <li><a href="blog-details.html"><i class="fal fa-comments"></i> 30 Comments</a></li>
                           <li><a href="blog-details.html"><i class="fal fa-calendar-alt"></i> 24th March 2021</a></li>
                        </ul>
                       

  <?php
  if(have_posts()):
    while(have_posts()):the_post();
  
  ?> 
   <div class="col-xl-12">
   <div class="single-smblog mb-30">
    <div class="smblog-thum">
        <div class="blog-image w-img">
            <a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
        </div>
        <div class="blog-tag blog-tag-2">
            <a href="blog.html"><?php the_category()?></a>
        </div>
    </div>
    <div class="smblog-content smblog-content-3">
        <h6><a href="<?php the_permalink()?>"><?php the_title()?></a></h6>
        <span class="author mb-10">posted by <a href="#"><?php the_author()?></a></span>
        <?php the_content()?>
        <div class="smblog-foot pt-15">
            <div class="post-readmore">
                <a href="<?php the_permalink()?>"> Read More <span class="icon"></span></a>
            </div>
            <div class="post-date">
                <a href="#"><?php the_time('F j, Y')?></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php 
endwhile;
endif;
?>

                       
      <div class="post-comments mt-60">
         <h6 class="post-comment-title mb-40">03 Comments</h6>
         <div class="latest-comments">
               <ul>
                  <li>
                     <div class="comments-box">
                           <div class="comments-avatar">
                              <img src="assets/img/blog/p-author-1.jpg" alt="">
                           </div>
                           <div class="comments-text">
                              <div class="avatar">
                                 <h6 class="avatar-name">Rosalina Kelian</h6>
                                 <a href="#" class="comment-reply"><i class="fal fa-share"></i>Reply</a>
                              </div>
                              <span class="post-meta"><i class="fal fa-calendar-alt"></i> October 26, 2020</span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           </div>
                     </div>
                  </li>
                  <li class="children">
                     <div class="comments-box">
                           <div class="comments-avatar">
                              <img src="assets/img/blog/p-author-2.jpg" alt="">
                           </div>
                           <div class="comments-text">
                              <div class="avatar">
                                 <h6 class="avatar-name">Iqbal Hossain</h6>
                                 <a href="#" class="comment-reply"><i class="fal fa-share"></i>Reply</a>
                              </div>
                              <span class="post-meta"><i class="fal fa-calendar-alt"></i> October 26, 2020</span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p>
                           </div>
                     </div>
                  </li>
                  <li>
                     <div class="comments-box">
                           <div class="comments-avatar">
                              <img src="assets/img/blog/p-author-3.jpg" alt="">
                           </div>
                           <div class="comments-text">
                              <div class="avatar">
                                 <h6 class="avatar-name">Arista Williamson</h6>
                                 <a href="#" class="comment-reply"><i class="fal fa-share"></i>Reply</a>
                              </div>
                              <span class="post-meta"><i class="fal fa-calendar-alt"></i> October 26, 2020</span>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo re magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           </div>
                     </div>
                  </li>
               </ul>
         </div>
      </div>
      <div class="post-comment-form mt-20">
         <h4 class="post-comment-form-title mb-40">Post Comment</h4>
         <form action="#">
               <div class="input-field">
                  <i class="fal fa-pencil-alt"></i>
                  <textarea name="comment" id="comment" placeholder="Type your comments...."></textarea>
               </div>
               <div class="input-field">
                  <i class="fal fa-user"></i>
                  <input type="text" placeholder="Type your name....">
               </div>
               <div class="input-field">
                  <i class="fal fa-envelope"></i>
                  <input type="text" placeholder="Type your email....">
               </div>
               <div class="input-field">
                  <i class="fal fa-globe"></i>
                  <input type="text" placeholder="Type your website....">
               </div>
               <button class="post-comment shutter-btn"><i class="fal fa-comments"></i>Post
                  Comment</button>
         </form>
      </div>
   </div>         
</div>
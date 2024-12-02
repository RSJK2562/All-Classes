@extends('web.layouts.main')
@section('main-container')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-5">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Blog-Details</h2>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Blog-Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="assets/img/blog-details/blog-1.jpg" alt="image">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <span>Posted On:</span>
                                        <a href="#">September 31, 2024</a>
                                    </li>
                                    <li>
                                        <span>Posted By:</span>
                                        <a href="#">John Anderson</a>
                                    </li>
                                </ul>
                            </div>

                            <h3>Weather Evident Smiling Bed Against</h3>
                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam
                                eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur
                                adipisicing.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <blockquote class="wp-block-quote">
                                <p>It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout.</p>
                                <cite>Tom Cruise</cite>
                            </blockquote>
                            <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam
                                eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur
                                adipisicing.</p>
                            <ul class="wp-block-gallery columns-3">
                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog-details/4.jpg" alt="image">
                                    </figure>
                                </li>

                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog-details/2.jpg" alt="image">
                                    </figure>
                                </li>

                                <li class="blocks-gallery-item">
                                    <figure>
                                        <img src="assets/img/blog-details/3.jpg" alt="image">
                                    </figure>
                                </li>
                            </ul>
                            <h3>Four major elements that we offer:</h3>
                            <ul class="features-list">
                                <li>
                                    <i class="flaticon-tick"></i>
                                    Scientific Skills For getting a better result
                                </li>
                                <li>
                                    <i class="flaticon-tick"></i>
                                    Communication Skills to getting in touch
                                </li>
                                <li>
                                    <i class="flaticon-tick"></i>
                                    A Career Overview opportunity Available
                                </li>
                                <li>
                                    <i class="flaticon-tick"></i>
                                    A good Work Environment For work
                                </li>
                            </ul>
                            <h3>Setting the mood with incense</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                voluptatem.</p>
                            <h3>The Rise Of Marketing And Why You Need It</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span>
                                    <i class="bx bx-bookmark"></i>
                                </span>
                                <a href="#">Fashion</a>,
                                <a href="#">Travel</a>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <a href="#">
                                        <i class="flaticon-left"></i>
                                        Prev Post
                                    </a>
                                </div>
                                <div class="nav-next">
                                    <a href="#">
                                        Next Post
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <h3 class="comments-title">4 Comments:</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/client/1.jpg" class="avatar" alt="image">
                                                <b class="fn">John Jones</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2024 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>

                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/client/2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                        <span class="says">says:</span>
                                                    </div>
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2024 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since
                                                        the 1500s, when an unknown printer took a galley of type and
                                                        scrambled it to make a type specimen.</p>
                                                </div>
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>

                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="assets/img/client/3.jpg" class="avatar"
                                                                alt="image">
                                                            <b class="fn">Sarah Taylor</b>
                                                            <span class="says">says:</span>
                                                        </div>
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2024 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever
                                                            since the 1500s, when an unknown printer took a galley of type
                                                            and scrambled it to make a type specimen.</p>
                                                    </div>
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </ol>
                                </li>

                                <li class="comment">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/client/4.jpg" class="avatar" alt="image">
                                                <b class="fn">James Anderson</b>
                                                <span class="says">says:</span>
                                            </div>
                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2024 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>
                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a
                                                type specimen.</p>
                                        </div>
                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>
                                </li>

                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                            id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit"
                                            value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_search">
                            <form class="search-form search-top">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label class="">
                                <button type="submit">
                                    <i class="flaticon-search"></i>
                                </button>
                            </form>
                        </section>
                        <section class="widget widget_fria_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <time class="2024-06-30">June 10, 2024</time>
                                    <h4 class="title usmall">
                                        <a href="#">Making Peace With The Feast Or Famine Of Freelancing</a>
                                    </h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <time class="2024-06-30">June 21, 2024</time>
                                    <h4 class="title usmall">
                                        <a href="#">Be healthy, Enjoy life with Trifles organic</a>
                                    </h4>
                                </div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <time class="2024-06-30">June 30, 2024</time>
                                    <h4 class="title usmall">
                                        <a href="#">Buy organic food online and be healthy</a>
                                    </h4>
                                </div>
                            </article>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Technology</a>
                                </li>
                                <li>
                                    <a href="#">Tips</a>
                                </li>
                                <li>
                                    <a href="#">Uncategorized</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_recent_comments">
                            <h3 class="widget-title">Recent Comments</h3>
                            <ul>
                                <li>
                                    <span class="comment-author-link">
                                        <a href="#">A WordPress Commenter</a>
                                    </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                    <span class="comment-author-link">
                                        <a href="#">Fria</a>
                                    </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                    <span class="comment-author-link">
                                        <a href="#">Wordpress</a>
                                    </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                    <span class="comment-author-link">
                                        <a href="#">A WordPress Commenter</a>
                                    </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                                <li>
                                    <span class="comment-author-link">
                                        <a href="#">Fria</a>
                                    </span>
                                    on
                                    <a href="#">Hello world!</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li>
                                    <a href="#">How to Become a Successful Entry Level UX Designer</a>
                                </li>
                                <li>
                                    <a href="#">How to start your business as an entrepreneur</a>
                                </li>
                                <li>
                                    <a href="#">How to be a successful entrepreneur</a>
                                </li>
                                <li>
                                    <a href="#">10 Building Mobile Apps With Ionic And React</a>
                                </li>
                                <li>
                                    <a href="#">Protect your workplace from cyber attacks</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_meta">
                            <h3 class="widget-title">Meta</h3>
                            <ul>
                                <li>
                                    <a href="#">Log in</a>
                                </li>
                                <li>
                                    <a href="#">Entries
                                        <abbr title="Really Simple Syndication">RSS</abbr>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Comments
                                        <abbr title="Really Simple Syndication">RSS</abbr>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">WordPress.org</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_archive">
                            <h3 class="widget-title">Archives</h3>
                            <ul>
                                <li>
                                    <a href="#">May 2024</a>
                                </li>
                                <li>
                                    <a href="#">April 2024</a>
                                </li>
                                <li>
                                    <a href="#">June 2024</a>
                                </li>
                            </ul>
                        </section>

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud section-bottom">
                                <a href="#">
                                    IT
                                    <span class="tag-link-count"> (3)</span>
                                </a>
                                <a href="#">
                                    Fria
                                    <span class="tag-link-count"> (3)</span>
                                </a>
                                <a href="#">
                                    Games
                                    <span class="tag-link-count"> (2)</span>
                                </a>
                                <a href="#">
                                    Fashion
                                    <span class="tag-link-count"> (2)</span>
                                </a>
                                <a href="#">
                                    Travel
                                    <span class="tag-link-count"> (1)</span>
                                </a>
                                <a href="#">
                                    Smart
                                    <span class="tag-link-count"> (1)</span>
                                </a>
                                <a href="#">
                                    Marketing
                                    <span class="tag-link-count"> (1)</span>
                                </a>
                                <a href="#">
                                    Tips
                                    <span class="tag-link-count"> (2)</span>
                                </a>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection

@extends('main')
@section('brand')

<div class="site-branding">
    <div class="wrapper grid-wrapper">
        <div class="site-title-description">
            <p class="site-title"><a href="https://foxland.fi/demo/some/" rel="home">teddybeer</a></p>
            <p class="site-description">Store, backup and share your CSGO config files. </p>
        </div><!-- .site-title-description -->
        <nav class="menu-social social-navigation menu" role="navigation" aria-label="Social Menu">
            <div class="social-menu-wrapper">
                <ul id="menu-social-items" class="menu-social-items">
                    <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4">
                        <a href="https://github.com/samikeijonen/some/">
                            <span class="screen-reader-text">Github</span>
                            <svg class="icon icon-github" aria-hidden="true" role="img">
                                <use href="assets/images/svg-icons.svg#icon-github" xlink:href="assets/images/svg-icons.svg#icon-github"></use>
                            </svg>
                        </a>
                    </li>
                    <li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5">
                        <a href="https://twitter.com/samikeijonen/">
                            <span class="screen-reader-text">Pinterest</span>
                            <svg class="icon icon-pinterest-alt" aria-hidden="true" role="img">
                                <use href="assets/images/svg-icons.svg#icon-pinterest-alt" xlink:href="assets/images/svg-icons.svg#icon-pinterest-alt"></use>
                            </svg>
                        </a>
                    </li>
                    <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
                        <a href="https://profiles.wordpress.org/samikeijonen/">
                            <span class="screen-reader-text">E-Mail</span>
                            <svg class="icon icon-mail" aria-hidden="true" role="img">
                                <use href="assets/images/svg-icons.svg#icon-mail" xlink:href="assets/images/svg-icons.svg#icon-mail"></use>
                            </svg>
                        </a>
                    </li>
                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
                        <a href="https://www.instagram.com/samikeijonen/">
                            <span class="screen-reader-text">Instagram</span>
                            <svg class="icon icon-instagram" aria-hidden="true" role="img">
                                <use href="assets/images/svg-icons.svg#icon-instagram" xlink:href="assets/images/svg-icons.svg#icon-instagram"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav><!-- .menu-social -->
    </div><!-- .wrapper -->
</div><!-- .site-branding -->
@endsection

@section('content')

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

                        <header>
                    <h1 class="page-title screen-reader-text">Blog</h1>
                </header>

            <div class="grid-wrapper">

</div><!-- .grid-wrapper -->
        </main><!-- #main -->

    <button id="cfg_first_element" class="accordion">config.cfg</button>
<div class="panel">
<br>
<div class="widget widget_tag_cloud">
<a href="https://foxland.fi/demo/some/tag/food/" class="tag-link-8 tag-link-position-2" title="2 topics" style="font-size: 0.875em;">Download</a>
<a href="https://foxland.fi/demo/some/tag/foxland/" class="tag-link-9 tag-link-position-3" title="2 topics" style="font-size: 0.875em;">Copy to Clipboard</a>
</div>
  <pre>.post-title {
    margin: 0 0 5px;
    font-weight: bold;
    font-size: 38px;
    line-height: 1.2;
    and here's a line of some really, really, really, really long text, just to see how the PRE tag handles it and to find out how it overflows;
}</pre>
</div>

<button class="accordion">autoexec.cfg</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion">mouse.cfg</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

    </div><!-- #primary -->


<div class="cfg_spacer"></div>

<div id="comments" class="comments-area">

        <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo/some/styling/#respond" style="display:none;">Cancel reply</a></small></h3>           <form action="https://foxland.fi/demo/some/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="3e814-comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea><textarea name="comment" style="display:none" rows="1" cols="1"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="113" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>            </form>
            </div><!-- #respond -->

</div> <!--comments-->

@endsection

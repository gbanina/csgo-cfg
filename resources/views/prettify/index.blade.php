@extends('main')

@section('brand')

<div class="site-branding">
    <div class="wrapper grid-wrapper">
        <div class="cfg-brand-title">
            <h3>OR</h3>
        </div>

        <div class="site-title-description">
                <div id="comments" class="comments-area">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Copy/Paste your config</h3>
                            <form action="https://foxland.fi/demo/some/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                <textarea id="comment" name="3e814-comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>
                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Generate">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                            </form>
                        </div><!-- #respond -->

                </div> <!--comments-->

        </div><!-- .site-title-description -->
        <nav class="menu-social social-navigation menu" role="navigation" aria-label="Social Menu">
            <div class="social-menu-wrapper">
                <div id="comments" class="comments-area">

                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Drag and drop files</h3>
                                    <form action="/target" class="dropzone" id="my-dropzone">
                                    </form>
                                    <button id="submit-all">Submit all files</button>
                        </div><!-- #respond -->

                </div> <!--comments-->
            </div>
        </nav><!-- .menu-social -->
    </div><!-- .wrapper -->
</div><!-- .site-branding -->
@endsection

@section('content')

<script src="assets/dropzone/dropzone.js"></script>


        <script>
            Dropzone.options.myDropzone = {

              // Prevents Dropzone from uploading dropped files immediately
              autoProcessQueue: false,

              init: function() {
                var submitButton = document.querySelector("#submit-all")
                    myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                  myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when
                // files are dropped here:
                this.on("addedfile", function() {
                  // Show submit button here and/or inform user to click it.
                });

              }
            };
        </script>
@endsection

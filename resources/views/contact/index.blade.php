@extends('main')

@section('content')



<div class="footer-widgets-wrapper">
    <div class="wrapper grid-wrapper">

                    <aside id="footer-area-1" class="footer-area-1 widget-area" role="complementary">
                <section id="mc4wp_form_widget-3" class="widget widget_mc4wp_form_widget"><h2 class="widget-title">Sign up for Newsletter</h2><script type="text/javascript">(function() {
    if (!window.mc4wp) {
        window.mc4wp = {
            listeners: [],
            forms    : {
                on: function (event, callback) {
                    window.mc4wp.listeners.push({
                        event   : event,
                        callback: callback
                    });
                }
            }
        }
    }
})();
</script><!-- MailChimp for WordPress v4.0.11 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-123" method="post" data-id="123" data-name="" ><div class="mc4wp-form-fields"><p>
    <label>Name: </label>
    <input type="text" name="Name" placeholder="Your name" required />
    <label>Email address: </label>
    <input type="email" name="EMAIL" placeholder="Your email address" required />
</p>

<p>
    <input type="submit" value="Sign up" />
</p><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div><input type="hidden" name="_mc4wp_timestamp" value="1485442583" /><input type="hidden" name="_mc4wp_form_id" value="123" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /></div><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></section>
<!--
<section id="search-4" class="widget widget_search"><h2 class="widget-title">Search</h2>
<form role="search" method="get" class="search-form" action="https://foxland.fi/demo/some/">
    <label>
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
    </label>
    <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span><svg class="icon icon-search" aria-hidden="true" role="img"> <use href="assets/images/svg-icons.svg#icon-search" xlink:href="assets/images/svg-icons.svg#icon-search"></use> </svg></button>
</form>
</section>
-->
</aside><!-- .widget-area -->



    </div><!-- .wrapper -->
</div><!-- .footer-widgets-wrapper -->

@endsection

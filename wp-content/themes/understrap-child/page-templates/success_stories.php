<?php
/**
 * Template Name: Success Stories
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style type="text/css">
.overlay {background: linear-gradient(to right, rgba(41, 179, 184, 0.93) 1%,rgba(41, 179, 184, 0.93) 1%,rgba(32,124,206,0.93) 100%);
           padding: 170px 0 90px;}
.mar3 { margin-bottom: 5%;}
.martop:first-child {
    margin-top: 4rem;
}
.t3color h3 strong { background: -webkit-linear-gradient(#26abb6, #1f80c7); -webkit-background-clip: text;}
a, a:hover, a:active, a:focus { text-decoration: none;}
	
.button_blue {
    box-shadow: 0 0 16px 0 rgba(0,173,249,0.76);
    font-size: 16px;
    padding: 15px 35px;
    margin-bottom: 10px;
    background-color: #00adf9;
    background-image: inherit;
}
.button {
    border-radius: 35px;
    border: none;
    color: #fff;
    text-transform: uppercase;
    font-family: inherit;
    display: inline-block;
}
.cont_area { padding: 15px;}
.postlist {    height: auto; padding: 0;
               box-shadow: 0px 5px 16px 0px rgba(0, 0, 0, 0.36);
               background: #fff;
               border-radius: 10px;
               margin: 0 0 20px 0;}
.blog_cat { position: absolute; top: 0; left: 22px; z-index: 99; }
.blog_cat a { font-size: 14px; text-transform: uppercase; height: 29px; line-height: 29px; background: #e98332; margin-right: 10px; padding: 0 20px; display: inline-block; color: #fff; font-weight: 700; margin-bottom: 5px;  transition: all 0.3s ease-out 0s; outline: none; text-decoration: none; }
.bord_line { border-radius: 10px 10px 0 0; margin: 0 0 25px; background: #000; display: block; position: relative; transition: all 0.3s ease-out 0s; }
.bord_line:before {
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: scale(0, 1);
	position: absolute;
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    content: '';
    opacity: 0;
    transition: all 0.3s ease-out 0s;
}
.bord_line:after {
    border-right: 1px solid #fff;
    border-left: 1px solid #fff;
    transform: scale(1, 0);
	position: absolute;
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    content: '';
    opacity: 0;
    transition: all 0.3s ease-out 0s;
}
.postlist img { border-radius: 10px 10px 0 0; width: 100%; margin: 0; transition: all 0.3s ease-out 0s; border: 0; vertical-align: middle;
    max-width: 100%; height: auto; }
.posttitle { margin: 0; margin-bottom: 10px; color: #222222; font-family: "Lato", sans-serif; font-size: 1.125em; font-weight: bold;
	font-style: normal; line-height: normal; text-rendering: optimizeSpeed; padding-bottom: 15px; }
.pname { padding-bottom: 25px; }
.posttitle a {color: #7a9198;}
.rmore {font-size: 14px; color: #e35f06; margin: 0.5em 0; display: inline-block;}
	.sidebar { margin-bottom: 30px; }
	h3 {     margin: 0;
    margin-bottom: 40px;
    color: #111111;
    font-family: "Lato", sans-serif;
    font-size: 2.250em;
    font-weight: 700;
    font-style: normal;
    line-height: 1.4;
    text-rendering: optimizeSpeed; }
.widg_title { font-size: 24px;
            margin-bottom: 20px; }
.sidebar ul li {
    list-style: none;
    padding: 0 0 0 0;
    margin: 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.14);
}
.sidebar ul li a:before {
    position: absolute;
    left: 0;
    width: 2px;
    height: 10px;
    background: #e98332;
    content: '';
    top: 15px;
}
.sidebar ul li a {
    font-size: 16px;
    color: #3b3b3b;
    position: relative;
    padding: 10px 0;
    padding-left: 20px;
	display: block; }
.sidebar ul li a:hover {
    color: #e98332;
}
ul, ol {
    margin: 0 0 0 0;
    padding: 0;
}
.pad { padding-bottom: 50px;}
.form_hd h3 {     max-width: 1080px !important;
    padding: 0px 0px;
    color: #ffffff;
    font-size: 1.75rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    margin-bottom: 15px !important;}
.gform_wrapper {
    margin: 16px 0;
    max-width: 100%;
}
.gform_wrapper ul.gform_fields {
    margin: 0!important;
    list-style-type: none;
    display: block;
}
body .gform_wrapper ul li.gfield {
    margin-top: 16px;
    padding-top: 0;
}

.gform_wrapper ul li.gfield {
    clear: both;
}
.gform_wrapper form li, .gform_wrapper li {
    margin-left: 0!important;
    list-style: none!important;
    overflow: visible;
}
.gfield_checkbox {padding-left: 0px;}

.gform_wrapper input.large, .gform_wrapper input.medium, .gform_wrapper input.small, .gform_wrapper select.large, .gform_wrapper select.medium, .gform_wrapper select.small {
    width: 100%;
}
.ctw input, .ctw textarea {
    background: transparent;
    border: 0px;
    border-bottom: 1px solid #ffffff;
    padding: 20px 20px !important;
    color: #ffffff !important;
    font-size: 18px !important;
}
.ctw textarea {
    height: 70px !important;
}
.gform_wrapper textarea.medium {
    width: 100%;
}
.gform_wrapper textarea {
    line-height: 1.5;
    resize: none;
}
.gform_wrapper .gform_footer {
    padding: 16px 0 10px;
    margin: 16px 0 0;
    clear: both;
    width: 100%;
}
.gform_wrapper ul li:after, .gform_wrapper ul li:before, .gform_wrapper ul.gform_fields {
	padding: 0;
	}
</style>
<!-----First Section Starts------->
<!-- Breadcrumb Section Start -->

<section class="breadcrumb_sec" style="background: url('http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-img3.jpg') no-repeat; background-size: cover;">
 <div class="overlay">
   <div class="container">
     <div class="row">
        <div class="col-md-10 offset-md-1 text-center">
			<h1 class="text-white">
			  Lorem ipsum dolor sit amet, consectetur adipiscing elit	
			</h1>
			<p class="text-white">
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			</p>
		 </div>  
     </div> 
   </div>	   
   </div> 
</section>
<!-- Breadcrumb Section End -->
<!-- First section start --->
<section class="experience_wrap t3color pb-2">
   <div class="container">
     <div class="row">
        <div class="col-lg-6 eo_1"><h3>With More than <strong>3</strong> Years of Experience</h3>
<h2>We take your design to next level So your customers can achieve more with it</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>  
        <div class="col-lg-6 eo_1 d-md-flex"><a><img class="w-100 mb-4" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/experience-img-min.jpg" alt=""></a></div> 
     </div>  
   </div> 
</section>
<!-- First section end
<!-- Second Section Start -->
<section class="experience_wrap t3color pb-2">
   <div class="container">
     <div class="row">
		 <div class="col-lg-6 eo_1 d-md-flex"><img class="w-100 mb-4" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/experience-img-min.jpg" alt=""></div>  

        <div class="col-lg-6 eo_1"><h3>With More than <strong>3</strong> Years of Experience</h3>
<h2>We take your design to next level So your customers can achieve more with it</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>  
     </div>  
   </div> 
</section>

<!-- Second Section End -->


<!-- Third Section Start--->
<section class="mar3">
    <div class="container">
      <div class="row">			
        <div class="col-md-4 col-sm-4">
          <div class="martop text-center">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing
            </h4>
            <a href="" class="button button_blue">About Us</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="martop text-center">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing</h4>
            <a href="" class="button button_blue">Our Work</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="martop text-center">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing</h4>
            <a href="" class="button button_blue">Achievement</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Third Section End --->

<!-- Fourth Section start-->
<div class="blog-page archive-sec1 pad">
<div class="main-container container">
		<div class="row">
			<div class="col-md-9 left-bar">
				<div class="row">
								<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="" class>Lorem ipsum dolor</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; padding: 15px;">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
			</div>
							<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="">Lorem ipsum</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; ">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
			</div>
							<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="">Lorem ipsum</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; ">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
			</div>
							<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="">Lorem ipsum</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; ">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
			</div>
							<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="">Lorem ipsum</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; ">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
			</div>
							<div class="col-sm-6">
				<div class="postlist" style="">
				
				<div class="pic-outer">
					<div class="blog_cat">

						<a href="">Lorem ipsum</a>					</div>
					<a href="" title="" class="bord_line"><img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-2.jpg" alt="img"></a>
				</div>
				<div class="cont_area" style="visibility: visible; ">
									<h4 class="posttitle">
						<a href="" title="">Lorem ipsum dolor sit amet</a>
					</h4>
					<span class="pname">
						<span></span>
						
					</span>   
										  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
					<a class="rmore" href="">Read more</a>  
				</div>
				</div>
					</div>   
                  		</div>
		</div>
		<div class="col-md-3">
			

<div class=" sidebar"><div id="lct-widget-stories_categories-container" class="list-custom-taxonomy-widget"><h3 class="widg_title"> Categories</h3><ul id="lct-widget-stories_categories">	<li class="cat-item cat-item-236"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-232"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-233"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-238"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-443"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-235"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-231"><a href="">Lorem ipsum</a>
</li>
	<li class="cat-item cat-item-234"><a href="">Lorem ipsum</a>
</li>
</ul></div></div>
			
		</div>
	</div>
</div>	
</div>
<!-- Fourth Section end--->

<!--- Fifth Section Start--->
<section class="form_wrap ctw" style="background: url('http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/4.jpg') no-repeat; background-size: cover; background-position: center center;">
  <div class="fbg_overlay">     
   <div class="container">
     <div class="row">
        <div class="col-xl-12">
           <div class="form_hd"><h3>Now Is The Time To Craft Brilliance Together</h3>
<p>So let`s get in touch and turn your app idea into a brilliant mobile app solution. Go ahead &amp; fill the form below</p>
</div>  
           
                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1"><a id="gf_1" class="gform_anchor"></a><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1" action="/schakraborty/softprodigy/1/#gf_1">
                        <div class="gform_body"><ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below"><li id="field_1_1" class="gfield full_name field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_1"></label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_1_1" type="text" value="" class="large" tabindex="49" placeholder="Full Name" aria-invalid="false"></div></li><li id="field_1_2" class="gfield input_email field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_2"></label><div class="ginput_container ginput_container_email">
                            <input name="input_2" id="input_1_2" type="text" value="" class="large" tabindex="50" placeholder="Email" aria-invalid="false">
                        </div></li><li id="field_1_6" class="gfield input_phone field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_6"></label><div class="ginput_container ginput_container_text"><input name="input_6" id="input_1_6" type="text" value="" class="large" tabindex="51" placeholder="Phone" aria-invalid="false"></div></li><li id="field_1_5" class="gfield msg field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_5"></label><div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_1_5" class="textarea medium" tabindex="52" placeholder="Message" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_1_7" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label"></label><div class="ginput_container ginput_container_checkbox"><ul class="gfield_checkbox" id="input_1_7"><li class="gchoice_1_7_1">
								<input name="input_7.1" type="checkbox" value="I HAVE READ THE DISCLAIMER." id="choice_1_7_1" tabindex="53">
								<label for="choice_1_7_1" id="label_1_7_1">I HAVE READ THE DISCLAIMER.</label>
							</li></ul></div></li>
                            </ul></div>
        <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit Now" tabindex="54" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=1&amp;title=&amp;description=&amp;tabindex=49">
            <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
            <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
            
            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
            <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjI5MzY5YWMwMWFlNjNmN2M2MTZiNWU2YmQ3Mzg4NDg2Il0=">
            <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
            <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
            <input type="hidden" name="gform_field_values" value="">
            
        </div>
                        </form>
                        </div>
                <iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_1" id="gform_ajax_frame_1">This iframe contains the logic required to handle Ajax powered Gravity Forms.</iframe>
                <script type="text/javascript">jQuery(document).ready(function($){gformInitSpinner( 1, 'http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery('#gform_ajax_frame_1').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_1').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_1').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner( 1, 'http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting_1'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_1').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting_1'] = false;}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"http:\/\/wow.pebbled.io\/schakraborty\/softprodigy\/1\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"http:\/\/wow.pebbled.io\/schakraborty\/softprodigy\/1\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); </script> 
        </div> 
     </div>  
   </div> 
  </div>
</section>
<!--fifth Section End---->

<?php get_footer(); ?>

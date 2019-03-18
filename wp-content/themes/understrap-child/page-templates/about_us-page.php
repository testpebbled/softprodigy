<?php
/**
 * Template Name: About us Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<!-- Breadcrumb Section Start -->
    <?php  
        $form_bg =  get_field( "form_bg" , $pId);
        $form_title =  get_field( "form_title" , $pId);
     ?>
<section class="breadcrumb_sec" style="background: url('http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/counter-bg-img.jpg') no-repeat; background-size: cover;">
 <div class="breadcrumb_overlay">
   <div class="container">
     <div class="row">
        <div class="col-md-10 offset-md-1 text-center">
			<h1 class="text-white">
			  SoftProdigy – Offering Technological Solutions to Enterprise, Startups, and Small Businesses	
			</h1>
			<p class="text-white">
				With a significantly less turnaround time for any of our services we help reduce time-to-market for you to stay competitive in this ever-evolving marketplace. From business consultation to launching and branding your business online, we take care of everything you need to run your business online. Our services assure increased revenue and offer an amazing end user experience.
			</p>
		 </div>  
     </div> 
   </div>	   
   </div> 
</section>
<!-- Breadcrumb Section End -->

<!-- Big Brand Section Start -->
<section class="ab_bigbrand text-center">
   <div class="container">
     <div class="row">
        <div class="col-md-12">
		  <p>Over <span style="color: #183783; font-size: 25px; font-weight: bold; display: inline-block; vertical-align: middle;">50+</span> Big Brands Love Working With Us</p>
		 </div> 
     </div>
   </div> 
	 <div class="row">
		 <div class="col-md-12">
			<div class="slider responsive">
			  <div><img class="alignnone size-full wp-image-357" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-2.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-358" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-3.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-359" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-4.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-360" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-5.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-361" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-6.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-362" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-7.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-356" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-1.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-363" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-8.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-364" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-9.png" alt="" width="292" height="58"></div>
			  <div><img class="alignnone size-full wp-image-365" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bbl-10.png" alt="" width="292" height="58"></div>
			</div> 
		 </div> 
	 </div>	
</section>
<!-- Big Brand Section End -->
<!-- experience Section Start -->
<section class="exp_wrap">  
   <div class="container-fluid">
     <div class="row">
        <div class="col-xl-5 col-lg-6 px-0">
		  <div class="exp_img">
			 <img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/bg2.jpg" alt="" />
		  </div>	  
        </div> 
		<div class="col-lg-6 pl-lg-5">
		 <div class="exp_txt">
		  <div class="ext_in"> 
			  <h3>With More than <strong>3</strong> Years of Experience</h3>
			  <h4 class="bold">We take your design to next level So your customers can achieve more with it</h4>	
			  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a
				  galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
				  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
				  versions of Lorem Ipsum.           
			  </p>	
			   <div class="tgc_box"><?php echo do_shortcode('[COUNTER_NUMBER id=184]'); ?> </div>  
		  </div>		
		 </div>		
		</div>
   </div> 	
 </div>
</section>
<!-- experience Section End -->
<section class="partner_wrap">     
    <div class="container">
     <div class="row">
       <div class="col-xl-12">
       	<h2 class="pb-4 text-center text-white">We partner with the world’s technology leaders.</h2>
          <div class="row">
         	<div class="col-lg-6 offset-lg-3"> 
         		<div class="row text-center">
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/partner_logo_1.png" alt=""></div>
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/partner_logo_2.png" alt=""></div>
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/partner_logo_3.png" alt=""></div>
				 <p class="text-white mt-4">Logos above may be trademarks of their respective brands or owners without implying a violation of copyright law.</p>
			  </div>
			 </div> 
		   </div> 
        </div> 
     </div>  
   </div> 
</section>
<!-- Client Saying Section Start -->
<section class="clientsay_wrap">   
   <div class="container">
     <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <h2 class="text-center text-md-left"><?php echo $client_heading; ?></h2>
        </div> 
     </div>  
   </div> 	
	<?php echo do_shortcode( '[rt-testimonial id="335" title="Client Says"]' ) ?>
</section>
<!-- Client Saying Section End -->
<!-- Form Section Start -->
<section class="form_wrap ctw parallex_a" style="background-image: url('<?php echo $form_bg; ?>');">
  <div class="fbg_overlay_ab">     
   <div class="container">
     <div class="row">
        <div class="col-xl-12">
           <div class="form_hd"><?php echo $form_title; ?></div>  
           <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?> 
        </div> 
     </div>  
   </div> 
  </div>
</section>
<!-- Form Section End -->
<style>
.exp_overlay { padding: 60px 0px 60px;
    background: -moz-linear-gradient(left, rgba(22,41,116,0.93) 0%, rgba(22,42,117,0.93) 1%, rgba(32,124,206,0.93) 100%);
    background: -webkit-linear-gradient(left, rgba(22,41,116,0.93) 0%,rgba(22,42,117,0.93) 1%,rgba(32,124,206,0.93) 100%);
    background: linear-gradient(to right, rgba(22,41,116,0.93) 0%,rgba(22,42,117,0.93) 1%,rgba(32,124,206,0.93) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc162974', endColorstr='#cc207cce',GradientType=1 );	
}
.fbg_overlay_ab { padding: 60px 0px 50px;  }
.bold { font-weight: bold; }
.exp_txt { display: flex; height: 100%; align-items: center; }
.exp_txt h3 { font-family: 'Alegreya', serif; }
.exp_txt h3 strong {
    background: -webkit-linear-gradient(#43b2e8, #2072b7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 60px;
    font-family: 'Montserrat', sans-serif !important;
    font-weight: bold;
    font-style: normal;
    display: inline-block;
    vertical-align: middle;
    padding: 0px 5px;
}
</style>
<?php get_footer(); ?>

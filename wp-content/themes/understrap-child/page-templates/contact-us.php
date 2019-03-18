<?php
/**
 * Template Name: Contact Us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<style>
	.bg_usa{background: #0099ce;color: white;}
	.bg_india{background:#1781c3;color:white;}
	.time a{color: #f9e4e4;text-decoration: underline;background-color: transparent;font-weight: 500;}
</style>
<section class="breadcrumb_sec" style="background: url('http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/fbg-img3.jpg') no-repeat; background-size: cover;">
 <div class="breadcrumb_overlay">
   <div class="container">
     <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
			<h1 class="text-white">
			  Contact Us
			</h1>
			<p class="text-white">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</p>
		 </div>  
     </div> 
   </div>	   
   </div> 
</section>
<section class="cpf_wrap">	
    <div class="row mx-0">
		 <div class="col-lg-6 bg-white">
			<div class="gtc_form">
				<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?> 
			</div>
		 </div>	 
		 <div class="col-lg-6 time">	  
			 <div class="row bg_usa">				
			    <div class="col-md-6 px-4 px-md-5 pt-4 pb-2 py-md-5">
			   <h5 class="mb-4">USA</h5>
			   <p class="mb-2">SoftProdigy 600 International Drive</p>
			   <p class="mb-2">Budd Lake, NJ 07828, USA</p>
			   <p class="mb-2">W73F+Q7 Mt Olive Township</p>
			   <p class="mb-2">New Jersey, USA</p>
			   <p class="mb-2">Website: <a href="#">softprodigy.com</a></p>
			   <p class="mb-2">Phone: +1 800-600-3507</p> 
			 </div>
			 <div class="col-md-6 px-4 px-md-5 pt-4 pb-4 py-md-5">
				<div class="oc_box">
				  <h5 class="mb-4">Open and Close Timming</h5>
				  <p class="mb-2"><span>Monday :</span><span>8am–8pm</span></p>
				  <p class="mb-2"><span>Tuesday :</span><span>8am–8pm</span></p>
				  <p class="mb-2"><span>Wednesday :</span><span>8am–8pm</span></p>
				  <p class="mb-2"><span>Thursday :</span><span>8am–8pm</span></p>
				  <p class="mb-2"><span>Friday :</span><span>8am–8pm</span></p>
				  <p class="mb-2"><span>Saturday &amp; Sunday :</span><span class="pl-2">Closed</span></p>
				 </div>
				</div> 
			 </div>
			
			 <div class="row bg_india">
			 <div class="col-md-6 px-4 px-md-5 pt-4 pb-2 py-md-5">
			   <h5 class="mb-4">India</h5>
			   <p class="mb-2">IT C2, 3rd Floor</p>
			   <p class="mb-2">Dibon Building, Sector 67</p>
			   <p class="mb-2">Mohali IT Park, Sector 67</p>
			   <p class="mb-2">Sahibzada Ajit Singh Nagar</p>
			   <p class="mb-2">Punjab 160062</p>
			   <p class="mb-2">Website: <a href="#">softprodigy.com</a></p>
			   <p class="mb-2">Phone: +1 800-600-3507</p> 
			 </div>  
			 <div class="col-md-6 px-4 px-md-5 pt-4 pb-4 py-md-5">
				<div class="oc_box">
				 <h5 class="mb-4">Open and Close Timming</h5>
				  <p class="mb-2"><span>Monday :</span><span>10am–7pm</span></p>
				  <p class="mb-2"><span>Tuesday :</span><span>10am–7pm</span></p>
				  <p class="mb-2"><span>Wednesday :</span><span>10am–7pm</span></p>
				  <p class="mb-2"><span>Thursday :</span><span>10am–7pm</span></p>
				  <p class="mb-2"><span>Friday :</span><span>10am–7pm</span></p>
				  <p class="mb-2"><span>Saturday &amp; Sunday :</span><span class="pl-2">Closed</span></p>
				</div> 
			 </div>   
		   </div>
		 </div>
		</div> 	  
</section>
<section class="container-fluid px-0">
 <div class="row mx-0"> 
   <div class="col-md-6 px-0 text-center">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6031.035802914141!2d-74.726777!3d40.904389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde2d118b91fc2671!2sSoftProdigy!5e0!3m2!1sen!2sin!4v1552647330582" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
	</div>	 
		 
  <div class="col-md-6 px-0">
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6862.648911328534!2d76.72795!3d30.681145999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff5321fcbe3ebb2a!2sSoftProdigy+System+Solutions!5e0!3m2!1sen!2sin!4v1552646369828" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div> 
 </div> 
</section>
<?php get_footer(); ?>

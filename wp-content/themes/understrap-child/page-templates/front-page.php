<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

          <?php
			///values of custom field type
			$pId		=	get_the_ID();
		 
		    $about_spro =  get_field( "about_spro" , $pId);
		 
            $counter_bg_img =  get_field( "counter_bg_img" , $pId);
            $counter_img =  get_field( "counter_img" , $pId);
            
            $form_bg =  get_field( "form_bg" , $pId);
            $form_title =  get_field( "form_title" , $pId);
            
            
            $experience_content =  get_field( "experience_content" , $pId);
            $experience_img =  get_field( "experience_img" , $pId);

			////technology section field's data
			$technologies_content =  get_field( "technologies_content" , $pId);
            $technologies_image =  get_field( "technologies_image" , $pId);
            $tech_bg =  get_field( "tech_bg" , $pId);

			////partner section field's data
			$partner_img_src_1 =  get_field( "partner_image_1" , $pId);
			$partner_img_src_2 =  get_field( "partner_image_2" , $pId);
			$partner_img_src_3 =  get_field( "partner_image_3" , $pId);
			$partner_text =  get_field( "partner_text" , $pId);

			////middle east section field's data
			$me_main_ttl =  get_field( "middle_east_title" , $pId);
			$me_slider_ttl_1 =  get_field( "middle_east_slider_title_1" , $pId);
			$me_slider_ttl_2 =  get_field( "middle_east_slider_title_2" , $pId);
			$me_slider_ttl_3 =  get_field( "middle_east_slider_title_3" , $pId);
			$me_slider_txt_1 =  get_field( "middle_east_slider_text_1" , $pId);
			$me_slider_txt_2 =  get_field( "middle_east_slider_text_2" , $pId);
			$me_slider_txt_3 =  get_field( "middle_east_slider_text_3" , $pId);	          
			$me_img_url_1 	 =  get_field( "middle_east_image_1" , $pId);	          
			$me_img_url_2    =  get_field( "middle_east_image_2" , $pId);
            $me_cimg         =  get_field( "circle_img", $pId );
			
            ////client section field's data
            $client_heading    =  get_field( "client_heading" , $pId);

            ////Big Brand section field's data
            $big_brand    =  get_field( "big_brand" , $pId);
            $button_url    =  get_field( "button_url" , $pId);
            $button_text    =  get_field( "button_text" , $pId);
            $button_arrow    =  get_field( "button_arrow" , $pId);
		   ?>	
<!-- Slider Section Start -->
<section class="Slider_wrap">
   <div class="container">
     <div class="row">
        <div class="col-xl-12">
           <?php echo do_shortcode('[smartslider3 slider=1]'); ?>
        </div> 
     </div>  
   </div> 
</section>
<!-- Slider Section Start -->
<!-- About Section Start -->
<section class="about_wrap">
   <div class="container">
     <div class="row">
        <div class="col-xl-12">
           <?php echo $about_spro; ?>
        </div> 
     </div>  
   </div> 
</section>
<!-- About Section Start -->
<!-- Counter Section Start -->
<section class="counter_wrap" style="background: url('<?php echo $counter_bg_img; ?>') no-repeat; background-size: cover; background-position: center center;">
  <div class="ctr_bg_overlay">   
   <div class="container">
     <div class="row">
        <div class="col-lg-6">
           <img src='<?php echo $counter_img; ?>' alt="" /> 
        </div>  
        <div class="col-lg-6 pl-lg-0">
           <?php echo do_shortcode('[COUNTER_NUMBER id=184]'); ?> 
        </div> 
     </div>  
   </div> 
  </div> 
</section>
<!-- Counter Section End -->
<!-- Experience Section Start -->
<section class="experience_wrap pb-2">
   <div class="container">
     <div class="row">
        <div class="col-lg-6 eo_1"><?php echo $experience_content; ?></div>  
        <div class="col-lg-6 eo_1 d-md-flex"><img class="w-100 mb-4" src='<?php echo $experience_img; ?>' alt="" /></div> 
     </div>  
   </div> 
</section>
<!-- Experience Section End -->
<!-- Services Section Start -->
<section class="services_wrap mb-0">
   <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center"><h2 class="mb-4">Our Services</h2></div>
    </div>
     <div class="row">
	   <div class="col-xl-10 offset-xl-1">
		  <div class="row">
		  <?php 
			  /// services section code
				$services_args = array(
						'post_type' => 'service',
						'order' => 'ASC'
				);
				$services_loop = new WP_Query($services_args);
			  
			  	while($services_loop->have_posts()): $services_loop->the_post(); 
					//the_post_thumbnail();					
					$img_url = get_the_post_thumbnail_url($post_id );
			      $services_hover_icon =  get_field( "services_hover_icon" , $post_id);
			  		//$post_title = get_the_title($post_id);
			  ?>
		
				<div class="col-lg-4 my-3">	
				  <div class="srbox">
				   <img class="s_icon_hover" src='<?php echo $services_hover_icon; ?>' alt="" />	
				   <img class="s_icon" src='<?php echo $img_url; ?>' alt="" />	
				   <h4><?php the_title(); ?></h4>
				   <p class="text-justify"><?php the_content(); ?></p>						   
				 </div> 
				</div>	
			<?php endwhile;
				wp_reset_query(); ?>   
		   </div> 
		 </div>
     </div>  
   </div> 
</section>
<!-- Services  Section End -->
<!-- Technologies Section Start -->
<section class="technologies_wrap" style="background: url('<?php echo $tech_bg; ?>') no-repeat; background-size: cover; background-position: center center;">
 <div class="tech_bg_overlay">    
   <div class="container">   
	<div class="row">
	 <div class="col-xl-10 offset-xl-1">		   
		<div class="tech_text"><?php echo $technologies_content; ?></div> 
	 </div> 	
	 <div class="col-xl-12"><?php echo $technologies_image; ?></div>  
     </div>   
   </div> 
  </div> 
</section>
<!-- Technologies   Section End -->
<!-- Middle east Section Start -->
<section class="middle_east_wrap">
   <div class="container">
     <div class="row">       
        <div class="col-lg-5 eo_1 me_bg_left pb_80">
		  <div class="me_box">
			  <h2 class="text-right text-white me_title"><?php echo $me_main_ttl; ?></h2>
			  <img src="<?php echo $me_cimg; ?>" alt="" />
		   </div>
			<div class="ts_box"><?php echo do_shortcode('[smartslider3 slider=3]'); ?></div>
        </div>  
		<div class="col-lg-7 me_bg_right">          
		 <div class="mb_ibox">
		   <img  class="mb_img1" src='<?php echo $me_img_url_2; ?>' alt="" />
		   <img class="mb_img2" src='<?php echo $me_img_url_1; ?>' alt="" /> 
		 </div>
		</div> 
     </div>  
   </div> 
</section>
<!-- Middle east  Section End -->
<!-- Partner Section Start -->
<section class="partner_wrap">     
    <div class="container">
     <div class="row">
       <div class="col-xl-12">
       	<h2 class="pb-4 text-center text-white">We partner with the world’s technology leaders.</h2>
          <div class="row">
         	<div class="col-lg-6 offset-lg-3"> 
         		<div class="row text-center">
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src='<?php echo $partner_img_src_1; ?>' alt="" /></div>
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src='<?php echo $partner_img_src_2; ?>' alt="" /></div>
				 <div class="col-4 col-sm-4"><img class="mt-2 mb-2" src='<?php echo $partner_img_src_3; ?>' alt="" /></div>
				 <div class="col-sm-12"><?php echo $partner_text; ?></div>
			  </div>
			 </div>
			  
		   </div>           
        </div> 
     </div>  
   </div> 
</section>
<!-- Partner Section Start -->
<!-- Blog Section Start -->
<section class="blog_wrap">
  <div class="">     
   <div class="container">
     <div class="row">
        <div class="col-xl-12">
           <div class="form_hd"><h2 class="text-center">Our Recent Blog</h2></div>  
           <div class="hblog_box"><?php echo do_shortcode('[rpwe limit="3" thumb_width="300" thumb_height="200" excerpt="true" thumb="true" readmore="false" readmore_text="READ MORE"]'); ?></div>
        </div> 
     </div>  
   </div> 
  </div>
</section>
<!-- Blog Section End -->
<!-- Big Brand Section Start -->
<section class="bigbrand_wrap">
   <div class="container">
     <div class="row">
		<div class="col-lg-10 offset-lg-1"><?php echo $big_brand; ?></div> 
		<div class="col-lg-12 text-center mt-3"><a class="btn_solution" href="<?php echo $button_url; ?>"> <?php echo $button_text; ?> <img src="<?php echo $button_arrow; ?>" alt="" /></a></div> 
     </div>  
   </div> 
</section>
<!-- Big Brand Section Start -->
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
<section class="form_wrap ctw" style="background: url('<?php echo $form_bg; ?>') no-repeat; background-size: cover; background-position: center center;">
  <div class="fbg_overlay">     
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
<?php get_footer(); ?>

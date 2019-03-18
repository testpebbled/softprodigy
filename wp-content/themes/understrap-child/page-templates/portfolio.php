<?php
/**
 * Template Name: Portfolio Page
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
	.header_wrap{
		background:linear-gradient(to right, rgba(22,41,116,0.93) 0%,rgba(22,42,117,0.93) 1%,rgba(32,124,206,0.93) 100%)
	}
	.head_part1 img{
		margin-top:30%;
	}
	.header_part2 img{
		width:300px;
		margin-top:50%;
		vertical-align: middle;
	}
	    .header_part2 a{padding: 15px 40px;
    font-size: 23px;
    background: #000;
    text-align: center;
    border: 1px solid #000;
    border-radius: 30px;
    color: #fff;
    font-family: 'Avenir-Book';
    display: inline-block;
	text-decoration: none;
			margin-top:30px;
	}
	
	
</style>
<section class="header_wrap">
   <div class="container-fluid">
     <div class="row">
		 <div class="col-md-6 col-sm-6 head_part1 text-right">
			 <img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/header_bg1-3.png">
		 </div>	 
		 <div class="col-md-6 col-sm-6">
			 <div class="header_part2 text-center">
				 <img src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/header_img2.png">
				 <div class="">
					 <a href="#">View Case Study</a>
				 </div>
			 </div>
		 </div>	 
     </div>  
   </div> 
</section>


<section class="header_wrap">
   <div class="container">
     <div class="row">
		 <div class="col-md-12">
			 <?php echo do_shortcode('[print_responsive_portfolio_plus_lightbox]'); ?>
		 </div>
		 
     </div>  
   </div> 
</section>

<?php get_footer(); ?>

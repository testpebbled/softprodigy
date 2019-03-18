<?php
/**
 * Template Name: Product Page
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
.future {width: 100%;padding: 90px 0;}
.inner-sec h2 {margin-bottom: 30px;line-height: 38px;margin-top: -5px;}
.content p {color: #555555;line-height: 30px;font-size: 16px;text-align:justify;}
.offset {padding-bottom: 50px;}
.industry-offerings {overflow: hidden;}
.service-section {position: relative;padding: 70px 0;text-align: center;}	
.service-section .bg {position:absolute;width: 100%;height: 100%;top: 0;left: 0;background: url(http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/contact-bg-img.jpg) no-repeat center top;z-index: 0;background-attachment: fixed;background-size: cover;}
.service-section .container {position: relative;}
.service-section h2 {color: #fff;position: relative;padding-bottom: 30px;}
.scroll {background: url(http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/4.jpg) no-repeat left top;padding: 150px 0;background-size: cover !important;}
.scoller {background: url(http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/5.jpg) no-repeat left top; width: 500px;height: 200px; overflow: auto;text-align:justify;		padding:20px;color:black;}
.text-scroll {position: relative;padding: 70px 0;text-align: center;}	
.text-scroll .bg {position:absolute;width: 100%;height: 100%;top: 0;left: 0;background: url(http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/counter-bg-img.jpg) no-repeat center top;z-index: 0;background-attachment: fixed;background-size: cover;}
.component-tabs .component-tabs__content {display: flex;flex-wrap: wrap;justify-content: space-between;}
.component-tabs .component-tabs__content .component-tabs__content-input {display: none;}
.component-tabs .component-tabs__content .component-tabs__content-label {border-bottom: 4px solid transparent;cursor: pointer;display: block;font-weight: bold;margin: 0 3.75rem; order: 1;padding: 1rem 0;position: relative;text-transform: uppercase;transition: all 300ms ease-in-out;}
@media (max-width: 768px) {.component-tabs .component-tabs__content .component-tabs__content-label {background-color: rgba(128, 128, 128, 0.1);border-top: 4px solid white;margin: 0;padding: 1rem 10rem 1rem 0rem;width: 100%;}}
@media (min-width: 768px) {.component-tabs .component-tabs__content .component-tabs__content-label {flex-basis: calc(100% / 4); margin: 0;text-align: center;}}
@media (min-width: 1024px) {.component-tabs .component-tabs__content .component-tabs__content-label {flex-basis: calc(100% / 4);}}
@media (min-width: 768px) {.component-tabs .component-tabs__content .component-tabs__content-label:hover {border-bottom-color: rgba(128, 128, 128, 0.25);}}
.component-tabs .component-tabs__content .cp-accordion__open-close {right: 1.875rem; position: absolute;top:45%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);width:1em;}
@media (min-width: 768px) {.component-tabs .component-tabs__content .cp-accordion__open-close {display: none;}}
.component-tabs .component-tabs__content .cp-accordion__open-close .cp-accordion__open-close-line{background-color: black;height: 3px;position: absolute;right: 0;transition: all 300ms ease-in-out;width: 1em;}
.component-tabs .component-tabs__content .cp-accordion__open-close .cp-accordion__open-close-line--vertical {-webkit-transform: rotate(90deg);transform: rotate(90deg);}
.component-tabs .component-tabs__content .component-tabs-tab {background-color: rgba(128, 128, 128, 0.1);display: none;flex-grow: 1;order: 99;padding: 3rem;width: 100%;text-align:left;}
@media (max-width: 768px) {.component-tabs .component-tabs__content .component-tabs-tab {padding: 1rem 1rem 1rem 3.75rem;}}
@media (max-width: 768px) {.component-tabs .component-tabs__content .component-tabs-tab,.component-tabs .component-tabs__content .component-tabs__content-label {order: initial;}}
@media (min-width: 768px) {.component-tabs .component-tabs__content .component-tabs__content-input:checked + .component-tabs__content-label {border-bottom-color: gold;}}
.component-tabs .component-tabs__content .component-tabs__content-input:checked + .component-tabs__content-label .cp-accordion__open-close-line--vertical{-webkit-transform: rotate(0deg);transform:rotate(0deg);}
.component-tabs .component-tabs__content .component-tabs__content-input:checked + .component-tabs__content-label + .component-tabs-tab {display: block;}
*:before,*:after {box-sizing: border-box;}
.container {margin: 2vw auto;padding: 0;}
@media (min-width: 768px) {container {padding: 1rem;}}
@media (min-width: 1024px) {.container { max-width: 75vw;}}
.intro {margin-bottom: 3rem;}
@media (max-width: 768px) {.intro {padding: 1rem;}}	
.cf:before,.cf:after{display: table;content: " ";}
.cf:after{clear: both}
.cards{}
.fancy-card{background: #eee;width: 100%;display: block;float: left;position: relative;box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);transition: all 250ms ease-in;min-height: 300px;background-size:cover;background-position: center center;margin-bottom: 30px;}
.fancy-card.one{background-image: url("http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/post-img2.jpg");}
.fancy-card.two{background-image: url("http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/experience-img-min.jpg");}
.fancy-card.three{background-image: url("http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/post-img3.jpg");}
.fancy-card .bg-overlay{background: rgba(0,0,0,0.25);position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;transition: all 200ms linear;}
.fancy-card .contents{padding: 30px 40px;color: #fff;text-align: center;position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;display: flex;flex-wrap: nowrap;align-items: center;flex-direction: row;}
.fancy-card .contents .primary{text-transform: uppercase;width: 100%;transition: all 250ms ease-out 200ms;opacity: 1;transform: translate3d(0px, 0px, 1px);}
.fancy-card .contents .secondary{position: absolute;opacity: 0;left: 0px;transform: translate3d(0px, 30px, 1px);transition: all 200ms linear 0ms;padding-left: 50px;padding-right: 50px;}
.secondary p{margin-top:0;margin-bottom: 0;}
.fancy-card .button{border: solid 1px #fff;padding: 8px 12px;display: inline-block;border-radius: 2px;margin: 12px auto;}
.fancy-card .v-border{position: absolute;top: 0%;left: 0%;width: 100%;height: 100%;}
.fancy-card .v-border:before,.fancy-card .v-border:after{width: 0%;height: 1px;left: 50%;transition: all 250ms ease-out;background: #fff;}
.fancy-card .v-border:before{content: '';top: 10%;position: absolute;}
.fancy-card .v-border:after{content: '';bottom: 10%;position: absolute;}
.fancy-card .h-border{position: absolute;top: 0%;left: 0%;width: 100%;height: 100%;}
.fancy-card .h-border:before,.fancy-card .h-border:after{height: 0%;top: 50%;width: 1px;transition: all 250ms ease-out;background: #fff;}
.fancy-card .h-border:before{content: ''; left: 10%;height: 0%;position: absolute;}
.fancy-card .h-border:after{content: '';right: 10%;position: absolute;}
.fancy-card:active .v-border:before,.fancy-card:active .v-border:after,.fancy-card:hover .v-border:before,.fancy-card:hover .v-border:after{width: 90%; left: 5%;}
.fancy-card:active .h-border:before,.fancy-card:active .h-border:after,.fancy-card:hover .h-border:before,.fancy-card:hover .h-border:after{height: 90%;top: 5%;}
.fancy-card:active,.fancy-card:hover{box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.3);}
.fancy-card:active .contents .primary,.fancy-card:hover .contents .primary{opacity: 0;transform: translate3d(0px, 20px, 1px);transition: all 200ms linear 0ms;}
.fancy-card:active .contents .secondary,.fancy-card:hover .contents .secondary{ opacity: 1;transform: translate3d(0px, 0px, 1px);transition: all 200ms linear 200ms;}
.fancy-card:active .bg-overlay,.fancy-card:hover .bg-overlay{background: rgba(0,0,0,0.45);}
.our_stories h2 {font-size: 42px;font-weight: 600;padding-top: 50px;}	
@media screen and (min-width: 768px){.fancy-card{width: 100%;margin: 0% 1.66% 3.33% 1.66%;}}
</style>

<!-- Breadcrumb Section Start -->
<section class="breadcrumb_sec" style="background: url('http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/counter-bg-img.jpg') no-repeat; background-size: cover;">
 <div class="breadcrumb_overlay">
   <div class="container">
     <div class="row">
        <div class="col-md-12 offset text-center">
			<h1 class="text-white">
			  Product Page
			</h1>
			
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
<!-- Experience Section Start -->
<section class="experience_wrap pb-2">
	
   <div class="container">
     <div class="row">
		  <div class="col-md-12 text-center py-5">
			 <img width="300" height="400" src="http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/02/logo.png"  alt="Event Booking App" title="Go2Events">
		 </div>
		 <div class="col-lg-12">  <h1 style="text-align:center">The standard Lorem Ipsum passages</h1>                     
    <p style="margin-right:150px;margin-left:150px;line-height:2;text-align:justify">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>    </div> 
		 	<div class="col-lg-12 text-right mt-3"><a class="btn_solution" href="<?php echo $button_url; ?>">Visit Website <img src="http://wow.pebbled.io/schakraborty/softprodigy/1/" alt="" /></a></div> 
     </div>  
   </div> 
</section>
<!-- Experience Section End -->
<!---Tabs--Accordion-Start-->
<section class="ab_bigbrand text-center">
   <div class="container">
     <div class="row">
        <div class="col-md-12">
  <section class="component-tabs">
    <div class="component-tabs__content" role="region">
      <!-- change number of tabs here-->
      <!-- adds checked to the first tab to show it's content on load-->
      <input class="component-tabs__content-input" id="paragraph-0" type="radio" name="tabs" checked=""/>
      <label class="component-tabs__content-label" for="paragraph-0">Go2Event
        <div class="cp-accordion__open-close"><span class="cp-accordion__open-close-line cp-accordion__open-close-line--vertical"></span><span class="cp-accordion__open-close-line cp-accordion__open-close-line--horizontal"></span></div>
      </label>
      <article class="component-tabs-tab" id="paragraph-0" role="tabpanel">
        <h2>Go2Event</h2>
        <div class="component-tabs-tab__content">
          <section id="paragraph-0">
			  <div class="container">
     <div class="row">
        <div class="col-md-6">
            <div class="component-content__content">
              <!-- just adding more text to some tabs to better see the difference-->
              <p>Have a conference, trade show or festival coming up? An Event Booking App is your best way forward to promote, sell, and manage successful events.</p>
				<ul class="square-check">
					<li><span style="color: #444444;">Both Web and Mobile (iOS and Android) versions available</span></li>
					<li><span style="color: #444444;">Complete front-end control from an easy-to-use admin back-end</span></li>
					<li><span style="color: #444444;">Manage Events, Venue Details and Timings</span></li>
					<li><span style="color: #444444;">Configure Schedules and Seating plans</span></li>
					<li><span style="color: #444444;">Manage Speakers</span></li>
					<li><span style="color: #444444;">Sell Tickets</span></li></ul>
            </div>
		 </div>
		 <div class="col-md-6 text-center">
			 <img width="300" height="400" src="https://www.softprodigy.com/wp-content/uploads/2015/06/011.png"  alt="Event Booking App" title="Go2Events">
		 </div>
				  </div>
			  </div>
          </section>
        </div>
      </article>
      <!-- adds checked to the first tab to show it's content on load-->
      <input class="component-tabs__content-input" id="paragraph-1" type="radio" name="tabs"/>
      <label class="component-tabs__content-label" for="paragraph-1">OnGoBuyo
        <div class="cp-accordion__open-close"><span class="cp-accordion__open-close-line cp-accordion__open-close-line--vertical"></span><span class="cp-accordion__open-close-line cp-accordion__open-close-line--horizontal"></span></div>
      </label>
      <article class="component-tabs-tab" id="paragraph-1" role="tabpanel">
       
        <div class="component-tabs-tab__content">
          <section id="paragraph-1">
             <div class="container">
     <div class="row">
		  <div class="col-md-6 text-center">
			 <img width="300" height="400" src="https://www.softprodigy.com/wp-content/uploads/2015/06/ogb-banner.png"  alt="Event Booking App" title="Go2Events">
		 </div>
        <div class="col-md-6">
			 <h2>OnGoBuyo</h2>
            <div class="component-content__content">
              <!-- just adding more text to some tabs to better see the difference-->
              <p>A mobile-centric application crafted using advanced Magento coding to render most engaging digital experience for the on-the-go buyer while maintaining the highest possible e-commerce standards.</p>
				<ul class="square-check">
					<li><span style="color: #444444;">Google Analytics Integration</span></li>
					<li><span style="color: #444444;">Native Android & iOS Versions Available</span></li>
					<li><span style="color: #444444;">Multiple Payment Gateways Integrated</span></li>
					<li><span style="color: #444444;">Multilingual & Multi-Currency</span></li>
					<li><span style="color: #444444;">Right-to-Left Language Support</span></li>
				</ul>
            </div>
		 </div>
		
				  </div>
			  </div>
          </section>
        </div>
      </article>
      <!-- adds checked to the first tab to show it's content on load-->
      <input class="component-tabs__content-input" id="paragraph-2" type="radio" name="tabs"/>
      <label class="component-tabs__content-label" for="paragraph-2">Lorem ipsum 3
        <div class="cp-accordion__open-close"><span class="cp-accordion__open-close-line cp-accordion__open-close-line--vertical"></span><span class="cp-accordion__open-close-line cp-accordion__open-close-line--horizontal"></span></div>
      </label>
      <article class="component-tabs-tab" id="paragraph-2" role="tabpanel">
        <h2>Lorem ipsum 3</h2>
        <div class="component-tabs-tab__content">
          <section id="paragraph-2">
           <div class="container">
     <div class="row">
        <div class="col-md-6">
            <div class="component-content__content">
              <!-- just adding more text to some tabs to better see the difference-->
              <p>Have a conference, trade show or festival coming up? An Event Booking App is your best way forward to promote, sell, and manage successful events.</p>
				<ul class="square-check">
					<li><span style="color: #444444;">Both Web and Mobile (iOS and Android) versions available</span></li>
					<li><span style="color: #444444;">Complete front-end control from an easy-to-use admin back-end</span></li>
					<li><span style="color: #444444;">Manage Events, Venue Details and Timings</span></li>
					<li><span style="color: #444444;">Configure Schedules and Seating plans</span></li>
					<li><span style="color: #444444;">Manage Speakers</span></li>
					<li><span style="color: #444444;">Sell Tickets</span></li></ul>
            </div>
		 </div>
		 <div class="col-md-6">
			 <img width="300" height="400" src="https://www.softprodigy.com/wp-content/uploads/2015/06/011.png"  alt="Event Booking App" title="Go2Events">
		 </div>
				  </div>
			  </div>
          </section>
        </div>
      </article>
      <!-- adds checked to the first tab to show it's content on load-->
      <input class="component-tabs__content-input" id="paragraph-3" type="radio" name="tabs"/>
      <label class="component-tabs__content-label" for="paragraph-3">Lorem ipsum 4
        <div class="cp-accordion__open-close"><span class="cp-accordion__open-close-line cp-accordion__open-close-line--vertical"></span><span class="cp-accordion__open-close-line cp-accordion__open-close-line--horizontal"></span></div>
      </label>
      <article class="component-tabs-tab" id="paragraph-3" role="tabpanel">
        <h2>Lorem ipsum 4</h2>
        <div class="component-tabs-tab__content">
          <section id="paragraph-3">
           <div class="container">
     <div class="row">
        <div class="col-md-6">
            <div class="component-content__content">
              <!-- just adding more text to some tabs to better see the difference-->
              <p>Have a conference, trade show or festival coming up? An Event Booking App is your best way forward to promote, sell, and manage successful events.</p>
				<ul class="square-check">
					<li><span style="color: #444444;">Both Web and Mobile (iOS and Android) versions available</span></li>
					<li><span style="color: #444444;">Complete front-end control from an easy-to-use admin back-end</span></li>
					<li><span style="color: #444444;">Manage Events, Venue Details and Timings</span></li>
					<li><span style="color: #444444;">Configure Schedules and Seating plans</span></li>
					<li><span style="color: #444444;">Manage Speakers</span></li>
					<li><span style="color: #444444;">Sell Tickets</span></li></ul>
            </div>
		 </div>
		 <div class="col-md-6">
			 <img width="500" height="600" src="https://www.softprodigy.com/wp-content/uploads/2015/06/011.png"  alt="Event Booking App" title="Go2Events">
		 </div>
				  </div>
			  </div>
          </section>
        </div>
      </article>
     
    </div>
  </section>
 </div>
</div>
</div>
</section>
<!--Tabs Accordion--End-->
<!--text-scroll start-->
<div class="text-scroll">
	<div class="bg"></div>	
<section>
   <div class="container">
     <div class="row">       
        <div class="col-md-12">
		 
			TEXT SLIDER
        </div>  
		
     </div>  
   </div> 
</section>
	</div>
<!--text-scroll end-->
<!--our-stories--start-->
<section class="cards cf">
	 <div class="our_stories"><h2 class="text-center">Our Stories</h2></div> 
	 <div class="container">
     <div class="row">
        <div class="col-md-4">
      <article class="fancy-card one">
        <div class="bg-overlay"></div>
        <div class="v-border"></div>
        <div class="h-border"></div>
        <div class="contents">
          <div class="primary">
            <h2>Dev Catch-Up</h2>
          </div>
          <div class="secondary">
            <h3>Catch up with the devs </h3>
            <p>10/11/2016 - 4.00pm</p>
            <p>Come and join us for our next upcoming developer catch up. See what the devs do</p>
            <a class="button">Book Today</a>
          </div>
        </div>
      </article>
		 </div>
		<div class="col-md-4">
      <article class="fancy-card two">
        <div class="bg-overlay"></div>
        <div class="v-border"></div>
        <div class="h-border"></div>
        <div class="contents">
          <div class="primary">
            <h2>New Tech Insights</h2>
          </div>
          <div class="secondary">
            <h3>Get the latest news</h3>
            <p>02/01/2017 - 3.30pm</p>
            <p>Join an indepth discussion from our team of experts on the latest tech news</p>
            <a class="button">Book Today</a>
          </div>
        </div>
      </article>
		 </div>
		 <div class="col-md-4">
      <article class="fancy-card three">
        <div class="bg-overlay"></div>
        <div class="v-border"></div>
        <div class="h-border"></div>
        <div class="contents">
          <div class="primary">
            <h2>Updated Research</h2>
          </div>
          <div class="secondary">
            <h3>It's all new and improved</h3>
            <p>12/02/2017 - 1.30pm</p>
            <p>We look at our updated research techniques and how everything has changed</p>
            <a class="button">Book Today</a>
          </div>
        </div>
      </article>
		 </div>
		 </div>
	</div>
	<div class="col-lg-12 text-center py-5"><a class="btn_solution" href="">Visit Website <img src="http://wow.pebbled.io/schakraborty/softprodigy/1/" alt="" /></a></div>
    </section>
<!--our-stories--end-->
<!--form section start-->
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


 

<?php include 'Header.php'; ?>




 

 






<div id="header-wrapper">
                        <div id="slider-row">
                <div class="row-wrapper visible">
                                                    <div class="moduletable ">
<div id="sequence106" class="sequence-slider" style="padding-bottom:40%">

	    <div class="sequence-prev"></div>
    <div class="sequence-next"></div>
    
	    <div class="sequence-pause"></div>
    
	
	
    <ul class="sequence-canvas">
            <li class="firstItem num0 animate-out" style="z-index: 1;">	
        
	
    <img class="slide-img" src="images/slider/1.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					
		<h1 class="slide-title"> 
								<?php
            $x = $_SESSION['ln'];
            echo $_SESSION['tbanking_' . $x]
            ?>
		</h1>
	
			
			
			
			 <p>
		    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info1_' . $x]
            ?>
			 </p>
	
 
		<a class="btn btn-info readmore" href="Banking.php?ln=<?php echo $_SESSION['ln']; ?>"><span>		    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['more_' . $x]
            ?></span></a>
	</div>
	
</div>
        </li>
                <li class="num1 animate-out" style="opacity: 1; z-index: 1;">	
        
	
    <img class="slide-img" src="images/slider/6.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					
		<h1 class="slide-title">
					    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['tpr_' . $x]
            ?>					
								
	   </h1>
	
			
			
			
				<p>
						    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info2_' . $x]
            ?>
				</p>
	
		<!-- Read More link -->
		<a class="btn btn-info readmore" href="Networking.php?ln=<?php echo $_SESSION['ln']; ?>"><span>
							    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['more_' . $x]
            ?>	
		</span></a>
	</div>
	
</div>
        </li>
                <li class="lastItem num2 animate-in" style="opacity: 1; z-index: 3;">	
        
	
    <img class="slide-img" src="images/slider/4.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					 
		<h1 class="slide-title">
	    
							    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['tts_' . $x]
            ?>	
		</h1>
	
			
			
			
				<p>
									    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info3_' . $x]
            ?>	
				</p>
	
		<!-- Read More link -->
		<a class="btn btn-info readmore" href="technicalSupport.php?ln=<?php echo $_SESSION['ln']; ?>"><span>Read more</span></a> 
		
		                         
                 
		
	</div>
	 
</div>
        </li>
		
		
		
		
		                <li class="lastItem num2 animate-in" style="opacity: 1; z-index: 3;">	
        
	
    <img class="slide-img" src="images/slider/3.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					 
		<h1 class="slide-title">
	    
							    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['tsd_' . $x]
            ?>	
		</h1>
	
			
			
			
				<p>
									    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info4_' . $x]
            ?>	
				</p>
	
		<!-- Read More link -->
		<a class="btn btn-info readmore" href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>"><span>Read more</span></a> 
		
		                         
                 
		
	</div>
	 
</div>
        </li>
		
		                <li class="lastItem num2 animate-in" style="opacity: 1; z-index: 3;">	
        
	
    <img class="slide-img" src="images/slider/2.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					 
		<h1 class="slide-title">
	    
							    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['tcons_' . $x]
            ?>	
		</h1>
	
			
			
			
				<p>
									    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info5_' . $x]
            ?>	
				</p>
	
		<!-- Read More link -->
		<a class="btn btn-info readmore" href="Consulting.php?ln=<?php echo $_SESSION['ln']; ?>"><span>Read more</span></a> 
		
		                         
                 
		
	</div>
	 
</div>
        </li>
		                <li class="lastItem num2 animate-in" style="opacity: 1; z-index: 3;">	
        
	
    <img class="slide-img" src="images/slider/5.jpg" alt="" style="">
	
<div class="info" style="">

		<div class="camera_caption ">

					 
		<h1 class="slide-title">
	    
							    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['ttrain_' . $x]
            ?>	
		</h1>
	
			
			
			
				<p>
									    <?php
            $x = $_SESSION['ln'];
            echo $_SESSION['info6_' . $x]
            ?>	
				</p>
	
		<!-- Read More link -->
		<a class="btn btn-info readmore" href="Training.php?ln=<?php echo $_SESSION['ln']; ?>"><span>Read more</span></a> 
		
		                         
                 
		
	</div>
	 
</div>
        </li>
            </ul>
		 
</div>

<script type="text/javascript"> 
	jQuery(document).ready(function($){
		var options106 = {
            autoPlay: true,
            autoPlayDelay: 1500,
            // startingFrameID: ,
            nextButton:true,
            prevButton:true,
            pauseButton:true,
                        pagination: false,
            			preloader: false,
			pauseOnHover:true,
			reverseAnimationsWhenNavigatingBackwards:false,
            fallback: {
                theme: "fade",
                speed: 2000
            },
            swipeEvents: {
			    left: "next",
			    right: "prev",
			    up: false,
			    down: false
			}
        }
        var sequence = jQuery("#sequence106").sequence(options106).data("sequence");
    });
</script>
</div> 
                                            </div>  
											
            </div>
			
			</div>







 
 
            <div id="who"></div>
                        <div id="bottom-header-row" style='padding:200px 0px 200px;'> 
						 
						 
						 
						
                <div class="row-wrapper visible">
                                        <div class="row-container ">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                                            <div class="moduletable   span4" style="width: 100%;"><div class="moduletable-wrapper">
<div class="mod-article-single mod-article-single__" id="module_217">
	<div class="item__module" id="item_76">
				<!-- Item Title -->
		<h2 class="item-title">
		<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['AboutAs_' . $x]
        ?>
		</h2>
		
		<!-- Intro Text -->
		<div class="item_introtext">
			<h5>
			<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['who1_' . $x]
        ?>
			</h5>
			
			<a class="btn btn-info readmore" href="AboutUs.php?ln=<?php echo $_SESSION['ln']; ?>"><span>
						<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['more_' . $x]
        ?>
			</span></a>
		</div>	
	</div>
  </div></div></div><div class="moduletable   span8"><div class="moduletable-wrapper"><div class="mod-newsflash-adv mod-newsflash-adv__ cols-2" id="module_204">
    <div class="row-fluid">
    <article class="span4 item item_num0 item__module  " id="item_35">
    <div class="item_container">
      		<!-- Intro Image -->
 
	


<div id="what"></div>
 


<div class="clearfix"></div>    </div>
  </article>
    <article class="span4 item item_num1 item__module   lastItem" id="item_34">
    <div class="item_container"> 
	


 


<div class="clearfix"></div>    </div>
  </article>
    </div> 
  <div class="clearfix"></div>

  </div>
</div></div>
                                                        </div>
                        </div>
                    </div>
                                    </div>            
            </div>
			 
                    
        
        <!-- END OF HEADER ROWS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        <!-- CONTENT ROWS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                
        
        
        
        
                <div id="content-row-5">
            <div  class="row-wrapper visible">
            	                <div class="row-container ">
                    <div class="container-fluid">
                        <div class="row-fluid">
                                                    <div class="moduletable pull-right text-right  span6"><div class="moduletable-wrapper">
													<header><h2 class="moduleTitle ">
																<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['Services_' . $x]
        ?>
													</h2></header>
													
													<div class="mod-custom pull-right text-right">
 
<p>
																	<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['what2_' . $x]
        ?>
</p></div></div>
			<a class="btn btn-info readmore" href="Service.php?ln=<?php echo $_SESSION['ln']; ?>"><span>
						<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['more_' . $x]
        ?>
			</span></a>
</div>


<div class="moduletable parallax_container  span12"><div class="moduletable-wrapper"><div class="parallax" data-url="images/ser.jpg" data-mobile="true" data-speed="1">
<div class="parallax_image" style="background-image: url(&quot;images/ser.jpg&quot;); background-color: inherit; height: 1005px; transform: translate3d(0px, -7.49687px, 0px);"></div><div class="parallax_cnt">
	</div></div></div></div>
                                                </div><div id="how"></div>
                    </div>
                </div>
                            </div>            
        </div>
        
		
		
		
        <div id="message-row">
            <div class="row-wrapper visible">
                <div class="row-container ">
                    <div class="container-fluid">
                        <div id="system-message-container">
	</div>

                    </div>
                </div>
            </div>            
        </div>

        <div id="main-content-row">
            <div class="row-wrapper visible">
                <div class="row-container ">
                    <div class="container-fluid">
                        <div class="row-fluid"> 
                          
                            <!-- LEFT SIDEBAR ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                                        
                            <!-- END OF COlUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    
                            <!-- COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->   
                            <div id="component" class="span12">
                                <main role="main">
                                            
                                    
                                    <article class="page-item page-item__home">
		<header class="item_header">
		<h1 class="item_title">
																			<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['how1_' . $x]
        ?>
		</h1>	</header>
		<div class="item_fulltext"> 
<p id="system-readmore">
																	<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['how3_' . $x]
        ?>
</p> </div>
		
				<a class="btn btn-info readmore" href="Solution.php?ln=<?php echo $_SESSION['ln']; ?>"><span>
						<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['more_' . $x]
        ?>
			</span></a>
	<!-- Social Sharing -->
	 
	<!-- Pagination -->
	</article> 
                                      
                                                                        
                                
                                </main>
                            </div>
                            <!-- END OF COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ --> 
            
                            <!-- RIGHT SIDEBAR ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->                       
                                                        <!-- END OF RIGHT SIDEBAR ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        
                        </div>
                    </div>
                </div>
            </div>            
        </div>

                <div id='serr'></div>
                <div id="content-row-7" class="hidden-sm hidden-xs">
            <div class="row-wrapper visible">
            	                <div class="row-container ">
                    <div class="container-fluid">
                        <div class="row-fluid">
                                                    <div class="moduletable center  span12"><div class="moduletable-wrapper">
													<div class="testimonials">
    <div class="mod_caroufredsel mod_caroufredsel__center" id="module_165">
        <div id="list_carousel_165" class="list_carousel">
    
            <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1170px; height: 412px; margin: 0px; overflow: hidden;"><ul id="caroufredsel_165" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 12870px; height: 412px; opacity: 1; z-index: auto;">
                                    
                                    
                                    
                                    
                                    <li class="item lastItem" id="item_87"  >
                        <div class="item_content"><div class="item_introtext" >
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['bank2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img"></figure>
 
	
<!-- Read More link -->
</div>
                    </li>
                            <li class="item firstItem" id="item_83"  >
                        <div class="item_content"><div class="item_introtext">
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['ts2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img"></figure>
 
	
<!-- Read More link -->
</div>
                    </li><li class="item" id="item_84"  >
                        <div class="item_content"><div class="item_introtext">
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['nt2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img img-intro img-intro__none"></figure>
 
	
<!-- Read More link -->
</div>
                    </li><li class="item" id="item_85"  >
                        <div class="item_content"><div class="item_introtext">
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['sd2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img img-intro img-intro__none"></figure>
 
	
<!-- Read More link -->
</div>
 
                    </li>
					
					
					
					
					
					<li class="item" id="item_85"  >
                        <div class="item_content"><div class="item_introtext">
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['cons2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img img-intro img-intro__none"></figure>
 
	
<!-- Read More link -->
</div>
 
                    </li>
					
					
					
										<li class="item" id="item_85"  >
                        <div class="item_content"><div class="item_introtext">
						<figure class="item_img"></figure>
<p>
<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['train2_' . $x]
        ?>
</p>
</div>
<!-- Intro Image -->
<figure class="item_img img-intro img-intro__none"></figure>
 
	
<!-- Read More link -->
</div>
 
                    </li>
					
					
					
					
					
					
					
					</ul></div>
    
                
            <div id="carousel_165_pag" class="caroufredsel_pagination" style="display: block;"><a href="#"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#" class=""><span>4</span></a><a href="#" class="selected"><span>5</span></a></div>
            <div class="clearfix"></div>
        </div>
            </div>
</div>

<script>
jQuery(function($) {
	var carousel = $("#caroufredsel_165")
	carousel.carouFredSel({
		responsive	: true,
		width: '100%',
		items		: {
			width : 1100,
			height: 'variable',
			visible		: {
				min			: 1,
				max			: 1			},
			minimum: 1
		},
		scroll: {
			items: 1,
			fx: "fade",
			easing: "swing",
			duration: 1500,
			queue: true
		},
		auto: false,
							pagination: "#carousel_165_pag",
				swipe:{
			onTouch: true
		}
	});
	$(window).load(function(){
		setTimeout(function(){
			carousel.trigger('configuration', {reInit: true})
		}, 100);
	});
});
</script>
</div></div><div class="moduletable parallax_container  span12"><div class="moduletable-wrapper"><div class="parallax" data-url="images/bg.3.jpg" data-mobile="true" data-speed="1"><div class="parallax_image" style="background-image: url(&quot;images/bg.3.jpg&quot;); background-color: inherit; height: 1195px; transform: translate3d(0px, -2.59502px, 0px);"></div><div class="parallax_cnt">
	</div></div></div></div>
                                                </div>
                    </div>
                </div>
                            </div>            
        </div>
                    <div id="serr1"></div>
                <div id="content-row-8">
            <div class="row-wrapper visible">
            	                <div class="row-container ">
                    <div class="container-fluid">
                        <div class="row-fluid" id='rwfluid'>
                                                    <div class="moduletable   span12"><div class="moduletable-wrapper">
													<header><h2 class="moduleTitle">
																			<?php
        $x = $_SESSION['ln'];
        echo $_SESSION['srvs_' . $x]
        ?>
													</h2></header>
													
													<div class="mod-newsflash-adv mod-newsflash-adv__ cols-2" id="module_214">
    <div class="row-fluid">
    <article class="span6 item item_num0 item__module  " id="item_114">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-credit-card"></i></figcaption>


<a href="Banking.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="Banking.php?ln=<?php echo $_SESSION['ln']; ?>"> 
	    </a><a href="Banking.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['tbanking_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf1_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>



<div class="clearfix"></div>    </div>
  </article>
    <article class="span6 item item_num1 item__module  " id="item_112">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-sitemap"></i></figcaption>


<a href="Networking.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="Networking.php?ln=<?php echo $_SESSION['ln']; ?>">
	<!-- Item title -->
		<!-- Introtext -->
	    </a><a href="Networking.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['tpr_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf2_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>



<div class="clearfix"></div>    </div>
  </article>
  </div><div class="row-fluid">  <article class="span6 item item_num2 item__module  " id="item_110">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-life-ring"></i></figcaption>


<a href="technicalSupport.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="technicalSupport.php?ln=<?php echo $_SESSION['ln']; ?>">
	<!-- Item title -->
		<!-- Introtext -->
	    </a><a href="technicalSupport.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['tts_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf3_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>



<div class="clearfix"></div>    </div>
  </article>
    <article class="span6 item item_num3 item__module   lastItem" id="item_109">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-cogs"></i></figcaption>


<a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">
	<!-- Item title -->
		<!-- Introtext -->
	    </a><a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['tsd_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf4_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>
	
	
	
	
	
	
	
	
	
	
	<div class="clearfix"></div>    </div>
  </article>
    <article class="span6 item item_num3 item__module   lastItem" id="item_109">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-laptop"></i></figcaption>


<a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">
	<!-- Item title -->
		<!-- Introtext -->
	    </a><a href="Consulting.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['tcons_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf5_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>
	
	
	
	
	
	
	
	
	
	
	<div class="clearfix"></div>    </div>
  </article>
    <article class="span6 item item_num3 item__module   lastItem" id="item_109">
    <div class="item_container">
      
	<figcaption><i class="cap-icon fa fa-globe"></i></figcaption>


<a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">

</a><div class="item_content"><a href="Software%20Development.php?ln=<?php echo $_SESSION['ln']; ?>">
	<!-- Item title -->
		<!-- Introtext -->
	    </a><a href="Training.php?ln=<?php echo $_SESSION['ln']; ?>">
    	<div class="item_introtext">
		<h4><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['ttrain_' . $x]
        ?></h4>
<p><?php
        $x = $_SESSION['ln'];
        echo $_SESSION['inf6_' . $x]
        ?></p>
	</div>
        </a>
        
	
        
	<!-- Read More link -->
	</div>



<div class="clearfix"></div>    </div>
  </article>
    </div> 
	<div id="contact"></div>
  <div class="clearfix"></div>

  </div>
</div></div>
                                                </div>
                    </div>
                </div>
                            </div>            
        </div>
		
		
		
	  
        
        <?php include 'Footer.php'; ?>
    
	
 
	 <script>
	 
if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
	jQuery('ul.sequence-canvas li:nth-child(1) > img').attr('src','images/slider/small/1.jpg');
	jQuery('ul.sequence-canvas li:nth-child(2) > img').attr('src','images/slider/small/2.jpg');
	jQuery('ul.sequence-canvas li:nth-child(3) > img').attr('src','images/slider/small/3.jpg');
	jQuery('ul.sequence-canvas li:nth-child(4) > img').attr('src','images/slider/small/4.jpg');
	jQuery('ul.sequence-canvas li:nth-child(5) > img').attr('src','images/slider/small/5.jpg');
	jQuery('ul.sequence-canvas li:nth-child(6) > img').attr('src','images/slider/small/6.jpg');
	
} 
 else{
jQuery(window).scroll(function() {
   var hT0 = jQuery('#home').offset().top,
       hH0 = jQuery('#home').outerHeight(),
	   hT = jQuery('#who').offset().top,
       hH = jQuery('#who').outerHeight(),
	   hT1 = jQuery('#what').offset().top,
       hH1 = jQuery('#what').outerHeight(),
	   hT2 = jQuery('#how').offset().top,
       hH2 = jQuery('#how').outerHeight(),
	   hT3 = jQuery('#contact').offset().top,
       hH3 = jQuery('#contact').outerHeight(),
	   hT4 = jQuery('#serr').offset().top,
       hH4 = jQuery('#serr').outerHeight(),
	   hT5 = jQuery('#serr1').offset().top,
       hH5 = jQuery('#serr1').outerHeight(),
       wH = jQuery(window).height(),
       wS = jQuery(this).scrollTop();
	   
 
     
	    if(wS > (hT0+hH0-wH)){
     jQuery('ul#module-99 li:nth-child(1) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(2) > a').css('color','');
   }
else{jQuery('ul#module-99 li:nth-child(2) > a').css('color','');}  
	 
   if(wS > (hT+hH-wH)){
     jQuery('ul#module-99 li:nth-child(2) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(3) > a').css('color','');
	  jQuery('ul#module-99 li:nth-child(1) > a').css('color','');
   }
else{jQuery('ul#module-99 li:nth-child(2) > a').css('color',''); }   


   if(wS > (hT1+hH1-wH)){
     jQuery('ul#module-99 li:nth-child(2) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(3) > a').css('color','');
   } 
   else{jQuery('ul#module-99 li:nth-child(2) > a').css('color','');jQuery('ul#module-99 li:nth-child(3) > a').css('color','');}   
 
   
      if(wS > (hT2+hH2-wH)){
     jQuery('ul#module-99 li:nth-child(3) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(4) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(2) > a').css('color','');
   } 
   else{jQuery('ul#module-99 li:nth-child(3) > a').css('color','');jQuery('ul#module-99 li:nth-child(4) > a').css('color','');}   
   
         if(wS > (hT2+hH2-wH)){
     jQuery('ul#module-99 li:nth-child(3) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(4) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(2) > a').css('color','');
   } 
   else{jQuery('ul#module-99 li:nth-child(3) > a').css('color','');}   
   
   
   

   
   
     if(wS > (hT4+hH4-wH)){
     jQuery('ul#module-99 li:nth-child(4) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(5) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(3) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(2) > a').css('color','');
   } 
   else{jQuery('ul#module-99 li:nth-child(4) > a').css('color','');} 
   
   
   
 
   
   
   
   
   

    
            if(wS > (hT3+hH3-wH)){
     jQuery('ul#module-99 li:nth-child(5) > a').css('color','#000');
	 jQuery('ul#module-99 li:nth-child(4) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(3) > a').css('color','');
	 jQuery('ul#module-99 li:nth-child(2) > a').css('color','');
   } 
   else{jQuery('ul#module-99 li:nth-child(5) > a').css('color','');} 
   
   
    
   
   

   
   
});
 }
 
 
 </script>
	
 
    

</body></html>
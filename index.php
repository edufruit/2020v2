<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Edufruit</title>
    <link rel="icon" href="assets/icons/favicon.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Solutions for School, College, Coaching, Teachers">
    <meta name="keywords" content="Edufruit, Attendance software, ERP">
    
	 
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all">
	
	 
	 
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	 
	
	
	
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
	
	
    <link rel="stylesheet" href="assets/css/ionicons.min.css"> <!-- Resource style --> 
	
	
	
    <link rel="stylesheet" href="assets/css/custom.css">
	
	
	
	
	
	
	
	 <?php 



		
		function GetBlankDivCol($ColSizeXS, $ColSizeSM = 0, $ColSizeMD = 0, $ColSizeLG = 0, $ColSizeXLG = 0)
		{
			
			
			$Sizes['XS'] = array(0=>'d-none');
			$Sizes['SM'] = array(0=>'d-sm-none');
			$Sizes['MD'] = array(0=>'d-md-none');
			$Sizes['LG'] = array(0=>'d-lg-none');
			$Sizes['XLG'] = array(0=>'d-xlg-none');
			
			
			for($colsize = 1; $colsize <= 12; $colsize++)
			{
							
				$Sizes['XS'][$colsize] = 'col-'.$colsize;	
				$Sizes['SM'][$colsize] = 'col-sm-'.$colsize;	
				$Sizes['MD'][$colsize] = 'col-md-'.$colsize;	
				$Sizes['LG'][$colsize] = 'col-lg-'.$colsize;	
				$Sizes['XLG'][$colsize] = 'col-xlg-'.$colsize;	
				
			}
			
			
			
			$XS = $Sizes['XS'][$ColSizeXS];
			$SM = $Sizes['SM'][$ColSizeSM];
			$MD = $Sizes['MD'][$ColSizeMD];
			$LG = $Sizes['LG'][$ColSizeLG];
			$XLG = $Sizes['XLG'][$ColSizeXLG];
			
			
			
			if($ColSizeLG){
				
				$LG .= ' d-lg-block ';
				
			}
			
			if($ColSizeXS){
				
				$XS .= ' d-xs-block ';
				
			}
			
			
			// return '<div class=" '.$XS.' d-sm-none d-md-none d-lg-none "></div>';
			return '<div class=" '. $XS . ' ' . $SM . ' ' . $MD . ' ' . $LG . ' ' . $XLG . ' ' . ' "></div>';
			
			
			
		}
		


		
		function GetTechArchitectureReadMoreButton($Serial, $Color1, $Color2)
		{
			
			
			$ButtonText = 	'<div class="row">

									<div class="col-4">
									
									
										<div class="row" style=" ">

											<div class="col-6" style="background-color: '.$Color1.'; height: 33px;">

											</div>

										 
											<div class="col-6" style="background-color: '.$Color2.'; height: 33px;">

											</div>

										  
										</div>
											
									</div> 
							
							
									<div class="fat spacer f-slight col-8">read more</div>
								
								
								</div> ';
			
			
			return '
			
					<!-----------------------------------------------------------------> 
					<!---------------------------read more ----------------------------> 
					<!----------------------------------------------------------------->
 
 
					<div class="col-6 col-lg-10">			
				
		
						<div class="row">		
							<div id="tech-readmore'.$Serial.'"   data-more="'.htmlspecialchars($ButtonText).'" class="tech-readmore f-18 col-12 col-lg-6 col-md-6 col-sm-6 text-center text-black spacer f-slight " >
						
							'.$ButtonText.'
							
							</div>
								</div>
							</div>
									
	 
					<!-----------------------------------------------------------------> 
					<!-----------------------read more ends ---------------------------> 
					<!-----------------------------------------------------------------> 
									
				';
					

					
			}
			
			
			
			
			
		$Separator122 = '


							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 



								<div class="row"><div class="col-12"><div class="separator122"></div></div></div>
				  
				  
							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
			 

					';
	
			
			
		$HalfSeparator122 = '


							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 



								<div class="row"><div class="col-6"><div class="separator122"></div></div></div>
				  
				  
							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
			 

					';
	
			
		$TextSeparator122 = '


							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 



								<div class="text-separator122"></div>
				  
				  
							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
			 

					';
	
			
		$Separator127 = '


							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 



								<div class="separator127"></div>
				  
				  
							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
			 

					';
	
	
	
		$Separator65 = '


							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
 
												

									<div class="separator65"></div>
 
				  
				  
							<!----------------------------------------------------------------->
							<!----------------------------------------------------------------->
							<!-----------------------------------------------------------------> 
			 

					';
	
	
	
	
	//	 this file is with col-lg , col-md
	
	/* 
	
			
			
			
			<style>
				
				
				.gappy 
				{
				  
					margin-top: 71px; <?php //do not remove this, if removing then add 71px to margin-bottom i.e. 145+71 = 216px; ?>
					
					margin-bottom: 145px;
					
				}
				
				.separator71 
				{
				   
					height : 71px;
					
				}
				
				.separator145 
				{
				   
					height : 145px;
					
				}
				
				.separator64 
				{
				   
					height : 64px;
					
				}
				
				.fat 
				{
				   
					font-weight : bold;
					
				}
				
				.f-slight 
				{
				   
					font-family : Helvetica;
					
				}
				
				
				
				<?php
				
				/* 
					
				.f-menu 
				{
				   
					font-size : 28px;
					
				}
					
					@media (max-width:1199.98px) {
						
						.f-menu 
						{
						   
							font-size : 3.2vw;
							
						}
							 
							
					} 	
							*/
					 
					 
				?>
					
							
							
							
							
				
				<?php 
				
					////////////////////////////////////////////////// 
					////////////////////////////////////////////////// 
					////////////////////////////////////////////////// 
					
				?>
				
			 
		
	
	
	
	 <?php 
	
	
	/* 
	
								
							
							
							
				@media (min-width:300px) {
					.f-menu  {
						font-size : 7.5vw;
					}

					.burger-icon {
						width : 70%;
					}
					.burger-text {
						width : 30%;
					}

					
				}
					
				@media (min-width:576px) {
					.f-menu  {
						font-size : 3vw;
					}
				}

				@media (min-width:768px) {
					.f-menu  {
						font-size : 4vw;
					}
					
					
					.burger-icon {
						width : 78%;
					}
					.burger-text {
						width : 22%;
					}
					
					
				}

				@media (min-width:992px) {
					.f-menu  {
						font-size : 3vw;
					}
					
					
					.burger-icon {
						width : 82%;
					}
					.burger-text {
						width : 18%;
					}
					
					
				}

				@media (min-width:1200px) {
					.f-menu  {
						font-size : 1.5vw;
					}

					.burger-icon {
						width : 87%;
					}
					.burger-text {
						width : 13%;
					}
				}
				
					
							
							
				
				<?php 
				
					////////////////////////////////////////////////// 
					////////////////////////////////////////////////// 
					////////////////////////////////////////////////// 
					
				?>
				
			 
						

					
				.spacer
				{
				   
					 letter-spacing:0.2em; 
					
				}
				
				
				<?php 
					
					// ( No. of pixels = 4/3 * N pt)
					// 90pt - 120px
					// 72pt - 96px
					// 30pt - 40px
					// 24pt - 32px
					// 20pt - 26px
					// 18pt - 24px
				
				?>
				
							<?php // <div class="offset-smm-4 col-xs-4 col-smm-4 col-mdd-4 col-lgg-4 col-xl-4 offset-smm-4 "> ?>
							
							
			</style>
	
	
	 */
	 
	 // pt-3 pt-lg-3
	 
			$RemedialHeadingClass = ' lh-45 f-remedial-heading col-8 col-lg-8 col-md-12 col-sm-12  fat text-center text-sm-left text text-md-left text-lg-left text-black bg-white spacer f-slight ';
			
			
			$RemedialTextClass = ' lh-45 f-18 col-10 col-lg-10 col-md-12 col-sm-12 text-center text-sm-left text-md-left text-lg-left text-black bg-white spacer f-slight ';
						
			
	 ?>
	
	
	
	
	
  </head>


  <body class="boxed-layout" style="background-color:#e3e3e3;">

	   
	   
      <div id="main" class="main">
         
        
        
        
       <nav class="navbar  fixed-top effect-main" style="height:71px; background-color: #e3e3e3 !important;padding: 0px;border: none;">
        
        
         <div class="container bg-white" style="height: 71px;  padding: 0px !important;">
    
<?php	
// rotateOutUpLeft
// tada
?>
				<div class="    " id=" " style="   padding-left:25px; width: 27%;" >
				  
				   
					<div class="animated swing " id="logo-small-edufruit" style="display:none; " >
				 
						<img id="edufruit-small-logo" class="img-fluid" alt="edufruit small logo" style=" " src="assets/images/logo-edufruit.jpg">			
					
					</div>
					
				   
			   </div>
		 
						   
			   <div class="burger-icon pd-100" style=" padding-right:10px; text-align: right;" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
				 
				 
					<div class="menu-icon-box">
						
						<img style="margin-right:10px; " src="assets/images/hamburger-menu.jpg">			
						  
						<div class="burger-text f-menu spacer f-slight fat" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">

							Menu 

						</div>
				   
				   </div>
				
			   </div>
			   
			   
		</div>
		   
		   
           
        
         <div class="f-slight container" style="  ">
           
		   <div class="navbar-collapse collapse  " id="navbarSupportedContent" style="">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#main">Home</a></li>
               <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#features">Features</a></li>
               <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pricing">Pricing</a></li>
               <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reviews">Reviews</a></li>
               <li class="nav-item"><a class="btn-cta nav-link js-scroll-trigger" href="#cta">Sign Up</a></li>
             </ul>
           
           </div>
         </div>
         
        
       </nav>
        
        
        
           
					  
			<div class="container bg-white">
  
				 

			<!--   -->
			<!--   -->
			<!--   -->



				<div class="separator71"></div>
        

				 

			<!--   -->
			<!--   -->
			<!--   -->



				<div class="separator71"></div>
        


			<!--   -->
			<!--   -->
			<!--   -->
	
				
					<?php 
					
					/* 
				
				<div class="row">
			
						<svg class="f-brand-cap spacer f-slight col-smm-12 col-mdd-6 col-lgg-12 offset-lgg-3 fat" height="40" width="500" style="
							 
							margin-bottom: -40px;
							margin-left: -30px;
						">
							
							<line x1="100" y1="10" x2="10" y2="30" style="stroke:rgb(0,0,0);stroke-width:5"></line>
						
						</svg> 

					
				
					 

					<div class="text-center f-brand spacer f-slight col-smm-12 col-mdd-6 col-lgg-12 fat" >
					 
				
						<img style=" " src="assets/images/brand-cap.jpg">			
				  	 

					</div> 
					
				
				
				</div> <!-- row concluded -->







				<div class="row">
				
				
					 

					<div class="text-center f-brand spacer f-slight col-smm-12 col-mdd-6 col-lgg-12 fat" >
					 

						edufruit
				
					</div>
				 
				
				
				</div> <!-- row concluded -->


			*/ 
					 
					 ?>
					 
					





				<div class="row">
				
				 
					<div id="logo-edufruit" style="transition: 4s ease-out;" class="animated bounce text-left f-brand spacer f-slight col-smm-12 col-mdd-12 col-lgg-12 fat" >
					 

						
						 <img  style="transition:5s;"  class="img-fluid" src="assets/images/logo-edufruit.jpg">
				 
				 
				 
					</div>
				 
				
				
				</div> <!-- row concluded -->



				
			</div> 



			<!--   -->
			<!--   -->
			<!--   -->

      
        
        <?php
        
        
        
        
        
        /* 
			  
			
			 <div class=" ">
			  <div class="container bg-white" >
				<div class="hero-inner">
				  <div class="hero-content">
					<p class="yd_alert">
					<span>New</span>
					<a href="#">Introducing Live Data Maps</a>
					</p>
					<h2>edufruit</h2>
					<p>Military grade infrastructure and technology beyond today.</p>
					<a class="btn-action" href="#">Get started</a>
				  </div>
				</div>
			  </div>
			</div>


		*/





?>


     
        
					  
			<div class="container bg-white">
 
 
 
					<div class="separator41"></div>
			

	 
					

					<div class="row">
					
					
						<div class="col-1">
							 
					
						</div>
					 
					
						<div id="notonly" class="spacer text-center f-slight f-20 col-10">
							
							Build a "Virtual Institution",  
						</div>
					
					
					
					
					
						<div class="col-1">
							
						 
						</div>
					
					
					</div> <!-- row concluded -->
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 


	 

					<div style="height:19px;" class="1separator18"></div>
			

	 

				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="row">
					
					
						<div class="col-1">
							 
					
						</div>
					 
					
						<div class="f-slight col-10   text-center spacer f-20">
							
							with our ethnographic research based  <span class="fat">RGB</span> model. 
							
						</div>
					
					
					
						<div class="col-1">
							
						 
						</div>
					
					
					</div> <!-- row concluded -->
	 
	 
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<?php echo $Separator122; ?>
			


					<div class="row">
					 
					
					
						<div class="col-1 col-lg-1  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-10 col-lg-10 col-mdd-8  text-center spacer " style="font-size:18px; line-height:45px;">
							
														
								We help education institutions sail through radical transformation, occuring while transforming into
a Virtual Institution, whilst technology acts as a major catalyst. Our proven expertise of over 14 years in technology, specific for education and implementation with institutions of eminence could be 
								experienced with our robust tech and business models.

							
						</div>
					
					
					
						<div class="col-1 col-lg-1 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<?php echo $Separator122; ?>
			
<?php // col-10 col-lgg-6 col-mdd-8 ?>




			<?php


				$BlankCol = '
 
								<!---------------->
								
								
									<div class="col-lgg-3 col-mdd-3 col-smm-12 col-3 ">
										
									</div>
								
								<!---------------->
							';
							



				$UpperYellowBracketRowBegin = '


						<div class="row h66">
					 
					';



			function GetUpperBracket($Heading1)
			{
				
							// <div class="col-lgg-6 col-mdd-6 col-smm-12 col-12 ">
							
				$UpperYellowBracket = '

 					 
					
						<!---------------->
					
							<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-12  ">
							</div>
							
							<div class="col-lg-4 col-mdd-6 col-smm-12 col-4 bg-yellow ">
							</div>
					
					
					
							<div class="col-lgg-1 col-mdd-6 col-smm-12 col-1 ">
							
							
								<div class="row" style="height:auto;">
								
							
									<div class="col-lgg-6 col-mdd-6 col-smm-12 col-6 " style="background-color:yellow;">
							 
									</div>
							
							
									<div class="col-lgg-6 col-mdd-6 col-smm-12 col-6 " style="background-color:white;"> 
							 
									</div>
							
								</div>
							
							
							</div>
							
							
							
							<div id="'.strtolower($Heading1).'" class="col-lgg-6 col-mdd-6 col-smm-12 col-6 f-slight spacer fat f-box1-heading1">
							  
								  '.$Heading1.'
							   
							</div><!-- col concluded -->
					
				 
					 
						<!---------------->
					
				 
					';
					
					
						return $UpperYellowBracket;
					
					}
					
					
					$RowEnd = '
					 
					 
					
					</div> <!-- row concluded -->
	 
	 
					';
			

?>



		<style> 
		
		
				#chalo {
				  
				  animation-name: example;
				  animation-duration: 0.5s;
				  animation-play-state: paused;
 
				}


		

		
				#chalo1 {
				  
				  animation-name: example1;
				  animation-duration: 0.5s;
				  animation-play-state: paused;

				}


		


			<?php
  // animation-delay: 5s;
				/* 
				#regress:hover{
					   
					#chalo {
					 
					  animation-play-state: running;
					}
				}
					// 25%  {   left: 0px; top:-750px;}
					// 50%  {   left: 0px; top:-550px;}
					// 75%  {   left: 0px; top:-275px;} 
				*/

			?>
				  
		  
		  
		@keyframes example {
		  0%   { right: -400px; height:110px; top:-1100px;  } 
		  50%   { background-color:pink; height:150px; opacity:0.2; } 
		  75% {  right:-300px; height:200px; top: 0px;}
		  100% {  right:0px; top:0px; height:100%;}
		}

		@keyframes example1 {
		  0%   { right: -400px;   top:-1100px; } 
		  50%   { background-color:pink;   opacity:0.2; } 
		  75% {  right:-300px;  top: 0px;}
		  100% {  right:0px; top:0px; height:100%;}
		}

</style> 


<?php			
					
		
		echo '<div class="row">';
		
			echo '<div class="d-none d-sm-block col-lg-3"> </div> <!-- col3 concluded -->'; // bg-warning
	 
	 
			echo '<div class="col-lg-6 col-12" >'; //bg-info danger
			 
		
					
					
						// echo $UpperYellowBracketRowBegin . $BlankCol . GetUpperBracket('Regress') . $BlankCol . $RowEnd;
						echo $UpperYellowBracketRowBegin;


						
							// echo '<div id="regress">';
		
								echo GetUpperBracket('Regress');
							
							// echo '</div>';
								
						echo $RowEnd;
					
					
				?>
	 
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

	
				<?php



					$Red = '
		
							
							';
							
							
							// echo $Red; 
							
							
							
							
					?>
					
							<div class="row  " style="height:inherit;" >
							 
							
							<?php


							
								// <div class="col-12 col-lgg-3 col-mdd-3 col-smm-3">								
								 
								// </div>
									
							?>
							
							
							
								<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6">
								</div>
								
								<div class="col-2 col-lg-1 col-mdd-6 col-smm-6 bg-yellow">
								</div>
									
								<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6 ">
								
								
									 <div class="row " style="height:100%;" >
												
														
										<div class="col-5 col-lgg-5 col-mdd-6 col-smm-6 bg-yellow">
										</div>
											
														
										<div id="chalo1" class="  col-7 col-lg-7 col-mdd-6 col-smm-6 bg-red"> 
										</div>
									
											
											 
									</div>
										
											
								
								
								</div>
									
								<div class="  col-10  col-lg-8 col-mdd-8 bg-red text-center text-white" id="chalo">
								 
									 
										 
										<div class="f-slight spacer fat f-box1-heading2">Digital pedagogy imprint to learning is inevitable.</div>
										
										<span class="glyphicon glyphicon-search" aria-hidden="true"></span>

										
										<div class="f-slight spacer f-box1-content " >Faculty, staff and pupils are to extract potential in digital pedagogy. As an institution you will manifest "change radically".
										
										
												<div class="invisible" style="display:none;" id="regressmoretext">
							
													Our technology primarily stimulates the institution to unlearn. Further, preparing to recreate procedures with our comprehensive set of tools in content, analytics, evaluation, assessments and competitive peer review for learning. Resulting in enhanced performance by breeding of optimal & effective methodologies amongst the stakeholders . We partner with the most credible & effective content teams to help the pupil swoop to an ascending ladder of learning. 
													
												</div>
													
										
											<div class="row">
												
												<div  id="regressmore" style=" border:1px #fff solid;" class="more offset-4 col-4 col-lgg-4 col-mdd-4 col-smm-4 ">

													more...
													
												</div>
						  
											</div> <!-- row concluded -->
								
										</div>
												
													 
											 
								
								</div>
									 
							 	
							<?php
 
							
								// <div class="d-none d-smm-block col-lgg-3 col-mdd-3 col-smm-3 ">
									
								 
								// </div>
							 
							 
							?>
							
							 
							 
							
							</div> <!-- row concluded -->
			 
							
					
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 


			<?php

					

				$LowerRowBegin = '
	 
									<div class="row" >
									  
							';
						
						

				$LowerBlankCol1 = '
	 
								
						<!------ col ------>
					 
					 
							<div class="d-none d-sm-block col-lg-1 ">
							</div>
						
							';
						
						

				$LowerBlankCol2 = '
	 
									 
										<!------ col ------>
									 
											
							<div class=" col-4 " style="background-color:yellow;">
							</div>
					
									
									
										<!---------------->
									
									  
							';
						
						
 
							
				$LowerBlankCol3 = '
 
						
						<!------ col ------>
					 
					 
						 
							<div class=" col-1 ">
							
							
								<div class="row" style="height:66px;">
								
							
									<div class=" col-6 " style="background-color:yellow;">
							 
									</div>
							
							
									<div class="  col-6 " style="background-color:white;"> 
							 
									</div>
							
								</div>
							
							
							</div>
							
				 
					';
					
					

				$LowerBlankCol4 = '
	 
									 
										<!------ col ------>
									 
											
							<div class="col-4"   >
							</div>
					
									
									
										<!---------------->
									
									  
							';
						
						
 
					
				 
				$LowerRowEnd = '
  
					</div> <!-- row concluded -->
					
					';
					
					
					 
					echo $LowerRowBegin . $LowerBlankCol1. $LowerBlankCol2 . $LowerBlankCol3 . $LowerBlankCol4. $LowerRowEnd;
					
					
					
					
				echo '</div>'; // <!-- col6 concluded --> 
					
					
				echo '<div class="d-none d-sm-block col-lg-3 "> </div> '; // bg-success
							
				
				
			echo '</div>'; // row closed 


					
					
				?>
					
			
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 





				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<?php echo $Separator122; ?>
				 
 
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 





			<?php
					
					
		
		echo '<div class="row">';
	

	
			// echo '<div class="col-lgg-1"> </div> <!-- col3 concluded -->'; // bg-warning
	 
	 
	 
	 
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			
				// begin col6 of GEOMETRICIZE
			
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
			//------------------------------------------------------------//
	 
	 
			echo '<div class="col-lg-6 ">'; //bg-info danger
			 
		
					
					
					
					// echo $UpperYellowBracketRowBegin;
					echo   '<div class="row" style="height:auto;"> ';


					
						echo GetUpperBracket('Geometri&shy;cize');
						// echo GetUpperBracket('Geometricize');
					 			
					echo $RowEnd;
					
			
			?>		

							<div class="row">
							 
							 
							 
							 
							
								<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6">
								</div>
								
								<div class="col-2 col-lg-1 col-mdd-6 col-smm-6 bg-yellow">
								</div>
							 
							   
									
								<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6 ">
								
								
									 <div class="row " style="height:100%;" >
												
														
										<div class="col-5 col-lgg-5 col-mdd-6 col-smm-6 bg-yellow">
										</div>
											
														
										<div id="chalo2" class="  col-7 col-lgg-7 col-mdd-6 col-smm-6 bg-green"> 
										</div>
									
											
											 
									</div>
									 
								
								</div>




								
								<div class="  col-10 col-lg-8 col-mdd-8 bg-green text-center text-black" id="chalo2a">
								 
									  	  
										<div class="f-slight spacer fat f-box1-heading2">Designing a contemporary culture and environment.</div>
										
										
										
										<div class="f-slight spacer f-box1-content " >As an institution of learning, the objective is to cultivate and nurture. The primeval heirarchical
										
												<div class="invisible" style="display:none;"  id="geometricizemoretext">
											
												    approach for business management in the world of technology is arbitrary. The advent of Business 4.0 and Education 4.0 put imperative on personalization, agile strategy, leveraging ecosystem, exploiting value with insights in hidden data and deploying advanced technical models. Our technology model helps re-align your institution machinery in a geometrical equation for its components to perform in the contemporary art of leadership, decision making & change management. 
												
												</div>
													
										
										
											<div class="row">
												
												<div id="geometricizemore" style=" border:1px #000 solid;" class="more offset-4 col-4 col-lgg-4 col-mdd-4 col-smm-4 ">

													more...
													
												</div>
						  
											</div> <!-- row concluded -->
								
										</div>
												
									 
								 
								</div>
							
							
					 
							 
							 
							
							</div> <!-- row concluded -->
			 
							
					
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
	
			<?php
			

					 
					 
					echo $LowerRowBegin . $LowerBlankCol1. $LowerBlankCol2 . $LowerBlankCol3 . $LowerBlankCol4. $LowerRowEnd;
					
					 
				echo '</div>'; // <!-- col6 concluded --> 
					
					
				// echo '<div class="d-none d-sm-block col-lg-3 "> </div> '; // bg-success
							
				
				
			// echo '</div>'; // row closed 


					
				// echo '<div class="col-lgg-3 "> </div> '; // bg-success
							
				
				
				
				
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
					
						// next 6 by 12 column of BRIDGE
					
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
				//------------------------------------------------//
					  
	 
									
	 
	 
					echo '<div class="col-12 d-sm-none d-md-none d-lg-none d-xl-none">';
					
						echo $Separator122;
					
					echo '</div>';
								
	 
	 
					echo '<div class="col-lg-6 ">'; //bg-info danger
			 
		 
					
						echo $UpperYellowBracketRowBegin;
						
							echo GetUpperBracket('Bridge');
									
						echo $RowEnd;  
						
						
					
			
			?>		

							<div class="row">
							 
							 
							
							
							
								<div class="col-12 col-lgg-12 col-mdd-6 col-smm-6">
									
									
									
									 <div class="row"  >
									 
							
									
									
										<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6">
										</div>
										
										
										<div class="col-2 col-lg-1 col-mdd-6 col-smm-6 bg-yellow">
										</div>
												  
												 
										
										<div class="d-none d-sm-block col-lg-1 col-mdd-6 col-smm-6 ">
								
										
											 <div class="row " style="height:100%;" >
														
																
												<div class="col-5 col-lgg-5 col-mdd-6 col-smm-6 bg-yellow">
												</div>
													
																
												<div id="chaloBridge2" class="  col-7 col-lg-7 col-mdd-6 col-smm-6  bg-blue "> 
												</div>
											
													
													 
											</div>
											 
										
										</div>
 
									 
									 
									 
									 
										
										<div class="col-10 col-lg-8 col-mdd-8 bg-blue text-center text-white"  id="chaloBridge" >
											 
											 
											<div class="f-slight spacer fat f-box1-heading2"> 
											
												Innovation is limitless and is the approach to achieve it.
											
											</div>
											
											
											
											<div class="f-slight spacer f-box1-content " >
											
												A group of people can do wonders. Indigenous departments of diversity are a boon. Managing them 
											
												<div class="invisible" style="display:none;" id="bridgemoretext">
												   efficiently is the key. Our applications help you manage the utmost important bridge to your institution in the departments of Finance, Marketing, Sales, Counseling, Estate, HR, IT, Complaints, Audit, Strategy, Communications, Library, Placements, Alumni, Inventory, Hostels, Transport, Mess, Canteen etc. 
												</div>
												
												
												<div class="row">
													
													<div style=" border:1px #fff solid;" class="more offset-4 col-4 " id="bridgemore">

														more...
														
													</div>
						  	  
												</div> <!-- row concluded -->
							 		
											</div>
									 				
											
										</div>
									
									
									
										<div class="d-none col-2" style=" background-color: green; ">									
										 
										</div>
								
										
									</div>
									
									
									
								 
								</div>
							
							
					 
							 
							 
							
							</div> <!-- row concluded -->
			 
							
					
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
	
				
				<?php
				


					 
						 
						echo $LowerRowBegin . $LowerBlankCol1. $LowerBlankCol2 . $LowerBlankCol3 . $LowerBlankCol4. $LowerRowEnd;
						
						 
					echo '</div>'; // <!-- col concluded --> 
						  
				
					
					
					
				echo '</div>'; // row closed 
		
		
		
		
			?>
					
	   
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
 	  
	  
 	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<?php echo $Separator122; ?>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					




						<div class="row">
						
							<div class=" col-12 col-lg-12 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading">
						
								Products
							
							</div>
							
							
						</div>








				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

					<div class="row">
					 
					
					
						<div class="col-1 col-lgg-2  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-10 col-lgg-8 col-mdd-8  text-center spacer " style="font-size:18px; line-height:45px;">
							
							“Ed-tech didn’t perform. Technologists turn out to be obnoxious. Support is pathetic.”
  
						</div>
					
					
					
						<div class="col-1 col-lgg-2 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 

					<div class="row">
					 
					
					
						<div class="col-1 col-lgg-2  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-10 col-lgg-8 col-mdd-8 fat text-center spacer " style="font-size:18px; line-height:45px;">
							 
							The educationist. 
							
						</div>
					
					
					
						<div class="col-1 col-lgg-2 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 






					<div class="row">
					 
					
					
						<div class="col-1 col-lgg-2  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-10 col-lgg-8 col-mdd-8  text-center spacer " style="font-size:18px; line-height:45px;">
					 
“What is it that the institutions want? Our application is so easy.”
 			
						</div>
					
					
					
						<div class="col-1 col-lgg-2 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 






					<div class="row">
					 
					
					
						<div class="col-2 col-lgg-2  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-8 col-lgg-8 col-mdd-8 fat text-center spacer " style="font-size:18px; line-height:45px;">
				 
The technologist.
							
						</div>
					
					
					
						<div class="col-1 col-lgg-2 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 
  


					
	<?php				

/* 

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 */
 ?>




				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					
					

					<div class="row">
					 
					
					
						<div class="col-1 col-lgg-2  col-mdd-2 ">
							
						 
						</div>
					
					
						<div class="f-slight col-10 col-lgg-8 col-mdd-8  text-center spacer " style="font-size:18px; line-height:45px;">
					 
									Above is the problem. We worked on a solution called Ethnography. We worked amongst 8000+ students, 200+ faculty and 150+ staff, delivering to 100,000+ students & 20,000+ faculty & staff for a span of 10 years, devising products that work.  
						</div>
					
					
					
						<div class="col-1 col-lgg-2 col-mdd-2  ">
							
						 
						</div>
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 




					


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

				
					
			<style>
				.square {
				  height: 10px;
				  width: 10px;
				  display: inline-block;
				}

				.academicsmore, .learningmore {
				  
				  cursor: pointer;
				  margin-left: 10px;
				  
				}
			</style>		
					
								
					


					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
							
						<div class="col-5 col-lg-2  col-mdd-3 ">
							
															
							<?php 
									 					 

							// <svg width="100" height="100">
							  // <path d="M0,50 a1,1 0 0,0 100,0" fill=" " />
							// </svg>   
							 
							// <svg version="1.1" height="200px" width="200px" xmlns="https://www.w3.org/2000/svg" >
							// <clipPath id="cut-off-bottom">
							// <rect x="0" y="0" width="200" height="100" />
							// </clipPath>

							// <circle cx="100" cy="100" r="100" clip-path="url(#cut-off-bottom)" />
							// </svg>

		
							
								// blue semi circle : 694 - 906 = 212px Photoshop radius  
							
							
							
							
								// red semi circle width : 641 - 424 = 217px Photoshop radius  
								
								// red semi circle height : 3186 - 3615 = 429px Photoshop radius  
								
								// 95px  ka ek column hai  so 2 hue 190px ke so usse zyada width ho nahi sakti radius can't be greater than that, so viewBox mein 190 de diya
								
								
								$radius = 217;
								$diameter = 217 * 2;


								/* width="<?php echo $radius; ?>" height="<?php echo $radius * 2; ?> */
/* 
								<svg  width="<?php echo $radius; ?>" height="<?php echo $radius * 2; ?>"> */
/* <svg viewBox="0 0 <?php echo $radius; ?> <?php echo $diameter; ?>"> */
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 190 <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="red" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px;">
					 
					 
									<div class="halfcookie-heading1 fat">Learning</div> 
									
									<div class="halfcookie-heading2 fat">liberalise.in</div>
									
									<?php // Digital pedagogy<br>stimulates cognition<br> & intuition.  ?>
									
									<div  class="halfcookie-heading3 fat"><span class="underlined">Online Classes</span>, <span class="underlined">Live Q & A</span>, <span class="underlined">Mock Tests</span>, <span class="underlined">Analytics</span></div>	
									
									<div class="learningmore">
										<div class="square bg-red"></div> more...
									</div>
									
						</div>
					
 
									
	 							
						<?php 
								
				 
							echo '<div class="col-12 d-sm-none d-md-none d-lg-none d-xl-none">';
							
								echo $Separator122;
							
							echo '</div>';
								 
											
						 ?> 
								
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
							
						<div class="col-5 col-lg-2  col-mdd-3 ">
							
															
							<?php 
									 					 

							// <svg width="100" height="100">
							  // <path d="M0,50 a1,1 0 0,0 100,0" fill=" " />
							// </svg>   
							 
							// <svg version="1.1" height="200px" width="200px" xmlns="https://www.w3.org/2000/svg" >
							// <clipPath id="cut-off-bottom">
							// <rect x="0" y="0" width="200" height="100" />
							// </clipPath>

							// <circle cx="100" cy="100" r="100" clip-path="url(#cut-off-bottom)" />
							// </svg>

		
							
								// blue semi circle : 694 - 906 = 212px Photoshop radius  
							
							
							
							
								// red semi circle width : 641 - 424 = 217px Photoshop radius  
								
								// red semi circle height : 3186 - 3615 = 429px Photoshop radius  
								
								
								
								$radius = 217;
								$diameter = 217 * 2;


								/* width="<?php echo $radius; ?>" height="<?php echo $radius * 2; ?> */
/* 
								<svg  width="<?php echo $radius; ?>" height="<?php echo $radius * 2; ?>"> */
/* <svg viewBox="0 0 <?php echo $radius; ?> <?php echo $diameter; ?>"> */
							?>
							
							
							
							<div class=""> 


								 <svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 190 <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="#00FF00" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
						<div class="f-slight col-6 col-lg-3 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px;">
					 
									<div class="halfcookie-heading1 fat">Academics</div>
									<div class="halfcookie-heading2 fat">academicbot.in</div>
									
									<?php // A great environment<br> fosters great learning.  ?>

									<div  class="halfcookie-heading3 fat"><span class="underlined">Attendance</span>,<br><span class="underlined">Assessments</span>,<br><span class="underlined">Timetable</span>,<br><span class="underlined">Feedback</span>,<br><span class="underlined">Metrics</span></div>
									
										
									<div class="academicsmore">
										<div class="square bg-green"></div> more...
									</div>
									
							 		
						</div>
					
 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					
					
			
					
					
					
					
					
					
					
					
					 
					
					</div> <!-- row concluded -->
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	   
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					

					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px;  margin-left: 10px; line-height:45px;">
					 
									<div class="halfcookie-heading1 fat">Admissions</div> 
									
									<div class="halfcookie-heading2 fat">admissionbot<br>.com</div>
									
									 
									<?php // Cognitive bot for conversions <span class="underlined">Leads</span>, ?>
									<div class="halfcookie-heading3 fat">
									
									<span class="underlined">Digital Marketing</span>,
									<br>
									<span class="underlined">Conversions</span>, 
									<span class="underlined">CRM</span></div>
									
									 
									<div class="financemore circlemore">
										<div class="square bg-blue"></div> more...
									</div>
									
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 ">
							
															
							<?php 
									 					 
 
								$radius = 217;
								$diameter = 217 * 2;

 
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 <?php echo $radius; ?> <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="#0000FF" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					 			
	 							
						<?php 
								
				 
							echo '<div class="col-12 d-sm-none d-md-none d-lg-none d-xl-none">';
							
								echo $Separator122;
							
							echo '</div>';
								 
											
						 ?> 
								
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px; line-height:45px;">
					 
					 
									<div class="halfcookie-heading1 fat">HR</div> 
									
									<div class="halfcookie-heading2 fat">evolutionary.in</div>
									
									<?php // People are not data, they are more ?>
									
									<div class="halfcookie-heading3 fat">
										
										<span class="underlined">Performance</span>,
										<span class="underlined">Leave</span>, 
									
										<span class="underlined">Payroll</span>,
										<br>
										<span class="underlined">Thumb</span>,
										<br>
										<span class="underlined">PIP</span>,
										<span class="underlined">Objectives</span>,
									
									</div>
									
										
									<div class="academicsmore">
										<div class="square bg-red"></div> more...
									</div>
									
							 		
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 ">
					 
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0  <?php echo $radius; ?>  <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="red" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					  
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					

					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
							
						<div class="col-5 col-lg-2  col-mdd-3 ">
							
															
							<?php 
									 					 
 
								$radius = 217;
								$diameter = 217 * 2;

 
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 190 <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="#00FF00" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px;">
					 
									
									<div class="halfcookie-heading1 fat">Finance</div> 
									
									
									<div  class="halfcookie-heading2 fat">feeaccounts.com</div>
									
									
									<?php // Automated finance<br>routines. ?>

									
									<div class="halfcookie-heading3 fat"><span class="underlined">Auto Fee & Fine debits</span>, <span class="underlined">Reconciliation</span>,<br><span class="underlined">Gateway</span>, <span class="underlined">Sales & Cash Books</span></div>
									
									 
									<div class="financemore circlemore">
										<div class="square bg-green"></div> more...
									</div>
									
						</div>
					
 
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
							
							
										
	 							
						<?php 
								
				 
							echo '<div class="col-12 d-sm-none d-md-none d-lg-none d-xl-none">';
							
								echo $Separator122;
							
							echo '</div>';
								 
											
						 ?> 
								
							
							
							
							
							
						<div class="col-5 col-lg-2  col-mdd-3 ">
					 
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 190 <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="#0000FF" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
						<div class="f-slight col-6 col-lg-3 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px;">
					 
									<div style="  font-size:26px; " class="fat">Librari</div>
									<div class="fat">Librari.in</div>
									
									<?php // When in doubt <br>go to the library. ?>
									
									<div class="fat">
										
										<span class="underlined">RFID</span>,
										<span class="underlined">Accession</span>, 
										<br>
										<span class="underlined">Cataloguing</span>,
										<br>
										<span class="underlined">Web OPAC</span>,
										<br>
										<span class="underlined">Circulation</span>,
										<span class="underlined">Fine</span>,
									
									</div>
									
										
									<div class="academicsmore">
										<div class="square bg-blue"></div> more...
									</div>
									
							 		
						</div>
					
 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					  
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

 

					<?php echo $HalfSeparator122; ?>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

		

					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px; line-height:45px;">
					 
									
									<div style="  font-size:26px; " class="fat">Alumni</div>
									
									<div class="fat">Managing Alumni</div>
									
									
									<?php 
										// Engage, connect, nurture and cultivate our alumni worth..
									?>
									<div class="fat">
										<span class="underlined">Social communications</span>, 
										<span class="underlined">Tracing</span>,
										<br>
										<span class="underlined">Events</span>, 
										<span class="underlined">Fund Raiser</span>
									</div>
									
									 
									<div class="circlemore">
										<div class="square bg-red"></div> more...
									</div>
									
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 ">
							
															
							<?php 
									 					 
 
								$radius = 217;
								$diameter = 217 * 2;

 
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 <?php echo $radius; ?> <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="red" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
									
						  

				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

  
					<div class="col-12 d-lg-none separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

		
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px; line-height:45px;">
					 
									<div style="  font-size:26px; " class="fat">Communi&shy;cations</div>
								 
									<?php // Transparency and empowerment with real time communication.. ?>
									
									<div class="fat">
										
										<span class="underlined">Mailers</span>,
										<span class="underlined">SMS</span>, 
										<br>
										<span class="underlined">WhatsApp</span>,
										<br>
										<span class="underlined">Social</span>,
										<br>
										<span class="underlined">Notification</span>,
										<span class="underlined">Fine</span>,
									
									</div>
									
										
									<div class="circlemore">
										<div class="square bg-green"></div> more...
									</div>
									
							 		
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 ">
					 
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0  <?php echo $radius; ?>  <?php echo $diameter; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="#00FF00" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					  
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

					
					




						<div class="row">
						
							<div class=" col-12 col-lg-12 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading">
						
								Auxiliary
							
							</div>
							
							
						</div>

 

				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 



					<div class="separator122"></div>
	  
	  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 


					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px; line-height:45px; margin-bottom: 122px;">
					 
									
									<div style=" font-size:26px; " class="fat">Hostels & Transport</div>
									 
										<div class="">
											
											<span class="underlined">Mess & Rooms</span>, 
											<span class="underlined">Bus Routes</span>,
										  
										</div>
										
										 
										<div class="circlemore">
											<div class="square bg-red"></div> more...
										</div>
									
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 " style="margin-bottom: 122px;">
							
															
							<?php 
									 					 
 
								$radius = 217;
								$diameter = 217 * 2;

 
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 <?php echo $radius; ?> <?php echo $radius; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="red" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
						<div class="f-slight col-6 col-lg-3 col-mdd-8 spacer text-right" style="font-size:18px; margin-right: 10px; line-height:45px; margin-bottom:122px;">
					 
									<div style="  font-size:26px; " class="fat">Inventory</div>
									<div class="fat">Inventori.in</div>
									 
									 
									<div class="">
										
										<span class="underlined">Requisition</span>,
										<span class="underlined">Indent</span>, 
										
										<span class="underlined">PO</span>,
										<span class="underlined">Stock</span>,
										<span class="underlined">Assets</span>
									</div>
									
										
									<div class="circlemore">
										<div class="square bg-green"></div> more...
									</div>
									
							 		
						</div>
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 " style="margin-bottom:122px;">
					 
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0  <?php echo $radius; ?>  <?php echo $radius; ?>">
									<circle r="<?php echo $radius; ?>" cx="0" cy="<?php echo $radius; ?>" fill="#00FF00" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					  
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 







					<div class="row">
					 
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
					
 	
						<div class="col-5 col-lg-2  col-mdd-3 " style="margin-bottom:122px;">
							
															
							<?php 
									 					 
							// blue 6035 - 6247 = 212
								// $radius = 230;
								$radius = 217;
								$diameter = $radius * 2;

 
							?>
							
							
							
							<div class=""> 


								 <svg  preserveAspectRatio="xMidYMid meet" viewBox="0 0 <?php echo $radius; ?> <?php echo $radius; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="blue" />
								</svg>   
					
					
							</div>
					
					
					
						</div>
					
					 
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px; margin-bottom:122px;">
					 
									
									<div style="  font-size:26px; " class="fat">Registrar Office</div>
									 
										<div class="">
											
											<span class="underlined">Records</span>, 
											<span class="underlined">Statutory liabilities</span>,
										  
										</div>
										
										 
										<div class="circlemore">
											<div class="square bg-red"></div> more...
										</div>
									
						</div>
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
						
 	
						<div class="col-5 col-lg-2  col-mdd-3 " style="margin-bottom:122px;">
					 
							
							<div class=""> 


								<svg preserveAspectRatio="xMidYMid meet" viewBox="0 0 <?php echo $radius; ?> <?php echo $radius; ?>">
									<circle r="<?php echo $radius; ?>" cx="<?php echo $radius; ?>" cy="<?php echo $radius; ?>" fill="red" />
								</svg>   
					 
					
							</div>
					
					
					
						</div>
					
					
					
						<div class="f-slight col-6 col-lg-2 col-mdd-8 spacer " style="font-size:18px; margin-left: 10px; line-height:45px; margin-bottom:122px;">
					 
									<div style="  font-size:26px; " class="fat">Custom Solutions</div> 
									 
									<div class="">
										
										<span class="underlined">Your ideas</span>
										<br>
										<span class="underlined">fly high with our API</span>, 
										
									</div>
									
										
									<div class="circlemore">
										<div class="square bg-red"></div> more...
									</div>
									
							 		
						</div>
					
					
						<div class="d-none d-sm-block col-lg-1  col-mdd-3 ">
						</div>
					
					  
					
					 
					
					</div> <!-- row concluded -->
	 
	 
	 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-12 col-lg-10 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading" >
						
								Facilitating compliance & accreditation
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator122;
				
				
				?>


 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 






						<div class="row">
						
							<div class="col-1 col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-10 col-lg-10 col-md-12 col-sm-12 text-center text-black bg-white spacer f-slight lh-45 f-18 " style="margin-bottom : 65px;">
														
								Comprehensive evaluation with accreditation agencies or compliance readiness scrutiny. Our applications define the journey and analytics for regular monitoring and tracking of any subside in the institution. Our application works a breeze for 
								institutions articulating standardization models as their culture to achieve excellence. We have worked with institutions of excellence to facilitiate the process of compliance and accreditation for the following agencies..	
						
							</div>
							
							<div class="col-1  col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>







							<div class="row"> 
							
							
							
		<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo1.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											NAAC 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo2.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->
										<div class="col-12 text-center fat"> 

											NBA
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
										
										
										
			<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo3.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12  text-center fat"> 
											AICTE 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo4.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											CBSE 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo5.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											CISCE
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
										
										
										
			<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo6.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											MHRD 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
							
							</div> <!-- end of row--> 





							<div class="row"> 
							
							
							
		<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo7.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											NCTE 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo8.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->
										<div class="col-12 text-center fat"> 

											MCI
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
										
										
										
			<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo9.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12  text-center fat"> 
											DCI 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo10.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											INC 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
	
	
	
	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo11.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											PCI
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
										
										
										
			<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo12.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											BTE 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
							
							</div> <!-- end of row--> 





							<div class="row"> 
							
							 




	<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo13.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											 UGC
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
										
										
										
			<!-- --------------------------------------------------------------------------------------------- --> 
								<div class="col-4 col-lg-2" style="margin-bottom:65px;">

									<div class="row"> 
										<div class="col-12"> 
											<img class="img-fluid" src="assets/images/logos/logo14.jpg" /> 
											
										</div> <!-- end of col-12 inside col-2 carrying image -->

										<div class="col-12 text-center fat"> 
											COA 
										</div> <!-- end of col-12 inside col-2 carrying name of image --> 
										
																		
										</div> <!--end of row for col-12 inside col-2 --> 
										
										</div> <!-- end of col-2 --> 
										
	<!-- --------------------------------------------------------------------------------------------- --> 
										
							
							</div> <!-- end of row--> 











 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator122;
				
				
				?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-12 col-lg-10 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading" >
						
								Services
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator122;
				
				
				?>


 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 






						<div class="row">
						
							<div class="col-1 col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-10 col-lg-10 col-md-12 col-sm-12 text-center text-black bg-white spacer f-slight" style="font-size:18px; line-height:45px;">
														
								Various citations and in our experience majority of LMS, ERP & learning technologies implementation service requirement, do not occur in technological complexity, standardization, compatibility etc., but in organizational and personnel centric issues. Our subject expert consultant services act as the guiding force. 
						
							</div>
							
							<div class="col-1  col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>

 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



					<?php
					
							
							echo $Separator65;
					
					
					?>
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




						<div class="row">
						
							<div class="col-1 col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-10 col-lg-10 col-md-12 col-sm-12 text-center text-black bg-white spacer f-slight fat f-26 lh-45"  >

								Inscribing problem areas

							</div>
							
							<div class="col-1  col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>

  

				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator65;
					
					
					?>

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



						<div class="row">
						
							<div class="col-1 col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
								
							<div class=" col-10 col-lg-10 col-md-12 col-sm-12  text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">

									
								<div class="col-12 col-lg-12 col-md-12 col-sm-12">
									Top risk factors for failure of implementation of education technologies, ERP 
								</div>
									
								<div class="col-12 col-lg-12 col-md-12 col-sm-12">
									LMS are classified as below : 
								</div>
														
							</div>
													
						</div>
								
							

						<div class="row">
							
							<div class="col-2 col-lg-2 col-md-1 col-sm-1 ">
						 							
							</div>
							
							
							<div class="f-18 f-slight spacer lh-45 col-10 col-lg-10 col-md-12 col-sm-12 ">
								
								<ol style="list-style-type: lower-alpha;">
									<li>organizational culture,</li>
									<li>incompatible business processes</li>
									<li>composition of project team members</li>
									<li>lack of effective project management methodology</li>
									<li>failure to get support from organization team</li>
									<li>lack of senior management commitment</li>
									<li>insufficient training of end users</li>
									<li>conflicts between departments</li>
									<li>failure to redesign business processes</li>
									<li>misunderstanding of change requirements</li>
									<li>resistance to change.</li>
								</ol>



							</div>
						
						  

						</div>
						
						  
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator65;
				
				
				?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class="f-26 col-12 col-lg-10 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight " >
						
								Remedial services matrix
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator65;
				
					// .square {
					  // border: 2px red solid;
					  // position: relative;
					  // width: 95px;
					  // height: 95px;
					// }

					// .square:after {
					  // content: "";
					  // display: block;
					  // padding-bottom: 100%;
					// }

					// .content {
					  // position: absolute;
					  // width: 100%;
					  // height: 100%;
					// }
				
				
				
				
				
				
				?>

		
		
			<style>
			
					.hollow-square { 
						border: 2px solid red;
						position: relative;
						text-align: center;
						width: 100px;
						height: 100px; 
					  }

					  .hollow-content {
						font-size: 2em;
						padding-top: 20%;
					  }
								
			
			</style>
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
 
	<style>    


        
				.box{
						width: 98px;
						height: 108px;
						/* opacity: 1;
						position: absolute;
						top: 7px;
						left: 7px;  */

						margin-top: 7px;
						margin-left: 7px;
						margin-bottom: 20px;

				}      


				.stack-content{
					
					/*   flex: 0 0 50px; */

				}     



				.rmbox{
				width: 164px;
				height:100%;
				/* 
				height: 38px;
						margin-top: 7px;
						margin-left: 7px;
						margin-bottom: 20px;
	*/
				/* 
					*/	
				
					opacity: 1;
					/* position: absolute; */
					position: relative;
					top: 7px;
					left: 7px; 
			display: flex;
					justify-content: center;
					align-items: center;
			
				}


				.cube-red
				{
					background: #ffffff;
					z-index: 1;
					border: 3px solid red;
				} 
	  


				.cube-green
				{
					background: #ffffff;
					z-index: 1;
					border: 3px solid #00ff00;
				} 
	  
	  

				.cube-blue
				{
					background: #ffffff;
					z-index: 1;
					border: 3px solid #0000ff;
				} 
	  
	  
	  
	</style>
<?php 
									
							
								// <div class="h ollow-square">
								 
								// </div> 


													
										function GetCards($StrokeColor)
										{
							
							
											return '							
														<div class="box '.$StrokeColor.'">
															<div class="box '.$StrokeColor.'">
																<div class="box '.$StrokeColor.'"></div>
															</div>
														</div>';
									
										}
							
							
													
										function GetCardsReadMore($StrokeColor, $DOMID)
										{
							
							
											return '							
														<div data-more="" class=" rmbox '.$StrokeColor.'">
															<div class="rmbox '.$StrokeColor.'"> 
																<div data-more="Read more..." id="'.$DOMID.'" class="cardpack stack-content">Read more...</div>
															</div>
														</div>';
									
										}
							
							
											
								// 3 cubes box stack overlap
								// READ MORE 
								// - width : 164 px, border 3 px, height - 38px; 
								
							
							 
								
							?>




						<div class="row">
						
							 
								 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 			

								<div class="row">
								
									
									<div class=" col-3 d-lg-none d-md-none d-sm-none "></div>
								
									
									<div style="padding-left: 15px;" class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
								
								
									<?php 
											
									
										// <div class="h ollow-square">
										 
										// </div> 
		 
										// 3 cubes box stack overlap
										// READ MORE 
										// - width : 164 px, border 3 px, height - 38px; 
										
									
									
									 
									
										echo GetCards('cube-red');
										
										
										
										
									?>
									

									</div>

									<?php 
									

										// <div class=" col-3 d-lg-none d-md-none d-sm-none "></div>
										
										// <div class=" col-2 d-lg-none d-md-none d-sm-none "></div>
										
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									
									<div class="<?php echo $RemedialHeadingClass; // class="lh-45 f-remedial-heading col-8 col-lg-8 col-md-12 col-sm-12 fat text-center text-sm-left text text-md-left text-lg-left text-black bg-white spacer f-slight ?>" >
								
								
								<?php
								
																
									$SeparatorRow['65'] = '<div class="row"><div class="col-12 d-lg-none">'.$Separator65.'</div></div>';
																
									$SeparatorRow['122'] = '<div class="row"><div class="col-12 d-lg-none">'.$Separator122.'</div></div>';
											
									$SeparatorRow['127'] = '<div class="row"><div class="col-12 d-lg-none">'.$Separator127.'</div></div>';
									
									
									echo $SeparatorRow['65'];
								
								
								?>
 
				 
										Analytics & strategy for outstanding e-learning experiences 
									
									</div>
									
										
									<?php 
									
										// <div class=" col-2 d-lg-none d-md-none d-sm-none "></div>
									  
									
										echo GetBlankDivCol(2); 
										
									?>

									
								
									
								</div>

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			

								<div class="row">
									
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
									
								 
									<div class=" <?php echo $RemedialTextClass; ?> "  >		

									
										Strategic planning for delivering courses through e-learning technologies require adoption of new policies, processes...
										 
										
											<div class="invisible" style="display:none;" id="remedialservice1text">

												 and culture. We provide you with a complete roadmap, strategy, analytical ability, devising a framework and holistic approach  towards creating unmatched e-learning experiences. 

											</div>
									
									</div>
									  
										
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
								</div>

									
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">

									<?php
										
										// <div class="d-none d-sm-block col-lg-3 col-md-1 col-sm-1 ">
																
										// </div>
										
										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>

										<div class=" col-6 col-lg-9 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">		 

												<?php											
														
													echo GetCardsReadMore('cube-red', 'remedialservice1');
																							
												?>

										</div>
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>



								</div>
									
									
							 
							</div>

								 
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  
  	 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 				
									
								<?php 
								
									// echo '<div class="row"><div class="col-12 d-lg-none">'.$Separator122.'</div></div>'; 
									echo $SeparatorRow['127']; 
									 
								?>


								<div class="row">
										
									
									<?php 
									
										echo GetBlankDivCol(3); 
										 
									?>

									<div style="padding-left: 15px;"  class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
									
											
										<?php 
										 
											echo GetCards('cube-green');
										
										?> 
										
									</div>
									
									
									
									<?php 
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									
									<div class="<?php echo $RemedialHeadingClass; ?> " > 
										
										<?php
										 
											
											echo $SeparatorRow['65'];
										
										
										?>
		 
				 
										Evolve academics with actionable data insights
									
									</div>
									
									
									
									<?php 
									
										echo GetBlankDivCol(2); 
										
									?>

									
							
								</div> 
		

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			
			
								<div class="row">
									
									
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
			
			
								 
									<div class=" <?php echo $RemedialTextClass; ?> "  >		
			 		
											
											We bring in the right perspective to drive efficacy of your implementation of technologies. We align the objective and ...

											<div class="invisible" style="display:none;" id="remedialservice2text">
											  do goal setting to derive actionable data, dig insights  and setup framework to assimilate information. As a result you have predictable insights and analytics to act and evolve your stakeholders. 

											</div>
									
									</div>
									
									 		
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
							
								</div>
		
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">
									
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>

										
									<div class=" col-6 col-lg-4 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">						
										
											<?php
											
													
													echo GetCardsReadMore('cube-green', 'remedialservice2');
											
											
											?>

									</div>
									 	
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>

			
							
								</div>

							 
									 
			
							
							</div>


 							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  

							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator122;
				
				
				?>

 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 

						<div class="row">
						
							 
								 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 			

								<div class="row">
									
									
									<?php 
									
										echo GetBlankDivCol(3); 
										 
									?>

									
									<div style="padding-left: 15px;" class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
								
								
									<?php 
								 
									
										echo GetCards('cube-blue');
										 
										
									?>
									

									</div>
									
									
									<?php 
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									<div class="<?php echo $RemedialHeadingClass; ?>"> 
												
												
										<?php
										 
											echo $SeparatorRow['65']; 
										
										?>
		 
						 
										Competency based education efficacy management
									
									</div>
									
										  
									
									
									<?php 
									
										echo GetBlankDivCol(2); 
										
									?>

									
									
								</div>

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			

								<div class="row">
								
								
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
								 						
								 
									<div class=" <?php echo $RemedialTextClass; ?> "  >		
			 		
				
										Delivering CBE requires radical & structural reforms in the environment and ecosystem of your organization...
										
										<div class="invisible" style="display:none;" id="remedialservice3text">
												Our services help you generate reports on readiness , financial feasibility, academic support, demand, quality assessment, regulatory authorization, HR, faculty & staff ownership to reveal the utilities & results with competency based education
										</div>
										
										
										
									</div>
									  
											
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
									
								</div>

									
							
									
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">
								
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>

									<div class=" col-6 col-lg-9 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">		 

											<?php
											
													
													echo GetCardsReadMore('cube-blue', 'remedialservice3');
											
											
											?>

									</div>
										
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


								</div>
									
									
							 
							</div>

								 
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  
  	 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 			
		 			
									
								<?php 
								
									// echo '<div class="row"><div class="col-12 d-lg-none">'.$Separator122.'</div></div>'; 
									echo $SeparatorRow['127']; 
									 
								?>


								<div class="row">
										
								
									
									<?php 
									
										echo GetBlankDivCol(3); 
										 
									?>


									<div style="padding-left: 15px;"  class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
									
											
										<?php 
										 
											echo GetCards('cube-red');
										
										?> 
										
									</div>
									
										
									
									<?php 
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									<div class="<?php echo $RemedialHeadingClass; ?>"> 
													
										<?php
										 
											echo $SeparatorRow['65']; 
										
										?>
		 
										Digital first marketing & strategies for enrollments
									
									</div>
									
							
									
									<?php 
									
										echo GetBlankDivCol(2); 
										
									?>

									
								</div> 
		

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			
			
								<div class="row">
									
									
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
									
									
						
								 
									<div class=" <?php echo $RemedialTextClass; ?> ">		
			 		
								
											
											An enormous market potential, an equivalent competitive streak & altruistic ideals riding on an aggresive marketing and 
											
											<div class="invisible" style="display:none;" id="remedialservice4text">
												
												research strategy act as a beacon to attract the right students and their retention. Our services for enrollment help you manage your branding, sales and marketing activities with followups, analytics, decision making tools, engagement etc. Our services include website design, development, SEO, creatives, media planning, buying, social media planning, content strategy and viability research.

											</div>
									
									 
									</div>
									
									 		
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
							
								</div>

	
									
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">
								
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


										
									<div class=" col-6 col-lg-4 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">						
										
											<?php
											
													
													echo GetCardsReadMore('cube-red', 'remedialservice4');
											
											
											?>

									</div>
									 
			
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


							
								</div>

							 
									 
			
							
							</div>


 							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  

							
						</div>


 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $Separator122;
				
				
				?>

 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 


 



						<div class="row">
						
							 
								 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 			

								<div class="row">
									
									
									<?php 
									
										echo GetBlankDivCol(3); 
										 
									?>

									
									<div style="padding-left: 15px;" class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
								
								
									<?php 
											
									
										// <div class="h ollow-square">
										 
										// </div> 
		 
										// 3 cubes box stack overlap
										// READ MORE 
										// - width : 164 px, border 3 px, height - 38px; 
										
									
									
									 
									
										echo GetCards('cube-green');
										
										
										
										
									?>
									

									</div>
										
									
									<?php 
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									<div class="<?php echo $RemedialHeadingClass; ?>"> 
										
											
										<?php
										 
											echo $SeparatorRow['65']; 
										
										?>
		 
										Student attrition research to student retention<?php // & engagement ?>
									
									</div>
									
										  
									
									<?php 
									
										echo GetBlankDivCol(2); 
										
									?>

									
									
									
								</div>

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			

								<div class="row">
								
									
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
									
									
									
									<div class=" <?php echo $RemedialTextClass; ?> ">		
			 		
										Majority of institutions have to face drastic student attrition rates. The inability of student to identify the environment they are 
										
											<div class="invisible" style="display:none;" id="remedialservice5text">
												
												dealing with, failed motivation, isolation, pace, inability to cope, bleak ideas for career prospects & financial health are some of the factors  responsible for attrition. Our dashboard, tools and tech are aligned to provide you with analytical and predictive reports to identify gap in subject competency, lack of interest, proactiveness, engagement, conseling, outreach etc. during data based decisions to improve student retention. 
											
											</div>
									
									</div>
									
									  
											
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
									
								</div>

									
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">
								
								
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


									<div class=" col-6 col-lg-9 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">		 

											<?php
											
													
													echo GetCardsReadMore('cube-green', 'remedialservice5');
											
											
											?>

									</div>
									
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


								</div>
									
									
							 
							</div>

								 
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  
  	 
							<div class="col-12 col-lg-5 col-md-6 col-sm-6">
						 					
									
								<?php 
								
									// echo '<div class="row"><div class="col-12 d-lg-none">'.$Separator122.'</div></div>'; 
									echo $SeparatorRow['127']; 
									 
								?>



								<div class="row">
										
											
									
									<?php 
									
										echo GetBlankDivCol(3); 
										 
									?>
 

									<div style="padding-left: 15px;"  class=" col-6 col-lg-4 col-md-12 col-sm-12 fat text-left text-black bg-white spacer f-slight f- " >
									
											
										<?php 
										 
											echo GetCards('cube-blue');
										
										?> 
										
									</div>
									
										
									
									<?php 
									
										echo GetBlankDivCol(3); 
										
										echo GetBlankDivCol(2); 
										
									?>

									<div class="<?php echo $RemedialHeadingClass; ?>"> 
													
										<?php
										 
											echo $SeparatorRow['65']; 
										
										?>
		 
										HR augmentation, training & certfications
									
									</div>
									
							
									
									<?php 
									
										echo GetBlankDivCol(2); 
										
									?>

									
								</div> 
		

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			
			
								<div class="row">
									
								
									<?php 
									
										echo GetBlankDivCol(1, 0, 0, 2); 
										 
									?>
									
									
									
									<div class=" <?php echo $RemedialTextClass; ?> ">		
			 		
					
					
											Our services for training and modules for holistic development of faculty and staff help your personnel achieve tech oriented...
											
											<div class="invisible" style="display:none;" id="remedialservice6text">
												 approach. Resulting in improved & efficient processes and procedures. We take up the faculty and staff go through extensive virtual activity based sessions to identify barriers in delivering quality education to their students.
											</div>
											
									</div>
									
									 		
									<?php 
									
										echo GetBlankDivCol(1); 
										 
									?>
									
							
								</div>

	
									
									
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				  

								<?php
								
										
										echo $Separator65;
								
								
								?>
 
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 


								<div class="row">
								
									
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>

 		
										
									<div class=" col-6 col-lg-4 col-md-12 col-sm-12 text-left text-black bg-white spacer f-slight  " style="font-size:18px; line-height:45px;">						
										
											<?php
											
													
													echo GetCardsReadMore('cube-blue', 'remedialservice6');
											
											
											?>

									</div>
									 
										
									<?php 

										echo GetBlankDivCol(3, 0, 0, 3);
								
									?>


			
							
								</div>

							 
									 
			
							
							</div>


 							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
							  

							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
	 
	  
	  
					<?php
					
							
							echo $Separator127;
					
					
					?>

	 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div style="margin-bottom:65px; " class=" col-12 col-lg-10 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading" >
						
								Technologies & Architecture
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						echo $TextSeparator122;
				
				
				?>


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class="lh-45 f-18 col-12 col-lg-10 col-md-12 col-sm-12 text-center text-black bg-white spacer f-slight " >
						
								
								We are a core education technology company. Our products are a perspective to our vision for wider acceptability of education and measurement of quantifiable impact on people for whom education will be the change. We have created an environment for cultivating & nurturing technological talent, to explicitly making its application for education. 
 
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						// echo $Separator122;
				
				
				?>




				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

  
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-------------------------- cube design --------------------------> 
 
 
 
									<style>  
													
													
												.height-cube-row 
												{
												
													height:61px;

												}


									</style> 
 
							
							


						<div class="row">
						 	 
									 
							<div class=" col-lg-5 col-md-1 col-sm-1 ">
								

								<div class="row">
									<div class="col-12" style="margin-top:122px; "></div>
								</div>

								
								<div class="row" >  
								 
													  

									<div class="col-2 d-lg-none" > 
									</div>
									
									<div class="col-6 col-lg-5" style="margin-bottom:65px; "> 
									
									
										<div class="row height-cube-row"> 
										
											
											<div class="col-2"> 
											</div> 
											
											<div class="col-4" style="background-color:red;"  > 
											
											</div> 
											
											<div class="col-4" style="background-color:#00ff00;"> 
											
											</div> 
											
											<div class="col-2"> 
											</div> 
										
										
										</div> <!-- end of row inside col-2 --> 
													
										
										<div class="row height-cube-row"> 
										
											
											<div class="col-2"> 
											</div> 
											
											<div class="col-4"   > 
											
											</div> 
											
											<div class="col-4" style="background-color:red;"> 
											
											</div> 
											
											<div class="col-2"> 
											</div> 
										
										
										</div> <!-- end of row inside col-2 --> 
										
										
									
									</div>
									
									
									
									<div class="col-2 d-lg-none" > 
									</div>
									
									<div style="margin-bottom:65px; " class="lh-45 fat f-tech-heading col-12 col-lg-6 col-md-12 col-sm-12  text-black bg-white spacer f-slight text-center text-lg-left">
								
										Cognitive bot answers all your queries
									
									</div>
									
								</div>


								<div class="row">
								
									<div class="col-2 col-lg-2 col-md-1 col-sm-1 ">
															
									</div>
								
									<div  class="f-18 lh-45 col-8 col-lg-10 col-md-12 col-sm-12  text-black bg-white spacer f-slight text-center text-lg-left" >
									
										Empower your team and customers with our powerful cognitive bot, getting accurate answers, solving problems at pace and building resilience. Predictive analytics, 
									
									
										<div class="invisible" style="display:none;" id="tech-readmore1text">
									
											data curation, meaningful results and threat alarms give you advanced insights for a better business.  
								
										</div>
									
									 
									
									</div>
									
									 
								
								</div>
	golu

				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
					  


									<?php
									
											
											echo $Separator65;
									
									
									?>
	 

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
				 
				 
				 


						<?php
								 
								 
							/* 	
								 
								<div class="row" >
								
												
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
											
									<div id="tech-readmore1" data-more="read more" class="tech-readmore f-18 col-6 col-lg-4 col-md-6 col-sm-6 text-center text-white bg-red spacer f-slight p-2 " >
									
										read more
									
									</div>
									
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

							*/
								 
								 
						?>
	 		
				 
								<div class="row">
								
												
									<div class=" col-3 col-lg-2 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
										 
									<?php echo GetTechArchitectureReadMoreButton(2, 'red', 'blue'); ?>
									
									
									
									
									<div class=" col-3 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

								
							</div>
	
									 
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
						  
								  
								  
								  
							<div class="col-12 col-lg-5 col-md-1 col-sm-1 ">
								
								<div class="row">
									<div class="col-12" style="margin-top:122px; "></div>
								</div>
								

								<div class="row">
									<div class="col-2 d-lg-none"> 
									</div>
												
									<div class=" col-6 col-lg-5 " style="margin-bottom:65px; " > 
											
											<div class="row height-cube-row"> 
										
											
												<div class="col-2"> 
												</div> 
												
												<div class="col-4" style="background-color:blue;"  > 
												
												</div> 
												
												<div class="col-4" style="background-color:#00ff00;"> 
												
												</div> 
												
												<div class="col-2"> 
												</div> 
											
										
											</div> <!-- end of row inside col-2 --> 
										
											
											
											<div class="row height-cube-row"> 
											
												
												<div class="col-2"> 
												</div> 
												
												<div class="col-4"   > 
												
												</div> 
												
												<div class="col-4" style="background-color:blue ;"> 
												
												</div> 
												
												<div class="col-2"> 
												</div> 
											
											
											</div> <!-- end of row inside col-2 --> 
											
												 
										</div> 
						
									<div class="col-4 d-lg-none"> 
									</div>
									
									<div class="col-2 d-lg-none"> 
									</div>
										 
									<div style="margin-bottom:65px; " class="lh-45 fat f-tech-heading col-8 col-lg-6 col-md-12 col-sm-12 text-black bg-white spacer f-slight text-center text-lg-left " >
								
										AI powered for data science
									
									</div>
									
									
									<div class="col-2 d-lg-none"> 
									</div>
									
									
								</div>

 
								
								<div class="row">
								
									<div class=" col-2 col-lg-2 col-md-1 col-sm-1 ">
															
									</div> 
									
									
									<div class="f-18 lh-45 col-8 col-lg-10 col-md-12 col-sm-12  text-black bg-white spacer f-slight text-center text-lg-left" >
										Converging your big data for creating machine learning models that can predict brand recognition, number of prospective students and... 
									
										<div class="invisible" style="display:none;" id="tech-readmore2text">
										
											 provide insights upon the quality screening of students. Recognizing  learning patterns & behavior of diverse learners and providing insights and approach for learning & pedagogy. 
								
										</div>
									
									</div>
								 
								 
								</div>
	
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
					  


									<?php
									
											
											echo $Separator65;
									
									
									?>
	 

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
					<?php 
				 
						/*
								<div class="row">
								
												
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
											
									<div id="tech-readmore2" data-more="read more" class="tech-readmore f-18 col-6 col-lg-4 col-md-6 col-sm-6 text-center text-white bg-blue spacer f-slight p-2 " >
									
										read more
									
									</div>
									
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

								
								  */
								
						
						?>
	 		
				 
				 
								<div class="row">
								
												
									<div class=" col-3 col-lg-2 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
										 
									<?php echo GetTechArchitectureReadMoreButton(1, 'red', 'blue'); ?>
									
									
									
									
									<div class=" col-3 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>


								
							</div>
	
								
						 

						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						// echo $Separator122;
				
				
				?>



				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
	


						<div class="row">
						 	 
									 
							<div class=" col-lg-5 col-md-1 col-sm-1 ">
							
							
							
								<div class="row">
									<div class="col-12" style="margin-top:122px; "></div>
								</div>
																					 


								<div class="row">
								 

									<div class="col-6 col-lg-5" style="margin-bottom:65px; " > 
									
									
										<div class="row height-cube-row"> 
										
											
											<div class="col-2"> 
											</div> 
											
											<div class="col-4" style="background-color:red;"  > 
											
											</div> 
											
											<div class="col-4" style="background-color:#00ff00;"> 
											
											</div> 
											
											<div class="col-2"> 
											</div> 
										
										
										</div> <!-- end of row inside col-2 --> 
													
										
										<div class="row height-cube-row"> 
										
											
											<div class="col-2"> 
											</div> 
											
											<div class="col-4"   > 
											
											</div> 
											
											<div class="col-4" style="background-color:red;"> 
											
											</div> 
											
											<div class="col-2"> 
											</div> 
										
										
										</div> <!-- end of row inside col-2 --> 
										
										
									
									</div>
									
									<div class="lh-45 fat f-tech-heading col-3 col-lg-6 col-md-12 col-sm-12  text-black bg-white spacer f-slight " >
								
										Framework : Scalable, secure, agile
									
									</div>
									
								</div>


								<div class="row">
									<div class="col-12" style="margin-top:65px; "></div>
								</div>
								
								<div class="row">
								
									<div class="d-none d-sm-block col-lg-2 col-md-1 col-sm-1 ">
															
									</div>
								 
									<div class="f-18 lh-45 col-3 col-lg-10 col-md-12 col-sm-12  text-black bg-white spacer f-slight " >
									
								   Our framework a legacy of 14 years, stood tall through treacherous waves of load, evolving technologies, 
									
									
										<div class="invisible" style="display:none;" id="tech-readmore3text">
									
											changing business dynamics and a trail of logical & pragmatic technical upgrades and advancements.   
								
										</div>
									
									 
									
									</div>
									
									 
								
								</div>
	

				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
					  


									<?php
									
											
											echo $Separator65;
									
									
									?>
	 

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
			

									<?php
										 
								/* 
				 
								<div class="row">
								
												
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
											
									<div id="tech-readmore3" data-more="read more" class="tech-readmore f-18 col-6 col-lg-4 col-md-6 col-sm-6 text-center text-white bg-red spacer f-slight p-2 " >
									
										read more
									
									</div>
									
									
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

								
								  */
								
						
									?>
	 		
				 
								<div class="row">
								
												
									<div class=" col-6 col-lg-2 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
										 
									<?php echo GetTechArchitectureReadMoreButton(3, 'red', 'blue'); ?>
									
									
									
									
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

								
								
								
								
								
							</div>
	
									 
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
													
							</div>
						  
								  
								  
								  
							<div class=" col-lg-5 col-md-1 col-sm-1 ">


								<div class="row">
									<div class="col-12" style="margin-top:122px; "></div>
								</div>
																

								<div class="row">
								
												
									<div class=" col-3 col-lg-5"  style="margin-bottom:65px; "> 
											
											<div class="row height-cube-row"> 
										
											
												<div class="col-2"> 
												</div> 
												
												<div class="col-4" style="background-color:blue;"  > 
												
												</div> 
												
												<div class="col-4" style="background-color:#00ff00;"> 
												
												</div> 
												
												<div class="col-2"> 
												</div> 
											
										
											</div> <!-- end of row inside col-2 --> 
										
											
											
											<div class="row height-cube-row"> 
											
												
												<div class="col-2"> 
												</div> 
												
												<div class="col-4"   > 
												
												</div> 
												
												<div class="col-4" style="background-color:blue ;"> 
												
												</div> 
												
												<div class="col-2"> 
												</div> 
											
											
											</div> <!-- end of row inside col-2 --> 
											
												 
										</div> 
						
						
										 
										<div class="lh-45 fat f-tech-heading col-3 col-lg-7 col-md-12 col-sm-12  text-black bg-white spacer f-slight " >
									
											<?php // Blockchain: trust & reliability for financial models ?>
											
											Blockchain for financial models
										
										</div>
									
									</div>

								<div class="row">
									<div class="col-12" style="margin-top:65px; "></div>
								</div>
								

								<div class="row">
								
									<div class="d-none d-sm-block col-lg-2 col-md-1 col-sm-1 ">
															
									</div>
								 
									<div class="f-18 lh-45 col-3 col-lg-10 col-md-12 col-sm-12  text-black bg-white spacer f-slight " >
										 
										 Our advanced solutions for creating distributed ledgers with blockchain help build immutable, verified and trustless use cases. 
										 
										 
										<div class="invisible" style="display:none;" id="tech-readmore2text">
										
											 provide insights upon the quality screening of students. Recognizing  learning patterns & behavior of diverse learners and providing insights and approach for learning & pedagogy. 
								
										</div>
									
									</div>
								 
								 
								</div>
	
				 
								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
					  


									<?php
									
											
											echo $Separator65;
									
									
									?>
	 

								<!----------------------------------------------------------------->
								<!----------------------------------------------------------------->
								<!-----------------------------------------------------------------> 
				 
				 
				 
				 
								<div class="row">
								
												
									<div class=" col-6 col-lg-2 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
											
										 
									<?php echo GetTechArchitectureReadMoreButton(4, 'red', 'blue'); ?>
									
									
									
									
									<div class=" col-6 col-lg-3 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									
									</div>
									
								</div>

								
							</div>
	
								
						 

						</div>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 





 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
				
						
						// echo $Separator122;
				
						/*
				?>

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
				 
								<div class="row">
								
												
									<div class=" col-6 col-lg-1 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
												
									<div class="lh-45 f-18 col-6 col-lg-10 col-md-6 col-sm-6  text-center text-black bg-white spacer f-slight " >
									   
																				
										Services & support comprise the most essential components of a company, 
										application and team. Services for our applications are delivered through essential documentation, email support and a dedicated or shared account manager.
										<center class="fat">OUR SERVICE ARCHITECTURE</center>
										
										Our <span class="fat">SAAS</span> based delivery model ensures automated reporting of errors on 
										occurance. <br>Which ensue fast paced resolution. 
										
										<br>Our <span class="fat">cloud services</span> are built in stealth mode with strict compliance to major 
										protocols. 
										
										<br>For mission critical applications, critical data and cyber crime we have an array of solutions with advanced <span class="fat">computing architecture</span>.  
										
										<br>Our <span class="fat">framework</span>, a legacy of 14 years, stood tall through trecherous waves of load, evolving technologies, changing business 
										dynamics and a trail of logical & technical upgrades and advancements.
										 
		
									</div>
									
									
									
									<div class=" col-6 col-lg-1 col-md-6 col-sm-6 text-center text-black bg-white spacer f-slight " >
									 
									</div>
									
									
								</div>
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<?php
						*/
						
						// echo $Separator122;
				
				
				?>

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
			 
			 
			 
				 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!------------------------parallelogram ----------------------------------------->
				 
	 
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 



								<div class="row">
									<div class="col-12" style="margin-top:122px; "></div>
								</div>
								


						<div class="row">
						
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
							<div class=" col-12 col-lg-10 col-md-12 col-sm-12 fat text-center text-black bg-white spacer f-slight f-heading" >
						
								Cyber Security: building resilience
							
							</div>
							
							<div class="d-none d-sm-block col-lg-1 col-md-1 col-sm-1 ">
						 							
							</div>
							
						</div>

  
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator122;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 




				<style>
 


						.parallelogram {


							width: 74px;
							
							height: 155px;
							
							transform: skew(0,-27deg);
							/* 
							background: #0000ff;
							
 */

						}



						.height-row
						{

							height:207px;

						}




						.heading-book
						{


							font-size:26px;
							
							font-weight: bold;
							
							font-family:Helvetica;
							
							line-height: 45px;
							
							letter-spacing: 0.2em;
							

						}

 


				</style>






	<div class="row">
		 
				 
		<div class=" col-lg-6 col-md-1 col-sm-1 ">
								

				<div class="row height-row" style="margin-left:20px;">




				<!-- beginning of book design -->


					<div class="col-2"  >


						<div class="row">


							<div class="col-12 "  style="padding-top:30px; padding-left:15px;">

								<div class="parallelogram bg-red">

								</div>

							</div>


						</div> <!-- end of row  -->




					</div> <!-- end of col-1 -->




								<div class="col-2 ">

									<div class="row height-row" >

										<div class="col-8" >

											<div class="row height-row">


													<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: blue; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" >

													</div>

												</div> <!-- end of row -->


											</div> <!-- end of col-8 -->



												<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

												</div>


												<div class="col-1" >

												</div>


												<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

												</div>


												<div class="col-1" >

												</div>


												<div  class="col-1 ">
 
												</div> <!-- end of col-1 -->



										</div> <!--end of row -->



									</div>

							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->



						<div class="col-3 heading-book" >
						
							Managed Security Services
						 
						</div>


 		 
			</div>

 		 					

 		 					<div class="row" style="height: 44px;" >

							</div>


						<div class="row">			
									

							<div class="col-8 col-lg-2 lh-45 f-18 spacer f-slight" >
										
							</div>
					
					
					
							<div class="col-8 col-lg-8 lh-45 f-18 spacer f-slight" >
								Threat management is of utmost importance before going online. We build resilience for recovery within 24 hours and strive proactively for engineering practices	

		
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator65;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ---------------------------> 
 
							
											<div class="row">			
											
													<div id="cyber-readmore1" data-more="read more" class="cyber-readmore f-18 col-6 col-lg-6 col-md-6 col-sm-6 text-center text-black spacer f-slight p-2 " >
													
														<div class="row">
															<div class="col-3">
															
															
																<div class="row" style=" margin-top: 8px; ">

																	<div class="col-2" style="background-color: #00ff00; height: 33px;">

																	</div>

																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: blue; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: red; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	
																</div>
																	
															</div> 
													
													
															<div class="fat spacer f-slight col-9">read more</div>
														
														
														</div>
														
														
													</div>
											</div>
											
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ends ---------------------------> 
 
											
							</div>
					
										
						</div>


										
		</div>



			<!-- end of half -->


 
		 
		 
		 
		 
		 
		<div class=" col-lg-6 col-md-1 col-sm-1 ">
								

				<div class="row height-row" style="margin-left:20px;">


			<!-- beginning of book design -->


			<div  class="col-2"  >
 

					<div class="row">


						<div  class="col-12 "  style="padding-top:30px; padding-left:15px;">
	 
							<div class="parallelogram bg-green"  >

							</div>

						</div>
 


					</div> <!-- end of row  -->
 


			</div> <!-- end of col-1 -->
			 



					<div class="col-2">

						<div class="row height-row" >

								<div class="col-8" >

									<div class="row height-row">


										<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: blue; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" >

										</div>



									</div> <!-- end of row -->


								</div> <!-- end of col-8 -->


								<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

								</div>


								<div class="col-1" >

								</div>


								<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

								</div>


								<div class="col-1" >

								</div>


								<div  class="col-1 ">


								</div> <!-- end of col-1 -->




						</div> <!--end of row -->



			</div>

			<!-- end of book design -->




						<div class="col-3 heading-book" >
							Identity Services
						</div>


	</div>

 		 					<div class="row" style="height: 44px;" >

							</div>


						<div class="row">			
									
							<div class="col-8 col-lg-2 lh-45 f-18 spacer f-slight" >
										
							</div>
					

							<div class="col-8 col-lg-8 lh-45 f-18 spacer f-slight" >
								
								Identity governance is the most effective way to secure your application from digital risks. Define roles and monitor access enpowering your students and staff with
						 		
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator65;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
							
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ---------------------------> 
 
							
											<div class="row">			
											
													<div id="cyber-readmore1" data-more="read more" class="cyber-readmore f-18 col-6 col-lg-6 col-md-6 col-sm-6 text-center text-black spacer f-slight p-2 " >
													
														<div class="row">
															<div class="col-3">
															
															
																<div class="row" style=" margin-top: 8px; ">

																	<div class="col-2" style="background-color: #00ff00; height: 33px;">

																	</div>

																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: blue; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: red; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	
																</div>
																	
															</div> 
													
													
															<div class="fat spacer f-slight col-9">read more</div>
														
														
														</div>
														
														
													</div>
											</div>
											
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ends ---------------------------> 
 
											
							</div>
					
										
						</div>
 
								 


			</div>  

	

			<!-- end of half -->


 
		 				 
										
		</div>



			<!-- end of row -->

    


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator122;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 





	<div class="row">
		 
				 
		<div class=" col-lg-6 col-md-1 col-sm-1 ">
								

				<div class="row height-row" style="margin-left:20px;">




				<!-- beginning of book design -->


					<div class="col-2"  >


						<div class="row">


							<div class="col-12 "  style="padding-top:30px; padding-left:15px;">

								<div class="parallelogram bg-blue">

								</div>

							</div>


						</div> <!-- end of row  -->




					</div> <!-- end of col-1 -->




								<div class="col-2 ">

									<div class="row height-row" >

										<div class="col-8" >

											<div class="row height-row">


													<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: blue; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" >

													</div>

													<div class="col-1" >

													</div>

												</div> <!-- end of row -->


											</div> <!-- end of col-8 -->



												<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

												</div>


												<div class="col-1" >

												</div>


												<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

												</div>


												<div class="col-1" >

												</div>


												<div  class="col-1 ">
 
												</div> <!-- end of col-1 -->



										</div> <!--end of row -->



									</div>

							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->
							<!-- end of book design -->



						<div class="col-3 heading-book" >
						
							Cloud protection
						 
						</div>


 		 
			</div>

 		 					<div class="row" style="height: 44px;" >

							</div>


						<div class="row">			
									

							<div class="col-8 col-lg-2 lh-45 f-18 spacer f-slight" >
										
							</div>
					
					
					
							<div class="col-8 col-lg-8 lh-45 f-18 spacer f-slight" >
								Threat management is of utmost importance before going online. We build resilience for recovery within 24 hours and strive proactively for engineering practices	
								
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator65;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ---------------------------> 
 
							
											<div class="row">			
											
													<div id="cyber-readmore1" data-more="read more" class="cyber-readmore f-18 col-6 col-lg-6 col-md-6 col-sm-6 text-center text-black spacer f-slight p-2 " >
													
														<div class="row">
															<div class="col-3">
															
															
																<div class="row" style=" margin-top: 8px; ">

																	<div class="col-2" style="background-color: #00ff00; height: 33px;">

																	</div>

																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: blue; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: red; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	
																</div>
																	
															</div> 
													
													
															<div class="fat spacer f-slight col-9">read more</div>
														
														
														</div>
														
														
													</div>
											</div>
											
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ends ---------------------------> 
 
											
											
							</div>
					
										
						</div>


										
		</div>



			<!-- end of half -->


 
		 
		 
		 
		 
		 
		<div class=" col-lg-6 col-md-1 col-sm-1 ">
								

				<div class="row height-row" style="margin-left:20px;">


			<!-- beginning of book design -->


			<div  class="col-2"  >
 

					<div class="row">


						<div  class="col-12 "  style="padding-top:30px; padding-left:15px;">
	 
							<div class="parallelogram bg-red" >

							</div>

						</div>
 


					</div> <!-- end of row  -->
 


			</div> <!-- end of col-1 -->
			 



					<div class="col-2">

						<div class="row height-row" >

								<div class="col-8" >

									<div class="row height-row">


										<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: blue; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: red; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" style="background-color: #00ff00; margin-top:11px; height: 155px;">

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" >

										</div>

										<div class="col-1" >

										</div>



									</div> <!-- end of row -->


								</div> <!-- end of col-8 -->


								<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

								</div>


								<div class="col-1" >

								</div>


								<div class="col-1" style="background-color: white; margin-top:11px; height: 155px;">

								</div>


								<div class="col-1" >

								</div>


								<div  class="col-1 ">


								</div> <!-- end of col-1 -->




						</div> <!--end of row -->



			</div>

			<!-- end of book design -->




						<div class="col-3 heading-book" >
							Security assessment & Testing
						</div>


	</div>

 		 					<div class="row" style="height: 44px;" >

							</div>

						<div class="row">			
									
							<div class="col-8 col-lg-2 lh-45 f-18 spacer f-slight" >
										
							</div>
					

							<div class="col-8 col-lg-8 lh-45 f-18 spacer f-slight" >
								
								Identity governance is the most effective way to secure your application from digital risks. Define roles and monitor access enpowering your students and staff with
						 
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator65;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ---------------------------> 
 
							
											<div class="row">			
											
													<div id="cyber-readmore1" data-more="read more" class="cyber-readmore f-18 col-6 col-lg-6 col-md-6 col-sm-6 text-center text-black spacer f-slight p-2 " >
													
														<div class="row">
															<div class="col-3">
															
															
																<div class="row" style=" margin-top: 8px; ">

																	<div class="col-2" style="background-color: #00ff00; height: 33px;">

																	</div>

																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: blue; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	<div class="col-2" style="background-color: red; height: 33px;">

																	</div>
 
																	<div class="col-1" >

																	</div>
 

																	
																</div>
																	
															</div> 
													
													
															<div class="fat spacer f-slight col-9">read more</div>
														
														
														</div>
														
														
													</div>
											</div>
											
 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
				<!--------------------------read more ends ---------------------------> 
 
											
							</div>
					
										
						</div>
 
								 


			</div>  

	

			<!-- end of half -->


 
		 				 
										
		</div>


			


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 




					<?php
					
							
							echo $Separator122;
					
					
					?>


 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 







			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->
			<!-- end of row of Cyber Security -->

    






 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 

 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 
 
 

			<?php
					
					
		
					// echo '<div class="row">';
	
 
	
					// echo '<div class="col-lgg-1"> </div> <!-- col3 concluded -->'; // bg-warning
	 
	 
	 
			?>
 


				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 

   

					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
			

 
	  
	  
	  
					<center><h3>BEGINNING OF FOOTER CONTENT</h3></center>
	  

					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div>
					<div class="separator122"></div> 
	 
				<!----------------------------------------------------------------->
				<!----------------------------------------------------------------->
				<!-----------------------------------------------------------------> 


 


			</div> <!-- end of container -->


			<!----------------------------------------------------------------->
			<!----------------------------------------------------------------->
			<!-----------------------------------------------------------------> 

<!-------
				<div class="container" >
									 
					

					 
					 
					 
				</div>
					
	 


---> 
 
					


	</div>
    <!-- Jquery and Js Plugins -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/feather.js"></script>
    <script src="assets/js/operations.js"></script>


  </body>
</html>

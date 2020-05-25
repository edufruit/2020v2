 
	  feather.replace()
 
	
		
			$().ready(function(){
				
				// $('#chalo1').html('return to a former or less developed state.');
				
				
			 				$('#regress').bind( "onfocus", function(event, ui) {
					alert(1);
					
					
				});
				
				
				$('#chalo, #chalo1').css('display', 'none');
				
				
				window.addEventListener('scroll', function() {
					var element = document.querySelector('#regress');
					var position = element.getBoundingClientRect();
					
					
					// alert(position.top);

					// detecting if element is fully visible
					if(position.top < 400 && position.bottom <= window.innerHeight) {
						// fully visible
						// alert('visible');
						
						
						
						$('#chalo, #chalo1').css('display', '');
				
						$('#chalo, #chalo1').css('animation-play-state', 'running');
						
						// $('#chalo, #chalo1').removeClass('invisible');
					} 
					var element1 = document.querySelector('#logo-edufruit');
					var element2 = document.querySelector('#logo-small-edufruit');
					// var position1 = element1.getBoundingClientRect(); 	
					
					// alert(position1.top);

					// detecting if element is fully visible
					// if( $(element1).css('display', 'none')  &&  position1.top > 100 && position1.bottom <= window.innerHeight) {
					if( document.body.scrollTop > 100  || document.documentElement.scrollTop > 100 ) {
						// fully visible
						// alert('visible');
						
						
						
						// $(element1).css({'opacity':'0', 'visibility':'hidden'});
						// $(element1).css({'opacity':'0', 'visibility':'invisible'});
						// $(element2).css({'opacity':'1', 'visibility':''});
						// $(element2).css({'opacity':'1', 'visibility':'visible'});
						// $(element1).children('img').css('height', '12px');
						// $(element1).css('height', '12px');
						// $(element2).fadeIn();
							
							
							
							// $(element1).css('display', 'none');
							$(element1).addClass(' rotateOutUpLeft');
							
							// $(element2).fadeIn();
							// $(element2).animate('bounce');
							// $(element2).animate({'height':'100%'}).css('display', '');
							$(element2).css('display', '');

					}
					else{
						
						if( document.body.scrollTop < 100 || document.documentElement.scrollTop < 100) {
 						
 						
							$(element1).removeClass(' rotateOutUpLeft');
							
							$(element1).addClass('rotateInDownLeft');
							
							$(element2).css('display', 'none');
					 
						}	
				 
					}
				 
				});
				
				
					
			
				
				
				
				
				
				// var expandtext = '#bridgemoretext';
				
		
				
				$('.more, .cardpack, .tech-readmore').click(function(){

					// alert($(this).attr('id'));
					
					expander('#'+$(this).attr('id'), '#' + $(this).attr('id')+'text' );
					
				});
					
				
			});
			
			
			function expander(buttonid, textid)
			{
				/* 
				   var myStr = "The quick brown fox jumps over the lazy dog.";
						var subStr = myStr.match("quick(.*)lazy");
						alert(subStr[1]);
										
				$('#bridgemore').click(function(){
					
					
					
					 if( $(expandtext).attr('class') == 'invisible' )
					 {
						 
						 $(expandtext).attr('class', 'visible');
						 
						 // $('expandtext').css('display', '');
						 $(expandtext).slideDown();
						 
						 $(this).html('<i data-feather="chevron-up"></i>less');
						 feather.replace();
					 }
					 else
					 {
						
						if( $(expandtext).attr('class') == 'visible' )
						{
						 
							 $(expandtext).attr('class', 'invisible');
							 
							 // $(expandtext).css('display', 'none');
								$(expandtext).slideUp();
						 
							 
							 $(this).html('more...');
							 
						 }

					 }
						// if($(expandtext).attr('class', 'visible'))
					
					
					
				});
				
		 */
					
					
					 if( $(textid).attr('class') == 'invisible' )
					 {
						 
						 $(textid).attr('class', 'visible');
						 
						 // $('textid').css('display', '');
						 $(textid).slideDown();
						 
						 $(buttonid).html('<i data-feather="chevron-up"></i><div>less</div>');
						 feather.replace();
					 }
					 else
					 {
						
						if( $(textid).attr('class') == 'visible' )
						{
						 
						 
							var myattr = $(buttonid).attr('data-more');
								
															// alert(myattr);
														// alert($(buttonid).html());
					
							$(textid).attr('class', 'invisible');
						 
							// $(textid).css('display', 'none');
													$(textid).slideUp();
					 
					 
							if(typeof myattr !== typeof undefined && myattr !== false )
							{
								$(buttonid).html(myattr);
							}
							else
							{
								$(buttonid).html('more...');
							}
						
							 
						 }

					 }
						 
		
			 }
			
			
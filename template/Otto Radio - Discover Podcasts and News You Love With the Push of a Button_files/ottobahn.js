var isHomePage = false;
var $ = jQuery.noConflict();

	function socialClick(href) {
	    var x = screen.width/2 - 640/2;
	    var y = screen.height/2 - 480/2;
	    window.open(href, 'ottoradio','height=480,width=640,left='+x+',top='+y);
	    return false;
	}
	
	function shareTwitter(url, text) {
	    var x = screen.width/2 - 550/2;
	    var y = screen.height/2 - 400/2;
	    open('http://twitter.com/share?url=' + url + '&text=' + text, 'tshare', 'height=400,width=550,resizable=1,toolbar=0,menubar=0,status=0,location=0,left='+x+',top='+y); 
	    return false; 
	}
	
	function shareFacebook(url, text, image) {
		FB.ui({
			method: 'share',
			href: url
		}, function(response){});
		return false;
	}
	
		
	$(document).ready(function() {	
		
		if($('#search-row').length && $('html').hasClass('no-csspositionsticky')) {

			var searchRowNaturalTop = Math.floor($('#search-row').offset().top),
				searchRowNaturalWidth = $('#search-row').outerWidth();
			function getStickDefaults() {
				$('#search-row').removeClass('sticky');
				$('.other-posts').removeClass('sticky');
				$('#search-row').css('width','auto');	
				searchRowNaturalTop = Math.floor($('#search-row').offset().top);				
				searchRowNaturalWidth = $('#search-row').outerWidth();		
			}
			function stickSearch() {
				if($(window).scrollTop() >= searchRowNaturalTop) {	
					$('#search-row').addClass('sticky');
					$('.other-posts').addClass('sticky');
					$('#search-row').css('width',searchRowNaturalWidth);
				}
				else {		
					$('.other-posts').removeClass('sticky');	
					$('#search-row').removeClass('sticky');
					$('#search-row').css('width','auto');	
				}
			}		
			$(window).resize(getStickDefaults);
			$(window).resize(stickSearch);
			$(window).scroll(stickSearch);
			$(window).load(getStickDefaults);
			stickSearch();
			setTimeout(function() {
				stickSearch();
			},2000);			
			
		}
		
		
		// load more posts
		$("#load-more").click(function() {
			$.ajax({
				url: siteRoot+"/wp-content/themes/ottobahn/get-posts.php?offset="+offset+"&howMany="+howMany+"&excludePost="+$(this).attr('data-exclude-post')
			})
			.done(function(data) {
				$("#load-more").css("display", data.length === howMany ? 'block' : 'none');	
				offset += data.length;		
				var posts = [];
				$.each(data,function(index,value) {							
					var post = document.createElement('div');
					$(post).addClass('post');
					$(post).addClass('splash');
					$(post).html(
						[
							'<a href="'+value.href+'" class="post-link post-image" style="background-image: url('+value['image-feature']+');">',
								'<img src="'+value['image-thumb']+'" />',
							'</a>',
							'<div class="post-content">',
								'<a href="'+value.href+'" class="post-link">',
									'<date>'+value.date+' ago</date>',
									'<h2>'+value.title+'</h2>',
									value.excerpt,									
								'</a>',
							'</div>',
							'<div class="social">',
								'<a onclick="socialClick(this.getAttribute(\'href\')); return false;" href="http://www.facebook.com/sharer.php?u='+encodeURIComponent(value.href)+'&t='+encodeURIComponent(value.title)+'" class="facebook"></a>',
								'<a onclick="socialClick(this.getAttribute(\'href\')); return false;" href="https://twitter.com/share?url='+encodeURIComponent(value.href)+'&text='+encodeURIComponent(value.title)+'" class="twitter"></a>',
								'<a href="mailto:?subject='+value.title+'&body='+value.href+'" class="email"></a>',
							'</div>'
						].join('')
					);
					posts.push(post);
				});	
				salvattore.appendElements(document.querySelector('#posts-columns'),posts);
			});
		});				
		
		// search stuff
		$('#search').val('');
		function debounce(fn, delay) {
			var timer = null;
			return function () {
				var context = this, args = arguments;
				clearTimeout(timer);
				timer = setTimeout(function () {
					fn.apply(context, args);
				}, delay);
			};
		}
		$("#search-clear").click(function() {
			$("#search").val('');
			$("#search").focus();
			$('#search-results').css('display','none');
			$('#search-results-columns').css('display','none');
			$('#posts-columns').css('display','block');
			$('#load-more-container').css('display','block');
			$("#search-clear").addClass('empty');
		});		
		$("#clear-search").click(function() {
			$("#search").val('');
			$("#search").focus();
			$('#search-results').css('display','none');
			$('#search-results-columns').css('display','none');
			$('#posts-columns').css('display','block');
			$('#load-more-container').css('display','block');
		});
		var searchRequest = null;
		$("#search").keypress(debounce(function(event) {
			var value = $(event.target).val();
			
			if(value.length) {				
				$("#search-clear").removeClass('empty');		
				$('#search-results').css('display','block');
				$('#none-found').css('display','none');
				$('#searching').css('display','block');
				$('#search-results-columns').css('display','none');
				$('#search-results-columns').empty();			
				$('#posts-columns').css('display','none');		
				$('#load-more-container').css('display','none');
				if(searchRequest) {
					searchRequest.abort();
				}
				searchRequest = $.ajax({
					url: "/wp-content/themes/ottobahn/get-posts.php?search="+encodeURIComponent(value)
				})
				.done(function(data) {
					if(data.length) {
						var posts = [];
						$.each(data,function(index,value) {							
							var post = document.createElement('div');
							$(post).addClass('post');
							$(post).addClass('splash');
							$(post).html(
								[
									'<a href="'+value.href+'" class="post-link post-image" style="background-image: url('+value['image-feature']+');">',
										'<img src="'+value['image-thumb']+'" />',
									'</a>',
									'<div class="post-content">',
										'<a href="'+value.href+'" class="post-link">',
											'<date>'+value.date+' ago</date>',
											'<h2>'+value.title+'</h2>',
											value.excerpt,									
										'</a>',
									'</div>',
									'<div class="social">',
										'<a onclick="socialClick(this.getAttribute(\'href\')); return false;" href="http://www.facebook.com/sharer.php?u='+encodeURIComponent(value.href)+'&t='+encodeURIComponent(value.title)+'" class="facebook"></a>',
										'<a onclick="socialClick(this.getAttribute(\'href\')); return false;" href="https://twitter.com/share?url='+encodeURIComponent(value.href)+'&text='+encodeURIComponent(value.title)+'" class="twitter"></a>',
										'<a href="mailto:?subject='+value.title+'&body='+value.href+'" class="email"></a>',
									'</div>'
								].join('')
							);
							posts.push(post);
						});
						$('#search-results').css('display','none');
						$('#search-results-columns').css('display','block');			
						salvattore.registerGrid(document.querySelector('#search-results-columns'));
						salvattore.appendElements(document.querySelector('#search-results-columns'),posts);
					}	
					else {
						$('#none-found').css('display','block');
						$('#searching').css('display','none');	
						$('#search-term').text($("#search").val());					
					}		
					
				});
			}
			else {
				$("#search-clear").addClass('empty');
				$('#search-results').css('display','none');
				$('#search-results-columns').css('display','none');
				$('#posts-columns').css('display','block');				
				$('#load-more-container').css('display','block');
			}
		}, 500));
	});
	
	function shuffle(array) {
	  var currentIndex = array.length, temporaryValue, randomIndex ;
	
	  // While there remain elements to shuffle...
	  while (0 !== currentIndex) {
	
	    // Pick a remaining element...
	    randomIndex = Math.floor(Math.random() * currentIndex);
	    currentIndex -= 1;
	
	    // And swap it with the current element.
	    temporaryValue = array[currentIndex];
	    array[currentIndex] = array[randomIndex];
	    array[randomIndex] = temporaryValue;
	  }
	
	  return array;
	}
	
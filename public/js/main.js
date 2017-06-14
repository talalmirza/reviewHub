(function($){
	$(window).load(function(){
		
        /*	FlexSlide text
        /*----------------------------------------------------*/
		$('.flexslider').flexslider({
			animation: "slide",
			selector: ".flex-slogan > li",
			controlNav: false,
			directionNav: false,
			direction: "vertical",
			slideshowSpeed: 4000,
			keyboard: true,
			touch: false,
         });
        
		
        /*	countdown
        /*----------------------------------------------------*/
        var dateFinal = '2019/11/01';

        $('.countdown').countdown(dateFinal, function(event) {

            var $this = $(this)

            //$this.find('span.weeks').html(event.strftime('%w'));
            $this.find('span.days').html(event.strftime('%D'));
            $this.find('span.hours').html(event.strftime('%H'));
            $this.find('span.minutes').html(event.strftime('%M'));
            $this.find('span.seconds').html(event.strftime('%S'));
        });
        
	});
    
    /*	slideshow1 ( nivo Slider )
    /*----------------------------------------------------*/
    $(function(){

            startSlideshow();

        })

        function startSlideshow() {

            $('#nivoSlider').nivoSlider({
                effect: 'slideInRight'
            });

        }
    
})(jQuery);


$('.like').on('click', function(event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.c
    $.ajax({
            method: 'POST',
            url: urlLike,
            data: {isLike: isLike, postId: postId, _token: token}
        })

        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.nextElementSibling.innerText = 'Like';
            }
        });
});
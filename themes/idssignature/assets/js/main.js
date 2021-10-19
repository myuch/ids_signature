(function($) {

  $(document).ready(function(e){
    new fullpage('#myContainer', {
        // sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
        anchors: ['ids', 'secondPage', '3rdPage', '4thpage'],
        menu: '#menu',
        slidesNavigation: false,
        controlArrows: false,
        scrollOverflow: true,

        //In addition to the extension license you'll
        //need to acquire a fullPage.js license from https://goo.gl/5x9a22
        licenseKey: 'INSERT YOUR FULLPAGE LICENSE KEY HERE',

        scrollHorizontally: true,
        continuousHorizontal: false,
        loopHorizontal: false,
        scrollHorizontallyKey: 'INSERT YOUR EXTENSION KEY HERE', //see https://goo.gl/xkUmHS

        afterSlideLoad: function( section, origin, destination, direction){
      		var loadedSlide = this;
          console.log(destination.index);
          console.log($('.slides_nav .lines .line_item:nth-child(' + destination.index+1 + ')'));
            $('.slides_nav .lines .line_item.active').removeClass('active');
          $('.slides_nav .lines .line_item[data-index="' + destination.index + '"]').addClass('active');
          //
      		// //first slide of the second section
      		// if(section.anchor == 'secondPage' && destination.index == 1){
      		// 	alert("First slide loaded");
      		// }

      		//second slide of the second section (supposing #secondSlide is the
      		//anchor for the second slide)

      	}
    });




  });

  $(window).on('load', function(e){
    $('#tab1').addClass('loaded');
    $('.slide_bg').addClass('active');
  });

})(jQuery);

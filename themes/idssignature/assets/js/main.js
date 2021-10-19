(function($) {

  $(document).ready(function(e){
    new fullpage('#myContainer', {
        sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
        anchors: ['ids', 'secondPage', '3rdPage', '4thpage'],
        menu: '#menu',
        slidesNavigation: false,
        controlArrows: false,

        //In addition to the extension license you'll
        //need to acquire a fullPage.js license from https://goo.gl/5x9a22
        licenseKey: 'INSERT YOUR FULLPAGE LICENSE KEY HERE',

        scrollHorizontally: true,
        continuousHorizontal: false,
        loopHorizontal: false,
        scrollHorizontallyKey: 'INSERT YOUR EXTENSION KEY HERE', //see https://goo.gl/xkUmHS
    });




  });

})(jQuery);

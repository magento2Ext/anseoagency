jQuery(document).ready(function ($) {
    
     $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
            }
        });   
   
    let initial_expand_text = $(".btn_expand").html();
    
    $(".btn_expand").click(function(){
        $(".btn_expand").toggleClass("is-active");
        $(".directorletter").toggleClass('divhide');

        $(this).html(function(i, v){
            return v === initial_expand_text ? 'Read Less' : initial_expand_text;
        });
    });
    
       
    
    
    /*--------------- tab slider --------------*/
    
    $(".clientreviewslider").slick({
        dots: false,
        infinite: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,      
        centerMode:true,
        centerPadding:'190px',
        autoplaySpeed: 5000,
        responsive: [
           {
              breakpoint:1201,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding:'20px',  
              }
            },    
            {
              breakpoint:992,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
              }
            },   
            {
              breakpoint:769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                centerMode:false,
                centerPadding:'0px'
              }
            }
      ]
	});
    
     
  
    // tab
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default',
        width: 'auto',
        fit: true,
        closed: 'accordion',
        activate: function(event, parm1) {
            let tag_name = $(this).prop("tagName");
            let idx = $(this).index();

            if(tag_name === 'H2') idx = idx / 2;

            tab_slider_init(idx);
        }
    });

    function tab_slider_init(idx) {
        // console.log(idx);
        let $ul = $(".clientreviewslider:eq(" + idx + ")");

        if($ul.hasClass('slick-initialized')) {
            $ul.slick('unslick');
        }

        $ul.slick({
            dots: false,
            infinite: true,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,      
            centerMode:true,
            centerPadding:'190px',
            autoplaySpeed: 5000,
            responsive: [
           {
              breakpoint:1201,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerPadding:'20px',  
              }
            },    
            {
              breakpoint:992,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true
              }
            },
            {
              breakpoint:769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                centerMode:false
              }
            }
          ]
        });
    }

    tab_slider_init(0);  

});
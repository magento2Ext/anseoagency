function extractHostname(url) {
  var hostname;
  //find & remove protocol (http, ftp, etc.) and get hostname

  if (url.indexOf("//") > -1) {
      hostname = url.split('/')[2];
  }
  else {
      hostname = url.split('/')[0];
  }

  //find & remove port number
  hostname = hostname.split(':')[0];
  //find & remove "?"
  hostname = hostname.split('?')[0];

  return hostname;
} 


 jQuery(document).ready(function() {

 	 jQuery('.accordion-section-title').click(function() {
       var id= jQuery(this).attr('id');

       var id1=id.split("title-");
       jQuery('.accordion-section-content').removeClass('accordion-section-content-open')
       jQuery('#'+id1[0]+id1[1]).addClass('accordion-section-content-open')
 	}); 
 	jQuery('.select').change(function() {
 		var select= jQuery('select').val();

 		if(select=='land'){
 	   jQuery('.lvpt-cor').removeClass('hid-cor');
           jQuery('.pvpt-cor').addClass('hid-cor');
 		}else if(select=='port'){
        
           	jQuery('.lvpt-cor').addClass('hid-cor');
        jQuery('.pvpt-cor').removeClass('hid-cor');
       
           
 		}

 	});


 	jQuery('.option-box').click(function(){
 
 	
          var select= jQuery('select').val();
          var domainName= jQuery('#website-url').val();
          url= extractHostname(domainName);
          if(url==''){
          	alert('Please Enter the url');
          	return;
          }
          	if(select=='land'){
          		var dh= jQuery(this).attr('dw');
 		        var dw= jQuery(this).attr('dh');

        	}else if(select=='port'){
        		var dw= jQuery(this).attr('dw');
 		         var dh= jQuery(this).attr('dh');      
        	}

         if(dw<=screen.width){
          popupCenter({url:"http://"+url, title: 'xtf', w: dw, h: dh});
        }else{

      	alert('Not a valid selection.Your current device viewport width ('+screen.width+') is less than the selected width ('+dw+'). Please test with smaller width options.');
      }
 	});



 	jQuery('#openPopup_btn').click(function(){

          var select= jQuery('select').val();
          var domainName= jQuery('#website-url').val();
          url= extractHostname(domainName);
           if(url==''){
          	alert('Please Enter the url');
          	return;
          }
          var width= jQuery('#width-input').val();
          var height= jQuery('#height-input').val();
       if(width==''){
          	alert('Please Enter the width');
          	return;
          }
          if(height==''){
          	alert('Please Enter the height');
          	return;
          }
           if(width<=screen.width){
            
             popupCenter({url:"http://"+url, title: 'xtf', w: width, h: height});
           }else{
           	alert('Not a valid selection.Your current device viewport width ('+width+') is less than the selected width ('+height+'). Please test with smaller width options.');
           }

         
 	});


 	const popupCenter = ({url, title, w, h}) => {
    // Fixes dual-screen position                             Most browsers      Firefox

    const dualScreenLeft = window.screenLeft !==  undefined ? window.screenLeft : window.screenX;
    const dualScreenTop = window.screenTop !==  undefined   ? window.screenTop  : window.screenY;

    const width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    const height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    const systemZoom = width / window.screen.availWidth;
    const left = (width - w) / 2 / systemZoom + dualScreenLeft
    const top = (height - h) / 2 / systemZoom + dualScreenTop

    const newWindow = window.open(url, title, 
      `
      scrollbars=yes,
      width=${w / systemZoom}, 
      height=${h / systemZoom}, 
      top=${top}, 
      left=${left},
      target=_blank
      `
    )


    if (window.focus) newWindow.focus();
  }
 });
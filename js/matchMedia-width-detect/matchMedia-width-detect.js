const mediaQueryString = 'screen and (max-width: 760px)';

// check width on load
if (window.matchMedia(mediaQueryString).matches) {
    client = 'mobile';
    console.log('mobile');
  } else {
    client = 'desktop';
    console.log('desktop')
  }
  
  document.addEventListener('DOMContentLoaded', event => { 
   
    // check width on resize
    var onresize = e => {
  
      if(window.matchMedia(mediaQueryString).matches && client != 'mobile') {
        
        client = 'mobile';
        console.log('mobile resized')
  
      } else if(!window.matchMedia(mediaQueryString).matches && client != 'desktop') {
  
        client = 'desktop';
        console.log('desktop resized')
  
      }
  
    }
  
    window.addEventListener('resize', onresize);
  
});
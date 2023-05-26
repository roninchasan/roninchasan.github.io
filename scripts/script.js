function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }


    const fadeInObjs = document.querySelectorAll(".toFadeIn");
    const fadeInIcons = document.querySelectorAll(".toFadeInIcons");
  
    fadeInObjs.forEach(function(element) {
        element.classList.add("hide-for-fade-in");
  
        window.addEventListener("scroll", function() {
            let scroll = window.scrollY;
  
            if (scroll > element.offsetTop - 1100) {
                setTimeout( () => {
                    element.classList.add("fade-in-footer-menu");
                }, 500)
            }
        });
    });
  
  
    fadeInIcons.forEach(function(element) {
        element.classList.add("hide-for-fade-in");
  
        window.addEventListener("scroll", function() {
            let scroll = window.scrollY;
  
            if (scroll > element.offsetTop - 1100) {
                element.classList.add("fade-in-footer-icons");
            }
        });
    });

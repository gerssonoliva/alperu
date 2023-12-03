/* navbar-fixed */
/**
 * [data-navbar="navbar-fixed"]: required
 * [data-media="PROPERTY"] :  [md-up, sm-up OR number ]  : optionan
 */


let Sticky = (function() {
  'use strict';

  let CSS_CLASS_ACTIVE = 'sticky';


  let Sticky = {
      element: null,
      position: 0,
      addEvents: function() {
          window.addEventListener('scroll', this.onScroll.bind(this));
      },
      init: function(element) {
          this.element = element;
          this.addEvents();
          this.position = element.offsetTop + 10 ;
          this.onScroll();
      },
      aboveScroll: function() {
          return this.position < window.scrollY;
      },
      onScroll: function(event) {
          if (this.aboveScroll()) {
              this.setFixed();
          } else {
              this.setStatic();
          }
      },
      setFixed: function() {
          this.element.classList.add(CSS_CLASS_ACTIVE);
      },
      setStatic: function() {
          this.element.classList.remove(CSS_CLASS_ACTIVE);
      }
  };

  return Sticky;

})();


//  Init Sticky
let sticky = document.querySelector("[data-navbar=\"sticky\"]");
if (sticky) {
Sticky.init(sticky);
}


// (function (document) {

//   var navbar = document.querySelector("[data-navbar=\"sticky\"]");

//   if (navbar) {

//     var sticky = navbar.offsetTop;

//     function stickyScroll() {
//       // console.log(window.pageYOffset, sticky);
//       if (window.pageYOffset > sticky) {
//         navbar.classList.add("sticky");
//       } else {
//         navbar.classList.remove("sticky");
//       }
//     }

//     window.onscroll = function () { stickyScroll() };

//   }


// })(document);
// /**
//  * index.js
//  * - All our useful JS goes here, awesome!
//  */
// $(document).ready(function() {
//   var scroll_start = 0;
//   var startchange = $('#startchange');
//   var offset = startchange.offset();
//   if (startchange.length) {
//     $(document).scroll(function() {
//       scroll_start = $(this).scrollTop();
//       console.log(scroll_start + 800 > offset.top)
//       if (scroll_start + 800 > offset.top) {
//         $(".navbar-inverse").css('background', 'transparent');
//       } else {
//         $('.navbar-inverse').removeAttr("style")
//       }
//     });
//   }
// });
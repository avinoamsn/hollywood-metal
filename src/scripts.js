// Dropdown menu
var opened = false;

// activates the dropdown menu
function dropdown() {
	var element = document.getElementById("menu-collapsible");

  if(!opened) {
    element.style.visibility = "visible";
    element.style.opacity = "1";
    opened = true;
  } else {
    element.style.visibility = "hidden";
    element.style.opacity = "0";
    opened = false;
  }
}

// Infinite Scroll TODO
// jQuery(function ($) {
//   var count = 2;

//   $(window).scroll(function(){
//     if  ($(window).scrollTop() == $(document).height() - $(window).height()){
//       loadArticle(count);
//       count++;
//     }
//   });

//   function loadArticle(pageNumber) {
//     $.ajax({
//       url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
//       type:'POST',
//       data: "action=infinite_scroll&page_no=" + pageNumber + '&loop_file=loop',
//       success: function(html) {
//         $("#content").append(html);
//       },
//       error: function(e) {
//         console.log(e);
//       }
//     });

//     return false;
//   };
// });

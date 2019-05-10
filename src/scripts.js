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
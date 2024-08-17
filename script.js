// Get the text element and dropdown content
var dropdownText = document.getElementById("cat_list");
var dropdownContent = document.getElementsByClassName("dropdown-menu")[0];

// Toggle dropdown content when text element is clicked
dropdownText.addEventListener("click", function() {
  if (dropdownContent.style.display === "flex") {
    dropdownContent.style.display = "none";
  } else {
    dropdownContent.style.display = "flex";
  }
});

var image = document.getElementById("account-icon");
var settings = document.getElementsByClassName("account-settings")[0];

image.addEventListener("click", function() {
  if (settings.style.display === "flex") {
    settings.style.display = "none";
  } else {
    settings.style.display = "flex";
  }
});

window.onclick = function(event) {
  if (event.target !== image && !settings.contains(event.target)) {
    if (settings.style.display === "flex") {
      settings.style.display = "none";
    }
  }
  if (!event.target.matches('#cat_list')) {
    if (dropdownContent.style.display === "flex") {
      dropdownContent.style.display = "none";
    }
  }
}

function confirmLogOut(event){
    var confirmMsg = "Are you sure you want to Logout?";
    return confirm(confirmMsg);
}
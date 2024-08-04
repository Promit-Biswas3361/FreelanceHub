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

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#cat_list')) {
    if (dropdownContent.style.display === "flex") {
      dropdownContent.style.display = "none";
    }
  }
}


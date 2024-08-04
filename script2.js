function confirmReset() {
    var confirmMsg = "Are you sure you want to reset your password?";
    return confirm(confirmMsg);
  }
  
function validatePassword(){
    var newpass=document.getElementById("newpass").value;
    var confpass=document.getElementById("confpass").value;
    if(newpass!==confpass){
      alert("Password doesn't match");
      return false;
    }
    return true;
}
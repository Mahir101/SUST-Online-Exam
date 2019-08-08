var accountType;

document.getElementById('registration').addEventListener("click", function() {
  document.querySelector('.bg-modal-container').style.display = "flex";
});
document.getElementById('hint').addEventListener("click", function() {
  document.querySelector('.bg-modal-container').style.display = "none";
});

document.getElementById('nexta').addEventListener("click", function() {
      if (accountType== 1) {
document.location.href = "/quiz_semi/public/login";

  }
  else if (accountType == 0) {
document.location.href = "/quiz_semi/public/login";
}
});






// function fnc() {

//       if (accountType== 1) {
// document.location.href = "http://localhost/SUSTEXAM/public/register";

//   }
//   else if (accountType == 0) {
// document.location.href = "http://localhost/SUSTEXAM/public/student";
     
//     }
//   }




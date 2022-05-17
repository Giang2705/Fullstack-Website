
var container = document.querySelector(".container");

function showHide(input, showText) {
  if (input.getAttribute("type") === "password") {
    input.setAttribute("type", "text");
    showText.innerText = "visibility_off";
  } else {
    input.setAttribute("type", "password");
    showText.innerText = "visibility";
  }
}

parent.addEventListener("click", event => {
  if (event.target.matches("span")) {
    var spanElm = event.target;
    var inputElm = spanElm.previousElementSibling;
    showHide(inputElm, spanElm);
  }
});

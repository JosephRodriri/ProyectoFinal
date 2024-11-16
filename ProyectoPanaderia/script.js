let btn = document.querySelectorAll("button");
btn.forEach((btn) => {
  btn.onclick = function (e) {
    let x = e.pageX - e.target.offsetLeft;
    let y = e.pageY - e.target.offsetTop;
    let ripples = document.createElement("span");

    ripples.style.left = x + "px";
    ripples.style.top = y + "px";
    this.appendChild(ripples);

    setTimeout(() => {
      ripples.remove();
    }, 2000);
  };
});

let enviar = document.getElementById("enviar");

enviar.addEventListener("click", function(event) {
  event.preventDefault(); // Prevent default form submission
  console.log("Form is being submitted!"); // Optional: Log a message
  // Add your additional logic here (e.g., validation, AJAX submission)
});
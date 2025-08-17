// Set the date we're counting down to
var now = new Date().getTime();
// var countDownDate = new Date("Aug 17, 2025 15:37:25").getTime();
var end_after = 30000;
var countDownDate = new Date(now + end_after).getTime();

const counter = document.getElementById("counter");
window.addEventListener("load", () => {
  setTimeout(() => {
    winBtn.style.display = "block";
    winBtn.style.textAlign = "center";
    winModal.show();
  }, end_after);
});

// Update the count down every 1 second
var x = setInterval(function () {
  // Get today's date and time & Find the distance
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.addEventListener("change", () => {
    winBtn.style.display = "block";
  });

  // Display the result in the element with id="demo"
  counter.innerHTML =
    days +
    " يوم " +
    hours +
    " ساعة " +
    minutes +
    " دقيقة " +
    seconds +
    " ثانية ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "عذرا، لقد تم سحب جميع الجوائز";
  }
}, 1000);

const winBtn = document.getElementById("win-btn");
var winModal = new bootstrap.Modal(document.getElementById("win-modal"), {
  keyboard: false,
});

winBtn.addEventListener("click", () => {
  setTimeout(() => {
    winModal.show();
  }, 0);
});

let reviewRates = document.querySelectorAll(".review-rate");

let countDownDate = new Date("Nov 29, 2024 00:00:00").getTime();

let x = setInterval(function() {
  let now = new Date().getTime();
  let distance = countDownDate - now;

  let days = Math.floor(distance / (1000 * 60 * 60 * 24)).toLocaleString('en-US', {
    minimumIntegerDigits: 2,
    useGrouping: false
  });
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toLocaleString('en-US', {
    minimumIntegerDigits: 2,
    useGrouping: false
  });
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toLocaleString('en-US', {
    minimumIntegerDigits: 2,
    useGrouping: false
  });
  let seconds = Math.floor((distance % (1000 * 60)) / 1000).toLocaleString('en-US', {
    minimumIntegerDigits: 2,
    useGrouping: false
  });

  
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = "00";
    document.getElementById("hours").innerHTML = "00";
    document.getElementById("minutes").innerHTML = "00";
    document.getElementById("seconds").innerHTML = "00";
  } else{
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

  }
}, 1000);

function salutoInOrario() {
  const ora = new Date().getHours();
  let saluto;

  if (ora >= 5 && ora < 12) {
      saluto = "Buongiorno,";
  } else if (ora >= 12 && ora < 18) {
      saluto = "Buon pomeriggio,";
  } else if (ora >= 18 && ora < 22) {
      saluto = "Buona sera,";
  } else {
      saluto = "Buona notte,";
  }

  return saluto;
}

document.getElementById('saluto').innerText = salutoInOrario();


 function reviewRate(){
  
  reviewRates.forEach((reviewRate) => {
    let rating = parseInt(reviewRate.getAttribute("value"));

    let stars;
    switch (rating) {
        case 1:
            stars = `<i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>`;
            break;
        case 2:
            stars = `<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>`;
            break;
        case 3:
            stars = `<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>`;
            break;
        case 4:
            stars = `<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>`;
            break;
        case 5:
            stars = `<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>`;
            break;
        default:
            stars = `<i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i>`; 
    }
    reviewRate.innerHTML = stars;
});
}

reviewRate();


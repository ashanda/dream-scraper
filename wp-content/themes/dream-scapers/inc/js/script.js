// Preloader
window.addEventListener('load', () => { // wait to load the page
    setTimeout(() => {
        document.getElementById("preloader").style.display = 'none' // hide the loader after 3.5 seconds
        // hide the loader after 2.5 seconds 
    }, 2500)
})

function openCity(evt, yearName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(yearName).style.display = "block";
    evt.currentTarget.className += " active";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

var parallax_1 = document.getElementById('parallax_1');
var parallax_2 = document.getElementById('parallax_2');
var parallax_3 = document.getElementById('parallax_3');
var parallax_4 = document.getElementById('parallax_4');

// trigger this function every time the user scrolls
window.onscroll = function (event) {
    var x = window.pageYOffset;
        parallax_1.style.backgroundPositionY = x-2+'vw';
}


// function closePreloader() {

//     // const element = document.getElementById("preloader");
//     // element.remove();
//     setTimeout(() => {
//         document.getElementById("preloader").style.display = "none"; // hide the loader after 3.5 seconds

//     }, 3500)

//     jQuery(window).load(function () {

//         closePreloader();

//     });


// }

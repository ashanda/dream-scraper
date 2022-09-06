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
// accordion section
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

// parallax js
var parallax_1 = document.getElementById('parallax_1');
var parallax_2 = document.getElementById('parallax_2');
var parallax_3 = document.getElementById('parallax_3');
var parallax_4 = document.getElementById('parallax_4');

var body = document.body,
    html = document.documentElement;

var height = Math.max(body.scrollHeight, body.offsetHeight,
    html.clientHeight, html.scrollHeight, html.offsetHeight);

// trigger this function every time the user scrolls
window.onscroll = function (event) {
    var x = window.pageYOffset;
    parallax_1.style.backgroundPositionY = ((x / 20) - 9) + 'vw';
    parallax_2.style.backgroundPositionY = ((x / 20) - 22) + 'vw';
    parallax_3.style.backgroundPositionY = ((x / 20) - 28) + 'vw';
    parallax_4.style.backgroundPositionY = ((x / 20) - 38) + 'vw';
}
// Mobile menu dopdown
function mobMenu() {
    var x = document.getElementById("top_menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
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

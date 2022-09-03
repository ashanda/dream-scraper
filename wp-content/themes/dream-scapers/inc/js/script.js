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

var body = document.getElementsByTagName('body')[0];
body.style.backgroundColor = 'green';

// trigger this function every time the user scrolls
window.onscroll = function (event) {
    var scroll = window.pageYOffset;
    if (scroll < 300) {
        console.log("1");
    } else if (scroll >= 300 && scroll < 600) {
        console.log("2");
    } else if (scroll >= 600 && scroll < 1200) {
        console.log("3");
    } else if (scroll >= 1200 && scroll < 1800) {
        console.log("4");
    } else if (scroll >= 1800 && scroll < 3000) {
        console.log("5");
    } else {
        // purple
        body.style.backgroundColor = 'purple';
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

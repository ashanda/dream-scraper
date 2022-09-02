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

// Preloader
function closePreloader() {

    // const element = document.getElementById("preloader");
    // element.remove();
    setTimeout(() => {
        document.getElementById("preloader").style.display = "none"; // hide the loader after 3.5 seconds

    }, 3500)

    jQuery(window).load(function () {
        
        closePreloader();
    
    });


}
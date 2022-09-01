
// Preloader
function closePreloader() {
    document.getElementById("preloader").style.animation = "hide_slowly 1s";
    const element = document.getElementById("preloader");
    element.remove();
    // document.getElementById("preloader").style.display = "none";
}
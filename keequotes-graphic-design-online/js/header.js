document.getElementById("mobilemenu").addEventListener("click", function(e) {
$(".left").toggle();
$(".left").css("z-index", 1);
$(".left").css("width", "100%");
});
document.getElementById("login").addEventListener("click", function(e) {
$(".overlay").toggle();
});
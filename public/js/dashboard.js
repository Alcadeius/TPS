document.getElementById("logo").addEventListener("click", function () {
    document.getElementById("profile").style.display = "block";
    document.getElementById("logo2").style.display = "flex";
    document.getElementById("logo").style.display = "none";
});
document.getElementById("logo2").addEventListener("click", function () {
    document.getElementById("profile").style.display = "none";
    document.getElementById("logo2").style.display = "none";
    document.getElementById("logo").style.display = "flex";
});
document.getElementById("clos").addEventListener("click", function () {
    document.getElementById("profile").style.display = "none";
});

document.addEventListener("livewire:init", () => {
    Livewire.on("minta", () => {
        alert("Request Succesfull");
        document.getElementById("berubah").innerHTML = "Requested";
    });
});
document.getElementById("berubah").addEventListener("click", function () {
    this.innerHTML = "Requested";
});

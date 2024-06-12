document.addEventListener("livewire:init", () => {
    Livewire.on("minta", () => {
        alert("Request Succesfull");
        // document.getElementById("berubah").innerHTML = "Requested";
    });
});

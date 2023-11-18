// datedisplay
var inputDate = document.getElementById("inputDate");
inputDate.addEventListener("input", function () {
    var selectedDate = inputDate.value;
    document.getElementById("displayDate").innerText = selectedDate
        ? selectedDate
        : "Pilih tanggal";
});
////form hidden
function toggleModal() {
    var modal = document.getElementById("myModal");
    modal.classList.toggle("hidden");
}

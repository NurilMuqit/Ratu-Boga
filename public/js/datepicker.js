// datedisplay
var inputDate = document.getElementById("inputDate");
inputDate.addEventListener("input", function () {
    var selectedDate = inputDate.value;
    document.getElementById("displayDate").innerText = selectedDate
        ? selectedDate
        : "Pilih tanggal";
});
////form hidden
// function toggleModal() {
//     var modal = document.getElementById("myModal");
//     modal.classList.toggle("hidden");
// }

///delte alert
function confirmDeletion(userConfirmed) {
    if (userConfirmed) {
        window.location.href = urlToRedirect;
    } else {
    }
    var confirmationModal = document.getElementById("confirmationModal");
    confirmationModal.style.display = "none";
}

function showConfirmationModal(ev) {
    ev.preventDefault();

    urlToRedirect = ev.currentTarget.getAttribute("href");
    console.log(urlToRedirect);
    var confirmationModal = document.getElementById("confirmationModal");
    confirmationModal.style.display = "block";
}
function showEditModal(ev) {
    ev.preventDefault();

    urlToRedirect = ev.currentTarget.getAttribute("href");
    console.log(urlToRedirect);

    var confirmationModal = document.getElementById("showEditModal");
    confirmationModal.style.display = "block";
}

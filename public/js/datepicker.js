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

    // Sembunyikan modal setelah mendapatkan respons dari pengguna
    var confirmationModal = document.getElementById("confirmationModal");
    confirmationModal.style.display = "none";
}

function showConfirmationModal(ev) {
    ev.preventDefault();

    // Mendapatkan URL untuk pengalihan
    urlToRedirect = ev.currentTarget.getAttribute("href");
    console.log(urlToRedirect);

    // Tampilkan modal konfirmasi
    var confirmationModal = document.getElementById("confirmationModal");
    confirmationModal.style.display = "block";
}

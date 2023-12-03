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
function isTaskbarVisible() {
    // Ketinggian area tampilan internal browser window
    var innerHeight = window.innerHeight;

    // Ketinggian keseluruhan browser window (termasuk taskbar)
    var outerHeight = window.outerHeight;

    // Perbedaan antara ketinggian inner dan outer
    var heightDifference = outerHeight - innerHeight;

    // Jika perbedaan tersebut signifikan, kita dapat mengasumsikan taskbar terlihat
    // Tambahkan atau sesuaikan nilai batas sesuai kebutuhan Anda
    var threshold = 100;

    return heightDifference > threshold;
}

// Contoh penggunaan
if (isTaskbarVisible()) {
    // Lakukan sesuatu ketika taskbar terlihat
    console.log("Taskbar terlihat");
} else {
    // Lakukan sesuatu ketika taskbar tidak terlihat
    console.log("Taskbar tidak terlihat");
}

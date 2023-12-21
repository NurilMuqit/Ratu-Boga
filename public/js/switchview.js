// switch view
document.getElementById("toggleButton").addEventListener("click", function () {
    // Mendapatkan elemen-elemen yang akan di-toggle
    var tableView = document.getElementById("tableView");
    var cardView = document.getElementById("cardView");
    var switchcardview = document.getElementById("switchcardview");
    var switchtabelview = document.getElementById("switchtabelview");

    // Memeriksa apakah tampilan tabel sedang ditampilkan
    if (tableView.style.display !== "none") {
        // Menyembunyikan tampilan tabel dan menampilkan tampilan card
        tableView.style.display = "none";
        cardView.style.display = "block";
        switchcardview.style.display = "flex";
        switchtabelview.style.display = "none";

        // Menyimpan status switch layout ke localStorage
        localStorage.setItem("isCardView", "true");
    } else {
        // Menyembunyikan tampilan card dan menampilkan tampilan tabel
        tableView.style.display = "block";
        cardView.style.display = "none";
        switchcardview.style.display = "none";
        switchtabelview.style.display = "flex";

        // Menyimpan status switch layout ke localStorage
        localStorage.setItem("isCardView", "false");
    }
});

// Mendapatkan status switch layout dari localStorage saat halaman dimuat
var isCardView = localStorage.getItem("isCardView") === "true";

// Mengatur tampilan awal berdasarkan status yang disimpan
if (isCardView) {
    // Menampilkan tampilan card
    document.getElementById("cardView").style.display = "block";
    document.getElementById("switchcardview").style.display = "flex";
    document.getElementById("tableView").style.display = "none";
    document.getElementById("switchtabelview").style.display = "none";
} else {
    // Menampilkan tampilan tabel
    document.getElementById("tableView").style.display = "block";
    document.getElementById("switchtabelview").style.display = "flex";
    document.getElementById("cardView").style.display = "none";
    document.getElementById("switchcardview").style.display = "none";
}

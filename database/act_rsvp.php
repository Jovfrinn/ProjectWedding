<?php
include "koneksi.php";



$nama = $_POST ["nama"];
$jumlah = $_POST ["jumlah"];
$status = $_POST ["status"];

$query = "INSERT INTO konfirmasi(nama,jumlah,status) VALUES ('$nama','$jumlah','$status')";
$tambahdata = mysqli_query($koneksi,$query);

// if ($tambahdata){
//     echo "<script>
//     window.addEventListener("load",function () {
//         const form = document.getElementById('my-form');
//         form.addEventListener("submit", function (e) {
//         e.preventDefault();
//             const data = new FormData(form);
//             const action = e.target.action;
//             fetch(action, {
//                 method: 'POST',
//                 body:data,
//             })
//             .then(() => {
//                 alert("Success!");
//             })
//         });
//     });
//     </script>";
// }




?>
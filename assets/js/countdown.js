// Mengatur tanggal
var countDownDate = new Date("Sept 2, 2022 00:00:00").getTime();
// Hitungan Mundur Waktu Dilakukan Setiap Satu Detik
var x = setInterval(function () {
  // Mendapatkan Tanggal dan waktu Pada Hari ini
  var now = new Date().getTime();
  //Jarak Waktu Antara Hitungan Mundur
  var distance = countDownDate - now;
  // Perhitungan waktu hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  //Tampilkan element
  document.getElementById("day").innerHTML = days;
  document.getElementById("hour").innerHTML = hours;
  document.getElementById("minute").innerHTML = minutes;
  document.getElementById("second").innerHTML = seconds;

  // Jika hitungan mundur selesai,
  if (distance < 0) {
    clearInterval(x);
    alert("Updated");
  }
}, 1000);

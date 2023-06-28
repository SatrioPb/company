function submited() {
  var name = document.getElementById("inputName").value;
  var email = document.getElementById("inputEmail").value;
  var pesan = document.getElementById("inputPesan").value;
  if (name.length == 0) {
    alert("Masukkan Nama");
  } else if (email.length == 0) {
    alert("Masukkan Email");
  } else if (pesan.length == 0) {
    alert("Masukkan Pesan");
  } else {
    alert("data sudah terkirim");
  }
}

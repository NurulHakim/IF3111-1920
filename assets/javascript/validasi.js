function validasi(){
  var aspek = document.getElementById("aspek").value;
  var komentar = document.getElementById("komentar").value;
  var jumlahkata = komentar.split(' ').length;

  if(komentar != "" && aspek != ""){
    if(jumlahkata < 20){
      alert("Laporan kurang dari 20 kata");
      return false;
    }else{
      return true;
    }

  }else{
    alert("Laporan atau aspek tidak boleh kosong");

    return false;
  }
}

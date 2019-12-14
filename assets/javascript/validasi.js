function validasi(){
  var aspek = document.getElementById("aspek").value;
  var komentar = document.getElementById("komentar").value;
  var jumlahkata = komentar.split(' ').length;

  if(komentar != ""){
    if(jumlahkata < 20){
      alert("Laporan kurang dari 20 kata");
      return false;
    }else{
      return true;
    }

  }else{
    alert("Laporan tidak boleh kosong");

    return false;
  }
}

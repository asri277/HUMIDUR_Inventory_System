function openNav(){
  document.getElementById("mySidenav").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav(){
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "#E0E0E0";
}
// ===========================================================================
function openColor(){
  document.getElementById("table_color").style.display = "initial";
  document.getElementById("table_packaging_size").style.display = "none";
  document.getElementById("table_location").style.display = "none";
  document.getElementById("table_client").style.display = "none";
  document.getElementById("table_supplier").style.display = "none";

  document.getElementById("tt1").style.display = "initial";
  document.getElementById("tt2").style.display = "none";
  document.getElementById("tt3").style.display = "none";
  document.getElementById("tt4").style.display = "none";
  document.getElementById("tt5").style.display = "none";
}

function openPackaging_size(){
  document.getElementById("table_color").style.display = "none";
  document.getElementById("table_packaging_size").style.display = "initial";
  document.getElementById("table_location").style.display = "none";
  document.getElementById("table_client").style.display = "none";
  document.getElementById("table_supplier").style.display = "none";

  document.getElementById("tt1").style.display = "none";
  document.getElementById("tt2").style.display = "initial";
  document.getElementById("tt3").style.display = "none";
  document.getElementById("tt4").style.display = "none";
  document.getElementById("tt5").style.display = "none";
}

function openLocation(){
  document.getElementById("table_packaging_size").style.display = "none";
  document.getElementById("table_color").style.display = "none";
  document.getElementById("table_location").style.display = "initial";
  document.getElementById("table_client").style.display = "none";
  document.getElementById("table_supplier").style.display = "none";

  document.getElementById("tt1").style.display = "none";
  document.getElementById("tt2").style.display = "none";
  document.getElementById("tt3").style.display = "initial";
  document.getElementById("tt4").style.display = "none";
  document.getElementById("tt5").style.display = "none";
}

function openClient(){
  document.getElementById("table_packaging_size").style.display = "none";
  document.getElementById("table_color").style.display = "none";
  document.getElementById("table_location").style.display = "none";
  document.getElementById("table_client").style.display = "initial";
  document.getElementById("table_supplier").style.display = "none";

  document.getElementById("tt1").style.display = "none";
  document.getElementById("tt2").style.display = "none";
  document.getElementById("tt3").style.display = "none";
  document.getElementById("tt4").style.display = "initial";
  document.getElementById("tt5").style.display = "none";
}

function openSupplier(){
  document.getElementById("table_packaging_size").style.display = "none";
  document.getElementById("table_color").style.display = "none";
  document.getElementById("table_location").style.display = "none";
  document.getElementById("table_client").style.display = "none";
  document.getElementById("table_supplier").style.display = "initial";

  document.getElementById("tt1").style.display = "none";
  document.getElementById("tt2").style.display = "none";
  document.getElementById("tt3").style.display = "none";
  document.getElementById("tt4").style.display = "none";
  document.getElementById("tt5").style.display = "initial";
}
// ===========================================================================

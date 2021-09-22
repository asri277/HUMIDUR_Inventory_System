function openNav(){
  document.getElementById("mySidenav").style.width = "300px";
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

function openManipulateNav(sideNav, table){
  document.getElementById(sideNav).style.width = "400px";
  document.getElementById(table).style.marginLeft = "400px";
  document.getElementById(sideNav).style.display = "initial";
}

function closeManipulateNav(sideNav, table){
  document.getElementById(sideNav).style.width = "0";
  document.getElementById(table).style.marginLeft= "1%";
  document.getElementById(sideNav).style.display = "none";
}

// ===========================================================================

function loadData(tableid, id, inputid, btnid){
  var x, table, rows, columnsCount, selectedID;
  table = document.getElementById(tableid);
  selectedID = document.getElementById(id).value;
  rows = table.rows;
  columnsCount = table.rows[selectedID].cells.length;

  for (var n = 1; n < columnsCount; n++) {
    x = rows[selectedID].getElementsByTagName("TD")[n].innerHTML;
    document.getElementsByClassName(inputid)[n - 1].value = x.trim();
  }

  var input_anyFormDCount = document.getElementsByClassName(inputid).length;
  for (var i = 0; i < input_anyFormDCount; i++) {
    document.getElementsByClassName(inputid)[i].disabled = false;
  }

  var btnSubmit_anyFormCount = document.getElementsByClassName(btnid).length;
  for (var i = 0; i < btnSubmit_anyFormCount; i++) {
    document.getElementsByClassName(btnid)[i].disabled = false;
  }

}

function disableUpdate(inputid, btnid){
  var input_anyFormDCount = document.getElementsByClassName(inputid).length;
  for (var i = 0; i < input_anyFormDCount; i++) {
    document.getElementsByClassName(inputid)[i].disabled = true;
  }

  var btnLoadOnlyCount = document.getElementsByClassName(btnid).length;
  for (var i = 0; i < btnLoadOnlyCount; i++) {
    document.getElementsByClassName(btnid)[i].disabled = true;
  }
}

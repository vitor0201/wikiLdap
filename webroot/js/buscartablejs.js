function BuscarFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  //  Faz um loop por todas as linhas da tabela e oculta aqueles que não correspondem à consulta de pesquisa
  for (i = 0; i < tr.length; i++) {
    //Column 1
    td_1 = tr[i].getElementsByTagName("td")[0];
    //Column 2
    td_2 = tr[i].getElementsByTagName("td")[1];
    if (td_1 || td_2) {
      if (td_1.innerHTML.toUpperCase().indexOf(filter) > -1 || td_2.innerHTML.toUpperCase().indexOf(filter)> -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
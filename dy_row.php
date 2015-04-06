 <title> Add/Remove dynamic rows in HTML table </title>
    <script language="javascript">
      function addRow(tableID) {
      var table = document.getElementById(tableID);
      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);
      var colCount = table.rows[0].cells.length;
      for(var i = 0; i < colCount; i++) {
          var newcell = row.insertCell(i);
          newcell.innerHTML = table.rows[0].cells[i].innerHTML;
          switch(newcell.childNodes[0].type) {
              case "text":
                  newcell.childNodes[0].value = "";
                  break;
              case "checkbox":
                  newcell.childNodes[0].checked = false;
                  break;              
          }
      }
  }

  function deleteRow(tableID) {
      try {
          var table = document.getElementById(tableID);
          var rowCount = table.rows.length;
          for(var i = 0; i < rowCount; i++) {
              var row = table.rows[i];
              var chkbox = row.cells[0].childNodes[0];
              if(null != chkbox && true == chkbox.checked) {
                  if(rowCount <= 1) {
                      alert("Cannot delete all the rows.");
                      break;
                  }
                  table.deleteRow(i);
                  rowCount--;
                  i--;
              }
          }
      } catch(e) {
          alert(e);
      }
  }
</script>
 
 <?php if(isset($_POST['submit'])){
    print_r($_POST);
    exit;
    } ?>
 
    <input value="Add Row" onclick="addRow('dataTable')" type="button">
 
    <input value="Delete Row" onclick="deleteRow('dataTable')" type="button">
    <form action = "" method = "post">
        <table id="dataTable" width="350px" border="1">
            <tbody><tr>
                <td><input name="chk" type="checkbox"></td>
                <td><input name="txt[]" type="text"></td>            
            </tr>
        </tbody></table>
        <input type = "submit" name = "submit" value = "submit "/>
    </form>
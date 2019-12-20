<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title >Purchase Requision</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <SCRIPT language="javascript">
            function addRow(tableID) {
    
                var table = document.getElementById(tableID);
    
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);
    
                var cell1 = row.insertCell(0);
                var element1 = document.createElement("input");
                element1.type = "checkbox";
                element1.name="chkbox[]";
                cell1.appendChild(element1);
    
                var cell2 = row.insertCell(1);
                var element2 = document.createElement("input");
                element2.type = "text";
                element2.name = "txtbox[]";
                cell2.appendChild(element2);
    
                var cell3 = row.insertCell(2);
                var element3 = document.createElement("input");
                element3.type = "text";
                element3.name = "txtbox[]";
                cell3.appendChild(element3);

                var cell4 = row.insertCell(3);
                var element4 = document.createElement("input");
                element4.type = "text";
                element4.name = "txtbox[]";
                cell4.appendChild(element4);

                 var cell5 = row.insertCell(4);
                var element5 = document.createElement("input");
                element5.type = "number";
                element5.type="number[]"
                cell5.appendChild(element5);

                 var cell6 = row.insertCell(5);
                var element6 = document.createElement("input");
                element6.type = "text";
                element6.name = "txtbox[]";
                cell6.appendChild(element6);  

                var cell7 = row.insertCell(6);
                var element7 = document.createElement("input");
                element7.type = "number";
                element7.name = "number[]";
                cell7.appendChild(element7); 
                
                 var cell8 = row.insertCell(7);
                var element8 = document.createElement("input");
                element8.type = "number";
                element8.name = "number[]";
                cell8.appendChild(element8); 
                
                 var cell9 = row.insertCell(8);
                var element9 = document.createElement("input");
                element9.type = "date";
                element9.name = "date[]";
                cell9.appendChild(element9); 
                
                 var cell10 = row.insertCell(9);
                var element10 = document.createElement("input");
                element10.type = "number";
                element10.name = "number[]";
                cell10.appendChild(element10); 
                
                 var cell11 = row.insertCell(10);
                var element11 = document.createElement("input");
                element11.type = "number";
                element11.name = "number[]";
                cell11.appendChild(element11);  
                
                var cell12 = row.insertCell(11);
                var element12 = document.createElement("input");
                element12.type = "number";
                element12.name = "number[]";
                cell12.appendChild(element12);
    
            }
    
            function deleteRow(tableID) {
                try {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
    
                for(var i=0; i<rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if(null != chkbox && true == chkbox.checked) {
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }
    
    
                }
                }catch(e) {
                    alert(e);
                }
            }
    
        </SCRIPT>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
    <style>
            body {
                
              background-image: url('kansai.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 500px 500px;
              background-position: center;
              
            }
            </style>
</head>
<body >
    
    <img src="kansai2.png" >
    <p style=" text-align: right; padding-top: 40px;" ><b>KANSAI PAINT (PVT) LIMITED</b></p>
    <p style=" text-align: right; " >139CCA,Phase IV, Sector-DD, DHA,Lahore</p>
    <p style=" text-align: right; " >Tel: +92(042)5694151/4,Fax: +92(042)59694159></p><br>
    <h1 style="text-align: center; background-color: lightgrey;">Purchase Requision</h1>
    <div>
   <p ><b> Requisition No </b>
    <input type="text" name="Requision No"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <b style="text-align: right;"> Requisition Date</b>
     <input type="date" name="Requisition Date"></p>
  <p><b> Department </b>
     <input type="text" name="Department" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
     <b> Section </b>
        <input type="text" name="Section" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;
     
     <b style="text-align: right;">Required Date</b>
     <input type="date" name="Required Date"   ></p>
    </div><br><br>
    <input type="button" value="Add Row" onclick="addRow('dataTable')" />

    <input type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
    <form method="GET" action="">    
    @csrf  
    <table id="dataTable"style="width:100% " >
                    <tr style="background-color:lightgrey;">
                            <th width="150"><b>Items/Services Required</b></th>
                            <th width="150"><b>Last Purchased History</b></th>
                            <th width="150"><b>Charge to</b></th>
                          </tr>
                    <tr style="background-color: lightgrey;">
                            <th><b>Edit </b></th>
                            <th><b>Department</b></th>
                            <th><b>Description</b></th>
                            <th><b>Unit</b></th>
                            <th><b>Quantity</b></th>
                            <th><b>Vendor/Supplier</b></th>
                            <th><b>Rate</b></th>
                            <th><b>Quantity</b></th>
                            <th><b>Date</b></th>
                            <th><b>Cost-Code</b></th>
                            <th><b>Business</b></th>
                            <th><b>Cost-Center</b></th></tr>
                            <tr>
                        <td><input type="checkbox" name="chk"/></td>
                       
<td ><input type="text" name="text"></input></td>
<td><input type="text" name="text"></input></td>
<td><input type="text" name="text"></input></td>
<td><input type="number" name="number"></input></td>
<td><input type="text" name="text"></input></td>
<td><input type="number" name="number"></input></td>
<td><input type="number" name="number"></input></td>
<td><input type="date" name="date"></input></td>
<td><input type="number" name="number"></input></td>
<td><input type="number" name="number"></input></td>
<td><input type="number" name="number"></input></td>
                    </tr>
                </table>

            </form> 
</body>
</html>
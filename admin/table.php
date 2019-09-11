<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
<script src="src/tableHTMLExport.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
</head>
<body>
<table class="table" id="example">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@<a href="https://www.jqueryscript.net/tags.php?/twitter/">twitter</a></td>
    </tr>
  </tbody>
</table>
<script>
$("#example").tableHTMLExport({

  // csv, txt, json, pdf
  type:'csv',

  // default file name
  filename: 'tableHTMLExport.csv'

  // for csv
  separator: ',',
  newline: '\r\n',
  trimContent: true,
  quoteFields: true,

  // CSS selector(s)
  ignoreColumns: '',
  ignoreRows: '',
                
  // your html table has html content?
  htmlContent: false,
  
  // debug
  consoleLog: false,        

});
</script>
</body>
</html>
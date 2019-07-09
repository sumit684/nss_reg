<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
	<style type="text/css">
		/*table,td,th{
			border: 1px solid black;
		}
		table {
			border-collapse: collapse;
		}*/
		 .calendar th,.calendar td{
        padding:7px;
        border: 1px solid #000000;
        font-family: 'Times New Roman';
  }
  .calendar tr:hover{
        background-color: rgba(192, 193, 193, 0.38)!important;
  }
  .calendar th{
        background-color: #aad5f1;

  }
	</style>
</head>
<body>
	<div class="container-fluid">
	<input id="myInput" type="text" placeholder="Search by sports | Dept">

	<?php

$row = 1;
if (($handle = fopen("csv/test2.csv", "r")) !== FALSE) {
    
    echo '<table class="calendar table-bordered table-responsive" id="myTable" border="1">';
    
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>';
        }else{
            echo '<tr>';
        }
        
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
               $value = "&nbsp;";
            }else{
               $value = $data[$c];
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }
        
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }
    
    echo '</tbody></table></div>';
    fclose($handle);
}
?>

</body>
</html>

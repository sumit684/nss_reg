<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'include/link.html'?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
 <form>
    <label class="checkbox-inline">
      <input type="checkbox" name="op1" value="1">Option 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="op2" value="1">Option 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="op3" value="1">Option 3
    </label>
    <button class="btn btn-success" name="submit">Submit</button>
  </form>
</body>
</html>
<?php 
if(isset($_REQUEST['submit'])){
	$array = $_REQUEST['op1'];
	echo $array;
}
?>
<html>
<head>
    <title>Test</title>
    <style>

        form { flow:row(label,input); }
        form > label {white-space:nowrap;}
        form [required].error { border-right:0.25em red solid; }

    </style>
</head>
<body>
<?php echo "就安静安静啊"; ?>

<?php
$b =2 ;
$c =3;
$d = 4;
$e = 5;
var_dump($oSciter);
include "test3.php";

 ?>

<form action="form.php?id=3" method="get">
    <label>First name:</label><input|text(first) required title="Must not be empty">
    <label>Second name:</label><input|text(second) required=".{2,}" title="Please enter 2 characters or more." >
    <button|submit>Submit</button>
</form>

<script type="text/tiscript">

</script>
</body>
</html>
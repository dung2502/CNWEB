<html>
<head>
<meta charset="UTF-8"/>
<title>Danh sach sinh vien</title>
</head>
    <body>
        <h2>Danh sach sinh vien:</h2>
<?php
    for($i= 1; $i <= sizeof($studentList); $i++)
{
        echo "<p>".$i.". <a href="?stid=".$studentList[$i]->id."">" .$studentList[$i]->name ."</a></p>";
}
?>
        <br>
        <p><a href="../index.php">Home page</a></p>
    </body>
</html>
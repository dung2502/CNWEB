<html>
<head>
<meta charset="UTF-8"/>
<title>Thong tin chi tiet sinh vien</title>
</head>
    <body>
        <h2>Chi tiet sinh vien:</h2>
        <?php
            echo "<p><b>" .$student->name ."</b></p>";
            echo "<p> Age: ".$student->age .",</p>";
            echo "<p> University: ".$student->university .".</p><br>";
        ?>
        <p><a href="javascript: history.back()">Back</a></p>
    </body>
</html>
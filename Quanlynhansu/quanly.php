<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $link = mysqli_connect('localhost:3307','root','' ) or die('Khong the ket noi den CSDL MySQL');
    mysqli_select_db($link,"quanlynhansu");
    $sql = "select * from Table1";
    $rs = mysqli_query($link,$sql);
    echo '<table border = "1" width="100%">';
    echo '<caption>Du lieu truy xuat tu bang Nhan su</caption>';
    echo '<tr><th>Ma so</th><th>Ho ten</th><th>Ngay sinh</th><th>Nghe nghiep</th></tr>';
    while($row = mysqli_fetch_array($rs)) {
        echo '<tr><td>'.$row['maso'].'</td><td>'.$row['hoten'].'</td><td>'.$row['ngaysinh'].'</td><td>'.$row['nghenghiep'].'</td></tr>';
        // $maso = $row{"maso"};
        // $hoten = $row{"hoten"};
        // $ngaysinh = $row{"ngaysinh"};
        // $nghenghiep = $row{"nghenghiep"};
    }
    echo '</table>';
    mysqli_free_result($rs);
    mysqli_close($link);
?>  
</body>
</html>
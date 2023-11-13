<?php
    include_once("E_Student.php");
    class Model_Student{
        public function _construct()   {}
        public fuction getAllStudent(){
            $link = mysqli_connect('localhost:3307','root','' ) or die('Khong the ket noi den CSDL MySQL');
            mysqli_select_db($link,"DULIEU");
            $sql = "select * from sinhvien";
            $rs = mysqli_query($link,$sql);
            $i=0;
            while($row = mysqli_fetch_array($rs)){
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                while ($i!=$id) $i++;
                $students[$i++] = new Entity_Student ($id, $name, $age, $university);
                }
               return $students;
            }
        public function getStudent Detail ($stid) {
            // Load du lieu tu CSDL
            $allStudent = $this->getAllStudent ();
            return $allStudent [$stid];
                }
            }
?>
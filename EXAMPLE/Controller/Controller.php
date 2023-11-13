<?php
    include_once("../Model/Model_Student.php")
    class Ctrl_Student{
        public function invoke(){
            if (isset($_GET['stid'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/StudentDetail.html");
            }
        }
    };
    $C_Student = new Ctrl_Student();
    $C_Student->invoke();
?>
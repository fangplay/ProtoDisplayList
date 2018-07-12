<?php
    $link = mysqli_connect("localhost","root");
    mysqli_set_charset($link,'utf8');
    $sql = "use alumni";
    $result = mysqli_query($link,$sql);
    //$sql = "SELECT * FROM prepaststudent WHERE graduation = '2 of 2560'";
    $sql = "SELECT * FROM prepaststudent WHERE faculty = 'คณะนิติศาสตร์'";
    //$sql = "SELECT * FROM `faculty`";
    //$sql = "SELECT * FROM `major`";
    $result = mysqli_query($link,$sql);
    while($dbarr = mysqli_fetch_array($result)){
        //echo " $dbarr[major_id] $dbarr[major_th] $dbarr[major_en] <p>";
        //echo " $dbarr[facname_th] $dbarr[facname_en] <p>";
        echo "รหัสนิสิต $dbarr[std_id] ชื่อ $dbarr[std_name] สาขาวิชา $dbarr[major] คณะ $dbarr[faculty] จบการศึกษา $dbarr[graduation] <p>";
    }
?>

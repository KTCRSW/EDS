<?php 

    require_once '../db/connect.db.php';

    $id = $_POST['id'];

    $getBudgetStatus = "SELECT * FROM enrolltbl WHERE ref_studenttbl = $id";
    $queryBudgetStatus = $db->query($getBudgetStatus);

    if($row = mysqli_fetch_array($queryBudgetStatus)){
        if($row['ref_status'] == 0){
            $update = "UPDATE enrolltbl SET ref_status = 1 WHERE ref_studenttbl = $id";
            $query = $db->query($update);
            header("Refresh:1.3; url=../admin/admin.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'ระบบกำลังพาคุณไป' ,
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../admin/admin.php';
            });
             });</script>";
        } else if($row['ref_status'] == 1){
            $update = "UPDATE enrolltbl SET ref_status = 0 WHERE ref_studenttbl = $id";
            $query = $db->query($update);
            header("Refresh:1.3; url=../admin/admin.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'ระบบกำลังพาคุณไป' ,
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../admin/admin.php';
            });
             });</script>";
    }
}


?>
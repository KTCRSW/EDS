<?php 

    session_start();

    include '../db/connect.db.php';

    $user = $_POST['uid'];
    $username = $_POST['username'];
    $address = $_POST['about'];
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $_FILES['upload']['name'];
    $ext = explode(".", $_FILES['upload']['name']);
    $filename = $username.".".$ext[1];

    if(move_uploaded_file($_FILES['upload']['tmp_name'], "../admin/img/". "$filename")){
        echo "Successfully uploaded";
    }


    $updateUser = "UPDATE users SET username = '$username', email = '$email', phone = '$phone', fname = '$fname', lname = '$lname', address = '$address', img = '$filename' WHERE u_id = '$user'";
    $queryUpdate = $db->query($updateUser);


    header('location: ../admin/admin_datamanagement.php');

?>
.<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</script>
<script>
    setTimeout(function() {
        Swal.fire({
            icon: 'success',
            title: 'ทำการอัพเดตข้อมูลเรียบร้อย',
            text: 'ระบบกำลังนำคุณไป',
            showCancelButton: false,
            showConfirmButton: false
        }, function() {
            window.location = "../../Frontend/login.php";
        });
    });
</script>
<?php

header("Refresh:3; url=../../Frontend/login.php");


?>
<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>


<section class="m-2 w-full">
     

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2  rounded-t-lg" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">เช็คชื่อนักศึกษาเข้าเรียนรายวิชา</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg "id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">เช็คชื่อนักศึกษาเข้าร่วมกิจกรรมหน้าเสาธง</button>
        </li>
        <li role="presentation">
            <a href="./service_information.php"><button class="inline-block p-4 border-b-2  rounded-t-lg" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">พิมพ์รายงานเอกสาร</button>
            </a>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 " id="settings" role="tabpanel" aria-labelledby="dashboard-tab">
    <?php include './check_subject_selectgroup.php'; ?>
    </div>
    <div class="hidden p-4 rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="settings-tab">
    <?php include './fileDownloads.php';?>        

    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
    </div>
</div>


</section>
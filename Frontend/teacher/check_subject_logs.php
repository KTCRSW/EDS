<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";

$subjectteacherid = $_SESSION['SubjectTeacherID'];
$sgroup = $_SESSION['GP'];
$syear = $_SESSION['Year'];

// echo $sgroup. "" . $syear;

$sql = "SELECT * FROM enrolltbl WHERE ref_years = '$syear' AND ref_stdGroups = '$sgroup'";
$query = $db->query($sql);
$sqls = "SELECT * FROM enrollsubject WHERE ref_years = '$syear' AND ref_stdGroups = '$sgroup'";
$querys = $db->query($sqls);

$getStatus = "SELECT * FROM statusstudent";
$queryStatus = $db->query($getStatus);
$count = mysqli_num_rows($queryStatus);

?>

<div class="w-full py-6">
    <div class="flex justify-center px-24 items-center">
        <div class="w-full ">
            <div class="w-full overflow-x-auto">
                <div class="flex py-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                        <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                        <line x1="3" y1="22" x2="21" y2="22"></line>
                    </svg>
                    <span class="text-[24px] font-medium">บันทึกการเช็คชื่อ</span>
                </div>
                <div class="flex gap-4 mb-4">
                    <span class="flex text-[16px] font-medium gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        วันที่เรียน : <?php echo date("d/m/Y"); ?> </span>
                    <span class="flex text-[16px] font-medium gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#13de6d" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                            <polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon>
                        </svg>
                        คาบทฤษฏี</span>

                </div>
                <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                    <tbody>
                        <tr class=" text-center bg-[#3b82f6]">
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-white rounded-tl-lg">รหัสนักศึกษา ชื่อ-นามสกุล</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-white">สถานะการเช็คชื่อ</th>
                        </tr>

                        <!-- /* -------------------------------------------------------------------------- */
                        /*                                      1                                     */
                        /* -------------------------------------------------------------------------- */ -->
                        <form action="">
                            <?php
                            while ($listStd = mysqli_fetch_assoc($query)) {
                            ?>

                                <tr class="odd:bg-slate-50">
                                    <td class="h-16 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                        <div class="flex py-4">
                                            <div>
                                                <div class="avatar">
                                                    <div class="w-[64px] h-[64px] rounded-xl">
                                                        <?php

                                                        if ($listStd['ref_stdImg'] == '') {
                                                            echo "<img src='../image/null_user.png' />";
                                                        } else

                                                        ?>
                                                        <img src="../image/<?php echo $listStd['ref_stdImg']; ?>" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex flex-col justify-center ml-4">
                                                <span class="text-[16px] font-semibold"><?php echo $listStd['ref_stdfname'] . "&nbsp" . $listStd['ref_stdlname']; ?></span>
                                                <span><?php echo $listStd['ref_studenttbl']; ?></span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                        <div class="flex justify-center">
                                            <?php 
                                            
                                            $getStatus = "SELECT * FROM checkin WHERE ref_stdID = '".$listStd['ref_studenttbl']."'";
                                            $queryStatusStd = $db->query($getStatus);

                                            while($st = mysqli_fetch_assoc($queryStatusStd)){
                                                if($st['check_in_status'] == 0){
                                                    echo "มาเรียน";
                                                }
                                                if($st['check_in_status'] == 1){
                                                    echo "ขาดเรียน";
                                                }
                                                if($st['check_in_status'] == 2){
                                                    echo "ลาป่วย";
                                                }
                                                if($st['check_in_status'] == 3){
                                                    echo "ลากิจ";
                                                }
                                                if($st['check_in_status'] == 4){
                                                    echo "มาสาย";
                                                }
                                            }

                                            ?>
                                        </div>
                                    </td>
                                   
                                   
            </div>

            </td>




            </tr>


        <?php }

        ?>
        </tbody>

        </table>

        </form>

        </div>
        <div class="mt-4">
            <!-- <form action="../../Backend/functions/check_subject.php">
                        <?php //while($studt = mysqli_fetch_assoc($querys)):
                        ?>
                        <input type="text" name="StudentID" id="StudentID" value="<?php //echo $studt['ref_studenttbl'];
                                                                                    ?>">
                        <?php //endwhile; 
                        ?>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->

        </div>

    
    </div>

</div>


<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">ต้องการบันทึกการเช็คชื่อ?</h3>
                <button data-modal-hide="popup-modal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    ยืนยัน
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>

</div>

</div>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";

$teacherID = $_SESSION['UserID'];
$subjectLst = "SELECT * FROM tbl_schedule WHERE schedule_teacherID = $teacherID ORDER BY schedule_id ASC" ;
$querySublst = $db->query($subjectLst);




?>
<div class="flex justify-center px-24">
<div class="w-full overflow-x-auto">
<div class="flex mb-4">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
<span class="text-[20px] font-medium">เลือกกลุ่มเรียนเพื่อบันทึกเข้ารายวิชา</span>
</div>
<div>
  <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">ชื่อกลุ่มที่สอน</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">กลุ่มที่สอน</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">วิชาที่เรียน</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">อาจารย์</th>
        <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100"></th>
      </tr>
      <?php while($subjectrow = mysqli_fetch_assoc($querySublst)):?>
      <tr class="transition-colors duration-300 hover:bg-slate-50">
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $subjectrow['schedule_detail'];?> เทคโนโลยีสารสนเทศ ปกติ</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $subjectrow['schedule_classYears'] . "/" . $subjectrow['schedule_classGroup'];?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $subjectrow['schedule_title'];?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $subjectrow['schedule_teacherName'];?></td>
        <input type="text" name="teacherID" value="<?php echo $_SESSION['UserID'];?>" hidden/>
        <input type="text" name="studentYear" value="<?php echo $subjectrow['schedule_classYears'];?>"  hidden/>
        <input type="text" name="studentGroup" value="<?php echo $subjectrow['schedule_classGroup'];?>" hidden/>
        <input type="text" name="SubjectName" value="<?php echo $subjectrow['schedule_title'];?>"  hidden/>
        <td class="h-12 px-1 text-sm transitions duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
          <form action="../../Backend/api/saveScore_Module/pageControl.php?=<?php echo $subjectrow['schedule_id'];?>?>" method="post">
          <input type="text" name="subi" value="<?php echo $subjectrow['schedule_id'];?>" placeholder="<?php echo $subjectrow['schedule_id'];?>" hidden/>
          <button type="submit" class="btn btn-warning" align="center"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button></td>
        </form>       
        </tr>


        <?php endwhile; ?>
      
    </tbody>
  </table>
</div>
</div>


</div>

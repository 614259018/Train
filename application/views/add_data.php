<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css"> 
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
  <center><h1 class="regh1">ข้อมูลการเดินทาง</h1></center>
    <form method="post" action="../Train/insert_Register">
    <center>
      <table>
        <tr>
            <th rowspan = "2" colspan = "1">ขบวน</th>
            <th colspan = "2">ต้นทาง</th>
            <th colspan = "2">ห้วยราช</th>
            <th colspan = "2">ปลายทาง</th>
            <th rowspan = "2" colspan = "1">หมายเหตุ</th>
        </tr>
        <tr>
            <td class="title">สถานี</td>
            <td class="title">เวลาออก</td>
            <td class="title">ถึง</td>
            <td class="title">ออก</td>
            <td class="title">สถานี</td>
            <td class="title">ถึงเวลา</td>
        </tr>
        
        <tr>
            <td class="input" colspan = "1"><input name="st_id" type="text" size="10" placeholder="หมายเลขขบวน"/></td>
            <td class="input" colspan = "1"><input name="note" type="text" size="10" placeholder="ชื่อสถานี"/></td>
            <td class="input" colspan = "1"><input name="s_station" type="text"  size="10" placeholder="เวลาที่ออก"/></td>
            <td class="input" colspan = "1"><input name="s_start_time" type="text" size="10" placeholder="เวลาที่ถึง"/></td>
            <td class="input" colspan = "1"><input name="h_time_to" type="text" size="10" placeholder="เวลาที่ออก"/></td>
            <td class="input" colspan = "1"><input name="h_start_time" type="text" size="10" placeholder="ชื่อสถานี"/></td>
            <td class="input" colspan = "1"><input name="e_station" type="text" size="10" placeholder="เวลาที่ถึง"/></td>
            <td class="input" colspan = "1"><input name="e_time_to" type="text" size="20" placeholder="หมายเหตุ"/></td>
        </tr>
      </table>
      <div class="reg_button">
        <a class="back" href="../Train/index">ย้อนกลับ</a>
        <input class="button" name="submit" type="submit" value="เพิ่มข้อมูล" />&nbsp;
      </div>
    </center>
    </form>
</body>
</html>
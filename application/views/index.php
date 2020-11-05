<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index | Train</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/style.css"> 
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<center><h1>ตารางการเดินทาง</h1></center>
<center>
    <table>
        <tr>
            <th class="thindex" rowspan = "2" colspan = "1">ขบวน</th>
            <th class="thindex" colspan = "2">ต้นทาง</th>
            <th class="thindex" colspan = "2">ห้วยราช</th>
            <th class="thindex" colspan = "2">ปลายทาง</th>
            <th class="thindex" rowspan = "2" colspan = "1">หมายเหตุ</th>
        </tr>
        <tr>
            <td class="title">สถานี</td>
            <td class="title">เวลาออก</td>
            <td class="title">ถึง</td>
            <td class="title">ออก</td>
            <td class="title">สถานี</td>
            <td class="title">ถึงเวลา</td>
        </tr>
        <?php
            foreach($TM as $row){
        ?>
        <tr>
            <td class="input id" colspan = "1"><?=$row->st_id;?></td>
            <td class="input" colspan = "1"><?=$row->s_station;?></td>
            <td class="input" colspan = "1"><?=$row->s_start_time;?></td>
            <td class="input" colspan = "1"><?=$row->h_time_to;?></td>
            <td class="input" colspan = "1"><?=$row->h_start_time;?></td>
            <td class="input" colspan = "1"><?=$row->e_station;?></td>
            <td class="input" colspan = "1"><?=$row->e_time_to;?></td>
            <td class="input" colspan = "1"><?=$row->note;?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <br><br>
    <a class="button" href="../Train/add_data">เพิ่ม</a>
</center>
</body>
</html>
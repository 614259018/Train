<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index | Train</title>
  
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<h2>ตารางการเดินทาง</h2>
<table border = "1">
        <tr>
            <th rowspan = "2" colspan = "1">ขบวน</th>
            <th colspan = "2">ต้นทาง</th>
            <th colspan = "2">ห้วยราช</th>
            <th colspan = "2">ปลายทาง</th>
            <th rowspan = "2" colspan = "1">หมายเหตุ</th>
        </tr>
        <tr>
            <td>สถานี</td>
            <td>เวลาออก</td>
            <td>ถึง</td>
            <td>ออก</td>
            <td>สถานี</td>
            <td>ถึงเวลา</td>
        </tr>
        <?php
            foreach($TM as $row){
        ?>
        <tr>
            <td colspan = "1"><?=$row->st_id;?></td>
            <td colspan = "1"><?=$row->station;?></td>
            <td colspan = "1"><?=$row->start_time;?></td>
            <td colspan = "1"><?=$row->time_to;?></td>
            <td colspan = "1"><?=$row->start_time;?></td>
            <td colspan = "1"><?=$row->station;?></td>
            <td colspan = "1"><?=$row->time_to;?></td>
            <td colspan = "1"><?=$row->note;?></td>
        </tr>
        <?php
            }
        ?>
      </table>
      <a href=""></a>
</body>
</html>
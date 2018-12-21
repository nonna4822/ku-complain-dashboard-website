<?php
require('X.php');
?>
<div class="container" style="padding-left: 15%">
  <div class="row">
    <h2>กระทู้ร้องเรียน</h2>
    <select name="category" onchange="showComplaint(this.value)">
      <option value="47">การทุจริตภายในมหาวิทยาลัย</option>
      <option value="2">การซ่อมบำรุง</option>
      <option value="3">ซักถามข้อสงสัยทั่วไป</option>
    </select>
  </div>

  <div id = "complaintTable" >
    <!-- <thead class="thead-dark">
      <tr >
        <th width="200" height="">หัวข้อเรื่อง</th>
        <th >เนื้อหา</th>
        <th width="200" >Option</th>
      </tr>
    </thead>
    <tbody >
    </tbody> -->
  </div>


</div>

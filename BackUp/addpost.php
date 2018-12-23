<?php
require('X.php');
?>
    <label for="country" style="padding-left: 25%;">หมวดหมู่เรื่องร้องเรียน</label>
<div class="container" style="padding-left: 16.8%;">
    <select name="catid" style="width:500px;">
      <?php foreach($Category_list as $Category){echo "<option value= $Category->catid> $Category->catname</option>"; }?>
    </select>
</div><br>
    
    
<div class="form-group" style="padding-left: 25%">
  <label for="usr">หัวข้อเรื่องร้องเรียน : </label>
  <input type="text" class="form-control" id="usr" style="width:600px">
</div>

<div class="form-group" style="padding-left: 25%">
  <label for="comment">เนื้อหาเรื่องร้องเรียน :</label>
  <textarea class="form-control" rows="5" id="comment" style="width:800px"></textarea>
</div>  <br>

<div style="padding-left: 25%">
    <label>เร่งด่วน</label>
<input type="range" list="number"  min="1" max="3" style="width:300px">
    <label>เร่งด่วนมาก</label>
<datalist id="number" >
  <option value="1">
  <option value="2">
  <option value="3">
</datalist>
    </div><br>
    <label style="padding-left: 25%">การตั้งค่าสถานะเรื่องร้องเรียน</label>
    
<div style="padding-left: 25%">
    <h5>Public</h5>
    <label class="switch"> 
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
    
<div style="padding-left: 25%">
    <h5>Private</h5>
    <label class="switch"> 
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
    
    <ul class="nav justify-content-center" >

        <button type="button" class="btn btn-primary" >ส่งเรื่อง</button>
    </ul><br>

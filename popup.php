<?php
include('dbconn.php');
  $sql = "SELECT userID, name FROM users";
  $query = mysql_query($sql);
  $data = '';
  while($result = mysql_fetch_array($query)){
    $id = $result['userID'];
    $name = $result['name'];
    $data .= '<option value="'.$id.'">'.$name.'</option>';
  }

?>


<form class="popup-form">
  <div class="form-group">
    <label for="comment">Comment</label>
    <textarea type="text" class="form-control" id="comment" name="comment" placeholder="Optional" style="min-height:100px"></textarea>
  </div>
  <div class="form-group">
    <label for="reporter">Reporter</label>
    <select name="reporter" class="form-control" id="reporter">
      <option value="none">None</option>
      <?php echo $data;?>
    </select>
  </div>
</form>
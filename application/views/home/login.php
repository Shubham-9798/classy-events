<?php

?>



<?php echo validation_errors(); ?>
<?php echo form_open('home/login'); ?>

<div class="container">
  <h2>Vertical (basic) form</h2>
   <form action="/action_page.php">
      <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
       </div>

       <div class="form-group">
        <label for="pwd">Username:</label>
        <input type="text" class="form-control" id="" placeholder="User Name" name="usn">
      </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <!-- session -->
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>


  </form>
</div>
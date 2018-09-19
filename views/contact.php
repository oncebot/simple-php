<?php include('layouts/top.php'); ?> 
<?php include('layouts/navigation.php'); ?> 
<div class="wrapper content">
<form>
  <fieldset>
    <label for="nameField">Name</label>
    <input type="text" placeholder="CJ Patoilo" id="nameField">
    <label for="commentField">Comment</label>
    <textarea placeholder="Hi CJ …" id="commentField"></textarea>
    <div class="float-right">
      <input type="checkbox" id="confirmField">
      <label class="label-inline" for="confirmField">Send a copy to yourself</label>
    </div>
    <input class="button-primary" type="submit" value="Send">
  </fieldset>
</form>
</div>
<?php include('layouts/footer.php'); ?> 
<?php include('layouts/bottom.php'); ?> 
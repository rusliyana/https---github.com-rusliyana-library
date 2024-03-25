<div class=   "container-fluid">

    <h3>EDIT DATA</h3>
    <hr>
    <br>
    <form method="post" action="<?php echo base_url('table_user/proses_edit_user') ?>">

    <input type="hidden" name=id value="<?php echo $user['id']; ?>">

  <div class="form-group">
    <label for="name" class="col-sm-2 col-form-lable">NAMA USER</label>
    <div class="col-sm-5">
    <input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>">
  </div>
</div>

</div>



<div class="form-group">
    <label for="title" class="col-sm-2 col-form-lable"></label>
    <div class="col-sm-5">
        <button type="submit" class ="btn btn-primary">EDIT NAMA</button>
      
  </div>
</div>
</form>
</div>
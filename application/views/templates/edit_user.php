  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA USER</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
    <tr>
    <td>NO</td>
    <td>NAMA USER</td>
    <td>EMAIL</td>
    <td colspan="2"> SETTING</td>
</tr>

</thead>
<tbody>

<?php 
$no = 1;
foreach ($user as $user_name) : ?>
    <tr>
    <td><?php echo $no++; ?></td>

        <td><?php echo $user_name['name']; ?></td>
        <td><?php echo $user_name['email']; ?></td>
        <td>
        <a href="<?php echo base_url() ?>table_user/edit_user/<?php echo $user_name['id']; ?>" class="badge badge-primary ">Edit</a>
        <a href="<?php echo base_url() ?>table_user/delete_user/<?php echo $user_name['id']; ?>" class="badge badge-danger">DELETE</a>
        </td>
</tr>

    <?php endforeach; ?>

</table>

</div>
</div>
</div>
</div>

<!-- Modal untuk Edit -->

<?php foreach ($user as $user_name) : ?>

<div class="modal fade" id="editmodal <?php echo $user_name['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('table_user/proses_edit_user') ?>

        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="name" class= "form-control" value="<?php echo $user_name['name']; ?>">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>

<!-- Akhir Edit  -->



         
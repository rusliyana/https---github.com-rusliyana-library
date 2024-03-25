
       

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">BUKU</h6>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">TAMBAH DATA</button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                        <td>NO</td>
                        <td>GAMBAR</td>
                        <td>TAJUK</td>

                        <td>BUKU</td>

                        <td colspan="2"> SETTING</td>
                        
</tr>
</thead>
<tbody>

<?php 
$no = 1;
foreach ($news as $news_item) : ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><img src="<?php echo base_url('gambar/' . $news_item['gambar']); ?>" width="80" /></td>
        <td><?php echo $news_item['title']; ?></td>
    
        <td><?php echo $news_item['buku']; ?></td>
        <td>
         
        <a href="<?php echo base_url() ?>home/edit_data/<?php echo $news_item['id']; ?>" class="badge badge-primary ">Edit</a>
        <a href="<?php echo base_url() ?>home/delete_data/<?php echo $news_item['id']; ?>" class="badge badge-danger">DELETE</a>
        
</td>
</tr>



    <?php endforeach; ?> 

</tbody>
</table>

</div>
</div>
</div>
</div>

<!-- Modal untuk tambah Data -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('home/proses_tambah_data') ?>
        <div class="form-group">


        <div class="form-group">
            <label>GAMBAR</label>
            <input type="file" name="image" class= "form-control" size="20" required="">
        </div>



            <label>TAJUK</label>
            <input type="text" name="title" class= "form-control" required="">
        </div>

      

        <div class="form-group">
            <label>BUKU</label>
            <input type="file" name="userfile" class= "form-control" size="20" required="">
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

<!-- Akhir Data -->

<!-- Modal untuk Edit -->

<?php foreach ($news as $news_item) : ?>

<div class="modal fade" id="editmodal <?php echo $news_item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('home/proses_edit_data') ?>

        <input type="hidden" name="id" value="<?php echo $news['id']; ?>">

        <div class="form-group">
            <label>TAJUK</label>
            <input type="text" name="title" class= "form-control" value="<?php echo $news_item['title']; ?>">
        </div>





        <div class="form-group">
            <label>BUKU</label>
            <input type="file" name="userfile" class= "form-control" size="20" required="">
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




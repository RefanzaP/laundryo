
<div class="card">
  <div class="card-body">
<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-10 mt-5">
      <div class="table-responsive">
        <table class="table text-center">
            <h4 class="header-title">Data Pakaian</h4>
              <a href="#tambah" data-toggle="modal"><span class="glyphicon glyphicon-plus ">Tambah + </span></a><br>
          <thead class="text-uppercase bg-warning">
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Jenis Pakaian</th>
              <th scope="col">Nama Paket</th>
              <th scope="col">harga</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
      $no=0;
      foreach ($arr as $dt_bar) {
          $no++;
          echo '<tr>
                  <td>'.$no.'</td>
                  <td>'.$dt_bar->jenis_pakaian.'</td>
                  <td>'.$dt_bar->nama_paket.'</td>
                  <td>'.$dt_bar->harga_pakaian.'</td>
                  <td>'.$dt_bar->keterangan.'</td>
                  <td><a href="#" data-toggle="modal" onclick="prepare_ubah_user('.$dt_bar->id_pakaian.')" data-target="#update">Ubah</a> | <a href="'.base_url('index.php/pakaian/hapus_pakaian/'.$dt_bar->id_pakaian).'" onclick="return confirm(\'anda yakin?\')" >Hapus</a></td>
               </tr>';
      }
      ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- add user -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Tambah Pakaian</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() ?>index.php/pakaian/add" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_pakaian" ><br>
          Nama pakaian
          <input id="jenis_pakaian" type="text" name="jenis_pakaian" class="form-control" placeholder="jenis pakaian"><br>
          Harga pakaian
          <input id="harga_pakaian" type="number" max="1000000" name="harga_pakaian" class="form-control" placeholder="harga pakaian"><br>
          Keterangan
          <input id="keterangan" type="text" name="keterangan" class="form-control" placeholder=" Keterangan pakaian"><br>
          Pilih Jenis Paket
          <select name="id_jenis_paket" class="form-control">
              <?php
              foreach($data_jenis as $d) {
                echo "<option value='".$d->id_jenis_paket."'>".$d->nama_paket."</option>";
              }
              ?>
            </select><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
          <input type="button" value="Cancel" class="btn btn-defaul" data-dismiss="modal">
          </form>
          </div>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
            <!-- <div> -->
          <!-- /.box -->
        </div><br>
      <?php if($this->session->flashdata('pesan')!=null): ?>
           <div class= "alert alert-success"><?= $this->session->flashdata('pesan');?></div>
        <?php endif?>
<!-- Update Kategori -->
<div class="modal fade" id="update">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Ubah</h4>
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url() ?>index.php/pakaian/update" method="post" >
        <input type="hidden" name="ubah_id_pakaian" ><br>
        Nama pakaian
        <input id="ubah_jenis_pakaian" type="text" name="ubah_jenis_pakaian" class="form-control" placeholder="jenis pakaian"><br>
        Harga pakaian
        <input id="ubah_harga_pakaian" type="numeric" name="ubah_harga_pakaian" class="form-control" placeholder="harga pakaian"><br>
        Keterangan
        <input id="ubah_keterangan" type="text" name="ubah_keterangan" class="form-control" placeholder=" Keterangan pakaian"><br>
        Pilih Jenis Paket
        <select name="ubah_id_jenis_paket" class="form-control">
            <?php
            foreach($data_jenis as $d) {
              echo "<option value='".$d->id_jenis_paket."'>".$d->nama_paket."</option>";
            }
            ?>
          </select><br>
      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    function prepare_ubah_user(id_pakaian){
      $("#ubah_id_pakaian").empty();
      $("#ubah_jenis_pakaian").empty();
      $("#ubah_harga_pakaian").empty();
      $("#ubah_keterangan").empty();
      $("#ubah_id_jenis_paket").empty();

      $.getJSON('<?php echo base_url(); ?>index.php/pakaian/get_detail_pakaian/' + id_pakaian, function(data){
          $("#ubah_id_pakaian").val(data.id_pakaian);
          $("#ubah_jenis_pakaian").val(data.jenis_pakaian);
          $("#ubah_harga_pakaian").val(data.harga_pakaian);
          $("#ubah_keterangan").val(data.keterangan);
          $("#ubah_id_jenis_paket").val(data.id_jenis_paket);
        }
      });
    }
  </script>

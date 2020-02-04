<!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/select2.min.css">
  <!-- Select2 -->
<script src="<?=base_url()?>assets/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>

  <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Mobil <strong><?php echo $edit->namaKendaraan; ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           <?php echo form_open_multipart('mobil/edit'); ?>
              <input type="hidden" name="idKendaraan" value="<?php echo $edit->idKendaraan; ?>">
              <div class="box-body">

                <?php if(validation_errors() != false) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo validation_errors(); ?>
                </div>
                <?php } ?>

                <div class="form-group">
                  <label for="merk">Nama Kendaraan</label>
                  <input type="text" name="namaKendaraan" id="namaKendaraan" class="form-control" placeholder="Nama Kendaraan" value="<?php echo $edit->namaKendaraan; ?>">
                </div>
                <div class="form-group">
                <label>Merk Kendaraan</label>
                <option value="" selected="selected"></option>
                <select class="form-control select2" name="merkKendaraan" id="merkKendaraan" style="width: 100%;">
                  <?php
                  $no = 1;
                  foreach($list as $row) {
                  ?> 
                    <option value="<?php echo $row->merkKendaraan; ?>" <?php if($edit->merkKendaraan == $row->merkKendaraan) { ?>selected="selected"<?php } ?> ><?php echo $row->merkKendaraan; ?></option>
                  <?php
                  $no++; }
                  ?> 
                </select>
              </div>
            <!--   <div class="form-group">
                  <label for="merk">Tahun Mobil</label>
                  <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun Mobil" 
                  value="<?php echo $edit->tahunproduksi; ?>">
                </div> -->
              <div class="form-group">
                  <label for="merk">No. Plat Mobil</label>
                  <input type="text" name="platKendaraan" id="platKendaraan" class="form-control" placeholder="No. Plat Mobil" value="<?php echo $edit->platKendaraan; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Bahan Bakar</label>
                  <input type="text" name="bahanBakar" id="bahanBakar" class="form-control" placeholder="Bahan Bakar" value="<?php echo $edit->bahanBakar; ?>">
                </div>
                <div class="form-group">
                  <label for="merk">Tanggal Exp. Pajak</label>
                  <input type="text" name="tglPajak" id="tglPajak" class="form-control" placeholder="Tanggal Exp. Pajak" value="<?php echo $edit->tglPajak; ?>">
                </div>
                <!-- <div class="form-group">
                  <label for="merk">Tarif Overtime /Jam</label>
                  <input type="text" name="lembur" id="lembur" class="form-control" placeholder="Tarif Overtime /Jam" value="<?php echo $edit->lembur; ?>">
                </div> -->
                <!-- <div class="form-group">
                  <label for="merk">No. Rangka Mobil</label>
                  <input type="text" name="rangka" id="rangka" class="form-control" placeholder="No. Rangka Mobil" value="<?php echo $edit->norangka; ?>">
                </div> -->
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Foto Mobil</label>
                  <input type="file" id="foto" name="foto">
                  Kurang FOTO, BAHAN BAKAR, TANGGAL PAJAK YA NANTI DITAMBAHIN DI EDIT JANGAN LUPA
                  <!-- Kurang FOTO, BAHAN BAKAR, TANGGAL PAJAK YA NANTI DITAMBAHIN DI EDIT JANGAN LUPA
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
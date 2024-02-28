<div class="col-md-12">
            <div class="card card-navy">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                     <div class="col-sm-5">
                        <div class="form-group">
                            <label> Tahun </label>
                            <div class="col-10 input-group">
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">--tahun--</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                            <span class="input-group-append">
                                <button onclick="ViewTabelLaporan()" class="btn btn-outline-primary btn-flat"  data-toggle="modal" data-target="#cari-produk">
                                    <i class="fas fa-file-alt"></i> View Laporan
                                </button>
                                <button onclick="PrintLaporan()" type="reset" class="btn btn-outline-success btn-flat">
                                    <i class="fas fa-print"></i> Print Laporan
                                      </button>
                                  </span>
                             </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <hr>
                        <div class="Tabel">

                    </div>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<script>
     function ViewTabelLaporan() {
        let tahun = $('#tahun').val();
        if (tahun == "") {
            Swal.fire("Harap Masukan Tahun!");
        } else {
    $.ajax({
        type: "POST",
        url: "<?= base_url('Laporan/ViewLaporanTahunan') ?>",
        data: {
            tahun: tahun,
        },
        dataType: "JSON",
        success: function(response){
            if (response.data) {
                $('.Tabel').html(response.data)
            }
        }
    });
    }
}

    function PrintLaporan(){
        let tahun = $('#tahun').val();
         if (tahun == "") {
            Swal.fire("Harap Masukan Tahun!");
        } else {
            NewWin=window.open('<?=base_url('Laporan/PrintLaporanTahunan')?>/' + tahun,'NewWin','toolbar=no,width=1000,height=500,scrollbars=yes');
        }
    }
</script>
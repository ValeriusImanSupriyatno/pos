<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Laporan Laba Kotor</h3>
            </div>
            <div class="card-body">
                <form id="tanggal-transaksi" method="POST" action="<?= base_url('transaksi/downloadLabaKotor') ?>">
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                        <div class="col-lg">
                            <input type="text" id="tanggalAwal" name="tanggalAwal" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kasir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                        <div class="col-lg">
                            <input type="text" id="tanggalAkhir" name="tanggalAkhir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kasir" class="col-sm-4 col-form-label">Biaya Lain</label>
                        <div class="col-lg">
                            <input type="text" id="biaya" name="biaya" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="button" id="download" class="btn btn-primary"><i class="fas fa-file-pdf"></i> PDF</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#tanggalAwal').datepicker({
            format: "yyyy-mm-dd"
        });
        $('#tanggalAkhir').datepicker({
            format: "yyyy-mm-dd"
        });

        $("#download").on('click', function() {
            let awal = $("#tanggalAwal").val();
            let akhir = $("#tanggalAkhir").val();
            let biaya = $('#biaya').val();
            if (awal > akhir) {
                swal({
                    title: 'Tanggal Awal Lebih Besar',
                    type: 'error'
                })
            } else if (biaya < 0) {
                swal({
                    text: 'Biaya Lain Tidak Boleh Kecil Dari 0',
                    type: 'error'
                })
            } else if (biaya == "") {
                swal({
                    text: 'Biaya Lain Wajib Di Isi, Jika Tidak Ada Isi Dengan Nilai 0',
                    type: 'error'
                })
            } else {
                $('#tanggal-transaksi').submit();
            }
        });
    })
</script>
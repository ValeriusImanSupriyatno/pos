<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h2 class="page-header">
                <i class="fas fa-globe"></i> CV. Karya Muda Mandiri
                <small class="float-right">Date: <?= $pembelian->tanggal ?></small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <strong>TOKO VALERIUS</strong>
            <address>
                CUPUWATU II RT.06/02<br>
                PURWOMARTANI<br>
                KALASAN SLEMAN YOGYAKARTA<br>
                Telp: 081364226987<br>
                Email: Supriyatno@student.ukrimuniversity.ac.id
            </address>
        </div>
        <div class="col-sm-4 invoice-col">
            <b>No. Transaksi : <?= $pembelian->no_pembelian ?></b><br>
            <br>
            <b>PBL :</b> <?= $pembelian->nama ?><br>
            <b>SPL :</b> <?= $pembelian->nama_supplier ?><br>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Product</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Satuan</th>
                        <th>Isi</th>
                        <th>Harga Jual</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($item as $it) { ?>
                        <tr>
                            <th><?= $it->kode ?></th>
                            <td><?= $it->nama ?></td>
                            <td><?= formatRupiah($it->harga_item_beli) ?></td>
                            <td><?= $it->qty_item_beli ?></td>
                            <td><?= $it->satuan ?></td>
                            <td><?= $it->isi ?></td>
                            <td><?= formatRupiah($it->harga_jual) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <h5><i class="fas fa-info"></i> Note:</h5>
            Mohon lampirkan nota pembelian dari supplier. Trimakasih.
        </div>
        <!-- /.col -->
        <div class="col-6">

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Total:</th>
                        <td><?= formatRupiah($pembelian->biaya) ?></td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>
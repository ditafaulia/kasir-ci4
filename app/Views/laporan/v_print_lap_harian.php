<div class="col-12">
        <b> Tanggal :</b> <?= $tgl ?>
     <table class="table table-bordered table-striped">
    <tr class="text-center">
    <th>NO</th>
    <th>barcode/Kode</th>
    <th>Nama Produk</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>QTY</th>
    <th>Total Harga</th>
    <th>Total Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($dataharian as $key => $value) { 
        $grandtotal[] = $value ['total_harga'];
        $granduntung[] = $value ['untung'];    
    ?>
        
    <tr>
        <th class="text-center"><?= $no++ ?></th>
        <th class="text-center"><?= $value ['kode_produk'] ?></th>
        <th><?= $value ['nama_produk'] ?></th>
        <th class="text-right">Rp.<?= number_format($value ['modal'],0) ?></th>
        <th class="text-right">Rp.<?= number_format($value ['harga'],0) ?></th>
        <th class="text-center"><?= $value ['qty'] ?></th>
        <th class="text-right">Rp.<?= number_format($value ['total_harga'],0) ?></th>
        <th class="text-right">Rp.<?= number_format($value ['untung'],0) ?></th>
    </tr>

    <?php } ?>
    <tr class="text-center bg-navy">
        <td colspan="6">
            <h5>Grand Total</h5>
        </td>
        <td class="text-right">
            Rp. <?= $dataharian == null ? '' : number_format(array_sum($grandtotal),0) ?>
        </td>
        <td class="text-right">
            Rp. <?= $dataharian == null ? '' : number_format(array_sum($granduntung),0) ?>
        </td>
    </tr>
</table>
     </div>
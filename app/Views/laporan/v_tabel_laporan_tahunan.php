<div class="row">
<div class="col-12 text-center">
          
      </div>
     <div class="col-12 text-center">
      <hr>
      <b>
        <h4><?= $judul ?></h4>
      </b>
      
     </div>

     <div class="col-12">
     <b> Tahun :</b> <?= $tahun ?>
     <table class="table table-bordered table-striped">
    <tr class="text-center">
    <th>NO</th>
    <th>Bulan</th>
    <th>Total</th>
    <th>Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($datatahunan as $key => $value) { 
        $grandtotal[] = $value ['total_harga'];
        $granduntung[] = $value ['untung'];    
    ?>
        
    <tr>
        <th class="text-center"><?= $no++ ?></th>
        <th class="text-center"><?= $value ['bulan'] ?></th>
        <th class="text-right">Rp.<?= number_format($value ['total_harga'],0) ?></th>
        <th class="text-right">Rp.<?= number_format($value ['untung'],0) ?></th>
    </tr>

    <?php } ?>
    <tr class="text-center bg-navy">
        <td colspan="2">
            <h5>Grand Total</h5>
        </td>
        <td class="text-right">
            Rp. <?= $datatahunan == null ? '' : number_format(array_sum($grandtotal),0) ?>
        </td>
        <td class="text-right">
            Rp. <?= $datatahunan == null ? '' : number_format(array_sum($granduntung),0) ?>
        </td>
    </tr>
</table>
</div>
</div>


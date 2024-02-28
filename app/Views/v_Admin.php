<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Produk</p>
              </div>
              <div class="icon">
              <i class="fas fa-boxes"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-navy">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Kategori</p>
              </div>
              <div class="icon">
              <i class="fas fa-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-lime">
              <div class="inner">
                <h3>44</h3>

                <p>Satuan</p>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>65</h3>

                <p>User</p>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        
        

        <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-lightblue">
              <span class="info-box-icon"><i class="fas fa-coins"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Harian</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-teal">
              <span class="info-box-icon"><i class="fas fa-coins"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Bulanan</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-olive">
              <span class="info-box-icon"><i class="fas fa-coins"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Income Tahunan</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

<div class="col-md-12">
<canvas id="myChart" widh="100%" height="75px"></canvas>
</div>





<script>
  const ctx = document.getElementById('myChart');
   new Chart(ctx, {
    type: 'line',
    data: {
      labels:  ['januari', 'februari', 'maret', 'april', 'mei', 'juni'],
      datasets: [{
        label: '',
        data:[12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

            
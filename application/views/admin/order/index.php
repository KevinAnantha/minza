          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                Orders Management /</span> Orders Data</h4>

              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <h5 class="card-header">
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead style="text-align: center;">
                      <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Order Date</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" style="text-align: center;">
                      <?php $i=1;foreach($dibeli as $item) {?>
                      <tr>
                        <td><?php echo $item->id_beli;?></td>
                        <td><?php echo $item->nama;?></td>
                        <td><?php echo $item->alamat;?></td>
                        <td><?php echo $item->telepon;?></td>
                        <td><?php echo $item->tgl_beli;?></td>
                        <td><?php echo $item->total_beli;?></td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
              <!--/ Striped Rows -->
            </div>
            <!-- / Content -->

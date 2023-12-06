          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Detail Order /</span> Data Detail Order</h4>

              <!-- <hr class="my-5" /> -->

              <!-- Striped Rows -->
              <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <h5 class="card-header">
                </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID Order</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($detail_beli as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->id_beli;?></td>
                            <td><?php echo $item->nama_produk;?></td>
                            <td><?php echo $item->harga_produk;?></td>
                            <td><?php echo $item->jml_beli;?></td>
                            <td><?php echo $item->sub_total;?></td>
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

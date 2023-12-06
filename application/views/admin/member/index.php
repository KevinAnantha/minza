          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Member /</span> Data Member</h4>

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
                        <th>Nama Costumer</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Username</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $i=1;foreach($costumer as $item) {?>
                      <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $item->nama_costumer;?></td>
                            <td><?php echo $item->email;?></td>
                            <td><?php echo $item->alamat;?></td>
                            <td><?php echo $item->no_tlp;?></td>
                            <td><?php echo $item->username;?></td>
                            
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

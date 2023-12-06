          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen produk/</span> Edit produk</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Form Edit produk</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
                      <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk;?>">
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Nama produk</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="basic-default-name" name="nama_produk" placeholder="Nama Album" value="<?php echo $produk->nama_produk;?>" />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Harga produk</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="harga_produk" placeholder="Harga" value="<?php echo $produk->harga_produk;?>" />
                          </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-message">Deskripsi</label>
                          <div class="col-sm-9">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              name="deskripsi"
                              placeholder="Deskripsi"
                              value="<?php echo $produk->deskripsi;?>" 
                            ></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Qty</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="qty" placeholder="Qty" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Gambar</label>
                          <div class="col-sm-9">
                            <input type="file" name="gambar" value="<?php echo $produk->gambar;?>" />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-12">
                            <button type="submit" class="btn rounded-pill btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- / Content -->

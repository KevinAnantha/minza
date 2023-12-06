          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Manajemen Biaya Kirim /</span> Edit Biaya Kirim</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Form Edit Biaya Kirim</h5>
                      <!-- <small class="text-muted float-end">Default label</small> -->
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo site_url('biayakirim/edit');?>">
                      <input type="hidden" name="id" value="<?php echo $biayakirim->idBiayaKirim;?>">
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Kurir</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="idKurir" value="<?php echo $kurir->namaKurir;?>">
                              <option>Pilih Kurir</option>
                              <?php foreach($kurir as $item) { ?>
                                <option value="<?php echo $item->idKurir;?>"<?php if ($item->namaKurir == $biayakirim->namaKurir) echo 'selected'; ?>><?php echo $item->namaKurir;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Kota Asal</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="idKotaAsal" value="<?php echo $kota->namaKota;?>">
                              <option>Pilih Kota Asal</option>
                              <?php foreach($kota as $item) { ?>
                                <option value="<?php echo $item->idKota;?>"<?php if ($item->namaKota == $biayakirim->namaKotaAsal) echo 'selected'; ?>><?php echo $item->namaKota;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Kota Tujuan</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="idKotaTujuan" value="<?php echo $kota->namaKota;?>">
                              <option>Pilih Kota Tujuan</option>
                              <?php foreach($kota as $item) { ?>
                                <option value="<?php echo $item->idKota;?>"<?php if ($item->namaKota == $biayakirim->namaKotaTujuan) echo 'selected'; ?>><?php echo $item->namaKota;?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-3 col-form-label" for="basic-default-name">Ongkos</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="basic-default-name" name="biaya" placeholder="Ongkir" value="<?php echo $biayakirim->biaya;?>" />
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

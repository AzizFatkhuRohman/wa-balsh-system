<?= $this->extend('layout/layout')?>
<?= $this->section('main')?>
<div class='container'>
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Kirim Pesan</h4>

              <!-- Basic Layout -->  
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">List Send Message</h5>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Device</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $da):?>
                    <tr>
                        <th scope="row"><?= $da['judul']?></th>
                        <td><?= $da['device']?></td>
                        <td><?= $da['kategori']?></td>
                        <td><?= $da['status']?></td>
                        <td><a href="" class='btn-sm btn btn-outline-primary'><i class='bx bxs-send'></i></a></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Message</h5>
                    </div>
                    <div class="card-body">
                      <form action='' method="post" enctype="multipart/form-data">
                        <?php csrf_field()?>
                        <!-- <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Judul</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              name="judul"
                              id="basic-icon-default-fullname"
                              placeholder="John Doe"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div> -->
                        <!-- <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Device</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <select class="form-select" aria-label="Default select example" name="device">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                          </div>
                        </div> -->
                        <!-- <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Kategori</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <select class="form-select" aria-label="Default select example" name="kategori">
                            <option value='Text'>Text</option>
                            <option value='Image'>Image</option>
                            </select>
                          </div>
                        </div> -->
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">No Whatsapp</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="number"
                              class="form-control"
                              name="nomor_whatsapp"
                              id="basic-icon-default-fullname"
                              placeholder="John Doe"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        
                            <!-- <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">Image File</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-comment"></i
                            ></span>
                            <textarea
                              id="basic-icon-default-message"
                              name="image"
                              class="form-control"
                              placeholder="Hi, Do you have a moment to talk Joe?"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div> -->
                        
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">Message</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-comment"></i
                            ></span>
                            <textarea
                              id="basic-icon-default-message"
                              name="deskripsi"
                              class="form-control"
                              placeholder="Hi, Do you have a moment to talk Joe?"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"
                            ></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name='submit'>Send</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            
            <div class="content-backdrop fade"></div>
          </div>
</div>
<?= $this->endSection()?>
<?= $this->extend('./layout/layout')?>
<?= $this->section('main')?>
<div class="container">
<div class="row mt-3" style="justify-content:center; text-align:center; align-items:center;">
    <div class="col-lg-3 col-sm-4 mb-2">
      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <i class='menu-icon bx bx-devices' style="color:blue;"></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <h4 class="fw-bold d-block mb-1">Device</h4>
                          <span class="card-title mb-2 fw-semibold">$12,628</span>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-2">
      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <i class='menu-icon bx bxs-contact' style="color:blue;"></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <h4 class="fw-semibold d-block mb-1">Kontak</h4>
                          
                          <span class="card-title mb-2"><?= $data?></span>
                          
                         </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 mb-2">
      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                            <i class='bx bxs-message-rounded-check' style='color:blue;'></i>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              </div>
                            </div>
                          </div>
                          <h4 class="fw-semibold d-block mb-1">Pesan Terkirim</h4>
                          <span class="card-title mb-2"><?= $pesan?></span>
                          </div>
                      </div>
                    </div>
</div>
</div>
<?= $this->endSection()?>
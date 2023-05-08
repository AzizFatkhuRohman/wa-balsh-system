<?= $this->extend('layout/layout')?>
<?= $this->section('main')?>
<div class="container">
<div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Update Data Kontak</h5>
                    </div>
                    <div class="card-body">
                        <form action="/after_edit/<?= $data['id']?>" method="post">
                            <?= csrf_field()?>
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?= $data['nama']?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Whatsapp</label>
                            <input type="number" name="nomor_whatsapp" class="form-control" id="exampleFormControlInput1" value='<?= $data['nomor_whatsapp']?>'>  
                            </div>
                            <div class="mb-3">
                                <button class='btn btn-primary' type='submit'>Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
</div>
<?= $this->endSection()?>
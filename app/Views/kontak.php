<?= $this->extend('layout/layout')?>
<?= $this->section('main')?>
        <div class="container">
            <div class="mt-2" style='display:flex; text-align:center; justify-content:center;'>
            <?php if (session('errors.nama')) : ?>
                <div class="alert alert-danger" role="alert" style='margin-right:2px'>
                    Name is required
                    </div>
                <?php endif ?>
                <?php if (session('errors.nomor_whatsapp')) : ?>
                <div class="alert alert-danger" role="alert">
                    Nomor is required type number
                    </div>
                <?php endif ?>
            </div>
            <div class="mt-4" style="display:flex; justify-content:center;">
            
                <!-- Button trigger modal -->
            <div style='margin-right:4px'>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Kontak
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kontak</h5>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                <?= csrf_field()?>
                <div class="mb-3">
                <label for="formFile" class="form-label">Nama</label>
                <input class="form-control" type="text" id="formFile" name='nama'>
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Nomor Whatsapp</label>
                <input class="form-control" type="number" id="formFile" name='nomor_whatsapp'>
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
        </div>
            </div>
            <div>
                                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class='bx bx-import'></i> Import Kontak
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Kontak</h5>
                        </div>
                    <div class="modal-body">
                        <form action="/import_kontak" method="post" enctype="multipart/form-data">
                        <?php csrf_field()?>
                        <div class="mb-3">
                        <label for="formFile" class="form-label">Unggah File</label>
                        <input class="form-control" type="file" id="formFile" name='file'>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
          </div>
        <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">List Data Kontak</h5>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive" style='text-align:center;'>
                    <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Whatsapp</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                         foreach ($data as $da) :?>
                    <tr>
                        <th scope="row"><?= $no++?></th>
                        <td><?= $da['nama'];?></td>
                        <td><?= $da['nomor_whatsapp'];?></td>
                        <td>
                            <a href="/edit/<?= $da['id']?>" class='btn-sm btn btn-outline-primary'><i class='bx bxs-edit'></i></a>
                            <a href="/delete/<?= $da['id']?>" class='btn-sm btn btn-outline-danger'><i class='bx bxs-trash'></i></a>
                        </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                  </div>
                
</div>
<?= $this->endSection()?>
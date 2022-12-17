<?php
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

while ($user =  mysqli_fetch_assoc($query)) {
  $row[] = $user;
}
?>
<div class="card">

  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0"><?= $_GET["halaman"]; ?></h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="table_id" class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">TTGL</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row as $rows) :
          ?>
            <tr>
              <td><img src="Source/img/biodata/<?= $rows["foto"]; ?>" alt="" width="25"></td>
              <td><?= $rows["nim"]; ?></td>
              <td><?= $rows["nama"]; ?></td>
              <td><?= $rows["tempatLahir"]; ?> / <?= $rows["tgl"]; ?></td>
              <td><?= $rows["jurusan"]; ?></td>
              <td class="d-flex">
                <!-- Modal Edit User -->
                <button class="me-1 btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editData<?= $rows['nim']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                </button>
                <div class="modal fade" id="editData<?= $rows['nim']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Mahasiswa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <img class="text-center mb-3" src="Source/img/biodata/<?= $rows["foto"]; ?>" alt="" width="100">
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="nim" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['nim']; ?>">
                            <label class="ms-2" for="floatingInput">Nim</label>
                            <div class="invalid-feedback">
                              Nim belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="nik" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['nik']; ?>">
                            <label class="ms-2" for="floatingInput">Nik</label>
                            <div class="invalid-feedback">
                              Nik belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['nama']; ?>">
                            <label class="ms-2" for="floatingInput">Nama</label>
                            <div class="invalid-feedback">
                              Nama belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-3">
                            <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['tempatLahir']; ?>">
                            <label class="ms-2" for="floatingInput">Temapt Lahir</label>
                            <div class="invalid-feedback">
                              Temapt Lahir belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-3">
                            <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['tgl']; ?>">
                            <label class="ms-2" for="floatingInput">Taggal Lahir</label>
                            <div class="invalid-feedback">
                              Taggal Lahir belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="jenisKelamin" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['jenisKelamin']; ?>">
                            <label class="ms-2" for="floatingInput">Jenis Kelamin</label>
                            <div class="invalid-feedback">
                              Jenis Kelamin belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="nohp" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['nohp']; ?>">
                            <label class="ms-2" for="floatingInput">Nomor hp</label>
                            <div class="invalid-feedback">
                              Nomor hp belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-6">
                            <input type="text" name="jurusan" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['jurusan']; ?>">
                            <label class="ms-2" for="floatingInput">Jurusan</label>
                            <div class="invalid-feedback">
                              Jurusan belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-3">
                            <input type="text" name="prodi" class="form-control" id="floatingInput" placeholder="name@example.com" required disabled value="<?= $rows['prodi']; ?>">
                            <label class="ms-2" for="floatingInput">prodi</label>
                            <div class="invalid-feedback">
                              prodi belum Di masukkan
                            </div>
                          </div>
                          <div class="form-floating mb-3 col-md-3">
                            <input type="text" name="kelas" class="form-control" id="floatingInput" placeholder="name@example.com" required value="<?= $rows['kelas']; ?>" disabled>
                            <label class="ms-2" for="floatingInput">kelas</label>
                            <div class="invalid-feedback">
                              kelas belum Di masukkan
                            </div>
                          </div>
                          <!-- <div class="form-floating mb-3 col-md-12">
                            <select class="form-select" id="mySelect" name="level" required>
                              <?php
                              $data = array("admin", "petugas", "mahasiswa");
                              foreach ($data as $key => $value) {
                                if ($rows["level"] == $key + 1) {
                                  echo "<option selected value='$key'>$value</option>";
                                } else {
                                  echo "<option value='$key'>$value</option>";
                                }
                              }
                              ?>
                            </select>
                            <div class="invalid-feedback">
                              Level belum Di masukkan
                            </div>
                          </div> -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal Edit User -->
              </td>
            </tr>
          <?php $no++;
          endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
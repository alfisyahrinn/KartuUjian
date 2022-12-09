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
              <td><?= $rows["nim"]; ?></td>
              <td><?= $rows["nama"]; ?></td>
              <td><?= $rows["tempatLahir"]; ?> / <?= $rows["tgl"]; ?></td>
              <td><?= $rows["jurusan"]; ?></td>
              <td class="d-flex">
                <!-- Modal Edit User -->
                <button class="me-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editData<?= $rows['nim']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <!-- <div class="modal fade" id="editData<?= $rows['nim']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="proses/editData.php" method="post" class="needs-validation" novalidate>
                          <div class="row">
                            <input type="hidden" name="id" value="<?= $rows['nim']; ?>">
                            <div class="form-floating mb-3 col-md-6">
                              <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="name@example.com" required value="<?= $rows['nama']; ?>">
                              <label class="ms-2" for="floatingInput">Nama</label>
                              <div class="invalid-feedback">
                                Nama belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-6">
                              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required value="<?= $rows['username']; ?>" <?php echo ($rows['username'] == 'admin') ? 'readonly' : ''; ?>>
                              <label class="ms-2" for="floatingInput">username</label>
                              <div class="invalid-feedback">
                                Username belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-12">
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
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="updateData" class="btn btn-primary">Update Data</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Modal Edit User -->

                <button class="me-1 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteKategori<?= $rows['nim']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg>
                </button>

                <!-- delete -->
                <div class="modal fade" id="deleteKategori<?= $rows['nim']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-md modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="proses/deletePunyaData.php" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                          <input type="hidden" name="nim" value="<?= $rows['nim']; ?>">
                          <div class="row">
                            <div class="form-floating mb-3 col-md-12 text-center">
                              <?php if ($rows["nama"] == "admin") : ?>
                                <div class="alert alert-warning" role="alert">
                                  <b><?= $rows["nama"]; ?></b> Tidak dapat di <b>DELETE</b>
                                </div>
                              <?php else : ?>
                                <div class="alert alert-danger" role="alert">
                                  Yakin menghapus User <b><?= $rows["nama"]; ?> <br> Semua Data dan akun akan ke hapus</b>
                                </div>
                              <?php endif ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" <?php echo ($rows["nama"] == "admin") ? "hidden" : ""; ?> name="deleteData" class="btn btn-danger">Delete User</button>
                            </div>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>

              </td>
            </tr>
          <?php $no++;
          endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
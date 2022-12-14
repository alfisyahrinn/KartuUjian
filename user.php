<?php
$query = mysqli_query($koneksi, "SELECT * FROM user");

while ($user =  mysqli_fetch_assoc($query)) {
  $row[] = $user;
}
?>
<div class="card">

  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0"><?= $_GET["halaman"]; ?></h5>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah User</button>
  </div>
  <div class="card-body">
    <!-- Modal Tambah User -->
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-fullscreen-md-down">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="proses/tambahData.php" method="post" class="needs-validation" novalidate>
              <div class="row">
                <div class="form-floating  col-md-12">
                  <div class="alert alert-warning py-1" role="alert">
                    Password Default <b>123</b>
                  </div>
                </div>
                <div class="form-floating mb-3 col-md-6">
                  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <input type="hidden" name="status" class="for1m-control" id="floatingInput" placeholder="name@example.com">
                  <label class="ms-2" for="floatingInput">username</label>
                  <div class="invalid-feedback">
                    Username belum Di masukkan
                  </div>
                </div>
                <div class="form-floating mb-3 col-md-6">
                  <select class="form-select" id="mySelect" name="level" required>
                    <option value="">Pilih Level</option>
                    <option value="1">Admin</option>
                    <option value="2">Petugas</option>
                    <option value="3">Mahasiswa</option>
                  </select>
                  <div class="invalid-feedback">
                    Level belum Di masukkan
                  </div>
                </div>
                <div class="form-floating mb-3 col-md-6">
                  <input type="text" name="nim" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                  <label class="ms-2" for="floatingInput">Nim</label>
                  <div class="invalid-feedback">
                    Nim belum Di masukkan
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="tambahData" class="btn btn-primary">Tambah Data</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah User -->
    </div>
    <div class="table-responsive">
      <table id="table_id" class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Username</th>
            <th scope="col">Level</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row as $rows) :
          ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $rows["nim"]; ?></td>
              <td><?= $rows["username"]; ?></td>
              <td><?= $rows["level"]; ?></td>
              <td>
                <?php if ($rows["status"] == 1) : ?>
                  <p class="alert alert-success p-0 m-0 text-center">Setuju</p>
                <?php else : ?>
                  <p class="alert alert-danger p-0 m-0 text-center">Belum</p>
                <?php endif ?>
              </td>
              <td class="d-flex">
                <!-- Modal Edit User -->
                <button class="me-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editData<?= $rows['id']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <div class="modal fade" id="editData<?= $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="proses/editData.php" method="post" class="needs-validation" novalidate>
                          <div class="row">
                            <input type="hidden" name="id" value="<?= $rows['id']; ?>">
                            <div class="form-floating mb-3 col-md-6">
                              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required value="<?= $rows['username']; ?>" <?php echo ($rows['username'] == 'admin') ? 'readonly' : ''; ?>>
                              <label class="ms-2" for="floatingInput">username</label>
                              <div class="invalid-feedback">
                                Username belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-6">
                              <select class="form-select" id="mySelect" name="status" required>
                                <?php
                                $data = array("Setuju", "Belum");
                                foreach ($data as $key => $value) {
                                  if ($rows["status"] == $key + 1) : ?>
                                    <option selected value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php else : ?>
                                    <option value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php endif ?>
                                <?php } ?>
                              </select>
                              <div class="invalid-feedback">
                                Level belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-12">
                              <select class="form-select" id="mySelect" name="level" required>
                                <?php
                                $data = array("admin", "petugas", "mahasiswa");
                                foreach ($data as $key => $value) { ?>
                                  <?php if ($rows["level"] == $key + 1) { ?>
                                    <option selected value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php  } else { ?>
                                    <option value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php  } ?>
                                <?php } ?>

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
                </div>
                <!-- End Modal Edit User -->

                <button class="me-1 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteKategori<?= $rows['id']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg>
                </button>

                <!-- delete -->
                <div class="modal fade" id="deleteKategori<?= $rows['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-md modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="proses/deleteData.php" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?= $rows['id']; ?>">
                          <div class="row">
                            <div class="form-floating mb-3 col-md-12 text-center">
                              <?php if ($rows["username"] == "admin") : ?>
                                <div class="alert alert-warning" role="alert">
                                  <b><?= $rows["username"]; ?></b> Tidak dapat di <b>DELETE</b>
                                </div>
                              <?php else : ?>
                                <div class="alert alert-danger" role="alert">
                                  Yakin menghapus User <b><?= $rows["username"]; ?></b>
                                </div>
                              <?php endif ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" <?php echo ($rows["username"] == "admin") ? "hidden" : ""; ?> name="deleteData" class="btn btn-danger">Delete User</button>
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
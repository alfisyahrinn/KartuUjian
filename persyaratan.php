<?php
$query = mysqli_query($koneksi, "SELECT * FROM persyaratan");

while ($user =  mysqli_fetch_assoc($query)) {
  $row[] = $user;
}

//edit syarat
if (isset($_POST["updateSyarat"])) {
  $nim = htmlspecialchars($_POST["nim"]);
  $status = htmlspecialchars($_POST["status"]);
  $hadir = htmlspecialchars($_POST["hadir"]);

  $result = mysqli_query($koneksi, "UPDATE persyaratan SET 
                                  hadir='$hadir', 
                                  status='$status'
                                  WHERE  nim=$nim;");

  if ($result) {
    echo "
    <script>
    alert('Persyaratan berhasil di Update')
    document.location='persyaratan'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Gagal Update Persyaratan')
    document.location='persyaratan'
    </script>
    ";
  }
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
            <th scope="col">Ukt</th>
            <th scope="col">Pembimbing</th>
            <th scope="col">Perpustakaan</th>
            <th scope="col">Hadir</th>
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
              <td><?= $rows["nim"]; ?></td>
              <td><img src="Source/img/<?= $rows["ukt"]; ?>" alt="" width="70"></td>
              <td><img src="Source/img/<?= $rows["pembimbing"]; ?>" alt="" width="70"></td>
              <td><img src="Source/img/<?= $rows["perpus"]; ?>" alt="" width="70"></td>
              <td><?= $rows["hadir"]; ?></td>
              <td>
                <?php if ($rows["status"] == 1) : ?>
                  <p class="alert alert-success p-0 m-0 text-center">Setujui</p>
                <?php else : ?>
                  <p class="alert alert-danger p-0 m-0 text-center">Belum</p>
                <?php endif ?>
              </td>
              <td class="d-flex">
                <!-- Modal Edit User -->
                <button class="me-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editData<?= $rows['nim']; ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                  </svg>
                </button>
                <div class="modal fade" id="editData<?= $rows['nim']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Persyaratan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="post" class="needs-validation" novalidate>
                          <div class="row">
                            <input type="hidden" name="nim" value="<?= $rows['nim']; ?>">
                            <div class="form-floating mb-3 col-md-6">
                              <select class="form-select" id="mySelect" name="status" required>
                                <?php
                                $data = array("Setujui", "Belum");
                                foreach ($data as $key => $value) :
                                  if ($rows["status"] == $key + 1) : ?>
                                    <option selected value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php else : ?>
                                    <option value='<?= $key + 1; ?>'><?= $value; ?></option>
                                  <?php endif ?>
                                <?php endforeach ?>
                                ?>
                              </select>
                              <label class="ms-2" for="floatingInput">Status</label>
                              <div class="invalid-feedback">
                                Level belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-6">
                              <input type="text" name="hadir" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?= $rows["hadir"]; ?>">
                              <label class="ms-2" for="floatingInput">Hadir</label>
                              <div class="invalid-feedback">
                                Hadir belum Di masukkan
                              </div>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                              <p class="ms-2 opacity-75" for="floatingInput">Ukt</p>
                              <img src="Source/img/tes.png" alt="" width="360">
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                              <p class="ms-2 opacity-75" for="floatingInput">Pembimbing</p>
                              <img src="Source/img/tes.png" alt="" width="360">
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                              <p class="ms-2 opacity-75" for="floatingInput">Perpustakaan</p>
                              <img src="Source/img/tes.png" alt="" width="360">
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="updateSyarat" class="btn btn-primary">Update Data</button>
                            </div>
                          </div>
                        </form>
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
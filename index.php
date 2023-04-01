<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokument Export</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container p-5">
        <form method="POST" action="print.php">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa-regular fa-user me-1"></i>Biodata Orang Tua
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="mb-2">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="parent_name" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="parent_birthplace" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="parent_date_birth" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="parent_jobs" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="parent_address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa-solid fa-user-group me-1"></i>Biodata Anak
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="mb-2">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="child_name" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="child_birthplace" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="child_date_birth" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="child_gender" class="form-control">
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Alamat</label>
                                        <textarea name="child_address" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa-regular fa-file me-1"></i>Perihal Izin
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="mb-2">
                                        <label class="form-label">Perihal Izin</label>
                                        <textarea name="perihal_izin" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Status Izin</label>
                                        <select name="status_izin" class="form-control">
                                            <option value="1">Mengizinkan</option>
                                            <option value="2">Tidak Mengizinkan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa-regular fa-circle-question me-1"></i>Informasi Surat
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="mb-2">
                                        <label class="form-label">Tempat Surat</label>
                                        <input type="text" name="ttd_location" class="form-control" autocomplete="off" />
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Tanggal Surat</label>
                                        <input type="date" name="ttd_date" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-end">Generate</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
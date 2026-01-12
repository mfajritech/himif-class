<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa | HIMIF Class</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">

  
    <div class="text-center mb-5">
        <i class="bi bi-person-badge-fill fs-1 text-primary"></i>
        <h3 class="fw-bold mt-2">Detail</h3>
        <p class="text-muted mb-0">Informasi lengkap anggota HIMIF Class</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

            
            <div class="card shadow-lg border-0 rounded-4 mb-5">
                <div class="card-body p-4 p-md-5">

                    <table class="table table-borderless mb-0">
                        <tr>
                            <td class="fw-semibold text-muted" style="width: 35%;">
                                <i class="bi bi-person-fill me-1"></i>Nama
                            </td>
                            <td class="fw-semibold">
                                {{ $student->name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-card-text me-1"></i>NIM
                            </td>
                            <td>
                                {{ $student->nim }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-telephone-fill me-1"></i>Phone
                            </td>
                            <td>
                                {{ $student->phone }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-envelope-fill me-1"></i>Email
                            </td>
                            <td>
                                {{ $student->user->email }}
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

          
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-journal-bookmark-fill me-1 text-primary"></i>
                        Kelas yang Diambil
                    </h5>

                    <p class="text-muted mb-0">
                        Belum ada data kelas yang diambil.
                    </p>
                   
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>

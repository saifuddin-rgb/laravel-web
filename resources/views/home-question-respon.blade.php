<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Terima Kasih!</h5>
                        <p>Pertanyaan Anda sudah kami terima dengan detail sebagai berikut:</p>
                        
                        <ul class="list-group mb-4">
                            <li class="list-group-item"><strong>Nama:</strong> {{ $nama }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
                            <li class="list-group-item"><strong>Pertanyaan:</strong> {{ $pertanyaan }}</li>
                        </ul>

                        <a href="/" class="btn btn-primary w-100">Kembali ke Form</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>
    <!-- Memuat Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <!-- Card Form Pertanyaan -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Form Pertanyaan</h5>
                        
                        <!-- Menampilkan Pesan Error Validasi -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form Utama -->
                        <form action="{{ route('question.store') }}" method="POST">
                            @csrf
                            
                            <!-- Input Nama (dengan old() agar tidak hilang saat error) -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                            </div>
                            
                            <!-- Input Email (dengan old()) -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" value="{{ old('email') }}">
                            </div>
                            
                            <!-- Input Pertanyaan (dengan old()) -->
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <textarea class="form-control" rows="4" id="pertanyaan" name="pertanyaan" placeholder="Tulis pertanyaan Anda di sini...">{{ old('pertanyaan') }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100">Kirim Pertanyaan</button>
                        </form>

                    </div>
                </div>
                <!-- Selesai Card -->

            </div>
        </div>
    </div>

</body>
</html>
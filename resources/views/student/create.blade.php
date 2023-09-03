<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&family=Urbanist:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Urbanist'
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary mb-5" data-bs-theme="dark">
            <div class="container">
              <a class="navbar-brand fw-semibold" href="{{ route('index') }}">Rekayasa Web</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <a href="{{ route('index') }}">
                    <button type="button" class="btn btn-light fw-medium">Back</button>
                </a>
              </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="fw-semibold mb-3">Add Student</h4>
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="fullName" aria-describedby="fullNameFeedback">
                            @error('name') <div id="fullNameFeedback" class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary fw-medium">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>

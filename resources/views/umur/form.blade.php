<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Umur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container p-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title fw-bold">
                    Form umur
                </div>

                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>yah Errorr!</strong>
                        <ol>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ol>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('fail'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>yah Errorr!</strong> {{ session('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <form action="{{ route('umur.proses') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kamu</label>
                        <input type="text" name="nama" class="form-control mt-2">
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" class="form-control mt-2">
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success">Masuk</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

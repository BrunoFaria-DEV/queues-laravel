<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    {{-- BOOTSTRAP STYLES --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container vh-100 d-flex align-items-center py-5">
        <div class="row">
            <h1 class="h1 text-center mb-4 inline">Pagina de download</h1>
            <h3 class="text-center mb-3 text-info">Escolha entre gerar o pdf de forma sincrona ou assincrona:</h3>
            <div class="col-6 d-flex justify-content-center">
                <div>
                    <h4 class="text-center form-label mb-3 text-gray">Gerar PDF Síncrono</h4>
                    <a href="{{ route('gerar_pdf') }}" class="btn btn-primary">PDF com 50 repetições</a>
                    <a href="{{ route('gerar_pdf') }}?largePDF=50000" class="btn btn-primary">PDF com 50000 repetições</a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div>
                    <h4 class="text-center form-label mb-3 text-gray">Gerar PDF Assíncrono</h4>
                    <a href="{{ route('gerar_pdf_assincrono') }}" class="btn btn-primary">PDF com 50 repetições</a>
                    <a href="{{ route('gerar_pdf') }}?largePDF=50000" class="btn btn-primary">PDF com 50000 repetições</a>
                </div>
            </div>
        </div>
    </div>
</body>
{{-- BOOTSTRAP JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

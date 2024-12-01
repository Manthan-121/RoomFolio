<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Pass</title>
    <link rel="stylesheet" href="{{ asset('assets/Card/style.css') }}">
</head>
<body>
    <div class="card-container">
        <div class="id-card">
            <div class="id-card-header">
                <h1>RoomFolio</h1>
                <h2>Visitor Pass</h2>
            </div>
            <div class="id-card-content">
                <div class="id-card-photo">
                    <img src="{{ asset('storage/images/pass_img/' . $pass->pass_img) }}" alt="Pass Image">
                </div>
                <div class="id-card-info">
                    <h2>{{ $pass->pass_name }}</h2>
                    <p><strong>ID:</strong> {{ $pass->pass_id }}</p>
                    <p><strong>Mobile:</strong> +91 {{ $pass->pass_mobile }}</p>
                    <p><strong>Email:</strong> {{ $pass->pass_email }}</p>
                    <p><strong>Address:</strong> {{ $pass->pass_address }}</p>
                    <p><strong>Category:</strong> {{ $cetegory->cat_name }}</p>
                </div>
            </div>
            <div class="id-card-footer">
                <p><strong>Start Date:</strong> {{ date('d-m-Y', strtotime($pass->pass_start_date)) }}</p>
                <p><strong>End Date:</strong> {{ date('d-m-Y', strtotime($pass->pass_end_date)) }}</p>
            </div>
        </div>
    </div>
    <button id="print-button">Print Pass</button>
    <a href="{{ route('pass.index') }}" id="print-button">Back</a>
    <script src="{{ asset('assets/Card/script.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Logs</h1>

    <!-- Форма відправки логів -->
    <form action="/log" method="POST">
        @csrf
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Log</button>
    </form>

    <!-- Відображення повідомлення про успіх -->
    @if (session('status'))
        <div class="alert alert-success mt-4">
            {{ session('status') }}
        </div>
    @endif
</div>
</body>
</html>

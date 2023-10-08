<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send An Email To The Creator</title>
    <link rel="stylesheet" type="text/css" href="/style.css">

</head>
<body>
<div class="container">
    <h1>Contact Us</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form method="post" action="{{ Route('mail.contact') }}">
        @csrf

        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
</div>
</body>
</html>
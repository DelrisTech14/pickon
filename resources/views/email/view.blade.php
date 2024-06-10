<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Number:</strong> {{ $details['number'] }}</p>
    <p><strong>Product:</strong> {{ $details['product'] }}</p>
    <p><strong>Query:</strong> {{ $details['query'] }}</p>
</body>
</html>

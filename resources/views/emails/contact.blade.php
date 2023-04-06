<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Message</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #2d3e50;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }
        p {
            color: #666;
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .email {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .email h2 {
            color: #2d3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .email p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Contact Message</h1>
    <div class="email">
        <h2>From: {{ $data['email'] }}</h2>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>

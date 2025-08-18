<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 | Page Not Found</title>
    <style>
        body {
            background: #181c20;
            color: #fff;
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
        }
        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #ff5e57;
            margin-bottom: 0.5rem;
        }
        .error-message {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        a {
            color: #61dafb;
            text-decoration: none;
            font-size: 1.1rem;
            border: 1px solid #61dafb;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            transition: background 0.2s, color 0.2s;
        }
        a:hover {
            background: #61dafb;
            color: #181c20;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">Oops! Page Not Found</div>
        <a href="/">Go Home</a>
    </div>
</body>
</html>
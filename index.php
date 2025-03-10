<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Washington Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: black;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }
        nav {
            background: #333;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .headline {
            font-size: 32px;
            font-weight: bold;
        }
        .news-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .article {
            flex: 1;
            min-width: 300px;
            border: 1px solid #ddd;
            padding: 15px;
        }
        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>The Washington Post</header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Politics</a>
        <a href="#">Business</a>
        <a href="#">Technology</a>
        <a href="#">Opinion</a>
    </nav>
    <div class="container">
        <div class="headline">Breaking News: Major Event Unfolds</div>
        <p>Stay updated with the latest news happening around the world.</p>
        
        <div class="news-section">
            <div class="article">
                <h3>Politics</h3>
                <p>Latest updates on political events and government decisions.</p>
            </div>
            <div class="article">
                <h3>Business</h3>
                <p>Stock market trends, economic insights, and corporate news.</p>
            </div>
            <div class="article">
                <h3>Technology</h3>
                <p>Innovations, gadgets, and the future of tech.</p>
            </div>
            <div class="article">
                <h3>Opinion</h3>
                <p>Expert opinions and editorials on current affairs.</p>
            </div>
        </div>
    </div>
    <div class="footer">&copy; 2025 The Washington Post. All Rights Reserved.</div>
</body>
</html>

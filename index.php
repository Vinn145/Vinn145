<?php
// This is the PHP version of the index file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Nusantara</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-container input[type="text"] {
            padding: 6px;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 6px 12px;
            font-size: 1rem;
            border: none;
            background-color: #ff007b;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .banner {
            background-color: #444;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .banner button {
            background-color: #ff007b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
        }

        .main-content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 10px;
        }

        .card img {
            max-width: 100%;
            height: auto;
        }

        .card h3 {
            font-size: 1rem;
            margin: 10px 0;
        }

        .card p {
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>
    <header class="header">
        <div>
            <a href="#">Shots</a>
            <a href="#">Designers</a>
            <a href="#">Teams</a>
            <a href="#">Community</a>
            <a href="#">Jobs</a>
            <a href="#">Hiring</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search">
            <button type="button">Search</button>
        </div>
    </header>

    <div class="banner">
        <h2>What are you working on?</h2>
        <p>Karya Nusantara adalah website dimana kamu bisa mendapatkan inspirasi batik yang sangat bagus.</p>
        <button>Continue</button>
    </div>

    <div class="main-content">
        <h2>Popular Shots</h2>
        <div class="grid">
            <div class="card">
                <img src="Balinese-Batik-850x636.jpg">
                <h3>Batik Bali</h3>
                <p>4,802 views • 366 likes</p>
            </div>
            <div class="card">
                <img src="batik-pekalongan1.jpg">
                <h3>Batik pekalongan</h3>
                <p>2,995 views • 396 likes</p>
            </div>
            <div class="card">
                <img src="Batik-Mega-Mendung.webp">
                <h3>Batik mega mendung</h3>
                <p>3,212 views • 338 likes</p>
            </div>
            <div class="card">
                <img src="Kawung-Batik-Motif-Central-Java-Gypsied_1024x1024.webp">
                <h3>Batik kawung</h3>
                <p>4,659 views • 344 likes</p>
            </div>
            <div class="card">
                <img src="batik 3.jpg">
                <h3>Batik pesisir</h3>
                <p>5,000 views • 420 likes</p>
            </div>
            <div class="card">
                <img src="th.jpg">
                <h3>Batik Jawa</h3>
                <p>8,850 views • 900 likes</p>
            </div>
            <div class="card">
                <img src="th (1).jpg">
                <h3>Batik Madura</h3>
                <p>2,700 views • 250 likes</p>
            </div>
            <div class="card">
                <img src="batiik.jpg">
                <h3>Batik Lasem</h3>
                <p>6,100 views • 500 likes</p>
            </div>
            <div class="card">
                <img src="th (2).jpg">
                <h3>Batik bekasi</h3>
                <p>4,990 views • 379 likes</p>
            </div>
            <div class="card">
                <img src="vector-batik-26.jpg.crdownload">
                <h3>Batik ideas</h3>
                <p>2,300 views • 257 likes</p>
            </div>
        </div>
    </div>
</body>
</html>

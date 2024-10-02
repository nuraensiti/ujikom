<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK Indonesia Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .header {
            background-color: #2c3e50;
            padding: 20px;
            text-align: center;
            color: #ecf0f1;
            position: relative;
            /* For absolute positioning of nav */
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .header p {
            font-size: 1rem;
            margin-top: 5px;
        }

        /* Navigation Styles */
        .nav {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            gap: 15px;
        }

        .nav a {
            text-decoration: none;
            color: #ecf0f1;
            padding: 10px 15px;
            background-color: #2980b9;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav a:hover {
            background-color: #3498db;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 40px;
            max-width: 1200px;
            margin: auto;
        }

        .section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.2s ease;
        }

        .section:hover {
            transform: translateY(-5px);
        }

        .section h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #2980b9;
        }

        .section p,
        .section ul {
            font-size: 1rem;
            line-height: 1.6;
        }

        .agenda ul {
            list-style-type: none;
            padding-left: 0;
        }

        .agenda ul li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 10px;
        }

        .agenda ul li::before {
            content: "\2022";
            position: absolute;
            left: 0;
            top: 0;
            color: #e74c3c;
            font-size: 1.5rem;
        }

        .gallery img,
        .info img,
        .map img {
            max-width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .map {
            grid-column: span 2;
            text-align: center;
        }

        .map img {
            max-width: 600px;
        }

        .section h3 {
            margin-top: 10px;
            font-size: 1.25rem;
            color: #34495e;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .map {
                grid-column: 1;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="nav">
            <a href="{{ route('register') }}">Register</a> 
            <a href="{{ route('login') }}">Login</a>
        </div>
        <h1>SMK INDONESIA DIGITAL</h1>
        <p>Maju Seiring Perkembangan Digital</p>
    </div>


    <div class="container">
        <div class="section gallery">
            <h2>Galeri Kegiatan Sekolah</h2>
            <img src="path-to-your-image.jpg" alt="Galeri">
            <h3>Judul</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus morbi placerat congue malesuada...</p>
        </div>

        <div class="section agenda">
            <h2>Agenda Sekolah</h2>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur.</li>
                <li>Mi viverra pellentesque</li>
                <li>Magna diam id. Quam in etiam.</li>
                <li>Id malesuada amet urna quam eget.</li>
                <li>Ut donec in tellus dolor tellus sed.</li>
                <li>Mi libero consectetur faucibus.</li>
                <li>Lectus tincidunt molestie ac consequat neque.</li>
            </ul>
        </div>

        <div class="section info">
            <h2>Informasi Terkini</h2>
            <p><strong>Prestasi Juara 1 Lomba Kompetensi</strong></p>
            <img src="path-to-your-image.jpg" alt="Prestasi">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus pellentesque tincidunt fringilla...</p>
        </div>
    </div>

    <div class="section map">
        <h2>Peta Sekolah</h2>
        <img src="path-to-your-map-image.jpg" alt="Peta Sekolah">
        <p>Lorem ipsum dolor sit amet consectetur. Veniam tempor cursus nam urna sem...</p>
    </div>
</body>

</html>
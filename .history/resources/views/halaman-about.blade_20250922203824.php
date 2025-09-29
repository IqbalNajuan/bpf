<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Melodia Musik</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* --- CSS Global (dari file layout) --- */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f4f4f4; /* Latar belakang abu-abu muda */
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- Navbar --- */
        .navbar {
            background-color: #2c3e50; /* Warna biru dongker gelap */
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo {
            font-size: 1.5em;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
        }

        .navbar-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-nav li {
            margin-left: 25px;
        }

        .navbar-nav a {
            color: #ecf0f1; /* Warna putih keabu-abuan */
            text-decoration: none;
            font-size: 1em;
            padding-bottom: 5px;
            transition: color 0.3s ease, border-bottom 0.3s ease;
        }

        .navbar-nav a:hover {
            color: #ffffff;
        }

        .navbar-nav a.active {
            color: #ffffff;
            font-weight: 500;
            border-bottom: 2px solid #3498db; /* Aksen biru untuk halaman aktif */
        }
        
        /* --- Footer --- */
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }

        /* --- CSS Khusus Halaman About --- */
        .page-header {
            background-color: #34495e;
            color: #ffffff;
            padding: 40px 0;
            text-align: center;
        }

        .page-header h1 {
            margin: 0;
            font-size: 2.8em;
        }

        .about-section {
            padding: 60px 0;
        }

        .about-content {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }

        .about-content h2 {
            font-size: 1.8em;
            color: #2c3e50;
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
            margin-bottom: 20px;
        }

        .about-content p {
            line-height: 1.8;
            text-align: justify;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a href="/" class="navbar-logo">Melodia Musik</a>
            <div class="navbar-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="/about" class="active">Tentang Kami</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <header class="page-header">
            <h1>Tentang Melodia Musik</h1>
        </header>

        <section class="about-section">
            <div class="container">
                <div class="about-content">
                    <h2>Kisah & Visi Kami</h2>
                    <p>
                        Melodia Musik lahir dari hasrat mendalam terhadap kekuatan musik yang menyatukan. Kami memulai perjalanan ini dari sebuah toko kecil dengan mimpi besar: menjadi sahabat terpercaya bagi para musisi di setiap jenjang, dari pemula yang baru pertama kali memetik senar hingga profesional yang mencari kesempurnaan suara.
                    </p>
                    <p>
                        Visi kami adalah menyediakan akses mudah terhadap alat musik berkualitas tinggi, asli, dan bergaransi. Kami percaya bahwa setiap orang berhak menemukan instrumen yang tepat untuk mengekspresikan diri mereka. Di Melodia Musik, kami tidak hanya menjual produk, kami membangun komunitas dan mendukung perjalanan musikal Anda.
                    </p>

                    <h2>Mengapa Memilih Kami?</h2>
                    <p>
                        Kami berkomitmen pada kualitas, keaslian, dan kepuasan pelanggan. Setiap produk yang kami tawarkan telah melalui seleksi ketat untuk memastikan Anda mendapatkan yang terbaik. Tim kami terdiri dari para ahli dan pencinta musik yang siap membantu Anda dengan pengetahuan mendalam dan pelayanan yang ramah.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Melodia Musik. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
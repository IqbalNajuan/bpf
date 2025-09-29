<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai Akademik</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --background-color: #ecf0f1;
            --card-background: #ffffff;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .portfolio-container {
            width: 100%;
            max-width: 800px;
            background: var(--card-background);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-weight: 700;
            font-size: 28px;
        }
        .header p {
            margin: 5px 0 0;
            font-weight: 300;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 30px;
        }
        .section {
            flex: 1 1 50%; /* Membuat dua kolom */
            padding: 15px;
            min-width: 300px;
        }
        .section-full {
            flex: 1 1 100%;
            padding: 15px;
        }
        h3 {
            color: var(--secondary-color);
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 5px;
            margin-top: 0;
            font-weight: 600;
            font-size: 18px;
        }
        .data-list {
            list-style: none;
            padding: 0;
        }
        .data-list li {
            margin-bottom: 10px;
            line-height: 1.5;
            color: #555;
            display: flex;
            justify-content: space-between;
        }
        .data-list strong {
            color: var(--primary-color);
            font-weight: 600;
            margin-right: 10px;
        }
        .message-box {
            background-color: #e8f5e9; /* Warna hijau muda */
            border-left: 5px solid #4CAF50;
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
            font-style: italic;
            color: #388e3c;
        }
        .hobbies span {
            display: inline-block;
            background-color: #f1c40f;
            color: var(--primary-color);
            padding: 4px 10px;
            border-radius: 15px;
            margin-right: 5px;
            margin-top: 5px;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="portfolio-container">
        <div class="header">
            <h1>Portofolio Personal</h1>
            <p>Data Diri dan Pencapaian Akademik</p>
        </div>

        <div class="content">
            <div class="section">
                <h3>Data Pribadi</h3>
                <ul class="data-list">
                    <li><strong>Nama</strong> <span>{{ $name }}</span></li>
                    <li><strong>Usia</strong> <span>{{ $my_age }} tahun</span></li>
                </ul>
            </div>

            <div class="section">
                <h3>Studi & Target</h3>
                <ul class="data-list">
                    <li><strong>Semester</strong> <span>{{ $current_semester }}</span></li>
                    <li><strong>Cita-cita</strong> <span>{{ $future_goal }}</span></li>
                </ul>
            </div>

            <div class="section-full">
                <h3>Rencana Akademik</h3>
                <ul class="data-list">
                    <li><strong>Target Wisuda</strong> <span>{{ $tgl_harus_wisuda }}</span></li>
                    <li><strong>Sisa Waktu Studi</strong> <span>{{ $time_to_study_left }} hari</span></li>
                </ul>
            </div>

            <div class="section-full">
                <h3>Hobi & Minat</h3>
                <div class="hobbies">
                    @foreach ($hobbies as $hobby)
                        <span>{{ $hobby }}</span>
                    @endforeach
                </div>
            </div>

            <div class="section-full">
                <h3>Pesan Semester</h3>
                <div class="message-box">
                    <p>{{ $semester_message }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
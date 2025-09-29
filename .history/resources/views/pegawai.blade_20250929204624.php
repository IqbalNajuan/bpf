<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .portfolio-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 500px;
            text-align: center;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-top: 0;
        }
        ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        li {
            margin-bottom: 10px;
            color: #555;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6f7ff;
            border-left: 5px solid #007bff;
            color: #004085;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="portfolio-card">
        <div class="header">Data Diri & Studi</div>

        <h2>Data Pribadi</h2>
        <ul>
            <li><strong>Nama:</strong> {{ $name }}</li>
            <li><strong>Usia:</strong> {{ $my_age }} tahun</li>
            <li><strong>Hobi:</strong> {{ implode(', ', $hobbies) }}</li>
        </ul>

        <h2>Data Akademik</h2>
        <ul>
            <li><strong>Semester Saat Ini:</strong> {{ $current_semester }}</li>
            <li><strong>Target Lulus:</strong> {{ $tgl_harus_wisuda }}</li>
            <li><strong>Waktu Tersisa:</strong> {{ $time_to_study_left }} hari</li>
            <li><strong>Cita-cita:</strong> {{ $future_goal }}</li>
        </ul>

        <div class="message">
            <p>{{ $semester_message }}</p>
        </div>
    </div>
</body>
</html>
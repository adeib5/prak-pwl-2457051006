<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #dbeafe, #3b82f6);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 850px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .header {
            background: linear-gradient(135deg, #1d4ed8, #2563eb);
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            background: white;
            color: #2563eb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            font-size: 40px;
            font-weight: bold;
        }

        .header h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .header p {
            opacity: 0.9;
        }

        .content {
            padding: 35px;
        }

        .title {
            color: #1e3a8a;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: #eff6ff;
            padding: 20px;
            border-radius: 12px;
            border-left: 5px solid #2563eb;
        }

        .card h3 {
            color: #1e40af;
            margin-bottom: 8px;
        }

        .card p {
            color: #475569;
            word-break: break-word;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: #f8fafc;
            color: #64748b;
        }

        @media (max-width: 700px) {
            .info {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div class="avatar">
                P
            </div>

            <h1>Profile Mahasiswa</h1>

            <p>Praktikum Pemrograman Web Lanjut</p>

        </div>

        <div class="content">

            <h2 class="title">Data Mahasiswa</h2>

            <div class="info">

                <div class="card">
                    <h3>nama</h3>
                    <p>{{ $nama }}</p>
                </div>

                <div class="card">
                    <h3>kelas</h3>
                    <p>{{ $kelas }}</p>
                </div>

                <div class="card">
                    <h3>npm</h3>
                    <p>{{ $npm }}</p>
                </div>

            </div>

        </div>

        <div class="footer">
             2026 Pemrograman Web Lanjut
        </div>

    </div>

</body>
</html>
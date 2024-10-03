<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Informasi Dosen</title>
    <style>
        h1 {
            color: white;
        }

        body {
            background-image: url('https://media.discordapp.net/attachments/1146001266300964953/1291427007405490176/4k-lonely-japanese-city_bmZobWWUmZqaraWkpJRobWllrWdma2o.png?ex=67000ea0&is=66febd20&hm=60e108f3ee170c63f9d9fb168208e8ce1342eb81970bcdcef57a841c506d05e0&=&format=webp&quality=lossless&width=1089&height=614');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.8);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'
    ];
    ?>

    <h1>Informasi Dosen</h1>
    <table>
        <tr>
            <th>Attribut</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= $Dosen['nama'] ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?= $Dosen['domisili'] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $Dosen['jenis kelamin'] ?></td>
        </tr>
    </table>
</body>

</html>

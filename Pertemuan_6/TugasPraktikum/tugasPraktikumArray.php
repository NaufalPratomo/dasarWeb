<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="styleSlide.css" />
    <script src="./jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#dataSiswaTable").slideToggle("slow");
            });
        });
    </script>
    <style>
        #dataSiswaTable {
            display: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid rgb(0, 221, 255);
            background-color: rgb(224, 255, 255);
            border-radius: 12px;
        }

        th, td {
            border: 0.4px solid lightsteelblue;
            padding: 12px;
            text-align: left;
            border-radius: 12px;
        }

        th {
            background-color: #80f7ff;
        }

        #flip {
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 12px;
            text-align: center;
            background-color: #acf5ff;
            cursor: pointer;
        }

        #rataSiswa {
        text-align: center;
        margin-top: 6px;
        margin-bottom: 18px;
    }
    </style>
</head>
<body>
    <h1>DATA SISWA</h1>
    <div id="flip">Klik untuk melihat database</div>
    <div id="dataSiswaTable">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
            $siswa = [
                ["Andi", 15, "10A", "Malang"],
                ["Siti", 16, "10B", "Batu"],
                ["Budi", 15, "10A", "Dinoyo"],
                ["Anton", 25, "15A", "Dinoyo"]
            ];

            foreach ($siswa as $data) {
                echo "<tr>";
                foreach ($data as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

            $jumlah = 0;
            foreach ($siswa as $data) {
                $jumlah += $data[1]; 
            }

            $rataRata = $jumlah / count($siswa);
            echo "<tr><td colspan='4'><div id='rataSiswa'>Rata-rata umur siswa: $rataRata tahun</div></td></tr>";
            ?>
        </table>
    </div>
</body>
</html>

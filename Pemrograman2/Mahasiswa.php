<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .mahasiswa-info {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid #3498db;
            border-radius: 5px;
            background-color: #eaf2f8;
        }
        .mahasiswa-info b {
            color: #2c3e50;
        }
        .mahasiswa-info span {
            font-weight: bold;
            color: #e74c3c;
        }
        .status-lulus {
            color: #2ecc71;
            font-weight: bold;
        }
        .status-tidak-lulus {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
    <title>Informasi Mahasiswa</title>
</head>
<body>

<div class="container">
    <h1>Informasi Mahasiswa</h1>

    <?php
    // Kelas Induk
    class Mahasiswa {
        public $nama;
        public $nim;
        public $fakultas;
        public $ipk;
        public $tahunMasuk;
        public $jumlahSKS;
        public $statusMahasiswa;

        public function __construct($nama, $nim, $fakultas, $ipk, $tahunMasuk, $jumlahSKS, $statusMahasiswa) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->fakultas = $fakultas;
            $this->ipk = $ipk;
            $this->tahunMasuk = $tahunMasuk;
            $this->jumlahSKS = $jumlahSKS;
            $this->statusMahasiswa = $statusMahasiswa;
        }

        // Metode untuk menampilkan informasi dasar mahasiswa
        public function tampilkanInfo() {
            echo "Nama: <span>{$this->nama}</span><br>";
            echo "NIM: <span>{$this->nim}</span><br>";
            echo "Fakultas: <span>{$this->fakultas}</span><br>";
            echo "IPK: <span>{$this->ipk}</span><br>";
            echo "Tahun Masuk: <span>{$this->tahunMasuk}</span><br>";
            echo "Jumlah SKS: <span>{$this->jumlahSKS}</span><br>";
            echo "Status Mahasiswa: <span>{$this->statusMahasiswa}</span><br>";
        }

        // Metode untuk menampilkan status kelulusan berdasarkan IPK
        public function statusKelulusan() {
            if ($this->ipk >= 3.0) {
                echo "<span class='status-lulus'>Status: Lulus dengan prestasi</span><br>";
            } else {
                echo "<span class='status-tidak-lulus'>Status: Belum lulus</span><br>";
            }
        }
    }

    // Kelas Turunan Mahasiswa Kelas Pagi
    class MahasiswaKelasPagi extends Mahasiswa {
        public $jurusan;
        public $shiftKelas;

        public function __construct($nama, $nim, $fakultas, $jurusan, $shiftKelas, $ipk, $tahunMasuk, $jumlahSKS, $statusMahasiswa) {
            parent::__construct($nama, $nim, $fakultas, $ipk, $tahunMasuk, $jumlahSKS, $statusMahasiswa);
            $this->jurusan = $jurusan;
            $this->shiftKelas = $shiftKelas;
        }

        // Overriding metode tampilkanInfo() untuk menampilkan tambahan informasi shift kelas
        public function tampilkanInfo() {
            echo "<div class='mahasiswa-info'><b>Mahasiswa Kelas Pagi:</b><br>";
            parent::tampilkanInfo(); // memanggil info dasar dari kelas induk
            echo "Jurusan: <span>{$this->jurusan}</span><br>";
            echo "Shift Kelas: <span>{$this->shiftKelas}</span><br></div>";
        }
    }

    // Kelas Turunan Mahasiswa Kelas Malam
    class MahasiswaKelasMalam extends Mahasiswa {
        public $programStudi;
        public $shiftKelas;

        public function __construct($nama, $nim, $fakultas, $programStudi, $shiftKelas, $ipk, $tahunMasuk, $jumlahSKS, $statusMahasiswa) {
            parent::__construct($nama, $nim, $fakultas, $ipk, $tahunMasuk, $jumlahSKS, $statusMahasiswa);
            $this->programStudi = $programStudi;
            $this->shiftKelas = $shiftKelas;
        }

        // Overriding metode tampilkanInfo() untuk menampilkan tambahan informasi shift kelas
        public function tampilkanInfo() {
            echo "<div class='mahasiswa-info'><b>Mahasiswa Kelas Malam:</b><br>";
            parent::tampilkanInfo(); // memanggil info dasar dari kelas induk
            echo "Program Studi: <span>{$this->programStudi}</span><br>";
            echo "Shift Kelas: <span>{$this->shiftKelas}</span><br></div>";
        }
    }

    // Contoh Penggunaan
    $mahasiswaKelasPagi = new MahasiswaKelasPagi("Park Jonggun", "19.230.0007", "Fakultas Teknik", "Teknik Mesin", "Pagi", 3.8, 2019, 144, "Aktif");
    $mahasiswaKelasPagi->tampilkanInfo();
    $mahasiswaKelasPagi->statusKelulusan();

    echo "<br>";

    $mahasiswaKelasMalam = new MahasiswaKelasMalam("Park Hyung Seok", "23.230.0007", "Fakultas Teknik", "Teknik Sipil", "Malam", 3.9, 2023, 144, "Aktif");
    $mahasiswaKelasMalam->tampilkanInfo();
    $mahasiswaKelasMalam->statusKelulusan();

    ?>
</div>

</body>
</html>

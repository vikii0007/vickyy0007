<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .mobil-info {
            margin-bottom: 20px;
            padding: 10px;
            border: 2px solid #333;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .mobil-info b {
            color: #2c3e50;
        }
        .mobil-info span {
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
    <title>Sport Car and City Car</title>
</head>
<body>

<div class="container">
    <h1>Informasi Mobil</h1>
    <?php
    // Kelas Induk
    class Mobil {
        public $nama;
        public $merk;
        
        public function __construct($nama, $merk) {
            $this->nama = $nama;
            $this->merk = $merk;
        }

        public function tampilkanInfo() {
            echo "Nama Mobil: <span>$this->nama</span><br>";
            echo "Merk: <span>$this->merk</span><br>";
        }
    }

    // Kelas Turunan Mobil Sport
    class MobilSport extends Mobil {
        public $speed;
        public $turbo;
        
        public function __construct($nama, $merk, $speed, $turbo) {
            parent::__construct($nama, $merk);
            $this->speed = $speed;
            $this->turbo = $turbo;
        }
        
        public function tampilkanInfo() {
            echo "<div class='mobil-info'><b>Mobil Sport:</b><br>";
            parent::tampilkanInfo();
            echo "Kecepatan: <span>$this->speed km/h</span><br>";
            echo "Turbo: <span>$this->turbo</span><br></div>";
        }
    }

    // Kelas Turunan City Car
    class CityCar extends Mobil {
        public $model;
        public $irit;
        public $sensor; 

        public function __construct($nama, $merk, $model, $irit, $sensor) {
            parent::__construct($nama, $merk);
            $this->model = $model;
            $this->irit = $irit;
            $this->sensor = $sensor;
        }
        
        public function tampilkanInfo() {
            echo "<div class='mobil-info'><b>City Car:</b><br>";
            parent::tampilkanInfo();
            echo "Model: <span>$this->model</span><br>";
            echo "Irit: <span>$this->irit</span><br>";
            echo "Sensor: <span>$this->sensor</span><br></div>";
        }
    }

    // Contoh Penggunaan
    $mobilSport = new MobilSport("Koenigsegg Agera R", "Koenigsegg", 439, "Yes");
    $mobilSport->tampilkanInfo();

    echo "<br>";

    $cityCar = new CityCar("Mobilio", "Honda", "2023", "Sangat Irit", "Teratur");
    $cityCar->tampilkanInfo();
    ?>
</div>

</body>
</html>

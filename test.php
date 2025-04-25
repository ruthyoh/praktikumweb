<?php

class RestoranJogFood {
    private $data = [];

    // Magic Method __set
    public function __set($nama, $nilai) {
        echo "Menyimpan data: $nama = $nilai<br>";
        $this->data[$nama] = $nilai;
    }

    public function tampilkanData() {
        echo "<h4>📋 Data Restoran:</h4>";
        foreach ($this->data as $key => $value) {
            echo "- $key: $value<br>";
        }
    }
}

// Simulasi penggunaan
$resto = new RestoranJogFood();
$resto->nama = "Sate Klathak Pak Pong";   // memicu __set()
$resto->lokasi = "Jl. Imogiri Timur, Bantul"; // memicu __set()
$resto->kategori = "Makanan Khas Jogja";  // memicu __set()

$resto->tampilkanData();

?>

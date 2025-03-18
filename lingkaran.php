<?php
    /**
     * Kelas Lingkaran
     * Kelas untuk menghitung luas dan keliling lingkaran
     */
    class lingkaran {
        public $jari;
        /**
         * konstanta
         */
        public const PHI = 3.14;

        public function __construct($r) {
            $this->jari = $r;
        } // $this-> untuk akses member class dr dalam class

        public function getLuas(){
            $luas = self::PHI * $this->jari * $this->jari;
            return $luas;
        }

        public function getKeliling(){
            $keliling = 2.0 * self::PHI * $this->jari;
            return $keliling;
        }

        public function cetak(){
            echo "Lingkaran dengan jari-jari ".$this->jari;
            echo "<br>Luas = ".$this->getLuas();
            echo "<br>Keliling = ".$this->getKeliling();
        }
    }
?>
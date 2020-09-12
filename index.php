<?php

class Hewan {
    public $jumlahKaki, $bisa_terbang ="Bisa terbang", $bersuara;
    }

class Kucing extends Hewan {
    public $bisa_terbang = "Tidak bisa terbang";

    function jumlahKaki(){
        return $this->jumlahKaki;
    }
    
    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "meong";
    }
}

class Anjing extends Hewan {
    public $bisa_terbang = "Tidak bisa terbang";

    function jumlahKaki() {
        return $this->jumlahKaki;
    }

    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara(){
        return "guk guk";
    }
}

class Elang extends Hewan {
    function jumlahKaki() {
        return $this->jumlahKaki;
    }
    
    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "miiiiip";
    }
}

class Angsa extends Hewan {
    function jumlahKaki(){
        return $this->jumlahKaki;
    }

    public function terbang() {
        return $this->bisa_terbang;
    }

    public function bersuara() {
        return "kwaaak";
    }
}

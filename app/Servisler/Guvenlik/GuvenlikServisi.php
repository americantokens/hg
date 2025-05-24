<?php
namespace App\Servisler\Guvenlik;
class GuvenlikServisi {
    protected $ayarlar = [
        "max_giris" => 5,
        "bloke_suresi" => 30,
        "jwt_suresi" => 60,
        "zorunlu_2fa" => true
    ];
    public function guvenlikKontrol($kullanici_id) {
        return true;
    }
}

<?php
namespace App\Servisler\Odeme;
class OdemeServisi {
    protected $ayarlar = [
        "min_tutar" => 10,
        "max_tutar" => 1000,
        "komisyon" => 0.1
    ];
    public function odemeYap($tutar) {
        return true;
    }
}

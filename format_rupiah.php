<?php

function formatRupiah($angka)
{
    if ($angka == 0 || $angka == null) {
        return "Rp. 0";
    }

    $rp = "Rp. " . number_format($angka, 0, ',', '.');
    return $rp;
}

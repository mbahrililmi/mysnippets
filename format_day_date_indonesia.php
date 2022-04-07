<?php

function format_day_date_indonesia($tanggal)
{
    if ($tanggal == null) {
        return '-';
    }

    $bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    $hari = [
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
        7 => 'Minggu',
    ];


    $arrayTanggal = explode(' ', $tanggal);

    $thn_bln_tgl = $arrayTanggal[0];

    $thn_bln_tgl = explode('-', $thn_bln_tgl);

    $thn = $thn_bln_tgl[0];
    $bln = $thn_bln_tgl[1];
    $tgl = $thn_bln_tgl[2];

    $date = new DateTime($tanggal);
    $timestamp = $date->getTimestamp();

    $hariIndex = date('N', $timestamp);

    $format = $hari[$hariIndex] . ', ' . $tgl . ' ' . $bulan[$bln] . ' ' . $thn . ', ' . $arrayTanggal[1];

    return $format;
}

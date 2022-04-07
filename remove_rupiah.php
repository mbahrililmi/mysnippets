<?php 

function removeRupiah($value)
{
    $rupiah = str_replace('Rp. ', '', $value);
    $rupiah = str_replace('.', '', $rupiah);
    return (int)$rupiah;
}

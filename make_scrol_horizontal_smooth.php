<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* 1.  */
        .scroll {
            flex-wrap: nowrap;
            overflow-x: scroll;
            scroll-behavior: smooth;
        }

        .scroll::-webkit-scrollbar-track {
            display: none;
        }

        .scroll::-webkit-scrollbar-thumb {
            display: none;
        }
        .slider-custom::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    <!-- 2. -->
    <!-- ini button kanan dan kiri -->
    <div class="d-flex justify-content-between mb-3 fw-semibold">
        <div>
            <button type="button" class="text-primary border-0 fw-semibold transparent" id="slideLeftUcapan">Sebelumnya</button>
        </div>
        <div>
            <button type="button" class="text-primary border-0 fw-semibold transparent" id="slideRightUcapan">Selanjutnya</button>
        </div>
    </div>

    <!-- 3. -->
    <!-- ini card yang ingin di scroll -->
    <div class="row slider slider-custom scroll" id="id-row">
        @foreach ($orders as $index => $order)
        <div class="col-md-4" id="{{ $index }}">
            <x-card-ucapan :order="$order" />
        </div>
        @endforeach
    </div>

</body>
<!-- 4. -->
<!-- membutuhkan tombol kanan dan kiri beserta id-->
<!-- id tombol kanan yaitu "id button kanan" -->
<!-- id tombol kiri yaitu "id button kiri" -->

<!-- buat id pada div row di sini menggunakan "id row" -->
<script>
    const buttonRight = document.getElementById('id-button-kanan');
    const buttonLeft = document.getElementById('id-button-kiri');

    buttonRight.onclick = function() {
        document.getElementById('id-row').scrollLeft += 1150;
    };
    buttonLeft.onclick = function() {
        document.getElementById('id-row').scrollLeft -= 1150;
    };
</script>

</html>
<!-- gunakan fitur stagify untuk input tag many -->
<!-- lebih jelas = https://github.com/yairEO/tagify -->

<!-- 
    memerlukan cdn tagify
    1. untuk css
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    
    2. untuk script
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    3. jalankan tagify
        a. new Tagify(input) 
            tetapi memiliki kekurangan karna index value sama
        b.  new Tagify(input, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
            mneghilangkan index value dan untuk ini bisa menggunakan function stagify dibawah
    })
 -->

<?php

function stagify($value)
{
    $name = explode(',', $value)[0];

    $count = explode(',', $value);

    if ($count > 1) {
        $count = count($count) - 1;
        return $name . ' and' . ' ' . $count . ' ' . ' more';
    } else {
        return $name;
    }
}

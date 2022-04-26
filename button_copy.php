<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- buat button -->
  <!-- buat input type hidden -->
  <button class="btn btn-primary fw-semibold" onclick="copyFunction()" href="#">Bagikan</button>
  <input type="text" value="{{ url()->current() }}" id="copylink" hidden>
</body>
<script>
      function copyFunction() {
        var copyText = document.getElementById("copylink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
      }
    </script>
</html>

 <!-- triger untuk menggunakan enter -->
 <!-- id = search untuk mengambil id inputan -->
 <!-- id = cari untuk mengambil id button triger -->
 <script>
     var input = document.getElementById("search");
     input.addEventListener("keypress", function(event) {
         if (event.key === "Enter") {
             event.preventDefault();
             document.getElementById("cari").click();
         }
     });
 </script>
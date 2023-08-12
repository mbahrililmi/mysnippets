 <input type="file" id="thisImage" oninput="getValue()" name="thisImage" class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
 <div class="mb-3">
     <iframe src="" id="output-frame" height="0" class="">
     </iframe>
 </div>

 <script>
     document.addEventListener('DOMContentLoaded', () => {
         localStorage.removeItem('during-comentar');
         localStorage.removeItem('base64Image')
     });

     function getValue() {
         let value = document.getElementById('trix-description').value;
         console.log(value);
         localStorage.setItem('during-comentar', value);
     }

     var inputFile = document.getElementById('thisImage');
     var outputFrame = document.getElementById('output-frame');

     inputFile.addEventListener('change', function() {
         var file = inputFile.files[0];
         var fileURL = URL.createObjectURL(file);
         outputFrame.setAttribute('height', '600');
         outputFrame.setAttribute('class', 'w-full');
         outputFrame.src = fileURL;

         if (file) {
             const reader = new FileReader();

             reader.onload = function(event) {
                 const originalBase64Image = event.target.result;

                 // Mengubah ukuran gambar dan mengonversi kembali ke base64
                 resizeAndCompressImage(originalBase64Image, 800, 600, function(compressedBase64Image) {
                     localStorage.setItem('base64Image', compressedBase64Image);
                     console.log(
                         'Gambar berhasil dikonversi, dikompres, dan disimpan di local storage.');
                 });
             };

             reader.readAsDataURL(file);
         }
     });

     // Fungsi untuk mengubah ukuran dan mengompres gambar
     function resizeAndCompressImage(base64Image, maxWidth, maxHeight, callback) {
         let img = new Image();
         img.src = base64Image;

         img.onload = function() {
             let canvas = document.createElement('canvas');
             let ctx = canvas.getContext('2d');

             let width = img.width;
             let height = img.height;

             if (width > maxWidth) {
                 height *= maxWidth / width;
                 width = maxWidth;
             }

             if (height > maxHeight) {
                 width *= maxHeight / height;
                 height = maxHeight;
             }

             canvas.width = width;
             canvas.height = height;

             ctx.drawImage(img, 0, 0, width, height);

             // Mengonversi kembali ke base64 dengan format gambar JPEG dan kualitas 0.8
             let compressedBase64Image = canvas.toDataURL('image/jpeg', 0.8);
             callback(compressedBase64Image);
         };
     }
 </script>
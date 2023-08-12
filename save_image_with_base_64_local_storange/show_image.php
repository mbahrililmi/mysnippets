<div>
    <img src="" id="imageElement" class="w-full h-full" alt="">
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // set local storage if done
        let duringSession = localStorage.setItem('mySessionDuring-session', true);
        let mySession = localStorage.setItem('mySession', 2);

        // untuk sementara
        let duringComentar = localStorage.getItem('during-comentar');
        if (duringComentar == null) {
            document.getElementById('thisComentar').innerHTML =
                'After embarking on a long journey to learn Figma through a beginner course, you have undoubtedly acquired a wealth of knowledge and skills. Now, it is time for you to take the next step and challenge yourself by putting your newfound expertise to the test. The beginner course has provided you with the foundational knowledge needed to use Figma effectively, but to truly master this powerful design tool, you must practice using it in a variety of contexts.';
        } else {
            document.getElementById('thisComentar').innerHTML = duringComentar;
        }

        const base64Image = localStorage.getItem('base64Image');
        const imageElement = document.getElementById('imageElement');
        imageElement.src = base64Image;

        // untuk sementara
    });
</script>
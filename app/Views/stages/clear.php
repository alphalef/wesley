<style>

body {
    background-image: url('https://media.istockphoto.com/photos/dark-room-with-opened-door-picture-id93533102?k=20&m=93533102&s=170667a&w=0&h=4Wxm4cPp0p80eQ9Zzxz4ZI483WcdsM0RuvsSUsQpyAk=');
    background-position: center center;
    background-attachment: fixed;
    background-repeat: no-repeat; 
    background-size: cover;     
}


.btn {
    font-size: 30px;
}


@media (max-width: 767px) {
    .btn {
        font-size: 20px;   
    }

    h3 {
        font-size: 20px;
    }

    #quiz-box {
        /* margin-top:100px; */
        padding: 20px;
    }
}

</style>


<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center" style="height: 100vh; min-height:800px;">
            <div style="position: absolute; width: 100%;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>

    function answer() {
        let answer = document.getElementById('answer').value.toUpperCase();

        if(answer.trim() == "구원") {
            window.alert('정답입니다!');
            document.getElementById('next').style.display = 'block';
        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

</script>
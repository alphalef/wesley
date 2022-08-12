<style>
.slider_area {
    background-image: url(<?=base_url('img/game/eastgate.png')?>);
    background-size: cover;
    background-position: center;
}

input { 
    z-index: 99;
    height: 50px;
    text-align: center; 
    max-width: 290px;
}

.form-control {
    max-width: 320px;
}

#book {
    margin: auto;
}

#result {
    color:#fff; 
    text-align:center; 
    background:rgba(255,255,255,0.5); 
    position:relative; 
    z-index:99;
}

.hidden {
    display: none;
}

.animation {
    animation: fadeIn; 
    animation-duration: 2s;
}

@media (max-width: 767px) {
    h2 {
        font-size: 30px;
    }
    
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh; background-color: rgba(0,0,0,0.6);">
            <div class="container" id="container">             
                <div class="row align-items-center justify-content-center" style="height: 60vh; z-index:1; margin-top:50px; text-align:center;">
                    <h1 style="text-align:center; color:white;">정답입력</h1>
                    <form name = "scripture" style="position:relative; z-index:99; text-align:center;">
                        <p style="text-align:center; color:white; font-size: 40px;">누가복음</p>
                        <br><br>
                        <div class="input-group justify-content-center">
                            <input type="text" id="chp1" name="a" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.scripture.b)'>
                            <span class="input-group-text">:</span>
                            <input type="text" id="chp2" name="b" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.scripture.c)'>
                            <input type="text" id="verse" name="c" class="form-control" style="max-width:50px;" onkeyup='siche_next(this,1,document.scripture.submit)'>
                        </div>
                        <br><br>
                        <input type="button" name="submit" class="btn btn-secondary" style="max-width: 300px;" onClick="answer()" id="button1" value="정답입력">
                    </form>
                    <div id="result"></div>
                </div>
            </div>
            <div class="container hidden" id="container2">
                
                <audio id="audio" controls="controls" style="display:none;">
                    <source id="audioSource" src=""></source>
                    오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                </audio>

                <div class="row align-items-center justify-content-center" style="height: 60vh; z-index:1; margin-top:50px; text-align:center;">
                    <h2 style="color:#fff; line-height:1.5; position:relative; z-index:99;">
                    선지자 이사야의 글을 드리거늘 책을 펴서 이렇게 기록된 데를 찾으시니 곧 주의 성령이 내게 임하셨으니 이는 가난한 자에게 복음을 전하게 하시려고 내게 기름을 부으시고 나를 보내사 포로 된 자에게 자유를, 눈 먼 자에게 다시 보게 함을 전파하며 눌린 자를 자유롭게 하고 주의 은혜의 해를 전파하게 하려 하심이라 하였더라<br> (누가복음 4:17-19)

                        <br><br>

                        <a href="/stages/index/3-4">[다음으로]</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function answer() {
        let chp1 = document.getElementById('chp1').value;
        let chp2 = document.getElementById('chp2').value;
        let verse = document.getElementById('verse').value;
        let answer = (chp1 + chp2 + verse).trim();

        if(answer.trim() == "417") {
            window.alert('정답입니다!');
            document.getElementById('container').classList.add('hidden');
            document.getElementById('container2').classList.remove('hidden');
            document.getElementById('container2').classList.add('animation');

            let audiodata = '<?=base_url('audio/3-3-1.mp3')?>';
            let audio = document.getElementById('audio');
            let audiosource = document.getElementById('audioSource');

            audiosource.src = audiodata;
            audio.load();
            audio.play();

        } else {
            window.alert('다시 시도해 보세요!');
        }
    }

    function siche_next(siche01,siche02,siche03) {
        if (siche01.value.length==siche02 || siche01.value == '사도행전') {
            siche03 .focus();
            return;
        }
    }

</script>
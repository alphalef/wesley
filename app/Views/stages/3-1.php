<style>
.slider_area {
    background-image: url(<?=base_url('img/game/eastgate.png')?>);
    background-size: cover;
    background-position: right;
}
.btn {
    font-size: 30px;
}

.subtitleframe {
    margin-bottom: 40px;
    padding: 20px;
    border: 5px solid #fff;
    border-radius: 20px;
    background-color: rgba(0,0,0,0.7);
    font-size: 35px;
    color: #fff;
    text-shadow: 2px 2px 2px gray;
}

.animation {
    animation: fadeIn; 
    animation-duration: 2s;
}

.hidden {
    display: none;
}

.pointer {
    cursor: pointer;
    color: #D5745D;
}

@media (max-width: 767px) {
    .subtitleframe {
        font-size: 20px;
        margin-bottom: 20px;
    }
    img.sprites {
        height: 104px;
    }
    .flight img {
        height: 100px;
    }
    
}

@media (min-width: 767px) {
    .subtitleframe {
        font-size: 30px;
    }
    img.sprites {
        height: 166px;
    }
    .flight img {
        height: 170px;
    }

}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh;">
            <div class="container">             
                <div class="row d-flex justify-content-center" style="height: 100vh">

                    <audio id="audio" controls="controls" style="display:none;">
                        <source id="audioSource" src=""></source>
                        오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                    </audio>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="quiz1 col-12 align-self-center" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage3_quiz1.png')?>" style="max-height: 500px;">
                    </div>
                    <div class="blank6 col-12 align-self-end" style="z-index:1; text-align:center">
                        <div class="flight hidden">
                            <img src="<?=base_url('/img/game/sprites/flight.png')?>">
                        </div>
                    </div>
                    <div class="sprites_faith_love col-xl-1 col-md-3 align-self-end" style="z-index:1; text-align:left">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="mrx col-6 align-self-end" style="z-index:1; text-align:right">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/mrx.png')?>">
                    </div>
                    <div class="subtitleframe col-12 align-self-end" style="z-index:99">
                        <div class="subtitle1 hidden">
                            그렇다면 우리 동대문교회는 어떻게 시작된 것일까? 
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            물어 물어 가보니 어느 커다란 문앞에 도착하게 되었다.
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            왠지 밖으로 나가면 안 될 것 같은 생각이 들었던 그 순간 어디에선가 또 다른 종이비행기가 날아들어왔다.
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            이 종이에는 무슨 바코드와 같은 기호가 그려져 있었다. 무슨 의미일까?
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/3-2'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    let div = document.querySelector('.subtitle' + num);
    div.classList.remove('hidden');
    div.classList.add('animation');
    
    if(num-1 > 0) {
        let prev_div = document.querySelector('.subtitle' + (num-1));
        prev_div.classList.add('hidden');
    }
    if(num+1 < 5) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/3-1-1.mp3')?>', '<?=base_url('audio/3-1-2.mp3')?>', '<?=base_url('audio/3-1-3.mp3')?>', '<?=base_url('audio/3-1-4.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.sprites_faith_love').classList.add('hidden');
        document.querySelector('.mrx').classList.add('hidden');
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/oldchurch.png)";
        document.querySelector(".slider_area").style.backgroundPosition = "center";
    } else {
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.mrx').classList.remove('hidden');
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/eastgate.png)";
    }


    if(num == 3) {
        document.querySelector('.flight').classList.remove('hidden');
        document.querySelector('.flight').classList.add('animation');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
    } else {
        document.querySelector('.flight').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('animation');
    }

    if(num == 4) {
        document.querySelector('.flight').classList.add('hidden');
        document.querySelector('.mrx').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('hidden');
        document.querySelector('.quiz1').classList.remove('hidden');
        document.querySelector('.quiz1').classList.add('animation');
    } else {
        document.querySelector('.quiz1').classList.add('hidden');
    }
    

}

transit(1);

</script>
<style>
.slider_area {
    background-image: url(<?=base_url('img/game/chungdonghouse.png')?>);
    background-size: cover;
    background-position: center;
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
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:right">
                        <div class="scranton hidden">
                            <img class="sprites" src="<?=base_url('/img/game/sprites/ms.png')?>">
                            <img class="sprites" src="<?=base_url('/img/game/sprites/ws.png')?>">
                        </div>
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="blank col-12 align-self-end" style="z-index:1; text-align:center">
                    </div>
                    <div class="quiz1 col-12 align-self-center" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage2_quiz1.png')?>" style="max-width: 600px; width:100%;">
                    </div>
                    <div class="blank6 col-12 align-self-end" style="z-index:1; text-align:center">
                        <div class="flight hidden">
                            <img src="<?=base_url('/img/game/sprites/flight.png')?>">
                        </div>
                    </div>
                    <div class="sprites_faith_love col-6 align-self-end" style="z-index:1; text-align:left">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="sprites_faith_love col-6 align-self-end" style="z-index:1; text-align:right">
                        <img class="sprites" src="<?=base_url('/img/game/sprites/mrx.png')?>">
                    </div>
                    <div class="subtitleframe col-12 align-self-end" style="z-index:99">
                        <div class="subtitle1 hidden">
                            아, 깜빡 잠이 들었었네. 그런데 지금 여기는 어디일까? 집은 옛 한옥집들인데 외국인들이 살고 있는 것 같다.
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            그런데 저 멀리 계신 분들이 어디에서 많이 뵈었던 분들 같다.
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            그런데 갑자기 종이 비행기가 또 날아 왔다. 
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            종이를 펴 보니 무언가 고장난 전자시계 숫자처럼 보이는 이상한 기호가 적혀 있다. 이게 무슨 의미일까?
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/2-2'">다음</span>]
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

    let audiodata = ['', '<?=base_url('audio/2-1-1.mp3')?>', '<?=base_url('audio/2-1-2.mp3')?>', '<?=base_url('audio/2-1-3.mp3')?>', '<?=base_url('audio/2-1-4.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.sprites_faith_love').classList.add('hidden');
    } else {
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
    }

    if(num == 1) {
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.scranton').classList.add('hidden');
    } else {
        document.querySelector('.sprites_faith_love').classList.add('animation');
    }

    if(num == 2) {
        document.querySelector('.scranton').classList.remove('hidden');
    } else {
        document.querySelector('.scranton').classList.add('animation');
    }

    if(num == 3) {
        document.querySelector('.flight').classList.remove('hidden');
        document.querySelector('.flight').classList.add('animation');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.scranton').classList.remove('hidden');
    } else {
        document.querySelector('.flight').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('animation');
        document.querySelector('.scranton').classList.add('animation');
    }

    if(num == 4) {
        document.querySelector('.flight').classList.add('hidden');
        document.querySelector('.scranton').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('hidden');
        document.querySelector('.quiz1').classList.remove('hidden');
        document.querySelector('.quiz1').classList.add('animation');
    } else {
        document.querySelector('.quiz1').classList.add('hidden');
    }
    

}

transit(1);

</script>
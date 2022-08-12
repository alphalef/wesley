<style>
.slider_area {
    /* background-image: url(<?=base_url('img/game/park1.png')?>); */
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
    background-color: rgba(0,0,0,0.4);
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
    img {
        width: 60px;
    }
    
}

@media (min-width: 767px) {
    .subtitleframe {
        font-size: 30px;
    }
    img {
        width: 100px;
    }
}

</style>

<div class="carousel-item active">
    <div class="slider_area">
        <div class="single_slider" style="height: 100vh;">
            <div class="container">             
                <div class="row d-flex align-items-end justify-content-center" style="height: 100vh">

                    <audio id="audio" controls="controls" style="display:none;">
                        <source id="audioSource" src=""></source>
                        오디오를 재생하려면 크롬 브라우저를 사용해 주세요.
                    </audio>

                    <div class="flight" style="z-index:2; text-align:center">
                        <img src="<?=base_url('/img/game/sprites/flight.png')?>">
                    </div>
                    <div class="quiz1" style="z-index:3; text-align:center">
                        <img src="<?=base_url('/img/game/quiz/stage1_quiz1.png')?>" style="max-width: 600px; width:100%;">
                    </div>
                    <div class="sprites_faith_love" style="z-index:1; text-align:center">
                        <img src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="subtitleframe" style="z-index:99">
                        <div class="subtitle1 hidden">
                            2021년 어느 화창한 여름날, 집에만 있는 것이 답답해서 오랜만에 사람이 별로 없는 공원에서 산책이라도 할 겸 밖으로 나왔다. 
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            오랜만에 바깥 공기를 쐬니 기분이 한껏 좋아졌다.
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            그런데 갑자기 종이 비행기가 내 머리위로 날아 들어왔다. 누가 장난친 것은 아닌지 주위를 둘러보았지만 주변에는 아무도 없었다. 
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            무심코 그 종이 비행기를 펴 보니 이런 알 수 없는 기호를 발견했다. 그 의미가 무엇일까? 
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/1-2'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/park" + num + ".png)";

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

    let audiodata = ['', '<?=base_url('audio/1-1-1.mp3')?>', '<?=base_url('audio/1-1-2.mp3')?>', '<?=base_url('audio/1-1-3.mp3')?>', '<?=base_url('audio/1-1-4.mp3')?>'];
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

    if(num == 3) {
        document.querySelector('.flight').classList.remove('hidden');
        document.querySelector('.flight').classList.add('animation');
    } else {
        document.querySelector('.flight').classList.add('hidden');
    }

    if(num == 4) {
        document.querySelector('.flight').classList.add('hidden');
        document.querySelector('.quiz1').classList.remove('hidden');
        document.querySelector('.quiz1').classList.add('animation');
        document.querySelector('.sprites_faith_love').classList.add('hidden');
    } else {
        document.querySelector('.quiz1').classList.add('hidden');
    }
    

}

transit(1);

</script>
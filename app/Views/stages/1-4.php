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

                    <div class="mrx" style="z-index:2; text-align:center">
                        <img src="<?=base_url('/img/game/sprites/mrx.png')?>">
                    </div>
                    <div class="sprites_faith_love" style="z-index:1; text-align:center">
                        <img src="<?=base_url('/img/game/sprites/faith.png')?>">
                        <img src="<?=base_url('/img/game/sprites/love.png')?>">
                    </div>
                    <div class="subtitleframe" style="z-index:99">
                        <div class="subtitle1 hidden">
                            아, 이 말씀이구나. 근데 왜 이게 내 머리 위로 떨어진 것이지?
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            그 생각을 떠올리는 순간 갑자기 정신을 잃고 쓰러졌다. 잠시 후, 정신을 차려보니 주변의 풍경이 많이 달라져 있었다.
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            내가 지금까지 봐 왔던 풍경과는 전혀 다른 풍경이 펼쳐지고 있었다. 거리에는 퀴퀴한 냄새가 진동을 하고 있었고, 소가 끄는 수레도 지나가고 있었다.
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="transit(4)">다음</span>]
                        </div>
                        <div class="subtitle4 hidden">
                            내가 무슨 꿈을 꾸고 있는 것일까? 지금 여기가 어디지? 주변을 살펴보니 부서져 버린 조각들이 내 앞에 나타나 있다. 이 조각들을 맞추면 무언가 단서를 찾을 수 있을 것 같다.
                            [<span class="pointer" onClick="transit(3)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/1-5'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    if(num == 1) {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/park4.png)";
    } else {
        document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/port.png)";
    }

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

    let audiodata = ['', '<?=base_url('audio/1-4-1.mp3')?>', '<?=base_url('audio/1-4-2.mp3')?>', '<?=base_url('audio/1-4-3.mp3')?>', '<?=base_url('audio/1-4-4.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.mrx').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.add('hidden');
    } else {
        document.querySelector('.mrx').classList.remove('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
    }
    

}

transit(1);

</script>
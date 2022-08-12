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
                            스크랜톤 선교사님이라면.. 우리 동대문교회를 세웠던 선교사님인데.. 그러면 지금이 바로 1885년인가?
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            스크랜톤 선교사님이 이 땅에 오셨을 때 한국은 너무나도 열악한 상황이었구나.
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            선교사님은 어떻게 이 곳으로 오게 되신 것일까?
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/1-7'">다음</span>]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function transit(num) {

    document.querySelector(".slider_area").style.backgroundImage = "url(<?=base_url('img/game')?>/village.png)";

    let div = document.querySelector('.subtitle' + num);
    div.classList.remove('hidden');
    div.classList.add('animation');
    
    if(num-1 > 0) {
        let prev_div = document.querySelector('.subtitle' + (num-1));
        prev_div.classList.add('hidden');
    }
    if(num+1 < 4) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/1-6-1.mp3')?>', '<?=base_url('audio/1-6-2.mp3')?>', '<?=base_url('audio/1-6-3.mp3')?>'];
    let audio = document.getElementById('audio');
    let audiosource = document.getElementById('audioSource');

    audiosource.src = audiodata[num];
    audio.load();
    audio.play();

    if(num == 1) {
        document.querySelector('.mrx').classList.add('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
        document.querySelector('.sprites_faith_love').classList.add('animation');
    } else {
        // document.querySelector('.mrx').classList.remove('hidden');
        document.querySelector('.sprites_faith_love').classList.remove('hidden');
    }
    

}

transit(1);

</script>
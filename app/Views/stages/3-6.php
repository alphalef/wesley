<style>
.slider_area {
    background-image: url(<?=base_url('img/game/baldwin.png')?>);
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
    background-color: rgba(0,0,0,0.8);
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
                            그래 바로 이 곳이었어. 스크랜톤 선교사님 가족은 동대문 밖으로 나 가셨어.
                            <span class="pointer" onClick="transit(2)">[다음]</span>
                        </div>
                        <div class="subtitle2 hidden">
                            당시 사대문 밖에는 제대로 치료받지 못하고 버려진 사람들 이 많이 있었는데 위험을 마다하지 않고 그 곳으로 가셨어.  
                            [<span class="pointer" onClick="transit(1)">이전</span> | <span class="pointer" onClick="transit(3)">다음</span>]
                        </div>
                        <div class="subtitle3 hidden">
                            그분들이 돌봐야하고 복음을 전해야 할 사람들이 바로 사대문 안이 아니라 밖에 있음을 아셨던 거야. 이 곳에서 동대문교회는 어떻게 시작된 것일까?
                            [<span class="pointer" onClick="transit(2)">이전</span> | <span class="pointer" onClick="location.href='/stages/index/3-7'">다음</span>]
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
    if(num+1 < 4) {
        let next_div = document.querySelector('.subtitle' + (num+1));
        next_div.classList.add('hidden');
    }

    let audiodata = ['', '<?=base_url('audio/3-6-1.mp3')?>', '<?=base_url('audio/3-6-2.mp3')?>', '<?=base_url('audio/3-6-3.mp3')?>'];
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
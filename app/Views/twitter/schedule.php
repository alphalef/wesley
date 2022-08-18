<style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');


    body {
        background-image: url('https://i.ytimg.com/vi/Ut0_fbWrLEo/maxresdefault.jpg');
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat; 
        background-size: cover;     
    }

    .journal-title {
        text-align: center;
        font-size: 4rem;
        margin-top: 40px;
        font-family: 'Dancing Script', cursive;
    }

</style>

<div class="journal-title">
    Wesley's Journal
</div>

<div class="tweet-wrap">
    <div class="tweet-header">
        <img src="<?=base_url('img/logo.jpg')?>" alt="" class="avator">
        <div class="tweet-header-info">
            동대문교회 <span>@ddmch</span><span>. 2022.8.19.</span>
            <p>
            금요일 <br>
            - 출발 (저녁 식사는 밖에서 출발 그룹별로)<br>
            - 도착 후 시간 되는대로 친교 프로그램 (MBTI와 테이블 톡~)<br><br>

            토요일<br>
            - 오전 묵상 시간 <br>
            - 아침 식사 (라면)<br>
            - 오전 프로그램 ("나는 웨슬리안이다")<br>
            - 점심(밖에서)<br>
            - 오후 나들이 (쁘띠 프랑스)<br>
            - 저녁 식사 (바베큐)<br>
            - 결단의 메시지 ("믿음, 그리고 성화") 및 기도회 <br>
            - 이후 친교 프로그램 (보드게임 등)<br><br>

            주일 <br>
            - 아침 식사 (빵/우유)<br>
            - 이후 8시 30분경 출발~
            </p>    
        </div>
    </div>
    
<div class="tweet-img-wrap">
    <img src="http://ddmch.org/file/DDMCH/s_board/20181217164043233/20201031104849_htkbvwdy.jpg" alt="" class="tweet-img">
</div>

<div class="tweet-info-counts">
      
      <div class="comments">
        
        <svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        <div class="comment-count"><?=mt_rand(1,50)?></div>
      </div>
      
      <div class="retweets">
        <svg class="feather feather-repeat sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
        <div class="retweet-count"><?=mt_rand(300,500)?></div>
      </div>
      
      <div class="likes">
        <svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        <div class="likes-count">
            <?=mt_rand(1,5)?>.<?=mt_rand(1,5)?>k
        </div>
      </div>
      
      <div class="message">
        <svg class="feather feather-send sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
      </div>
    </div>
  </div>


    <div class="col-lg-12">
        <div class="d-grid gap-2 col-lg-12 mx-auto">
            <button class="btn btn-secondary" style="margin:10px auto;" type="button" onClick="location.href='/stages/menu'">돌아가기</button>
        </div>
    </div>


</body>
</html>
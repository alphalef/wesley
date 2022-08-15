<style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');


    body {
        background-image: url('https://d3d00swyhr67nd.cloudfront.net/w1200h1200/collection/LLR/EPWOR/LLR_EPWOR_2009_283-001.jpg');
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
        font-weight: 700;
    }


</style>

<div class="journal-title">
    Wesley's Journal
</div>

<div class="tweet-wrap">
    <div class="tweet-header">
        <img src="<?=base_url('img/profile.png')?>" alt="" class="avator">
        <div class="tweet-header-info">
            John Wesley <span>@J_Wesley</span><span>· 1739.4.2.</span>
            <p>
              오후 4시에 나는 상식에서 조금 더 벗어난 일을 하기로 하였다. 나는 도시에 접하고 있는 약간 높은 언덕에 서서 약 삼천명의 청중(광부들)에게 구원의 기쁜 소식을 선포하였다, 내가 선포한 성경 말씀은 다음과 같다. ”주의 성령이 내게 임하셨으니 이는 가난한 자에게 복음을 전하게 하시려고 내게 기름을 부으시고 나를 보내사 포로된 자에게 자유를, 눈먼 자에게 다시 보게 함을 전파하며 눌린 자를 자유케 하고 주의 은혜의 해를 전파하게 하려 하심이라 (*광부들에게 전했던 첫 설교에 대한 기록)
            </p>    
        </div>
    </div>
    
<div class="tweet-img-wrap">
    <img src="https://monroeumc.files.wordpress.com/2014/03/image22.jpg" alt="" class="tweet-img">
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
          <button class="btn btn-secondary next" id="next" type="button" onClick="location.href='/twitter/index/3-3'">다음으로</button>
        </div>
    </div>


</body>
</html>
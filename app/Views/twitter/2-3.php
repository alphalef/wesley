<style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');


    body {
        background-image: url('https://images.themovemarket.com/size/600x400/a543c9ca-d5f8-425b-8866-e732c3f9b674/18c-mabley-street-london-hackney-greater-london-e9-5rh-10');
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
            John Wesley <span>@J_Wesley</span><span>· 1738.5.24.</span>
            <p>
                “저녁에 마음이 별로 내키지 않았으나 나는 올더스케이트 가에서 모이는 한 교회의 집회에 참석했다. 그 때에 어떤 사람이 로마서에 대한 루터의 서문을 읽고 있었다. 8시 45분쯤 되었을 때 그리스도를 믿는 신앙을 통해 하나님께서 우리 마음에 역사하심으로써 일어나는 변화에 대하여 설명할때에 내 마음이 이상하게 뜨거워지는 것을 느꼈다. 내가 그리스도를 믿고 있었고 그때에 나는 예수 그리스도를 통해서만이 구원을 얻을 수 있다는 확신을 얻게 되었다. 그리고 그리스도께서 내 죄를 사하여 주시고 나같은 죄인의 죄마저도 또한 죄와 사망의 법에서 구원해 주셨다는 확신을 가지게 되었다”
            </p>    
        </div>
    </div>
    
<div class="tweet-img-wrap">
    <img src="https://i0.wp.com/godsmissionarychurch.org/wp-content/uploads/2018/11/aldersgate-experience_orig.jpg?fit=979%2C629&ssl=1" alt="" class="tweet-img">
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
            <button class="btn btn-secondary" style="margin:10px auto;" type="button" onClick="location.href='/stages/index/explain-2-3'">다음으로</button>
        </div>
    </div>


</body>
</html>
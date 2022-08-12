<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    광장 글쓰기 페이지
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!-- <link rel='stylesheet' href='//cdn.jsdelivr.net/npm/font-kopub@1.0/kopubdotum.min.css'> -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="<?=base_url('css/pagination.css')?>" rel="stylesheet" />
  <link href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?=base_url('admin/css/style.css?v=2.0.1')?>" rel="stylesheet" />
  <link href="<?=base_url('css/ckeditor.css')?>" rel="stylesheet" />

</head> 

<body>

  <?php 
    $session = session();
    
    $category = [
      "김경식" => [
        "title" => "시간과 공간의 광장",
        "content" => "역사를 통해 과거와 현재의 대화를 시도하는 시간과 공간의 광장"
      ],
      "정승환" => [
        "title" => "기독교의 광장",
        "content" => "기독교 신앙을 통해 세상과 소통하는 광장"
      ],
      "장효진" => [
        "title" => "철학광장",
        "content" => "인간과 세상에 관한 근원적인 질문에 대해 소통하는 광장"
      ],
      "김문선" => [
        "title" => "만남의 광장",
        "content" => "서로를 이어주는 만남이 있는 광장"
      ],
      "최병희" => [
        "title" => "책과 인문학의 광장",
        "content" => "다양한 지식을 공유하는 광장"
      ],
      "이수진" => [
        "title" => "마음과 관계의 광장",
        "content" => "우리의 내면의 소리에 귀 기울이는 광장"
      ],
    ]
    
  ?>

  <div class='hamburger' style="z-index: 999">
    <div class='line'></div>
    <div class='line'></div>
    <div class='line'></div>
  </div>
  <div class='menu' style="z-index:998">
    <div class='menu-item' OnClick="location.href='/'">홈</div>
    <div class='menu-item' OnClick="location.href='/posts/add/form'">새글작성</div>
    <div class='menu-item' OnClick="location.href='/adm/mylist'">나의글</div>
    <!-- <div class='menu-item'>정보변경</div> -->
    <div class='menu-item' OnClick="location.href='/user/logout'">로그아웃</a></div>
  </div>

  <section style="text-align:center;">
    <h1 style="margin-top:100px;"><?=$session->get('name')?>의 <?=$category[$session->get('name')]['title']?></h1>
    <h5><?=$category[$session->get('name')]['content']?></h5>
  </section>
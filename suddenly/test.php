<?php
 $pageTitle = "#design";
 require_once( 'assets/include/header.php' );
 ?>

<h1> gallery <hr> </h1>
<div id="content">
  <div class="button-group-home filters-button-group">

  <button class="button is-checked" data-filter="*"> view all </button>
  <button class="button" data-filter=".present"> 2019 - present </button>
  <button class="button" data-filter=".2018"> 2017 - 2018 </button>
  <button class="button" data-filter=".2016"> 2014 - 2016 </button>
  <button class="button" data-filter=".2013"> 2010 - 2013 </button>

  </div>

  <div class="grid" id="grid">

  <div class="element-item present">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/mono.png" data-fancybox-group="gallery1" >
          <img src="/site/suddenly/assets/img/preview/thumb/mono.png" alt="1"></a>
      </div>
    </div>
  </div>

  <div class="element-item present">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/naive.png" data-fancybox-group="gallery2" >
          <img src="/site/suddenly/assets/img/preview/thumb/naive.png" alt="2"></a>
      </div>
    </div>
  </div>

  <div class="element-item present">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/gemini.png" data-fancybox-group="gallery3" >
          <img src="/site/suddenly/assets/img/preview/thumb/gemini.png" alt="3"></a>
      </div>
    </div>
  </div>

  <div class="element-item present">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/ice.png" data-fancybox-group="gallery4" >
          <img src="/site/suddenly/assets/img/preview/thumb/ice.png" alt="4"></a>
      </div>
    </div>
  </div>

  <div class="element-item present">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/argo.png" data-fancybox-group="gallery5" >
          <img src="/site/suddenly/assets/img/preview/thumb/argo.png" alt="5"></a>
      </div>
    </div>
  </div>

  <div class="element-item 2018">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="https://via.placeholder.com/900x500/111111/ededed" data-fancybox-group="gallery6" >
          <img src="https://via.placeholder.com/160x110/111111/ededed" alt="6"></a>
      </div>
    </div>
  </div>

  <div class="element-item 2013">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/trying.png" data-fancybox-group="gallery7" >
          <img src="/site/suddenly/assets/img/preview/thumb/trying.png" alt="7"></a>
      </div>
    </div>
  </div>

  <div class="element-item 2013">
    <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/swallow.png" data-fancybox-group="gallery8" >
          <img src="/site/suddenly/assets/img/preview/thumb/swallow.png" alt="8"></a>
      </div>
    </div>
  </div>

  </div>

  <button class="button showMore" id="showMore" >show more</button>

<?php
require_once( 'assets/include/footer.php' );
?>

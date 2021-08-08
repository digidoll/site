<?php
 $pageTitle = "#design";
 require_once( 'assets/include/header.php' );
 ?>

<h1> gallery <hr> </h1>

<div id="content">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> view all</button>
  <button class="btn" onclick="filterSelection('present')"> 2019 - present </button>
  <button class="btn" onclick="filterSelection('-2018')"> 2017 - 2018 </button>
  <button class="btn" onclick="filterSelection('-2016')"> 2014 - 2016 </button>
  <button class="btn" onclick="filterSelection('-2013')"> 2010 - 2013</button>
</div>


<table align="center">
   <tr>
     <td>
       <div class="filterDiv -2013">
       <div class="box">
        <div class="image">
          <a class="fancybox" href="/site/suddenly/assets/img/preview/full/trying.png" data-fancybox-group="gallery1" >
          <img src="/site/suddenly/assets/img/preview/thumb/trying.png" alt="1"></a>
        </div>
      </div>
    </td>

    <td>
      <div class="filterDiv present">
      <div class="box">
       <div class="image">
         <a class="fancybox" href="/site/suddenly/assets/img/preview/full/mono.png" data-fancybox-group="gallery2" >
         <img src="/site/suddenly/assets/img/preview/thumb/mono.png" alt="2"></a>
       </div>
     </div>
   </td>

   <td>
     <div class="filterDiv present">
     <div class="box">
      <div class="image">
        <a class="fancybox" href="/site/suddenly/assets/img/preview/full/naive.png" data-fancybox-group="gallery2" >
        <img src="/site/suddenly/assets/img/preview/thumb/naive.png" alt="2"></a>
      </div>
    </div>
  </td>

  <td>
    <div class="filterDiv -2013">
    <div class="box">
     <div class="image">
       <a class="fancybox" href="/site/suddenly/assets/img/preview/full/swallow.png" data-fancybox-group="gallery2" >
       <img src="/site/suddenly/assets/img/preview/thumb/swallow.png" alt="2"></a>
     </div>
   </div>
 </td>

  </tr>
</table>

<table align="center">
   <tr>
     <td>
       <div class="filterDiv -2018">
       <div class="box">
        <div class="image">
          <a class="fancybox" href="https://via.placeholder.com/900x500/111111/ededed" data-fancybox-group="gallery5" >
          <img src="https://via.placeholder.com/160x110/111111/ededed" alt="5"></a>
        </div>
      </div>
    </td>

    <td>
      <div class="filterDiv present">
      <div class="box">
       <div class="image">
         <a class="fancybox" href="/site/suddenly/assets/img/preview/full/mono.png" data-fancybox-group="gallery6" >
         <img src="/site/suddenly/assets/img/preview/thumb/mono.png" alt="6"></a>
       </div>
     </div>
   </td>

   <td>
     <div class="filterDiv -2018">
     <div class="box">
      <div class="image">
        <a class="fancybox" href="https://via.placeholder.com/900x500/111111/ededed" data-fancybox-group="gallery7" >
        <img src="https://via.placeholder.com/160x110/111111/ededed" alt="7"></a>
      </div>
    </div>
  </td>

  <td>
    <div class="filterDiv -2018">
    <div class="box">
     <div class="image">
       <a class="fancybox" href="https://via.placeholder.com/900x500/111111/ededed" data-fancybox-group="gallery8" >
       <img src="https://via.placeholder.com/160x110/111111/ededed" alt="8"></a>
     </div>
   </div>
 </td>

  </tr>
</table>

<?php
require_once( 'assets/include/footer.php' );
?>

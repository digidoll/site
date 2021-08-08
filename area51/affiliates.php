<?php
 $pageTitle = "#affiliates";

 require_once( 'assets/include/header.php' );
 ?>

 <style>
 *,
 *::after,
 *::before {
   margin: 0;
   padding: 0;
   box-sizing: inherit;
 }

 html {
   box-sizing: border-box;
 }



 .wrap {
   width: 90%;
   margin: 2rem auto;
   padding: 50px 60px 0px;
 }

 .gallery {
   display: grid;
   grid-template-columns: repeat(8, 1fr);
   grid-template-rows: repeat(4, 5vw);
   grid-gap: 1rem;
 }

 .gallery h6 {
   text-align: center;
   font-family: 'Montserrat', sans-serif;
   font-size: 12pt;
   font-weight: normal;
   font-size: 9pt;
   font-weight: 700;
   letter-spacing: 4px;
   text-transform: uppercase;
   color: #fff;
   background-color: #111111;
   padding: 76px 0px;
   margin: 0px auto;
 }

 .gallery h6:before {
   display:none;
 }

 .gallery__img {
   width: 100%;
   height: 100%;
   object-fit: cover;
   display: block;
 }

 .gallery__item--1 {
   grid-column-start: 1;
   grid-column-end: 4;
   grid-row-start: 1;
   grid-row-end: 5;

   /** Alternative Syntax **/
   /* grid-column: 1 / span 2;  */
   /* grid-row: 1 / span 2; */
 }

 .gallery__item--2 {
   grid-column-start: 4;
   grid-column-end: 7;
   grid-row-start: 1;
   grid-row-end: 3;


   /** Alternative Syntax **/
   /* grid-column: 3 / span 2;  */
   /* grid-row: 1 / span 2; */
 }

 .gallery__item--3 {
   grid-column-start: 7;
   grid-column-end:9;
   grid-row-start: 1;
   grid-row-end: 3;

   /** Alternative Syntax **/
   /* grid-column: 5 / span 4;
   grid-row: 1 / span 5; */
 }

 .gallery__item--4 {
   grid-column-start: 4;
   grid-column-end: 6;
   grid-row-start: 3;
   grid-row-end: 5;

   /** Alternative Syntax **/
   /* grid-column: 1 / span 4;  */
   /* grid-row: 3 / span 3; */
 }

 .gallery__item--5 {
   grid-column-start: 6;
   grid-column-end: 9;
   grid-row-start: 3;
   grid-row-end: 5;

   /** Alternative Syntax **/
   /* grid-column: 1 / span 4; */
   /* grid-row: 6 / span 3; */
 }

</style>

<div id="wave">
<h1> affiliates <hr> </h1>

  <div class="gal">
          <div class="wrap">
              <div class="gallery">
                  <figure class="gallery__item gallery__item--1">
                      <img src="https://via.placeholder.com/388x388/0e0e0e/f7f7f7.png" alt="Gallery image 1" class="gallery__img">
                  </figure>
                  <figure class="gallery__item gallery__item--2">
                      <img src="https://via.placeholder.com/388x184/000000/ffffff.png" alt="Gallery image 2" class="gallery__img">
                  </figure>
                 <figure class="gallery__item gallery__item--3">
                      <img src="https://via.placeholder.com/234x184/e5e5e5/111111.png" alt="Gallery image 3" class="gallery__img">
                  </figure>
                   <figure class="gallery__item gallery__item--4">
                      <img src="https://via.placeholder.com/234x184/e5e5e5/333333.png" alt="Gallery image 4" class="gallery__img">
                  </figure>
                  <figure class="gallery__item gallery__item--5">
                      <h6> Lorem Ipsum. </h6>
                  </figure>
              </div>
          </div>
 </div>


<div id="content">
 <p><p><b>bold</b> <i>italic</i> <u>underline</u> <a href="#">link</a> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac feugiat velit, varius malesuada dui. Cras dictum eros sit amet consequat vulputate. Quisque purus turpis, hendrerit non pharetra vitae, tempor tempor orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce placerat, turpis non aliquet sollicitudin, risus mi tristique felis, id scelerisque turpis lorem quis magna. Mauris convallis sapien diam, placerat tempor tortor vehicula at. Nunc ante erat, accumsan id dolor vitae, efficitur sollicitudin libero. Integer vel congue odio. Integer imperdiet nisl quis neque congue mattis posuere vitae sapien.</p>
 <p>"In lacinia augue enim, nec porta velit dignissim et. Vestibulum rutrum non arcu elementum condimentum. Ut accumsan a risus sit amet dictum. Etiam id dictum arcu. Nam ullamcorper vel sapien non pulvinar. Suspendisse potenti. Cras mollis felis quis vehicula maximus. Sed id hendrerit quam. Integer vulputate, enim hendrerit mattis ullamcorper, tellus lorem cursus dolor, at porta risus turpis eu metus. Nam aliquet dolor neque, id interdum justo fringilla id. Praesent. </p>
 <p>"In lacinia augue enim, nec porta velit dignissim et. Vestibulum rutrum non arcu elementum condimentum. Ut accumsan a risus sit amet dictum. Etiam id dictum arcu. Nam ullamcorper vel sapien non pulvinar. Suspendisse potenti. Cras mollis felis quis vehicula maximus. Sed id hendrerit quam. Integer vulputate, enim hendrerit mattis ullamcorper, tellus lorem cursus dolor, at porta risus turpis eu metus. Nam aliquet dolor neque, id interdum justo fringilla id. Praesent. </p>


  <?php
  require_once( 'assets/include/footer.php' );
  ?>

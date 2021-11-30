</div>
</div>
</section>


<div id="Outlinks">

<div id="Out" class="title" style="left: 25%;">
  <ul>
    <li class="title"> general </li>
    <li><a href="#" target="_self">link 001</a></li>
    <li><a href="#" target="_self">link 002</a></li>
    <li><a href="#" target="_self">link 003</a></li>
    <li><a href="#" target="_self">link 004</a></li>
  </ul>
</div>

<div id="Out" class="title" style="right: 25%;">
  <ul>
    <li class="title"> extra </li>
    <li><a href="#" target="_self">link 001</a></li>
    <li><a href="#" target="_self">link 002</a></li>
    <li><a href="#" target="_self">link 003</a></li>
    <li><a href="#" target="_self">link 004</a></li>
  </ul>
</div>

<div id="Out" class="title" style="right: 0%;">
  <ul>
    <li class="title"> socials </li>
    <li><a href="#" target="_self">link 001</a></li>
    <li><a href="#" target="_self">link 002</a></li>
    <li><a href="#" target="_self">link 003</a></li>
    <li><a href="#" target="_self">link 004</a></li>
  </ul>
</div>

</div>

<footer>Design and Coding by <a href="#" target="_blank">digidoll</a> | <a href="#" target="_blank">rabbitdearr</a> &copy; 2013 - 2019 | All Rights Reserved</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="/site/aaahhhh/func.js"></script>

<script type="text/javascript">
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script>
  window.console = window.console || function(t) {};
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>







<link rel="stylesheet" type="text/css" href="/site/actest/assets/css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="/site/actest/assets/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/site/actest/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="/site/actest/assets/js/main.js"></script>

</body>
</html>

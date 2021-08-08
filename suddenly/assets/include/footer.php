</div>
</div>
</section>

<div id="ft">
<div class="slider">
  <div class='container'>
  <div class="ism-slider" data-play_type="once-rewind" id="my-slider">
    <ol>
	  <li>
      <img src="https://via.placeholder.com/800x350/0e0e0e/ededed">
    </li>
    <li>
      <img src="https://via.placeholder.com/800x350/ededed/181715">
    </li>
    <li>
      <img src="https://via.placeholder.com/800x350/333333/ededed">
    </li>
    </ol>
  </div>
  </div>
</div>
</div>

<section id="credit">
<h1 id="home">support me
  <span>copy code</span>
</h1>
</section>

  <textarea><a href="rabbitdearr.com"><img source="https://via.placeholder.com/350x100/111111/1d1d1d"></a></textarea>

<div id="outs">
  <ul>
    <a href=""> <i class="fab fa-deviantart"></i> </a>
    <a href=""> <i class="fab fa-github-alt"></i> </a>
    <a href=""> <i class="fab fa-tumblr"></i> </a>
    <a href=""> <i class="fab fa-linkedin-in"></i> </a>
  </ul>
</div>

<footer>Design and Coding by <a href="#" target="_blank">digidoll</a> | <a href="#" target="_blank">rabbitdearr</a> &copy; 2013 - 2020 | All Rights Reserved</footer>

</div>

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

</body>
</html>

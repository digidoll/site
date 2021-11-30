
</div>
</div>
</section>

<div id="ft">

  <blockquote>blockquote || In lacinia augue enim, nec porta velit dignissim et. Vestibulum rutrum non arcu elementum condimentum.
  <span> unknown </span> </blockquote>

  <div id="outs">
  <ul>
    <a href=""> <i class="fab fa-github-alt"></i> <span> github </span> </a>
    <a href=""> <i class="fab fa-deviantart"></i> <span> deviantart </span> </a>
    <a href=""> <i class="fab fa-linkedin-in"></i> <span> linkedin </span> </a>
  </ul>
  </div>

</div>

<footer>Design and Coding by <a href="#" target="_blank">digidoll</a> | <a href="#" target="_blank">rabbitdearr</a> &copy; 2013 - 2019 | All Rights Reserved</footer>

</div>


<script type="text/javascript">
function setNavigation() {
    let current_location = location.pathname.split('/')[1];
    if (current_location === "") return;
    let menu_items = document.querySelector("header").getElementsByTagName("a");
    for (let i = 0, len = menu_items.length; i < len; i++) {
      if (menu_items[i].getAttribute("href").indexOf(current_location) !== -1) {
        menu_items[i].className = "active";
      }
    }
  }
  setNavigation()
</script>


<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>

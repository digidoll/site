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

  <textarea class="ft"><a href="rabbitdearr.com"><img source="https://via.placeholder.com/350x100/111111/1d1d1d"></a></textarea>

<footer>Design and Coding by <a href="#" target="_blank">digidoll</a> | <a href="#" target="_blank">rabbitdearr</a> &copy; 2013 - 2020 | All Rights Reserved</footer>

</div>


<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script>
// init Isotope
var initial_items = 5;
var next_items = 5;
var $grid = $('#grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'masonry',
    stamp: '.element-item--static'
});


// bind filter button click
$('.button-group-home').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    $grid.isotope({filter: filterValue});
    updateFilterCounts();
});
function updateFilterCounts() {
    // get filtered item elements
    var itemElems = $grid.isotope('getFilteredItemElements');
    var count_items = $(itemElems).length;

    if (count_items > initial_items) {
        $('#showMore').show();
    }
    else {
        $('#showMore').hide();
    }
    if ($('.element-item').hasClass('visible_item')) {
        $('.element-item').removeClass('visible_item');
    }
    var index = 0;

    $(itemElems).each(function () {
        if (index >= initial_items) {
            $(this).addClass('visible_item');
        }
        index++;
    });
    $grid.isotope('layout');
}
// change is-checked class on buttons
$('.button-group-home').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
    });
});

function showNextItems(pagination) {
    var itemsMax = $('.visible_item').length;
    var itemsCount = 0;
    $('.visible_item').each(function () {
        if (itemsCount < pagination) { $(this).removeClass('visible_item'); itemsCount++; } }); if (itemsCount >= itemsMax) {
        $('#showMore').hide();
    }
    $grid.isotope('layout');
}
// function that hides items when page is loaded
function hideItems(pagination) {
    var itemsMax = $('.element-item').length;
    var itemsCount = 0;
    $('.element-item').each(function () {
        if (itemsCount >= pagination) {
            $(this).addClass('visible_item');
        }
        itemsCount++;
    });
    if (itemsCount < itemsMax || initial_items >= itemsMax) {
        $('#showMore').hide();
    }
    $grid.isotope('layout');
}
$('#showMore').on('click', function (e) {
    e.preventDefault();
    showNextItems(next_items);
});
hideItems(initial_items);

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

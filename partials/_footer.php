<footer class="w-100"style="height: 300px;">
  <div class="footerBackground w-100 h-100 ">
    <div class="footerContent">
      <h2><b>Upgrade</b> to a Fully-fledged <b>SuitUP!</b></h2>
      <p>Featuring a additional pages, plugins, beautiful pictures and fully functionality!</p>
      <button type="button" class="btn btn-light px-5 ">VIEW NOW!</button>
    </div>
  </div>
</footer>




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>

<script>
$(document).ready(function() {
  var elementToHide = $("#wishlistPart"); // Replace with the actual selector for your element
  var threshold = 50; // Adjust the threshold as needed (distance from top to trigger hiding)
  var lastScrollTop = 0;

  $(window).scroll(function() {
    var currentScrollTop = $(window).scrollTop();

    // Throttle the hiding action to prevent excessive checks and potential lag
    if (Math.abs(lastScrollTop - currentScrollTop) > threshold) {
      if (currentScrollTop > threshold) {
        elementToHide.addClass("hidden");
      } else {
        elementToHide.removeClass("hidden");
      }
      lastScrollTop = currentScrollTop;
    }
  });
});


var isMouseDown = false;
    var startX;

    $(document).ready(function() {
        $('.carousel').on('mousedown', function(e) {
            isMouseDown = true;
            startX = e.pageX;
        });

        $(document).on('mouseup', function() {
            isMouseDown = false;
        });

        $(document).on('mousemove', function(e) {
            if (isMouseDown) {
                var endX = e.pageX;
                if (startX - endX > 50) {
                    $('.carousel').carousel('next');
                } else if (endX - startX > 50) {
                    $('.carousel').carousel('prev');
                }
            }
        });
    });
</script>
</body>
</html>
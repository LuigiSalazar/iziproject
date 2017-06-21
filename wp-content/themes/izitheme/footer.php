    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <p class="cr">
                        <?php $value = get_field("footer"); echo $value;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $("#web").click(function() {
            $(".seo,.inter").hide(["swing"]);
            $(".web").show(["swing"]);
            $(".imgsep").css("margin-top", "0");
            $("#web").addClass("active2")
            $("#seo,#all,#inter").removeClass("active2")
        });
        $("#all").click(function() {
            $(".inter,.seo,.web").show(["swing"]);
            $(".imgsep").css("margin-top", "50px");
            $("#all").addClass("active2")
            $("#web,#seo,#inter").removeClass("active2")
        });
        $("#seo").click(function() {
            $(".seo").show();
            $(".web,.inter").hide(["swing"]);
            $(".imgsep").css("margin-top", "0");
            $("#seo").addClass("active2")
            $("#web,#all,#inter").removeClass("active2")
        });
        $("#inter").click(function() {
            $(".inter").show();
            $(".web,.seo").hide(["swing"]);
            $(".imgsep").css("margin-top", "0");
            $("#inter").addClass("active2")
            $("#web,#all,#seo").removeClass("active2")
        });
        var barra = false;
        $(".kn").click(function() {
            if (!barra) {
                $(".slider").css("left", "0");
                barra = true;
            } else {
                $(".slider").css("left", "-240px");
                barra = false;
            }
        });
        $('.fa-arrow-up').click(function() {
            $('body, html').animate({
                scrollTop: '0px'
            }, 1000);
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() > 230) {
                $('.fa-arrow-up').slideDown(300);
            } else {
                $('.fa-arrow-up').slideUp(300);
            }
        });
        $(".transixion a[href^='#']").on('click', function(e) {
            var target;
            target = this.hash;
            e.preventDefault();
            var navOffset;
            navOffset = $('#header').height();
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - navOffset
            }, 1000, function() {
                return window.history.pushState(null, null, target);
            });
        })
        $(".navbar-nav li a[href^='#']").on('click', function(e) {
            var target;
            target = this.hash;
            e.preventDefault();
            var navOffset;
            navOffset = $('#header').height();
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - navOffset
            }, 1000, function() {
                return window.history.pushState(null, null, target);
            });
        });
        $(".toggle-icon").click(function() {
  $('#nav-container').toggleClass("pushed");
});
    </script>
    </body>
</html>
<footer class="ftco-footer bg-light ftco-section">
      <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script></a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="/template/js/jquery.min.js"></script>
  <script src="/template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/template/js/popper.min.js"></script>
  <script src="/template/js/bootstrap.min.js"></script>
  <script src="/template/js/jquery.easing.1.3.js"></script>
  <script src="/template/js/jquery.waypoints.min.js"></script>
  <script src="/template/js/jquery.stellar.min.js"></script>
  <script src="/template/js/owl.carousel.min.js"></script>
  <script src="/template/js/jquery.magnific-popup.min.js"></script>
  <script src="/template/js/aos.js"></script>
  <script src="/template/js/jquery.animateNumber.min.js"></script>
  <script src="/template/js/bootstrap-datepicker.js"></script>
  <script src="/template/js/scrollax.min.js"></script>
  <script src="/template/js/main.js"></script>
  <script src="/template/js/google-map.js"></script>
  <script src="/template/js/script.js"></script>
 


    <!-- <script src="/template/js/jquery.js"></script>
    <script src="/template/js/jquery.cycle2.min.js"></script>
    <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/jquery.scrollUp.min.js"></script>
    <script src="/template/js/price-range.js"></script>
    <script src="/template/js/jquery.prettyPhoto.js"></script>
    <script src="/template/js/main.js"></script> -->
    <script>
        $(document).ready(function() {
            $(".add-to-cart").click(function() {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/" + id, {}, function(data) {
                    $("#cart-count").html(data);
                });
                return false;
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        console.log(e.target.result)
                        $('#imgUpdate').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });

        });
    </script>

    </body>

    </html>
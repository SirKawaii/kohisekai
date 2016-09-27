      <footer>
      <a>Sitio muy feo creado por mit</a>
      </footer>
    </div>  <!-- Fin Container -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.0.min.js"); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!-- Material Design for Bootstrap -->
	  <script src="<?php echo base_url("assets/js/material.js"); ?>"></script>
	  <script src="<?php echo base_url("assets/js/ripples.min.js"); ?>"></script>
    <!-- Dropdown.js -->
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <!-- Sliders -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
    <script>
      $(function () {
        $.material.init();
        $(".shor").noUiSlider({
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });

        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
      });
    </script>
    <!-- INIT -->
    <script>
      $.material.init();
      $.material.ripples();
      $.material.input();
      $.material.checkbox();
      $.material.radio();
      $("#dropdown-menu select").dropdown();
    </script>
  </body>
</html>


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/ganttchart/js/jquery-1.7.js.js'); ?>"></script>
  <script src="<?php echo base_url('assets/ganttchart/js/jquery-1.7.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/ganttchart/js/jquery.fn.gantt.js'); ?>"></script>

</body>
<script>
var myData = [{
    name: "Name 1",
    desc: "Description 1",
    values: [{
      from: 1320192000000, // <a href="https://www.jqueryscript.net/time-clock/">date</a> string
      to: 1322401600000,
      label: "Label 1",
      desc: "Value Description 1",
      customClass: "custom-1",
      dataObj: {}
    }]
},{
    name: "Name 2",
    desc: "Description 2",
    values: [{
      from: 1320192000000,
      to: 1322401600000,
      label: "Label 2",
      desc: "Value Description 2",
      customClass: "custom-2",
      dataObj: {}
    }]
},{
    name: "Name 3",
    desc: "Description 3",
    values: [{
      from: 1320192000000,
      to: 1322401600000,
      label: "Label 3",
      desc: "Value Description 3",
      customClass: "custom-3",
      dataObj: {}
}]
}];
$(".gantt").gantt({
  // or 'data/data.json'
  source: myData
});
$(".gantt").gantt({

// holidays
holidays: [],

// how many items per page
itemsPerPage: 7,

// localisation
dow: ["S", "M", "T", "W", "T", "F", "S"],
months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
waitText: "Please wait...",

// navigation type
// or 'scroll'
navigate: "buttons",

// auto scrolls to today
scrollToToday: true,

// uses cookie to save the current state
// requires jquery-cookie plugin: https://github.com/carhartl/jquery-cookie
useCookie: false,
cookieKey: "jquery.fn.gantt",

// scale parameters
scale: "days",
maxScale: "months",
minScale: "hours",

});

</script>

</html>
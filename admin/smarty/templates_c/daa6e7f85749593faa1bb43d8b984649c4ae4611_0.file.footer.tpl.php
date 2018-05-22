<?php
/* Smarty version 3.1.30, created on 2018-05-22 23:37:22
  from "C:\wamp64\www\doan_trungtam\admin\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b044742d7f9a8_38291078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa6e7f85749593faa1bb43d8b984649c4ae4611' => 
    array (
      0 => 'C:\\wamp64\\www\\doan_trungtam\\admin\\smarty\\templates\\footer.tpl',
      1 => 1526847466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b044742d7f9a8_38291078 (Smarty_Internal_Template $_smarty_tpl) {
?>
 </section>
  <!-- container section start -->

  <!-- javascripts -->
  
  <?php echo '<script'; ?>
 type="text/javascript" src="public/js/jquery-ui-1.9.2.custom.min.js"><?php echo '</script'; ?>
>
  <!-- bootstrap -->
  <?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!-- nice scroll -->
  <?php echo '<script'; ?>
 src="public/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
  <!-- charts scripts -->
  <?php echo '<script'; ?>
 src="public/assets/jquery-knob/js/jquery.knob.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/jquery.sparkline.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/owl.carousel.js"><?php echo '</script'; ?>
>
  <!-- jQuery full calendar -->
  <<?php echo '<script'; ?>
 src="public/js/fullcalendar.min.js"><?php echo '</script'; ?>
>
    <!-- Full Google Calendar - Calendar -->
    <?php echo '<script'; ?>
 src="public/assets/fullcalendar/fullcalendar/fullcalendar.js"><?php echo '</script'; ?>
>
    <!--script for this page only-->
    <?php echo '<script'; ?>
 src="public/js/calendar-custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery.rateit.min.js"><?php echo '</script'; ?>
>
    <!-- custom select -->
    <?php echo '<script'; ?>
 src="public/js/jquery.customSelect.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/chart-master/Chart.js"><?php echo '</script'; ?>
>

    <!--custome script for all page-->
    <?php echo '<script'; ?>
 src="public/js/scripts.js"><?php echo '</script'; ?>
>
    <!-- custom script for this page-->
    <?php echo '<script'; ?>
 src="public/js/sparkline-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/easy-pie-chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/xcharts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery.autosize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/gdp-data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/sparklines.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/charts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}

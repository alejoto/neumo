<!--main content here-->

<div class="container">
  <div class="row">
    
    <div class="span3" style="margin-top: 0px;">
      <? include '../includes/left_menu.php'; ?>

      <div style="margin-left: 13px;">
        <h3 id="left_title">Im&aacute;genes diagn&oacute;sticas</h3>
        <a class="btn span2" id="sel_ecocardio">Ecocardiograf&iacute;a</a>
        <a class="btn span2" id="sel_x_ray">Rayos X</a>
        <a class="btn span2" id="sel_tc_angio">Tomograf&iacute;a</a>
        <a class="btn span2" id="sel_mri">Resonancia</a>
        <a class="btn span2" id="sel_pulm_arteriography">Arteriograf&iacute;a p</a>
        <a class="btn span2" id="sel_gammagr">Gamagraf&iacute;a V/P</a>
        <a class="btn span2" id="sel_duplex_legs">Doppler MsIs</a>
      </div>

    </div>
    
    <div class="span9" style="margin-top: 40px;">

      <div class="row">
        <? include '../includes/info.php'; ?>
      </div><br>

      <!-- ecocardio begin -->
        <? include '../patient/diagnostic/ecocardio.php'; ?>
      <!-- ecocardio end -->
      
      <!-- x_ray begin -->
        <? include '../patient/diagnostic/x_ray.php'; ?>
      <!-- x_ray end -->
      
      <!-- tc_angio begin -->
        <? include '../patient/diagnostic/tc_angio.php'; ?>
      <!-- tc_angio end -->

      <!-- mri begin -->
        <? include '../patient/diagnostic/mri.php'; ?>
      <!-- mri end -->

      <!-- pulm_arteriography begin -->
        <? include '../patient/diagnostic/pulm_arteriography.php'; ?>
      <!-- pulm_arteriography end -->

      <!-- gammagr begin -->
        <? include '../patient/diagnostic/gammagr.php'; ?>
      <!-- gammagr end -->

      <!-- duplex_legs begin -->
        <? include '../patient/diagnostic/duplex_legs.php'; ?>
      <!-- duplex_legs end -->
      
    </div>
  
  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/diagnostic.js"></script>

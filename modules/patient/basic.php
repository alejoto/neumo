<!--main content here-->
<div class="container">
  <div class="row">
    
    <div class="span3" style="margin-top: 0px;">
      <? include '../includes/left_menu.php'; ?>

      <div style="margin-left: 13px;">
        <h3 id="left_title">Evaluaci&oacute;n<br>cl&iacute;nica</h3>
        <a class="btn span2" id="sel_anam">Anamnesis</a>
        <a class="btn span2" id="sel_ex_fc">Examen f&iacute;sico</a>
        <a class="btn span2" id="sel_hiperclot">Hipercoagulabilidad</a>
        <a class="btn span2" id="sel_treatment">Tratamiento</a>
        <a class="btn span2" id="sel_outcome">Fallecido?</a>
      </div>

    </div>
    
    <div class="span9" style="margin-top: 40px;">

      <div class="row">
        <? include '../includes/info.php'; ?>
      </div><br>

      <!-- anamnesis begin -->
        <? include '../patient/basic/anamnesis.php'; ?>
      <!-- anamnesis end -->
      
      <!-- examen fisico begin -->
        <? include '../patient/basic/ex_fc.php'; ?>
      <!-- examen fisico end -->
      
      <!-- hipercoagulabilidad begin -->
        <? include '../patient/basic/hiperclot.php'; ?>
      <!-- hipercoagulabilidad end -->

      <!-- tratamiento begin -->
        <? include '../patient/basic/treatment.php'; ?>
      <!-- tratamiento end -->

      <!-- fallecido begin -->
        <? include '../patient/basic/outcome.php'; ?>
      <!-- fallecido end -->
      
    </div>
  
  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/clinic_eval.js"></script>
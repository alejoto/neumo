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


<script type="text/javascript">
hide_show_savebutton([$('#day_ev'),$('#nyha_funct_class')],$('#sympt_save2'));

$('#sympt_save2').click(function(){
  $('#anam').hide('fast');
  $('#ex_fc').show('fast');
});

$('#ef_save').click(function(){


  //pending to errase sympt_save (without number) from ajax_save

  //disease beggining data
  if ($('#afroamerican').val()) {var afroamerican=$('#afroamerican').val();} else{var afroamerican='';}
  if ($('#month').val()) {
    var begin_month=$('#month').val();
    if (begin_month.length==1) { var begin_month ='0'+ begin_month; }
    var dxdate=$('#year').val() +'-'+ begin_month +'-01';
  } else{var dxdate=''};

  //fixing evaluation date
  var anam_year=$('#year_ev').val();
  var anam_month=$('#month_ev').val();
  var anam_day=$('#day_ev').val();

  if (anam_month.length==1) {anam_month='0'+anam_month;}
  if (anam_day.length==1) {anam_day='0'+anam_day;}

  var eval_date=anam_year+'-'+anam_month+'-'+anam_day;

  var nyha_funct=$('#nyha_funct').val();

  //checkbox values
  if($("#dyspnea").is(':checked')) { var dyspnea="si";} else {var dyspnea="no";}
  if($("#cough").is(':checked')) { var cough="si";} else {var cough="no";}
  if($("#chestpain").is(':checked')) { var chestpain="si";} else {var chestpain="no";}
  if($("#loweredema").is(':checked')) { var loweredema="si";} else {var loweredema="no";}
  if($("#hemoptysis").is(':checked')) { var hemoptysis="si";} else {var hemoptysis="no";}
  if($("#syncope").is(':checked')) { var syncope="si";} else {var syncope="no";}

  var improved_symts=$('#improved_symts').val();
  var pulse=$('#pulse').val();
  var breathing=$('#breathing').val();
  var sat_ox=$('#sat_ox').val();
  var pres_art_exfco=$('#psist').val()+ '/' +$('#pdiast').val();
  var weight=$('#weight').val();
  var height=$('#height').val();

  if($("#ing_yu").is(':checked')) { var ing_yu="si";} else {var ing_yu="no";}
  if($("#hepatomegaly").is(':checked')) { var hepatomegaly="si";} else {var hepatomegaly="no";}
  if($("#cyanosis").is(':checked')) { var cyanosis="si";} else {var cyanosis="no";}
  if($("#ef_edema").is(':checked')) { var ef_edema="si";} else {var ef_edema="no";}
  if($("#finger_clubbing").is(':checked')) { var finger_clubbing="si";} else {var finger_clubbing="no";}
  


  $.post('../patient/save_anam.php',{afroamerican:afroamerican
    ,dxdate:dxdate
    ,eval_date:eval_date
    ,nyha_funct:nyha_funct
    ,dyspnea:dyspnea
    ,cough:cough
    ,chestpain:chestpain
    ,loweredema:loweredema
    ,hemoptysis:hemoptysis
    ,syncope:syncope
    ,improved_symts:improved_symts
    ,pulse:pulse
    ,breathing:breathing
    ,sat_ox:sat_ox
    ,pres_art_exfco:pres_art_exfco
    ,weight:weight
    ,height:height
    ,ing_yu:ing_yu
    ,cyanosis:cyanosis
    ,ef_edema:ef_edema
    ,finger_clubbing:finger_clubbing
},function(data){
    $('#anam_result').html(data);
    if ($('#month').val()!=''&& $('#afroamerican').val()!='') {
      $('#first_eval_form').html('Afroamericano?' 
        + $('#afroamerican').val() 
        + ', inicio sintomas en:' 
        + $('#year').val() + '-' + $('#month').val());
    } 
    
  });

});
/**/


</script>

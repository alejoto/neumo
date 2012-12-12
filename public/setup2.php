<?php

  $con = mysql_connect("localhost","root","root");
  
  $sql = "RENAME TABLE add_data_patient TO main_add_data_patient
  ,arterialgasses TO hap_arterialgases
  ,cp_stress_test TO hap_cp_stress_test
  ,digiter TO main_digiter
  ,dimer_trop TO hap_dimer_trop
  ,drug_treatment TO hap_drug_treatment
  ,duplex_legs TO hap_duplex_legs
  ,ecocardio TO hap_ecocardio
  ,electrok TO hap_electrok
  ,eval TO main_eval
  ,first_eval TO hap_first_eval
  ,follow_up TO hap_follow_up
  ,gammagr TO hap_gammagr
  ,hb TO hap_hb
  ,hepatic TO hap_hepatic
  ,hospital TO main_hospital
  ,hyperclotting TO hap_hyperclotting
  ,investigator TO main_investigator
  ,mri TO hap_mri
  ,outcome TO hap_outcome
  ,patient TO main_patient
  ,pep_natr TO hap_pep_natr
  ,pulm_arteriography TO hap_pulm_arteriography
  ,renal TO hap_renal
  ,reuma TO hap_reuma
  ,right_cathet TO hap_right_cathet
  ,six_mins_walk TO hap_six_mins_walk
  ,spirometry TO hap_spirometry
  ,tc_angio TO hap_tc_angio
  ,vasoreact_test TO hap_vasoreact_test
  ,vih TO hap_vih
  ,x_ray TO hap_x_ray";
  
  mysql_query($sql,$con);

?>
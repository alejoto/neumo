<?php
  $con = mysql_connect("instance33555.db.xeround.com:5852","admin","damabugo");
  if (!$con) die('Could not connect: ' . mysql_error());
  else echo 'connection succesfull', "\n";

  $db = "CREATE DATABASE hiapulco";
  if( mysql_query($db,$con) ) echo "Database created";
  else echo "Error creating database: " . mysql_error();
  
  mysql_select_db("hiapulco", $con);
  
  $sql = "CREATE TABLE IF NOT EXISTS permissions (page_name VARCHAR (150) PRIMARY KEY
  ,coordinator VARCHAR (50)
  ,digiter VARCHAR (50)
  ,investigator VARCHAR (50)
  ,epidemiologist VARCHAR (50))
  ";
  mysql_query($sql,$con); 

  $sql = "CREATE TABLE IF NOT EXISTS users (user_id VARCHAR (150) PRIMARY KEY
  ,pwd VARCHAR (50)
  ,rol VARCHAR (50))
  ";
  mysql_query($sql,$con); 
  
  $sql = "CREATE TABLE IF NOT EXISTS rol_tables (rol VARCHAR (30) PRIMARY KEY
  ,associated_table VARCHAR (50))
  ";
  mysql_query($sql,$con); 
  
  $sql = "CREATE TABLE IF NOT EXISTS digiter (digiter_id VARCHAR (100) PRIMARY KEY
  ,dig_rol VARCHAR (50)
  ,dig_name VARCHAR (50)
  ,dig_surn VARCHAR (50)
  ,dig_mobile VARCHAR (50)
  ,investigator_id VARCHAR (16),FOREIGN KEY (investigator_id) REFERENCES investigator(investigator_id)
  ,user_id VARCHAR (30),FOREIGN KEY (user_id) REFERENCES users(user_id))
  ";
  mysql_query($sql,$con);
  
  $sql = "CREATE TABLE IF NOT EXISTS investigator (investigator_id VARCHAR (50) PRIMARY KEY
  ,ivt_name VARCHAR (50)
  ,ivt_surname VARCHAR (50)
  ,ivt_prof VARCHAR (30)
  ,ivt_specialty VARCHAR (30)
  ,ivt_mobile VARCHAR (20)
  ,ivt_city VARCHAR (50)
  ,user_id VARCHAR (30),FOREIGN KEY (user_id) REFERENCES users(user_id))
  ";
  mysql_query($sql,$con);
  
  $sql = "CREATE TABLE IF NOT EXISTS hospital (hospital_id INT (10) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,hospital_name VARCHAR (50)
  ,hospital_city VARCHAR (50))";
  mysql_query($sql,$con);
  
  $sql = "CREATE TABLE IF NOT EXISTS patient (patient_id VARCHAR (50) PRIMARY KEY
  ,timestamp DATE 
  ,name VARCHAR (50)
  ,surn VARCHAR (50)
  ,gender VARCHAR (50)
  ,birthd DATE 
  ,countrybth VARCHAR (50)
  ,citybth VARCHAR (50)
  ,statebth VARCHAR (50)
  ,digiter_id VARCHAR (50),FOREIGN KEY (digiter_id) REFERENCES digiter(digiter_id))";mysql_query($sql,$con);

  $sql = "CREATE TABLE IF NOT EXISTS eval (eval_id INT (16) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,patient_id VARCHAR (50),FOREIGN KEY (patient_id) REFERENCES patient(patient_id)
  ,digiter_id VARCHAR (50),FOREIGN KEY (digiter_id) REFERENCES digiter(digiter_id)
  ,hospital_id INT (50),FOREIGN KEY (hospital_id) REFERENCES hospital(hospital_id)
  ,t_st DATE )";mysql_query($sql,$con);

  $sql = "CREATE TABLE IF NOT EXISTS add_data_patient (add_data_patient_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,timestamp DATE 
  ,mobile VARCHAR (50)
  ,phone VARCHAR (50)
  ,eps VARCHAR (50)
  ,insurancetype VARCHAR (50)
  ,countryreside VARCHAR (50)
  ,cityreside VARCHAR (50)
  ,statereside VARCHAR (50)
  ,clinrecordnum VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS first_eval (first_eval_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,physician VARCHAR (50)
  ,afroamerican VARCHAR (50)
  ,dxdate DATE 
  ,yearofsymptoms VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS follow_up (follow_up_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,eval_date DATE 
  ,homeoxigen VARCHAR (50)
  ,dailyhours_ox VARCHAR (50)
  ,dyspnea VARCHAR (50)
  ,cough VARCHAR (50)
  ,chestpain VARCHAR (50)
  ,loweredema VARCHAR (50)
  ,hemoptysis VARCHAR (50)
  ,syncope VARCHAR (50)
  ,pregnant VARCHAR (50)
  ,weight VARCHAR (50)
  ,height VARCHAR (50)
  ,nyha_funct_class VARCHAR (50)
  ,sat_ox VARCHAR (50)
  ,pulse VARCHAR (50)
  ,breathing VARCHAR (50)
  ,trycuspid_murmur VARCHAR (50)
  ,p2_greater_than_a2 VARCHAR (50)
  ,cyanosis VARCHAR (50)
  ,finger_clubbing VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS hyperclotting (hyperclotting_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,antiphs_syndr VARCHAR (50)
  ,protr20210_mutation VARCHAR (50)
  ,c_protein_resist VARCHAR (50)
  ,antitrbiii_deficiency VARCHAR (50)
  ,prot_s_deficiency VARCHAR (50)
  ,prot_c_deficiency VARCHAR (50)
  ,unspecific_tromboph VARCHAR (50)
  ,hyperhomocist VARCHAR (50)
  ,neoplasia VARCHAR (50)
  ,other_hyperclott_disord VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS electrok (electrok_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,ecg_date DATE 
  ,ecg_lecture VARCHAR (50)
  ,right_axis_deviation VARCHAR (50)
  ,siqiiitiii_pattern VARCHAR (50)
  ,sinus_tachyc VARCHAR (50)
  ,right_branch_block VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS x_ray (x_ray_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,xray_date DATE 
  ,alveolar_infiltrates VARCHAR (50)
  ,hypoperfusion_areas VARCHAR (50)
  ,right_heart_cardiomeg VARCHAR (50)
  ,pleur_effuss VARCHAR (50)
  ,pulm_artery_prominent VARCHAR (50)
  ,b_kerkey_lines VARCHAR (50)
  ,pulm_cone_evertion VARCHAR (50)
  ,pulm_art_diameter VARCHAR (50)
  ,cardiothrx_index VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS tc_angio (tc_angio_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,a_tc_date DATE 
  ,a_tc_main_pulm_art_diamt VARCHAR (50)
  ,a_tc_rt_pulm_art_diamt VARCHAR (50)
  ,a_tc_left_pulm_art_diamt VARCHAR (50)
  ,a_tc_rt_heart_dilat VARCHAR (50)
  ,a_tc_tep_pattern VARCHAR (50)
  ,a_tc_pulm_thrombos VARCHAR (50)
  ,a_tc_inft_interst VARCHAR (50)
  ,a_tc_inft_alv VARCHAR (50)
  ,a_tc_inft_nodular VARCHAR (50)
  ,a_tc_inft_retic VARCHAR (50)
  ,a_tc_inft_honeycomb VARCHAR (50)
  ,a_tc_infiltr_extent VARCHAR (50)
  ,a_tc_congenit VARCHAR (50)
  ,a_tc_congenit_otros VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS dimer_trop (dimer_trop_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,d_dimer_date DATE 
  ,d_dimer_value VARCHAR (50)
  ,trop_date DATE 
  ,trop_result VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS pep_natr (pep_natr_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,pep_natr_date DATE 
  ,pep_natr_value VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS vih (vih_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,hiv_date DATE 
  ,hiv_result VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS renal (renal_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,renal_date DATE 
  ,creat VARCHAR (50)
  ,bun VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS hepatic (hepatic_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,hep_date DATE 
  ,hep_albumin VARCHAR (50)
  ,hep_tpt VARCHAR (50)
  ,hep_tp VARCHAR (50)
  ,hep_inr VARCHAR (50)
  ,hep_ast VARCHAR (50)
  ,hep_alt VARCHAR (50)
  ,hep_fal VARCHAR (50)
  ,hep_ggt VARCHAR (50)
  ,bili_tot VARCHAR (50)
  ,bili_dir VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS reuma (reuma_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,reuma_date DATE 
  ,reuma_ana VARCHAR (50)
  ,anti_ro VARCHAR (50)
  ,anti_la VARCHAR (50)
  ,anti_smt VARCHAR (50)
  ,anti_rnp VARCHAR (50)
  ,anti_u1rnp VARCHAR (50)
  ,anti_u3rnp VARCHAR (50)
  ,anti_jo VARCHAR (50)
  ,rna_pol_3 VARCHAR (50)
  ,topiso_1 VARCHAR (50)
  ,centrom VARCHAR (50)
  ,anti_slc VARCHAR (50)
  ,anti_th_t0 VARCHAR (50)
  ,ss_dna VARCHAR (50)
  ,ds_dna VARCHAR (50)
  ,c_anca VARCHAR (50)
  ,p_anca VARCHAR (50)
  ,a_cardiolip_g VARCHAR (50)
  ,a_cardiolip_m VARCHAR (50)
  ,anticoag_lup VARCHAR (50)
  ,a_2_cpl VARCHAR (50)
  ,reuma_fr VARCHAR (50)
  ,anticitrul VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS hb (hb_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,hb_date DATE 
  ,hb_value VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS arterialgasses (arterialgasses_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,bld_gass_date DATE 
  ,bld_gass_fio2 VARCHAR (50)
  ,bld_gass_ph VARCHAR (50)
  ,bld_gass_paco2 VARCHAR (50)
  ,bld_gass_pao2 VARCHAR (50)
  ,bld_gass_hco3 VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS duplex_legs (duplex_legs_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,legsdoppler_date DATE 
  ,legsdoppler_result VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS ecocardio (ecocardio_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,doppl_date DATE 
  ,doppl_type VARCHAR (50)
  ,doppl_syst_press VARCHAR (50)
  ,doppl_right_dilat VARCHAR (50)
  ,doppl_right_dysf VARCHAR (50)
  ,doppl_pleur_effuss VARCHAR (50)
  ,left_heart_dysf VARCHAR (50)
  ,eject_fract VARCHAR (50)
  ,tapse VARCHAR (50)
  ,doppl_cong_defects VARCHAR (50)
  ,doppl_septum_dev VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS mri (mri_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,mri_date DATE 
  ,mri_fevd VARCHAR (50)
  ,mri_hptsigns VARCHAR (50)
  ,mri_main_art_diam VARCHAR (50)
  ,mri_rt_art_diam VARCHAR (50)
  ,mri_lt_art_diam VARCHAR (50)
  ,mri_rt_heart_dilat VARCHAR (50)
  ,mri_colat VARCHAR (50)
  ,mri_defects VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS gammagr (gammagr_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,gamma_date DATE 
  ,gamma_tep VARCHAR (50)
  ,gamma_defects VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS pulm_arteriography (pulm_arteriography_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,artergph_date DATE 
  ,artergph_TEP VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS right_cathet (right_cathet_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,rt_cat_date DATE 
  ,res_vasc_pulm VARCHAR (50)
  ,res_vasc_pulm_unit VARCHAR (50)
  ,res_vasc_syst VARCHAR (50)
  ,res_vasc_syst_unit VARCHAR (50)
  ,pap_sys VARCHAR (50)
  ,pap_dias VARCHAR (50)
  ,pas_sys VARCHAR (50)
  ,pas_dias VARCHAR (50)
  ,rt_atr_press VARCHAR (50)
  ,pulm_wedg_press VARCHAR (50)
  ,pulm_gradient VARCHAR (50)
  ,its_right VARCHAR (50)
  ,its_left VARCHAR (50)
  ,cardiac_outp VARCHAR (50)
  ,rt_atr_oxim VARCHAR (50)
  ,heart_rate VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS vasoreact_test (vasoreact_test_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,reactivity_date DATE 
  ,reactivity VARCHAR (50)
  ,test_drug VARCHAR (50)
  ,post_res_vasc_pulm VARCHAR (50)
  ,post_res_vasc_pulm_unit VARCHAR (50)
  ,post_res_vasc_syst VARCHAR (50)
  ,post_res_vasc_syst_unit VARCHAR (50)
  ,post_pap_sys VARCHAR (50)
  ,post_pap_dias VARCHAR (50)
  ,post_pas_sys VARCHAR (50)
  ,post_pas_dias VARCHAR (50)
  ,post_rt_atr_press VARCHAR (50)
  ,post_pulm_wedg_press VARCHAR (50)
  ,post_pulm_gradient VARCHAR (50)
  ,post_its_right VARCHAR (50)
  ,post_its_left VARCHAR (50)
  ,post_cardiac_outp VARCHAR (50)
  ,post_rt_atr_oxim VARCHAR (50)
  ,post_heart_rate VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS six_mins_walk (six_mins_walk_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,walk_date DATE 
  ,walk_meters VARCHAR (50)
  ,walk_fio2 VARCHAR (50)
  ,start_sato2 VARCHAR (50)
  ,end_sato2 VARCHAR (50)
  ,walk_symptoms VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS spirometry (spirometry_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,spirodate DATE 
  ,cvf_lt VARCHAR (50)
  ,cvf_percent VARCHAR (50)
  ,vef1_lt VARCHAR (50)
  ,vef1_percent VARCHAR (50)
  ,vef1_cvf VARCHAR (50)
  ,bronchodil_changes VARCHAR (50)
  ,dlco_percent VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS cp_stress_test (cp_stress_test_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,cp_stress_date DATE 
  ,vo2max_peak VARCHAR (50)
  ,art_press_vo2 VARCHAR (50)
  ,pulse_vo2 VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS drug_treatment (drug_treatment_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,drug VARCHAR (50)
  ,drug_other VARCHAR (50)
  ,dosis VARCHAR (50)
  ,drug_ini DATE 
  ,drug_end DATE 
  ,suspend_cause VARCHAR (50)
  ,drug_adv_event VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
  $sql = "CREATE TABLE IF NOT EXISTS outcome (outcome_id INT (50) PRIMARY KEY  NOT NULL AUTO_INCREMENT
  ,outcome_dyspn VARCHAR (50)
  ,outcome_epid VARCHAR (50)
  ,endart_failure VARCHAR (50)
  ,lung_transplant VARCHAR (50)
  ,dead_date DATE 
  ,dead_cause VARCHAR (50)
  ,dead_place VARCHAR (50)
  ,eval_id VARCHAR (50),FOREIGN KEY (eval_id) REFERENCES eval(eval_id))";mysql_query($sql,$con);
    
  mysql_close($con);
?>
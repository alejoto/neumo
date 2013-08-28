<?php
  function info_patients(){
    
    include '../DB/connect.php';

    $titles = array(
                  // main_patient
                  'fecha ingreso paciente', 
                  'Nombres paciente', 
                  'Apellidos paciente', 
                  'Sexo', 
                  'Fecha nacimiento', 
                  'Pais nacimiento', 
                  'Ciudad nacimiento', 
                  'Departamento nacimiento', 
                  'email digitador',
                  'Cedula paciente', 
                
                  // hap_data_patient
                  'Fecha edicion paciente', 
                  'Celular pte', 
                  'Tel paciente', 
                  'EPS', 
                  'tipo vinculacion salud', 
                  'pais residencia', 
                  'ciudad residencia', 
                  'departamento residencia', 
                  'numero historia clinica', 
                  //'redundante',
                  
                  // hap_arterialgasses
                  'fecha examen gases arteriales', 
                  'FIO2 gases arteriales', 
                  'pH gases arteriales', 
                  'paCO2 gases arteriales',
                  'paO2 gases arteriales', 
                  'HCO3 gases arteriales', 
                  
                  // hap_coag
                  'fecha examen pruebas coagulacion', 
                  'TPT',
                  'TP',
                  'INR',
                  
                  // hap_cp_stress_test
                  'fecha examen stress test', 
                  'pico max VO2', 
                  'P.A. durante stress test', 
                  'pulso durante stress test', 

                  // hap_drug_treatment
                  'medicamento', 
                  'otros medicamentos', 
                  'dosis', 
                  'fecha inicio medicamento', 
                  'fecha suspension medicamento',
                  'causa suspension medicamento', 
                  'evento adverso', 
                  
                  // hap_duplex_legs
                  'fecha examen doppler miembros inferiores', 
                  'doppler extremidad inf izquierda',
                  'doppler extremidad inf derecha',
                  'otros datos doppler extremidades inferiores', 
                  
                  // hap_ecocardio
                  'fecha examen ecocardio',
                  'via ecocardiografia', 
                  'PA durante ecocardio', 
                  'dilatacion cavidades derechas por ecocardio', 
                  'disfuncion cardiaca derecha por ecocardio', 
                  'derrame pleural por ecocardio', 
                  'disfuncion cardiaca izquierda por ecocardio', 
                  'fraccion eyeccion por ecocardio', 'TAPSE ecocardio',
                  'defectos congenitos cardiacos ecocardio', 
                  'otros defectos congenitos ecocardio', 
                  'desviacion septum ecocardio',
                  
                   // hap_electrok
                  'fecha examen electroCG', 
                  'eje electroCG', 
                  'patron electroCG',
                  'frecuencia electroCG', 
                  'Tipo ritmo electroCG', 
                  
                  // hap_first_eval
                  'medico tratante', 
                  'raza afroamericanan',
                  'fecha de diagnostico de primera vez', 
                  'anos sintomatico', 
                  
                  // hap_follow_up
                  'fecha examen medico', 
                  'oxigeno domiciliario',
                  'nro horas oxigeno domiciliario', 
                  'disnea', 
                  'tos', 
                  'dolor toracico', 
                  'edema extremidades inferiores',
                  'hemoptisis', 
                  'sincope', 
                  'mejoria de sintomas', 
                  'embarazo', 
                  'peso evaluacion de seguimiento', 
                  'talla evaluacion de seguimiento', 
                  'clase funcional NYHA', 
                  'saturacion oxigeno evaluacion de seguimiento',
                  'pulso evaluacion de seguimiento', 
                  'presion arterial evaluacion de seguimiento',
                  'frecuencia respiratoria evaluacion de seguimiento', 
                  'soplo tricuspideo evaluacion de seguimiento',
                  'p2 mayor que a2 evaluacion de seguimiento', 
                  'cianosis evaluacion de seguimiento', 
                  'hepatomegalia evaluacion de seguimiento', 
                  'edema evaluacion de seguimiento',
                  'ing yugular evaluacion de seguimiento', 
                  'dedos palillo de tambor evaluacion de seguimiento',
                  
                  // hap_gammagr
                  'fecha examen gamagrafia VP', 
                  'TEP por gamagrafia pulm', 
                  'defectos encontrados en gamagrafia pulm',
                  
                  // hap_hb
                  'fecha examen hemoglobina', 
                  'hemoglobina mg/dl',
                  
                  // hap_hemo_thyro
                  'fecha examen pruebas tiroideas', 
                  'TSH', 
                  't4 total',
                  't4 libre',
                  
                   // hap_hepatic
                  'fecha examen pruebas hepaticas', 
                  'albumina', 
                  'AST', 
                  'ALT', 
                  'FAL liver', 
                  'GGT', 
                  'bilirrubina T',
                  'bilirrubina dir', 
                  
                  // hap_renal
                  'fecha examen funcion renal', 
                  'creatinina', 
                  'BUN', 
                  
                  // hap_six_mins_walk
                  'fecha examen caminata 6 mins',
                  'metros caminados', 
                  'FI02 prueba caminata', 
                  'SatO2 inicial caminata', 
                  'SatO2 final caminata', 
                  'sintomas durante caminata', 
                  'BORG caminata', 
                  'sincope durante caminata', 
                  'dolor toracico durante caminata',
                  
                  // main_eval
                  'hospital donde fue atentido', 
                  'fecha registro de datos');
      
      $Matriz = array();
      $Matriz[] = $titles;
      
      $ans = array();
      
      $sql = "SELECT * FROM main_patient as p INNER JOIN main_eval as s ON p.patient_id=s.patient_id";
      $result = mysqli_query($con,$sql);
      
      while( $row = mysqli_fetch_array($result) ){
        $eval = $row['eval_id'];
        $hospital = $row['hospital_id'];
        $t_st = $row['t_st'];

        /* ------------------------------------- main_patient ------------------------------------- */
        array_push($ans, $row['timestamp'], $row['name'], $row['surn'], $row['gender'],
                         $row['birthd'], $row['countrybth'], $row['citybth'], $row['statebth'],
                         $row['digiter_id'], $row['patient_id']);
        /* ---------------------------------------------------------------------------------------- */

        
        /* --------------------------------- hap_data_patient ------------------------------------- */
        $sql_patient = "SELECT * FROM add_data_patient WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['timestamp'], $data_patient['mobile'], 
                         $data_patient['phone'], $data_patient['eps'], 
                         $data_patient['insurancetype'], $data_patient['countryreside'], 
                         $data_patient['cityreside'], $data_patient['statereside'], 
                         $data_patient['clinrecordnum']);
        /* ---------------------------------------------------------------------------------------- */
        
        
        /* --------------------------------- hap_arterialgasses ----------------------------------- */
        $sql_patient = "SELECT * FROM hap_arterialgasses WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['bld_gass_date'], $data_patient['bld_gass_fio2'], 
                         $data_patient['bld_gass_ph'], $data_patient['bld_gass_paco2'], 
                         $data_patient['bld_gass_pao2'], $data_patient['bld_gass_hco3']);
        /* ---------------------------------------------------------------------------------------- */


        /* ------------------------------------- hap_coag ----------------------------------------- */
        $sql_patient = "SELECT * FROM hap_coag WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['coag_date'], $data_patient['hep_tpt'], 
                         $data_patient['hep_tp'], $data_patient['hep_inr']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------- hap_cp_stress_test --------------------------------------- */
        $sql_patient = "SELECT * FROM hap_cp_stress_test WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['cp_stress_date'], $data_patient['vo2max_peak'], 
                         $data_patient['art_press_vo2'], $data_patient['pulse_vo2']);
        /* ---------------------------------------------------------------------------------------- */
        

        /* ----------------------------- hap_drug_treatment --------------------------------------- */
        $sql_patient = "SELECT * FROM hap_drug_treatment WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['drug'], $data_patient['drug_other'], 
                         $data_patient['dosis'], $data_patient['drug_ini'],
                         $data_patient['drug_end'], $data_patient['suspend_cause'],
                         $data_patient['drug_adv_event']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------- hap_duplex_legs --------------------------------------- */
        $sql_patient = "SELECT * FROM hap_duplex_legs WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['legsdoppler_date'], 
                         $data_patient['legsdoppler_result_left'], 
                         $data_patient['legsdoppler_result_right'], 
                         $data_patient['legsdoppler_result']);
        /* ---------------------------------------------------------------------------------------- */
        

        /* ----------------------------- hap_ecocardio --------------------------------------- */
        $sql_patient = "SELECT * FROM hap_ecocardio WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['doppl_date'], 
                         $data_patient['doppl_type'], 
                         $data_patient['doppl_syst_press'], 
                         $data_patient['doppl_right_dilat'],
                         $data_patient['doppl_right_dysf'],
                         $data_patient['doppl_pleur_effuss'],
                         $data_patient['left_heart_dysf'],
                         $data_patient['eject_fract'],
                         $data_patient['tapse'],
                         $data_patient['doppl_cong_defects'],
                         $data_patient['doppl_cong_defects_otros'],
                         $data_patient['doppl_septum_dev']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_electrok --------------------------------------- */
        $sql_patient = "SELECT * FROM hap_electrok WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['ecg_date'], 
                         $data_patient['axis'],
                         $data_patient['pattern'], 
                         $data_patient['frq'],
                         $data_patient['rythm']);
        /* ---------------------------------------------------------------------------------------- 


        /* ----------------------------------- hap_first_eval ------------------------------------- */
        $sql_patient = "SELECT * FROM hap_first_eval WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['physician'], 
                         $data_patient['afroamerican'], 
                         $data_patient['dxdate'],
                         $data_patient['yearofsymptoms']);
        /* ---------------------------------------------------------------------------------------- */
        

        /* ------------------------------------ hap_follow_up ------------------------------------- */
        $sql_patient = "SELECT * FROM hap_follow_up WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['eval_date'], 
                         $data_patient['homeoxigen'], 
                         $data_patient['dailyhours_ox'], 
                         $data_patient['dyspnea'], 
                         $data_patient['cough'], 
                         $data_patient['chestpain'], 
                         $data_patient['loweredema'], 
                         $data_patient['hemoptysis'], 
                         $data_patient['syncope'], 
                         $data_patient['improved_symts'], 
                         $data_patient['pregnant'], 
                         $data_patient['weight'], 
                         $data_patient['height'], 
                         $data_patient['nyha_funct_class'], 
                         $data_patient['sat_ox'], 
                         $data_patient['pulse'], 
                         $data_patient['pres_art_exfco'], 
                         $data_patient['breathing'], 
                         $data_patient['trycuspid_murmur'], 
                         $data_patient['p2_greater_than_a2'], 
                         $data_patient['cyanosis'], 
                         $data_patient['hepatomegaly'], 
                         $data_patient['ef_edema'], 
                         $data_patient['ing_yu'], 
                         $data_patient['finger_clubbing']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_gammagr ---------------------------------------- */
        $sql_patient = "SELECT * FROM hap_gammagr WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['gamma_date'], 
                         $data_patient['gamma_tep'], 
                         $data_patient['gamma_defects']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_hb --------------------------------------------- */
        $sql_patient = "SELECT * FROM hap_hb WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['hb_date'], 
                         $data_patient['hb_value']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_hemo_thyro ------------------------------------- */
        $sql_patient = "SELECT * FROM hap_hemo_thyro WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['thyro_date'], 
                         $data_patient['thyro_tsh'],
                         $data_patient['thyro_t_4_total'],
                         $data_patient['thyro_t_4_free']);
        /* ---------------------------------------------------------------------------------------- */


        /* -------------------------------------- hap_hepatic ------------------------------------- */
        $sql_patient = "SELECT * FROM hap_hepatic WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['hep_date'], 
                         $data_patient['hep_albumin'],
                         $data_patient['hep_ast'],
                         $data_patient['hep_alt'],
                         $data_patient['hep_fal'],
                         $data_patient['hep_ggt'],
                         $data_patient['bili_tot'],
                         $data_patient['bili_dir']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_renal ------------------------------------------ */
        $sql_patient = "SELECT * FROM hap_renal WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['renal_date'], 
                         $data_patient['creat'],
                         $data_patient['bun']);
        /* ---------------------------------------------------------------------------------------- */


        /* ----------------------------------- hap_six_mins_walk ---------------------------------- */
        $sql_patient = "SELECT * FROM hap_six_mins_walk WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['walk_date'], 
                         $data_patient['walk_meters'],
                         $data_patient['walk_fio2'],
                         $data_patient['start_sato2'],
                         $data_patient['end_sato2'],
                         $data_patient['walk_symptoms'],
                         $data_patient['borg'],
                         $data_patient['walk_syncope'],
                         $data_patient['walk_toracic']);
        /* ----------------------------------------------------------------------------------------- */
        
        
        /* ----------------------------------- main_eval ------------------------------------------ */
        $sql_patient = "SELECT * FROM main_hospital WHERE hospital_id='$hospital'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['hospital_name'], $t_st);
        /* ----------------------------------------------------------------------------------------- */
        
        $Matriz[] = $ans;
        $ans = array();
      }

      return $Matriz;
    }
?>
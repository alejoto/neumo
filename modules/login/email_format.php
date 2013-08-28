<?php

  function send_email($mail, $subject, $link){
    /*send mail with mime specs*/
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers  = $headers."Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers  = $headers.'From: RECOLHAP<no_reply@healmydisease.com>' . "\r\n";
    $content  = '<html><head><meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type"><title></title></head><body moz_template="id1" bgcolor="#ffffff" text="#000000">';
    $content .= '<font face="Tahoma">';

    /*Define content*/
    $content .= $link;
    /*Define content*/

    $content .='</font>';
    $content .='<br/><br/><br/><p><font face="verdana, arial, helvetica, sans-serif"><b>J. ALEJANDRO TORO D.</b></font></p>';
    $content .='<font face="verdana, arial, helvetica, sans-serif" size="2"><p>Project manager HMD&#174</p>';
    $content .='<p>HMD Web-based tools for clinical researches</p>';
    $content .='<p>www.healmydisease.com</p>';
    $content .='<p>Mobile (57)3006035703</p>';
    $content .='<p>Email: <span style="color: #0002a5; ">';
    $content .='<b><a href="mailto:projectmanager@healmydisease.com">projectmanager@healmydisease.com</a></b></span></p></font>';
    $content .='</body></html>';

    $sended = mail($mail,$subject,$content,$headers);
    return $sended;
  }
?>
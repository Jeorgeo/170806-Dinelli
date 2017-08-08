<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['formid'] == 'form2')
{
   $mailto = 'reg@dinelli.ru';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $mailcc = 'davnelli@mail.ru';
   $subject = 'Заявка с DiNelli.ru';
   $message = 'Нелли, Заявка с сайта';
   $success_url = './zayavka.php';
   $error_url = '';
   $error = '';
   $autoresponder_from = 'nelli.davydova.direct@mail.ru';
   $autoresponder_subject = 'Здравствуйте. Нелли Давыдова на связи.';
   $autoresponder_message = 'Здравствуйте.
Спасибо, что вы оставили заявку на консультацию по Яндекс.Директ.
Я обязательно свяжусь с вами в ближайшее рабочее время.
Если ваш вопрос не терпит отлагательств, напишите мне сообщение вконтакте https://vk.com/davnelli
Или позвоните по телефону +7 (918) 476-90-30
С уважением, Нелли Давыдова
Dinelli.ru';
   $eol = "\n";
   $max_filesize = isset($_POST['filesize']) ? $_POST['filesize'] * 1024 : 1024000;
   $boundary = md5(uniqid(time()));
   $header  = 'From: '.$mailfrom.$eol;
   $header .= 'Reply-To: '.$mailfrom.$eol;
   $header .= 'Cc: '.$mailcc.$eol;
   $header .= 'MIME-Version: 1.0'.$eol;
   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
   $header .= 'X-Mailer: PHP v'.phpversion().$eol;
   if (!ValidateEmail($mailfrom))
   {
      $error .= "The specified email address is invalid!\n<br>";
   }
   if (!empty($error))
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $error, $errorcode);
      echo $errorcode;
      exit;
   }
   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha_code", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response");
   $message .= $eol;
   foreach ($_POST as $key => $value)
   {
      if (!in_array(strtolower($key), $internalfields))
      {
         if (!is_array($value))
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
         }
         else
         {
            $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
         }
      }
   }
   $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
   $body .= '--'.$boundary.$eol;
   $body .= 'Content-Type: text/plain; charset=UTF-8'.$eol;
   $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
   $body .= $eol.stripslashes($message).$eol;
   if (!empty($_FILES))
   {
       foreach ($_FILES as $key => $value)
       {
          if ($_FILES[$key]['error'] == 0 && $_FILES[$key]['size'] <= $max_filesize)
          {
             $body .= '--'.$boundary.$eol;
             $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
             $body .= 'Content-Transfer-Encoding: base64'.$eol;
             $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
             $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
          }
      }
   }
   $body .= '--'.$boundary.'--'.$eol;
   if ($mailto != '')
   {
      mail($mailto, $subject, $body, $header);
   }
   $autoresponder_header  = 'From: '.$autoresponder_from.$eol;
   $autoresponder_header .= 'Reply-To: '.$autoresponder_from.$eol;
   $autoresponder_header .= 'MIME-Version: 1.0'.$eol;
   $autoresponder_header .= 'Content-Type: text/plain; charset=UTF-8'.$eol;
   $autoresponder_header .= 'Content-Transfer-Encoding: 8bit'.$eol;
   $autoresponder_header .= 'X-Mailer: PHP v'.phpversion().$eol;
   foreach ($_POST as $key => $value)
   {
      if (!in_array(strtolower($key), $internalfields))
      {
         if (!is_array($value))
         {
            $autoresponder_message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
         }
         else
         {
            $autoresponder_message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
         }
      }
   }
   mail($mailfrom, $autoresponder_subject, $autoresponder_message, $autoresponder_header);
   header('Location: '.$success_url);
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Нелли Давыдова</title>
<meta name="author" content="Нелли Давыдова">
<link href="DiNelli_Logo_nelli_yandex_Ico.png" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<meta name="yandex-verification" content="643c3c4520869aee"/>
</head>
<body>
   <div id="Layer1" style="position:relative;text-align:center;margin:0px 0px 0px 0px;width:100%;height:938px;float:left;clear:left;display:block;z-index:22;">
      <div id="Layer1_Container" style="width:968px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
         <div id="wb_Heading2" style="position:absolute;left:123px;top:23px;width:650px;height:82px;text-align:center;z-index:5;">
            <h1 id="Heading2">Контекстная реклама Яндекс.Директ <br>от эксперта Нелли Давыдовой</h1></div>
         <div id="wb_Text1" style="position:absolute;left:773px;top:23px;width:176px;height:22px;z-index:6;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:19px;">+7 (999) 632-50-85</span></div>
         <div id="wb_Image2" style="position:absolute;left:12px;top:23px;width:98px;height:36px;z-index:7;">
            <img src="images/DiNelli_Logo_nelli_yandex.png" id="Image2" alt=""></div>
         <div id="wb_FontAwesomeIcon1" style="position:absolute;left:489px;top:874px;width:24px;height:24px;text-align:center;z-index:8;">
            <a href="https://www.facebook.com/blondinkaNelli" target="_blank" title="Top"><div id="FontAwesomeIcon1"><i class="fa fa-facebook">&nbsp;</i></div></a></div>
         <div id="wb_FontAwesomeIcon5" style="position:absolute;left:425px;top:874px;width:24px;height:24px;text-align:center;z-index:9;">
            <a href="https://vk.com/directbm" target="_blank" title="Top"><div id="FontAwesomeIcon5"><i class="fa fa-vk">&nbsp;</i></div></a></div>
         <div id="wb_FontAwesomeIcon9" style="position:absolute;left:553px;top:874px;width:24px;height:24px;text-align:center;z-index:10;">
            <a href="https://www.youtube.com/channel/UCoQA6nd0lINqLvD49rYpUVA/featured" target="_blank" title="Top"><div id="FontAwesomeIcon9"><i class="fa fa-youtube">&nbsp;</i></div></a></div>
         <div id="wb_Text6" style="position:absolute;left:33px;top:878px;width:293px;height:16px;text-align:center;z-index:11;">
            <span style="color:#474745;font-family:Arial;font-size:13px;">Copyright © Dinelli 2016</span></div>
         <div id="Html1" style="position:absolute;left:12px;top:159px;width:125px;height:65px;z-index:12">
<!-- Yandex.Metrika counter -->
            <noscript><div><img src="https://mc.yandex.ru/watch/39506875" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter --></div>
         <div id="wb_Form2" style="position:absolute;left:617px;top:159px;width:338px;height:326px;z-index:14;">
            <form name="Заказ_с_Dinelli.ru" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" accept-charset="UTF-8" id="Form2" onsubmit="return ValidateЗаказ_с_Dinelli.ru(this)">
               <input type="hidden" name="formid" value="form2">
               <input type="text" id="Editbox4" style="position:absolute;left:36px;top:79px;width:259px;height:30px;line-height:30px;z-index:0;" name="Имя" value="" maxlength="30" placeholder="&#1050;&#1072;&#1082; &#1074;&#1072;&#1089; &#1079;&#1086;&#1074;&#1091;&#1090;?">
               <input type="email" id="Editbox5" style="position:absolute;left:36px;top:129px;width:259px;height:29px;line-height:29px;z-index:1;" name="Емейл" value="" maxlength="25" placeholder="&#1053;&#1072; &#1082;&#1072;&#1082;&#1086;&#1081; email &#1086;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1090;&#1100; &#1086;&#1090;&#1074;&#1077;&#1090;?">
               <input type="text" id="Editbox6" style="position:absolute;left:36px;top:178px;width:259px;height:82px;line-height:82px;z-index:2;" name="Вопрос" value="" placeholder="&#1054;&#1073;&#1088;&#1072;&#1090;&#1080;&#1090;&#1077;&#1089;&#1100; &#1082; &#1053;&#1077;&#1083;&#1083;&#1080;">
               <input type="submit" id="Button2" onclick="yaCounter39506875.reachGoal('kons'); return true;return false;" name="Оставить заявку" value="Оставить заявку" style="position:absolute;left:36px;top:280px;width:269px;height:43px;z-index:3;">
               <div id="wb_Heading1" style="position:absolute;left:7px;top:21px;width:327px;height:58px;text-align:center;z-index:4;">
                  <h1 id="Heading1">Закажите настройку рекламы<br> или обратитесь за консультацией*</h1></div>
            </form>
         </div>
         <div id="wb_Text2" style="position:absolute;left:137px;top:826px;width:382px;height:24px;z-index:15;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:21px;">*Skype сессия 40 минут&nbsp; 2900 рублей</span></div>
         <div id="wb_TextMenu1" style="position:absolute;left:5px;top:121px;width:958px;height:20px;text-align:center;z-index:16;">
            <span><a href="http://dinelli-tarifi-couch.plp7.ru" class="style1" title="&#1055;&#1088;&#1072;&#1082;&#1090;&#1080;&#1095;&#1077;&#1089;&#1082;&#1080;&#1081; &#1090;&#1088;&#1077;&#1085;&#1080;&#1085;&#1075; &quot;&#1052;&#1080;&#1083;&#1083;&#1080;&#1086;&#1085; &#1089; &#1071;&#1085;&#1076;&#1077;&#1082;&#1089;.&#1044;&#1080;&#1088;&#1077;&#1082;&#1090;&quot;. &#1053;&#1072;&#1095;&#1085;&#1080; &#1089;&#1077;&#1075;&#1086;&#1076;&#1085;&#1103;"> &#1047;&#1072;&#1087;&#1080;&#1089;&#1072;&#1090;&#1100;&#1089;&#1103; &#1085;&#1072; &#1090;&#1088;&#1077;&#1085;&#1080;&#1085;&#1075; </a></span><span><a href="http://dinelli-vebinar.plp7.ru" class="style1" title="&#1050;&#1091;&#1087;&#1080;&#1090;&#1100; &#1079;&#1072;&#1087;&#1080;&#1089;&#1100; &#1087;&#1086; &#1085;&#1072;&#1089;&#1090;&#1088;&#1086;&#1081;&#1082;&#1077; &#1071;&#1085;&#1076;&#1077;&#1082;&#1089;.&#1044;&#1080;&#1088;&#1077;&#1082;&#1090; &#1080; &#1087;&#1088;&#1086;&#1076;&#1072;&#1102;&#1097;&#1077;&#1084;&#1091; &#1089;&#1072;&#1081;&#1090;&#1091;"> &#1048;&#1085;&#1090;&#1077;&#1085;&#1089;&#1080;&#1074; &quot;&#1057;&#1072;&#1081;&#1090;+&#1044;&#1080;&#1088;&#1077;&#1082;&#1090;&quot; </a></span><span><a href="http://intensiv-vedenie.plp7.ru" class="style1" title="&#1050;&#1091;&#1087;&#1080;&#1090;&#1100; &#1079;&#1072;&#1087;&#1080;&#1089;&#1100; &#1080;&#1085;&#1090;&#1077;&#1085;&#1089;&#1080;&#1074;&#1072; &quot;&#1042;&#1077;&#1076;&#1077;&#1085;&#1080;&#1077; &#1088;&#1077;&#1082;&#1083;&#1072;&#1084;&#1085;&#1099;&#1093; &#1082;&#1072;&#1084;&#1087;&#1072;&#1085;&#1080;&#1081; &#1071;&#1085;&#1076;&#1077;&#1082;&#1089;.&#1044;&#1080;&#1088;&#1077;&#1082;&#1090;. &#1052;&#1077;&#1090;&#1088;&#1080;&#1082;&#1072; &#1080; &#1040;&#1085;&#1072;&#1083;&#1080;&#1090;&#1080;&#1082;&#1072;&quot;"> &#1048;&#1085;&#1090;&#1077;&#1085;&#1089;&#1080;&#1074; &quot;&#1042;&#1077;&#1076;&#1077;&#1085;&#1080;&#1077;&quot; </a></span><span><a href="http://magnit.dinelli.ru" class="style1" title="&#1057;&#1082;&#1072;&#1095;&#1072;&#1090;&#1100; PDF &#1082;&#1085;&#1080;&#1075;&#1091; &quot;&#1055;&#1088;&#1086;&#1076;&#1072;&#1102;&#1097;&#1080;&#1081; &#1057;&#1072;&#1081;&#1090;&quot;"> &#1057;&#1082;&#1072;&#1095;&#1072;&#1090;&#1100; &#1082;&#1085;&#1080;&#1075;&#1091; </a></span><span><a href="http://vebinar-online-nelli.plp7.ru" class="style1" title="&#1047;&#1072;&#1087;&#1080;&#1089;&#1100; &#1074;&#1077;&#1073;&#1080;&#1085;&#1072;&#1088;&#1072; 18 &#1085;&#1086;&#1074;&#1086;&#1074;&#1074;&#1077;&#1076;&#1077;&#1085;&#1080;&#1081; &#1071;&#1085;&#1076;&#1077;&#1082;&#1089;.&#1044;&#1080;&#1088;&#1077;&#1082;&#1090; 2016 &#1075;&#1086;&#1076;&#1072;"> &#1057;&#1084;&#1086;&#1090;&#1088;&#1077;&#1090;&#1100; &#1074;&#1077;&#1073;&#1080;&#1085;&#1072;&#1088; </a></span></div>
      </div>
   </div>
   <script src="jquery-1.11.3.min.js"></script>
   <script src="affix.min.js"></script>
         <script src="index.js"></script>
</body>
</html>

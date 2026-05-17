<?php 
ob_start();
require("db.php");

require("../../mail.php");
session_start();


if(!isset($_SESSION['uid'])){
    echo "error";
    exit;
}else{
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM users WHERE uid = '$uid'";
    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if ($user['0']['verification'] == true) {
        echo "success";
        exit();
    }
    
}
if (isset($_GET['request'])) {
    $uid = $_SESSION['uid'];
    $sql = "UPDATE users SET verification = true WHERE uid = '$uid'";
    mysqli_query($conn, $sql);
    exit;
}
if(!isset($_SESSION['code'])) {
    $FourDigitRandomNumber = mt_rand(1111,9999);
    $_SESSION['code'] = $FourDigitRandomNumber;
    $email = $_SESSION['email'];
    sendCode($FourDigitRandomNumber, $email);
    echo $_SESSION['code'];
}else{
    $email = $_SESSION['email'];
    sendCode($_SESSION['code'], $email);
    echo $_SESSION['code'];
}
exit();



function sendCode($code,  $email)
{
    
                      $txt = '
                      <!DOCTYPE html>

                      <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
                      <head>
                      <title></title>
                      <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
                      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
                      <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
                      <style>
                              * {
                                  box-sizing: border-box;
                              }
                      
                              body {
                                  margin: 0;
                                  padding: 0;
                              }
                      
                              a[x-apple-data-detectors] {
                                  color: inherit !important;
                                  text-decoration: inherit !important;
                              }
                      
                              #MessageViewBody a {
                                  color: inherit;
                                  text-decoration: none;
                              }
                      
                              p {
                                  line-height: inherit
                              }
                      
                              .desktop_hide,
                              .desktop_hide table {
                                  mso-hide: all;
                                  display: none;
                                  max-height: 0px;
                                  overflow: hidden;
                              }
                      
                              @media (max-width:660px) {
                      
                                  .desktop_hide table.icons-inner,
                                  .social_block.desktop_hide .social-table {
                                      display: inline-block !important;
                                  }
                      
                                  .icons-inner {
                                      text-align: center;
                                  }
                      
                                  .icons-inner td {
                                      margin: 0 auto;
                                  }
                      
                                  .image_block img.big,
                                  .row-content {
                                      width: 100% !important;
                                  }
                      
                                  .mobile_hide {
                                      display: none;
                                  }
                      
                                  .stack .column {
                                      width: 100%;
                                      display: block;
                                  }
                      
                                  .mobile_hide {
                                      min-height: 0;
                                      max-height: 0;
                                      max-width: 0;
                                      overflow: hidden;
                                      font-size: 0px;
                                  }
                      
                                  .desktop_hide,
                                  .desktop_hide table {
                                      display: table !important;
                                      max-height: none !important;
                                  }
                              }
                          </style>
                      </head>
                      <body style="background-color: #f8f8f9; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
                      <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1aa19c;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #1aa19c; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 4px solid #1AA19C;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:25px;padding-top:22px;width:100%;padding-right:0px;padding-left:0px;">
                      <div align="center" class="alignment" style="line-height:10px"><img alt="I\'m an image" src="images/Companify-Logo.png" style="display: block; height: auto; border: 0; width: 149px; max-width: 100%;" title="I\'m an image" width="149"/></div>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:12px;padding-top:60px;">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-left:40px;padding-right:40px;width:100%;">
                      <div align="center" class="alignment" style="line-height:10px"><img alt="I\'m an image" class="big" src="images/Img4_2x.jpg" style="display: block; height: auto; border: 0; width: 352px; max-width: 100%;" title="I\'m an image" width="352"/></div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-top:50px;">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="text_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;">
                      <div style="font-family: sans-serif">
                      <div class="" style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;">
                      <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;"><span style="font-size:30px;color:#2b303a;"><strong>Activate your account with the activation code</strong></span></p>
                      </div>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="text_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;">
                      
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-top:50px;">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #f3fafa; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-left: 30px solid #FFFFFF; border-right: 30px solid #FFFFFF; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-bottom: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 4px solid #1AA19C;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-top:25px;">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:10px;">
                      <div style="font-family: sans-serif">
                      <div class="" style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;">
                      <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;"><span style="color:#2b303a;font-size:18px;"><strong>Use this Code</strong></span></p>
                      </div>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="text_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:32px;">
                      <div style="font-family: sans-serif">
                      <div class="" style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;">
                      <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;"><span style="color:#1aa19c;font-size:38px;"><span style=""><strong>'.$code.'</strong></span></span></p>
                      </div>
                      </div>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; background-color: #2b303a; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 4px solid #1AA19C;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-top:40px;width:100%;padding-right:0px;padding-left:0px;">
                      <div align="center" class="alignment" style="line-height:10px"><img alt="Alternate text" src="images/Logo-white.png" style="display: block; height: auto; border: 0; width: 149px; max-width: 100%;" title="Alternate text" width="149"/></div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="social_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:28px;text-align:center;">
                      <div class="alignment" style="text-align:center;">
                      <table border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;" width="208px">
                      <tr>
                      <td style="padding:0 10px 0 10px;"><a href="https://www.facebook.com/" target="_blank"><img alt="Facebook" height="32" src="images/facebook2x.png" style="display: block; height: auto; border: 0;" title="Facebook" width="32"/></a></td>
                      <td style="padding:0 10px 0 10px;"><a href="https://twitter.com/" target="_blank"><img alt="Twitter" height="32" src="images/twitter2x.png" style="display: block; height: auto; border: 0;" title="Twitter" width="32"/></a></td>
                      <td style="padding:0 10px 0 10px;"><a href="https://instagram.com/" target="_blank"><img alt="Instagram" height="32" src="images/instagram2x.png" style="display: block; height: auto; border: 0;" title="Instagram" width="32"/></a></td>
                      <td style="padding:0 10px 0 10px;"><a href="https://www.linkedin.com/" target="_blank"><img alt="LinkedIn" height="32" src="images/linkedin2x.png" style="display: block; height: auto; border: 0;" title="LinkedIn" width="32"/></a></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="divider_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:25px;">
                      <div align="center" class="alignment">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #555961;"><span> </span></td>
                      </tr>
                      </table>
                      </div>
                      </td>
                      </tr>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" class="text_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                      <tr>
                      <td class="pad" style="padding-bottom:30px;padding-left:40px;padding-right:40px;padding-top:20px;">
                      <div style="font-family: sans-serif">
                      <div class="" style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                      <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;"><span style="color:#95979c;font-size:12px;">Apex Capital Copyright © 2022</span> this is an automatic mail system do not reply</p>
                      </div>
                      </div>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tbody>
                      <tr>
                      <td>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 640px;" width="640">
                      <tbody>
                      <tr>
                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" class="icons_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="pad" style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
                      <table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                      <tr>
                      <td class="alignment" style="vertical-align: middle; text-align: center;">
                      <!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                      <!--[if !vml]><!-->
                      
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </td>
                      </tr>
                      </tbody>
                      </table><!-- End -->
                      </body>
                      </html>

			';

            sendmail($txt,$email,"","Verify Account"); 

}
?>
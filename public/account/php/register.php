<?php
ob_start();
require("db.php");
require("../../mail.php");
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['file'];
$password = $_POST['password'];
$ref = $_POST['ref'];
$ccode = $_POST['ccode'];
$uid = bin2hex(random_bytes(5)) . random_int(1000, 7000);
$date = date("F j, Y");
$accountid = mt_rand(111111, 999999);


$sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0){
        echo json_encode([
          "status"=>"error",
          "message"=>"A user with this email is already registered"
        ]);

        exit;
      }else{
      $url =  getUrl($image);
   
      $sql =  "INSERT INTO users(uid,name,phone,countrycode,email, password, date, image, accountid)  VALUES ('$uid', '$name', '$phone', '$ccode', '$email', '$password', '$date', '$url', '$accountid')";
              if (mysqli_query($conn, $sql)) {
                  $_SESSION['name'] = $name;
                  $_SESSION['uid'] = $uid;
                  $_SESSION['email'] = $email;
                  $_SESSION['accno'] = $accountid;
                  echo json_encode([
                    "status"=>"success",
                    "message"=>"Successful Registration"
                  ]);
                  $code = mt_rand(1111,9999);
                  $_SESSION['code'] = $code;

                  $codemail = '
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
                          <div style="font-family: sans-serif">
                          <div class="" style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; color: #555555; line-height: 1.5;">
                          <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;"><span style="color:#808389;font-size:15px;">Welcome to Apex Capital, Apex Capital is a publicly traded and vertically integrated blockchain and cryptocurrency company that manages, operates, and develops end-to-end digital solutions to monetize the blockchain ecosystem.
                    
                          </span></p>
                          </div>
                          </div>
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
                  $adm = '
                      <!DOCTYPE html>
                      <html>
                      <head>
                      <title></title>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                      <style type="text/css">
                          /* FONTS */
                          @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
                      
                          /* CLIENT-SPECIFIC STYLES */
                          body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
                          table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
                          img { -ms-interpolation-mode: bicubic; }
                      
                          /* RESET STYLES */
                          img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
                          table { border-collapse: collapse !important; }
                          body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
                      
                          /* iOS BLUE LINKS */
                          a[x-apple-data-detectors] {
                              color: inherit !important;
                              text-decoration: none !important;
                              font-size: inherit !important;
                              font-family: inherit !important;
                              font-weight: inherit !important;
                              line-height: inherit !important;
                          }
                      
                          /* MOBILE STYLES */
                          @media screen and (max-width:600px){
                              h1 {
                                  font-size: 32px !important;
                                  line-height: 32px !important;
                              }
                          }
                      
                          /* ANDROID CENTER FIX */
                          div[style*="margin: 16px 0;"] { margin: 0 !important; }
                      </style>
                      </head>
                      <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
                      
                      <!-- HIDDEN PREHEADER TEXT -->
                      <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
                          Were thrilled to have you here! Get ready to dive into your new account.
                      </div>
                      
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background:url(images/bg.png);">
                          <!-- LOGO -->
                          <tr>
                              <td align="center">
                                  <!--[if (gte mso 9)|(IE)]>
                                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                  <tr>
                                  <td align="center" valign="top" width="600">
                                  <![endif]-->
                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                      <tr>
                                          <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                                              <a href="#" target="_blank" style="text-decoration: none; color:white;">
                                    <span style="display: block; font-family: "Poppins", sans-serif; color: #ffffff; font-size: 36px;" border="0"><b>APEX CAPITAL</b></span>
                                              </a>
                                          </td>
                                      </tr>
                                  </table>
                                  <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                  </tr>
                                  </table>
                                  <![endif]-->
                              </td>
                          </tr>
                          <!-- HERO -->
                          <tr>
                              <td align="center" style="padding: 0px 10px 0px 10px;">
                                  <!--[if (gte mso 9)|(IE)]>
                                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                  <tr>
                                  <td align="center" valign="top" width="600">
                                  <![endif]-->
                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                      <tr>
                                          <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                                            <h1 style="font-size: 42px; font-weight: 400; margin: 0;">Dear Admin!</h1>
                                          </td>
                                      </tr>
                                  </table>
                                  <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                  </tr>
                                  </table>
                                  <![endif]-->
                              </td>
                          </tr>
                          <!-- COPY BLOCK -->
                          <tr>
                              <td align="center" style="padding: 0px 10px 0px 10px;">
                                  <!--[if (gte mso 9)|(IE)]>
                                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                  <tr>
                                  <td align="center" valign="top" width="600">
                                  <![endif]-->
                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                    <!-- COPY -->
                                    <tr>
                                      <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                        <p style="margin: 0;">New user registrtion : '.$name.'</p>
                                      </td>
                                    </tr>
                                    <!-- BULLETPROOF BUTTON -->
                                    <tr>
                                      <td bgcolor="#ffffff" align="left">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                              <table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center" style="border-radius: 3px;" bgcolor="#398bf7"><a href="#" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #398bf7; display: inline-block;">My Account</a></td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                    <!-- COPY -->
                                    <tr>
                                      <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                        <p style="margin: 0;">If you have any questions, just reply to this email—were always happy to help out.</p>
                                      </td>
                                    </tr>
                                    <!-- COPY -->
                                    <tr>
                                      <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                        <p style="margin: 0;">Cheers,<br>Team Apex Capital </p>
                                      </td>
                                    </tr>
                                  </table>
                                  <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                  </tr>
                                  </table>
                                  <![endif]-->
                              </td>
                          </tr>
                          <!-- SUPPORT CALLOUT -->
                          <tr>
                              <td align="center" style="padding: 10px 10px 0px 10px;">
                                  <!--[if (gte mso 9)|(IE)]>
                                  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                                  <tr>
                                  <td align="center" valign="top" width="600">
                                  <![endif]-->
                                  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                      <!-- HEADLINE -->
                                      <tr>
                                        <td bgcolor="#398bf7" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                          <h2 style="font-size: 16px; font-weight: 400; color: #ffffff; margin: 0;">Need more help?</h2>
                                          <p style="margin: 0; font-size: 14px;"><a href="#" target="_blank" style="color: #ffffff;">We&rsquo;re here, ready to talk</a></p>
                                        </td>
                                      </tr>
                                  </table>
                                  <!--[if (gte mso 9)|(IE)]>
                                  </td>
                                  </tr>
                                  </table>
                                  <![endif]-->
                              </td>
                          </tr>
                      
                        
                      </table>
                      
                      </body>
                      </html>
                  ';
                  sendmail($codemail, $email, $name, "Welcome");
                  sendmail($adm, apex_mail_admin_address(), $name, "New User Registration");

                 // sendEmail($FourDigitRandomNumber, $email);
                  
                 if($ref != ""){
                  $sql = "SELECT * FROM users WHERE uid = '$ref'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)>0){
        //echo json_encode('A user with this email is already registered') ;
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
       
          $refname = $user['0']['name'];
          $refemail = $user['0']['email'];

          $sql = "INSERT INTO referral (referrer, referred, date) VALUES ('$ref', '$uid', '$date')";
          mysqli_query($conn, $sql);

          $refmail = '
              <!DOCTYPE html>
              <html>
              <head>
              <title></title>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <style type="text/css">
                  /* FONTS */
                  @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
              
                  /* CLIENT-SPECIFIC STYLES */
                  body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
                  table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
                  img { -ms-interpolation-mode: bicubic; }
              
                  /* RESET STYLES */
                  img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
                  table { border-collapse: collapse !important; }
                  body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
              
                  /* iOS BLUE LINKS */
                  a[x-apple-data-detectors] {
                      color: inherit !important;
                      text-decoration: none !important;
                      font-size: inherit !important;
                      font-family: inherit !important;
                      font-weight: inherit !important;
                      line-height: inherit !important;
                  }
              
                  /* MOBILE STYLES */
                  @media screen and (max-width:600px){
                      h1 {
                          font-size: 32px !important;
                          line-height: 32px !important;
                      }
                  }
              
                  /* ANDROID CENTER FIX */
                  div[style*="margin: 16px 0;"] { margin: 0 !important; }
              </style>
              </head>
              <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
              
              <!-- HIDDEN PREHEADER TEXT -->
              <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
                  Were thrilled to have you here! Get ready to dive into your new account.
              </div>
              
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background:url(images/bg.png);">
                  <!-- LOGO -->
                  <tr>
                      <td align="center">
                          <!--[if (gte mso 9)|(IE)]>
                          <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                          <tr>
                          <td align="center" valign="top" width="600">
                          <![endif]-->
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <tr>
                                  <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                                      <a href="#" target="_blank" style="text-decoration: none; color:white;">
                            <span style="display: block; font-family: "Poppins", sans-serif; color: #ffffff; font-size: 36px;" border="0"><b>APEX CAPITAL</b></span>
                                      </a>
                                  </td>
                              </tr>
                          </table>
                          <!--[if (gte mso 9)|(IE)]>
                          </td>
                          </tr>
                          </table>
                          <![endif]-->
                      </td>
                  </tr>
                  <!-- HERO -->
                  <tr>
                      <td align="center" style="padding: 0px 10px 0px 10px;">
                          <!--[if (gte mso 9)|(IE)]>
                          <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                          <tr>
                          <td align="center" valign="top" width="600">
                          <![endif]-->
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <tr>
                                  <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                                    <h1 style="font-size: 42px; font-weight: 400; margin: 0;">Dear '.$refname.'</h1>
                                  </td>
                              </tr>
                          </table>
                          <!--[if (gte mso 9)|(IE)]>
                          </td>
                          </tr>
                          </table>
                          <![endif]-->
                      </td>
                  </tr>
                  <!-- COPY BLOCK -->
                  <tr>
                      <td align="center" style="padding: 0px 10px 0px 10px;">
                          <!--[if (gte mso 9)|(IE)]>
                          <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                          <tr>
                          <td align="center" valign="top" width="600">
                          <![endif]-->
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <!-- COPY -->
                            <tr>
                              <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">A user just registered with your referral link and you will receive a bonus of 10% on their deposit : '.$name.'</p>
                              </td>
                            </tr>
                            <!-- BULLETPROOF BUTTON -->
                            <tr>
                              <td bgcolor="#ffffff" align="left">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                      <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="border-radius: 3px;" bgcolor="#398bf7"><a href="../../index.html" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #398bf7; display: inline-block;">My Account</a></td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                            <!-- COPY -->
                            <tr>
                              <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">If you have any questions, just reply to this email—were always happy to help out.</p>
                              </td>
                            </tr>
                            <!-- COPY -->
                            <tr>
                              <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                <p style="margin: 0;">Cheers,<br>Team Apex Capital </p>
                              </td>
                            </tr>
                          </table>
                          <!--[if (gte mso 9)|(IE)]>
                          </td>
                          </tr>
                          </table>
                          <![endif]-->
                      </td>
                  </tr>
                  <!-- SUPPORT CALLOUT -->
                  <tr>
                      <td align="center" style="padding: 10px 10px 0px 10px;">
                          <!--[if (gte mso 9)|(IE)]>
                          <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                          <tr>
                          <td align="center" valign="top" width="600">
                          <![endif]-->
                          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <!-- HEADLINE -->
                              <tr>
                                <td bgcolor="#398bf7" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                  <h2 style="font-size: 16px; font-weight: 400; color: #ffffff; margin: 0;">Need more help?</h2>
                                  <p style="margin: 0; font-size: 14px;"><a href="#" target="_blank" style="color: #ffffff;">We&rsquo;re here, ready to talk</a></p>
                                </td>
                              </tr>
                          </table>
                          <!--[if (gte mso 9)|(IE)]>
                          </td>
                          </tr>
                          </table>
                          <![endif]-->
                      </td>
                  </tr>
              
                
              </table>
              
              </body>
              </html>
          ';
          $admrefmail = '
                <!DOCTYPE html>
                <html>
                <head>
                <title></title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <style type="text/css">
                    /* FONTS */
                    @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
                
                    /* CLIENT-SPECIFIC STYLES */
                    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
                    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
                    img { -ms-interpolation-mode: bicubic; }
                
                    /* RESET STYLES */
                    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
                    table { border-collapse: collapse !important; }
                    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
                
                    /* iOS BLUE LINKS */
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: none !important;
                        font-size: inherit !important;
                        font-family: inherit !important;
                        font-weight: inherit !important;
                        line-height: inherit !important;
                    }
                
                    /* MOBILE STYLES */
                    @media screen and (max-width:600px){
                        h1 {
                            font-size: 32px !important;
                            line-height: 32px !important;
                        }
                    }
                
                    /* ANDROID CENTER FIX */
                    div[style*="margin: 16px 0;"] { margin: 0 !important; }
                </style>
                </head>
                <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
                
                <!-- HIDDEN PREHEADER TEXT -->
                <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
                    Were thrilled to have you here! Get ready to dive into your new account.
                </div>
                
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background:url(images/bg.png);">
                    <!-- LOGO -->
                    <tr>
                        <td align="center">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                <tr>
                                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                                        <a href="#" target="_blank" style="text-decoration: none; color:white;">
                              <span style="display: block; font-family: "Poppins", sans-serif; color: #ffffff; font-size: 36px;" border="0"><b>APEX CAPITAL</b></span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                    <!-- HERO -->
                    <tr>
                        <td align="center" style="padding: 0px 10px 0px 10px;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                <tr>
                                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                                      <h1 style="font-size: 42px; font-weight: 400; margin: 0;">Dear Admin</h1>
                                    </td>
                                </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                    <!-- COPY BLOCK -->
                    <tr>
                        <td align="center" style="padding: 0px 10px 0px 10px;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                              <!-- COPY -->
                              <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                  <p style="margin: 0;">'.$name.' just registered with the referral link of : '.$refname.'</p>
                                </td>
                              </tr>
                              <!-- BULLETPROOF BUTTON -->
                              <tr>
                                <td bgcolor="#ffffff" align="left">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                              <td align="center" style="border-radius: 3px;" bgcolor="#398bf7"><a href="../../index.html" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #398bf7; display: inline-block;">My Account</a></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                              <!-- COPY -->
                              <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                  <p style="margin: 0;">If you have any questions, just reply to this email—were always happy to help out.</p>
                                </td>
                              </tr>
                              <!-- COPY -->
                              <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                  <p style="margin: 0;">Cheers,<br>Team Apex Capital </p>
                                </td>
                              </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                    <!-- SUPPORT CALLOUT -->
                    <tr>
                        <td align="center" style="padding: 10px 10px 0px 10px;">
                            <!--[if (gte mso 9)|(IE)]>
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                            <tr>
                            <td align="center" valign="top" width="600">
                            <![endif]-->
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                                <!-- HEADLINE -->
                                <tr>
                                  <td bgcolor="#398bf7" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <h2 style="font-size: 16px; font-weight: 400; color: #ffffff; margin: 0;">Need more help?</h2>
                                    <p style="margin: 0; font-size: 14px;"><a href="#" target="_blank" style="color: #ffffff;">We&rsquo;re here, ready to talk</a></p>
                                  </td>
                                </tr>
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </td>
                    </tr>
                
                  
                </table>
                
                </body>
                </html>
          ';
          sendmail($refmail, $refemail, $refname, "New Referral");
          sendmail($admrefmail, apex_mail_admin_address(), $name, "Referral Registration");

        

      
       
      }
                 }
                  
                  
    
        }
      }
      function getUrl($image){
        $uploadpath   = 'uploads/images/';
        $parts        = explode(";base64,", $image);
        $imageparts   = explode("image/", @$parts[0]);
        $imagetype    = $imageparts[1];
        $imagebase64  = base64_decode($parts[1]);
        $file         = $uploadpath . uniqid() . '.png';
        file_put_contents($file, $imagebase64);
        return $file;
      }
     

 

exit;
 
?>
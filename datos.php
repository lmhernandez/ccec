<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;


      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];   
      $mensaje = $_POST['mensaje'];
      // $para = 'barney.suarez@gmail.com';
      $para = 'lmhernandezmontenegro@gmail.com';

    // $headers = "From: $email" . "\r\n" .
    // "Reply-To: $email" . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:  ' . $nombre . ' <' . $email .'>' . " \r\n" .
                'Reply-To: '.  $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();


      $msjCorreo='

      <!doctype html>
      <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
      
      <head>
      
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>*|MC:SUBJECT|*</title>
      
        <style type="text/css">
          p {
            margin: 10px 0;
            padding: 0;
          }
      
          table {
            border-collapse: collapse;
          }
      
          h1,
          h2,
          h3,
          h4,
          h5,
          h6 {
            display: block;
            margin: 0;
            padding: 0;
          }
      
          img,
          a img {
            border: 0;
            height: auto;
            outline: none;
            text-decoration: none;
          }
      
          body,
          #bodyTable,
          #bodyCell {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
          }
      
          .mcnPreviewText {
            display: none !important;
          }
      
          #outlook a {
            padding: 0;
          }
      
          img {
            -ms-interpolation-mode: bicubic;
          }
      
          table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
          }
      
          .ReadMsgBody {
            width: 100%;
          }
      
          .ExternalClass {
            width: 100%;
          }
      
          p,
          a,
          li,
          td,
          blockquote {
            mso-line-height-rule: exactly;
          }
      
          a[href^=tel],
          a[href^=sms] {
            color: inherit;
            cursor: default;
            text-decoration: none;
          }
      
          p,
          a,
          li,
          td,
          body,
          table,
          blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
          }
      
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass td,
          .ExternalClass div,
          .ExternalClass span,
          .ExternalClass font {
            line-height: 100%;
          }
      
          a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
          }
      
          #bodyCell {
            padding: 10px;
          }
      
          .templateContainer {
            max-width: 600px !important;
          }
      
          a.mcnButton {
            display: block;
          }
      
          .mcnImage,
          .mcnRetinaImage {
            vertical-align: bottom;
          }
      
          .mcnTextContent {
            word-break: break-word;
          }
      
          .mcnTextContent img {
            height: auto !important;
          }
      
          .mcnDividerBlock {
            table-layout: fixed !important;
          }
      
          body,
          #bodyTable {
            
            background-color: #FAFAFA;
          }
      
          #bodyCell {
            
            border-top: 0;
          }
      
          .templateContainer {
            
            border: 0;
          }
      
          h1 {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 26px;
            
            font-style: normal;
            
            font-weight: bold;
            
            line-height: 125%;
            
            letter-spacing: normal;
            
            text-align: left;
          }
      
          h2 {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 22px;
            
            font-style: normal;
            
            font-weight: bold;
            
            line-height: 125%;
            
            letter-spacing: normal;
            
            text-align: left;
          }
      
          h3 {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 20px;
            
            font-style: normal;
            
            font-weight: bold;
            
            line-height: 125%;
            
            letter-spacing: normal;
            
            text-align: left;
          }
      
          h4 {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 18px;
            
            font-style: normal;
            
            font-weight: bold;
            
            line-height: 125%;
            
            letter-spacing: normal;
            
            text-align: left;
          }
      
          #templatePreheader {
            
            background-color: #FAFAFA;
            
            background-image: none;
            
            background-repeat: no-repeat;
            
            background-position: center;
            
            background-size: cover;
            
            border-top: 0;
            
            border-bottom: 0;
            
            padding-top: 9px;
            
            padding-bottom: 9px;
          }
      
          #templatePreheader .mcnTextContent,
          #templatePreheader .mcnTextContent p {
            
            color: #656565;
            
            font-family: Helvetica;
            
            font-size: 12px;
            
            line-height: 150%;
            
            text-align: left;
          }
      
          #templatePreheader .mcnTextContent a,
          #templatePreheader .mcnTextContent p a {
            
            color: #656565;
            
            font-weight: normal;
            
            text-decoration: underline;
          }
      
          #templateHeader {
            
            background-color: #FFFFFF;
            
            background-image: none;
            
            background-repeat: no-repeat;
            
            background-position: center;
            
            background-size: cover;
            
            border-top: 0;
            
            border-bottom: 0;
            
            padding-top: 9px;
            
            padding-bottom: 0;
          }
      
          #templateHeader .mcnTextContent,
          #templateHeader .mcnTextContent p {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 16px;
            
            line-height: 150%;
            
            text-align: left;
          }
      
          #templateHeader .mcnTextContent a,
          #templateHeader .mcnTextContent p a {
            
            color: #2BAADF;
            
            font-weight: normal;
            
            text-decoration: underline;
          }
      
          #templateBody {
            
            background-color: #FFFFFF;
            
            background-image: none;
            
            background-repeat: no-repeat;
            
            background-position: center;
            
            background-size: cover;
            
            border-top: 0;
            
            border-bottom: 2px solid #EAEAEA;
            
            padding-top: 0;
            
            padding-bottom: 9px;
          }
      
          #templateBody .mcnTextContent,
          #templateBody .mcnTextContent p {
            
            color: #202020;
            
            font-family: Helvetica;
            
            font-size: 16px;
            
            line-height: 150%;
            
            text-align: left;
          }
      
          #templateBody .mcnTextContent a,
          #templateBody .mcnTextContent p a {
            
            color: #2BAADF;
            
            font-weight: normal;
            
            text-decoration: underline;
          }
      
          #templateFooter {
            
            background-color: #FAFAFA;
            
            background-image: none;
            
            background-repeat: no-repeat;
            
            background-position: center;
            
            background-size: cover;
            
            border-top: 0;
            
            border-bottom: 0;
            
            padding-top: 9px;
            
            padding-bottom: 9px;
          }
      
          #templateFooter .mcnTextContent,
          #templateFooter .mcnTextContent p {
            
            color: #656565;
            
            font-family: Helvetica;
            
            font-size: 12px;
            
            line-height: 150%;
            
            text-align: center;
          }
      
          #templateFooter .mcnTextContent a,
          #templateFooter .mcnTextContent p a {
            
            color: #656565;
            
            font-weight: normal;
            
            text-decoration: underline;
          }
      
          @media only screen and (min-width:768px) {
            .templateContainer {
              width: 600px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            body,
            table,
            td,
            p,
            a,
            li,
            blockquote {
              -webkit-text-size-adjust: none !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            body {
              width: 100% !important;
              min-width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #bodyCell {
              padding-top: 10px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnRetinaImage {
              max-width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImage {
              width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnCartContainer,
            .mcnCaptionTopContent,
            .mcnRecContentContainer,
            .mcnCaptionBottomContent,
            .mcnTextContentContainer,
            .mcnBoxedTextContentContainer,
            .mcnImageGroupContentContainer,
            .mcnCaptionLeftTextContentContainer,
            .mcnCaptionRightTextContentContainer,
            .mcnCaptionLeftImageContentContainer,
            .mcnCaptionRightImageContentContainer,
            .mcnImageCardLeftTextContentContainer,
            .mcnImageCardRightTextContentContainer,
            .mcnImageCardLeftImageContentContainer,
            .mcnImageCardRightImageContentContainer {
              max-width: 100% !important;
              width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnBoxedTextContentContainer {
              min-width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageGroupContent {
              padding: 9px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnCaptionLeftContentOuter .mcnTextContent,
            .mcnCaptionRightContentOuter .mcnTextContent {
              padding-top: 9px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageCardTopImageContent,
            .mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,
            .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
              padding-top: 18px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageCardBottomImageContent {
              padding-bottom: 9px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageGroupBlockInner {
              padding-top: 0 !important;
              padding-bottom: 0 !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageGroupBlockOuter {
              padding-top: 9px !important;
              padding-bottom: 9px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnTextContent,
            .mcnBoxedTextContentColumn {
              padding-right: 18px !important;
              padding-left: 18px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnImageCardLeftImageContent,
            .mcnImageCardRightImageContent {
              padding-right: 18px !important;
              padding-bottom: 0 !important;
              padding-left: 18px !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcpreview-image-uploader {
              display: none !important;
              width: 100% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
      
            h1 {
              
              font-size: 22px !important;
              
              line-height: 125% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
      
            h2 {
              
              font-size: 20px !important;
              
              line-height: 125% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            h3 {
              
              font-size: 18px !important;
              
              line-height: 125% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            h4 {
              
              font-size: 16px !important;
              
              line-height: 150% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            .mcnBoxedTextContentContainer .mcnTextContent,
            .mcnBoxedTextContentContainer .mcnTextContent p {
              
              font-size: 14px !important;
              
              line-height: 150% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #templatePreheader {
              
              display: block !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #templatePreheader .mcnTextContent,
            #templatePreheader .mcnTextContent p {
              
              font-size: 14px !important;
              
              line-height: 150% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #templateHeader .mcnTextContent,
            #templateHeader .mcnTextContent p {
              
              font-size: 16px !important;
              
              line-height: 150% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #templateBody .mcnTextContent,
            #templateBody .mcnTextContent p {
              
              font-size: 16px !important;
              
              line-height: 150% !important;
            }
      
          }
      
          @media only screen and (max-width: 480px) {
            #templateFooter .mcnTextContent,
            #templateFooter .mcnTextContent p {
              
              font-size: 14px !important;
              
              line-height: 150% !important;
            }
      
          }
        </style>
      </head>
      
      <body>
          <span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">*|MC_PREVIEW_TEXT|*</span>
      
        <center>
          <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
              <td align="center" valign="top" id="bodyCell">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                  <tr>
                    <td valign="top" id="templatePreheader">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock"
                       style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
      
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" id="templateHeader">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock"
                       style="min-width:100%;">
                        <tbody class="mcnImageBlockOuter">
                          <tr>
                            <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                              <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                                <tbody>
                                  <tr>
                                    <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
      
      
                                      <img align="center" alt="" src="http://dokarim.pe/produccion/img/logo.png" width="196" style="max-width:196px; padding-bottom: 0; display: inline !important; vertical-align: bottom;"
                                       class="mcnImage">
      
      
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
                  <tr>
                    <td valign="top" id="templateBody">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock"
                       style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>
      
                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
      
                                      <h1 style="text-align: center;"><span style="color:#A52A2A">Formulario de contactanos</span></h1>
      
                                      <p style="text-align: center;"><span style="font-size:18px"><strong>Nombre Cliente</strong></span>: '.$nombre.'<br>
                                        <span style="font-size:18px"><strong>Email Cliente</strong></span>:&nbsp;'.$email.'<br>
                                        <span style="font-size:18px"><strong>Asunto Cliente</strong></span>: '.$subject.'<br>
                                        <span style="font-size:18px"><strong>Mensaje Cliente</strong></span>:&nbsp;'.$mensaje.'<br>
                                        <br>
                                        <br> &nbsp;
                                      </p>
      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width:100%;">
                        <tbody class="mcnDividerBlockOuter">
                          <tr>
                            <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                              <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #EAEAEA;">
                                <tbody>
                                  <tr>
                                    <td>
                                      <span></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
      
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%; background: #E0E0E0;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
      
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>
      
                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
      
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, ut! Animi molestias vel veniam quisquam. Similique
                                      et vitae placeat tempore id perspiciatis quia? Cumque distinctio nulla hic quidem ducimus sapiente!
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
      
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width:100%;">
                        <tbody class="mcnFollowBlockOuter">
                          <tr>
                            <td align="center" valign="top" style="padding:9px" class="mcnFollowBlockInner">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width:100%;">
                                <tbody>
                                  <tr>
                                    <td align="center" style="padding-left:9px;padding-right:9px;">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width:100%;" class="mcnFollowContent">
                                        <tbody>
                                          <tr>
                                            <td align="center" valign="top" style="padding-top:9px; padding-right:9px; padding-left:9px;">
                                              <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                  <tr>
                                                    <td align="center" valign="top">
      
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
      
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="https://www.facebook.com/AUTO-SMART-170439770289961/" target="_blank"><img src="http://dokarim.pe/produccion/img/facebook.svg" style="display:block;"
                                                                                 height="24" width="24" class=""></a>
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
                                                      </table>
      
      
      
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="padding-right:10px; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
      
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="https://www.facebook.com/AUTO-SMART-170439770289961/" target="_blank"><img src="http://dokarim.pe/produccion/img/facebook.svg" style="display:block;"
                                                                                 height="24" width="24" class=""></a>
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
                                                      </table>
      
                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" style="display:inline;">
                                                        <tbody>
                                                          <tr>
                                                            <td valign="top" style="padding-right:0; padding-bottom:9px;" class="mcnFollowContentItemContainer">
                                                              <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem">
                                                                <tbody>
                                                                  <tr>
                                                                    <td align="left" valign="middle" style="padding-top:5px; padding-right:10px; padding-bottom:5px; padding-left:9px;">
                                                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="">
                                                                        <tbody>
                                                                          <tr>
      
                                                                            <td align="center" valign="middle" width="24" class="mcnFollowIconContent">
                                                                              <a href="https://www.facebook.com/AUTO-SMART-170439770289961/" target="_blank"><img src="http://dokarim.pe/produccion/img/facebook.svg" style="display:block;" height="24" width="24"
                                                                                 class=""></a>
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
                              </table>
      
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
                        <tbody class="mcnTextBlockOuter">
                          <tr>
                            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
      
                              <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                                <tbody>
                                  <tr>
      
                                    <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
      
                                      <div style="text-align: center;"><em>derechos reservados</em></div>
      
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
                  <tr>
                    <td valign="top" id="templateFooter">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock"
                       style="min-width:100%;">
                        <tbody class="mcnDividerBlockOuter">
                          <tr>
                            <td class="mcnDividerBlockInner" style="min-width: 100%; padding: 10px 18px 25px;">
                              <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #EEEEEE;">
                                <tbody>
                                  <tr>
                                    <td>
                                      <span></span>
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
                </table>
              </td>
            </tr>
          </table>
        </center>
      </body>
      
      </html>

      ';


      // mail($para, $subject, $msjCorreo, $headers)
    if (mail($para, $subject, $msjCorreo, $headers)) {
      header("Location: http://dokarim.pe/contactanos.html");
      die();
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
    






?>
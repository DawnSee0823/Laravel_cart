<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <!--[if (gte mso 9)|(IE)]>
    <xml>
    <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
    <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS -->
    <meta name="format-detection" content="address=no"> <!-- disable auto address linking in iOS -->
    <meta name="format-detection" content="email=no"> <!-- disable auto email linking in iOS -->
    <meta name="author" content="Simple-Pleb.com">
    <title>{{ 'Forgot password | ' . env('APP_NAME') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style type="text/css">
        /*Basics*/
        body {margin:0 !important; padding:0 !important; display:block !important; min-width:100% !important; width:100% !important; -webkit-text-size-adjust:none;}
        table {border-spacing:0; mso-table-lspace:0; mso-table-rspace:0;}
        table td {border-collapse: collapse;mso-line-height-rule:exactly;}
        td img {-ms-interpolation-mode:bicubic; width:auto; height:auto; margin:auto; display:block!important; border:0;}
        td p {margin:0; padding:0;}
        td div {margin:0; padding:0;}
        td a {text-decoration:none; color: inherit;}
        /*Outlook*/
        .ExternalClass {width: 100%;}
        .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height:inherit;}
        .ReadMsgBody {width:100%; background-color: #ffffff;}
        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {color:inherit !important; text-decoration:none !important; font-size:inherit !important; font-family:inherit !important; font-weight:inherit !important; line-height:inherit !important;}
        /*Gmail blue links*/
        u + #body a {color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit;}
        /*Buttons fix*/
        .undoreset a, .undoreset a:hover {text-decoration:none !important;}
        .yshortcuts a {border-bottom:none !important;}
        .ios-footer a {color:#aaaaaa !important;text-decoration:none;}
        /*Responsive*/
        @media screen and (max-width: 799px) {
            table.row {width: 100%!important;max-width: 100%!important;}
            td.row {width: 100%!important;max-width: 100%!important;}
            .img-responsive img {width:100%!important;max-width: 100%!important;height: auto!important;margin: auto;}
            .center-float {float: none!important;margin:auto!important;}
            .center-text{text-align: center!important;}
            .container-padding {width: 100%!important;padding-left: 15px!important;padding-right: 15px!important;}
            .container-padding10 {width: 100%!important;padding-left: 10px!important;padding-right: 10px!important;}
            .hide-mobile {display: none!important;}
            .menu-container {text-align: center !important;}
            .autoheight {height: auto!important;}
            .m-padding-10 {margin: 10px 0!important;}
            .m-padding-15 {margin: 15px 0!important;}
            .m-padding-20 {margin: 20px 0!important;}
            .m-padding-30 {margin: 30px 0!important;}
            .m-padding-40 {margin: 40px 0!important;}
            .m-padding-50 {margin: 50px 0!important;}
            .m-padding-60 {margin: 60px 0!important;}
            .m-padding-top10 {margin: 30px 0 0 0!important;}
            .m-padding-top15 {margin: 15px 0 0 0!important;}
            .m-padding-top20 {margin: 20px 0 0 0!important;}
            .m-padding-top30 {margin: 30px 0 0 0!important;}
            .m-padding-top40 {margin: 40px 0 0 0!important;}
            .m-padding-top50 {margin: 50px 0 0 0!important;}
            .m-padding-top60 {margin: 60px 0 0 0!important;}
            .m-height10 {font-size:10px!important;line-height:10px!important;height:10px!important;}
            .m-height15 {font-size:15px!important;line-height:15px!important;height:15px!important;}
            .m-height20 {font-size:20px!important;line-height:20px!important;height:20px!important;}
            .m-height25 {font-size:25px!important;line-height:25px!important;height:25px!important;}
            .m-height30 {font-size:30px!important;line-height:30px!important;height:30px!important;}
            .rwd-on-mobile {display: inline-block!important;padding: 5px;}
            .center-on-mobile {text-align: center!important;}
        }
    </style>

</head>

<body  style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" bgcolor="#f0f0f0">

<span class="preheader-text"  style="color: transparent; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; visibility: hidden; width: 0; display: none; mso-hide: all;"></span>

<div   style="display:none; font-size:0; line-height:0; max-height:0; max-width:0; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;"></div>

<table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
    <tr><!-- Outer Table -->
        <td align="center"  bgcolor="#f0f0f0">

            <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;" >
                <!-- lotus-header-4 -->
                <tr>
                    <td align="center"  bgcolor="#2b2c40" class="container-padding">

                        <!-- Content -->
                        <table border="0" align="center" cellpadding="0" cellspacing="0" class="row" width="580" style="width:580px;max-width:580px;">
                            <tr>
                                <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                            </tr>
                            <tr  >
                                <td align="center">
                                    <!-- Logo & Webview -->
                                    <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
                                        <tr>
                                            <td align="center" class="container-padding">
                                                <!-- column -->
                                                <table border="0" cellpadding="0" cellspacing="0" class="row" style="max-width:280px;">
                                                    <tr>
                                                        <td class="center-text">
                                                            <a href="{{ url('/') }}"><img style="border:0;display: inline!important;" src="{{ url('/images/rb24-logo.png') }}" border="0"  alt="{{ env('APP_NAME') }}"></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- column -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Logo & Webview -->
                                </td>
                            </tr>
                            <tr>
                                <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="center-text"  align="center" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:42px;line-height:52px;font-weight:400;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0;">
                                    <div>
                                        Forgot your password?
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="20" style="font-size:20px;line-height:20px;" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:26px;font-weight:300;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0;">
                                    <div>
                                        Click on the button below to reset your password, you have 24 hours or until next password reset request, to pick your password. After that you'll have to ask for a new one.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <!-- Header Button -->
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" class="center-float">
                                        <tr>
                                            <td align="center" bgcolor="#e40713" style="border-radius: 6px;">
                                                <a href="{{ env('APP_URL') . $confirm['url'] }}" target="_blank" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:16px;line-height:19px;font-weight:700;font-style:normal;color:#fff;text-decoration:none;letter-spacing:0;padding: 20px 50px 20px 50px;display: inline-block;"><span>RESET PASSWORD</span></a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Header Button -->
                                </td>
                            </tr>
                            <tr>
                                <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                            </tr>
                        </table>
                        <!-- Content -->

                    </td>
                </tr>
            </table>

            <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;" >
                <!-- lotus-footer-4 -->
                <tr>
                    <td align="center"  bgcolor="#f0f0f0" class="container-padding">

                        <!-- Content -->
                        <table border="0" align="center" cellpadding="0" cellspacing="0" class="row" width="580" style="width:580px;max-width:580px;">
                            <tr>
                                <td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
                            </tr>
                            <tr  >
                                <td align="center">
                                    <!-- Social Icons -->
                                    <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
                                        <tr>
                                            <td align="center">
                                                <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
                                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="10"></td>
                                                                    <td align="center">
                                                                        <a href="https://www.facebook.com/rbmotors.lv/"><img style="width:36px;border:0;display: inline!important;" src="{{ asset('/images/email/social/facebook.png') }}" width="36" border="0" alt="icon"></a>
                                                                    </td>
                                                                    <td width="10"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
                                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="10"></td>
                                                                    <td align="center">
                                                                        <a href="https://www.instagram.com/rbmotors_jelgava/"><img style="width:36px;border:0;display: inline!important;" src="{{ url('/images/email/social/instagram.png') }}" width="36" border="0" alt="icon"></a>
                                                                    </td>
                                                                    <td width="10"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Social Icons -->
                                </td>
                            </tr>
                            <tr>
                                <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="center-text" align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0;">
                                    <div>
                                        Rūpniecības iela 39a, Jelgava, Jelgava, Latvia
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="center-text" align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0;">
                                    <a href="tel:24 405 844" style="color:#6e6e6e;"><span>24 405 844</span></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="center-text" align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0;">
                                    <a href="mailto:info@rb24.lv" style="color:#6e6e6e;"><span>info@rb24.lv</span></a> - <a href="{{ url('/') }}"    style="color:#6e6e6e;"><span>{{ url('/') }}</span></a>
                                </td>
                            </tr>
                        </table>
                        <!-- Content -->

                    </td>
                </tr>
            </table>

        </td>
    </tr><!-- Outer-Table -->
</table>
</body>
</html>

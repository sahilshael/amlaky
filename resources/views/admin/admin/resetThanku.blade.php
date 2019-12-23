@include('admin.layout.resetLayout')
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Unilife</title>
        <style type="text/css">
            body{font-family: Helvetica,sans-Serif;color: #77798c;font-size: 14px;}
        </style>

    </head>
    <body>        
        <table style="padding: 0;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td>
                        <table style="margin: 20px auto 0px; text-align: center; box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3); border-radius: 4px;background-color:#e5f4ea; padding: 20px;" width="500px" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td style="text-align:center; background-color:#5dbedb" >
                                        <div class="text-center logo-wrap">
                                            <img src="{{url('public/assets/images/unilife-icon.png')}}" alt="logo.png" width="80px" height="80px">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="margin: 10px auto; text-align: center; box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.1); background-color: #fff; border-radius: 4px;" width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <!-- <tr>
                                                    <td style="text-align:center;background-color: #fff; padding:15px;">
                                                        <img src="{{asset('public/image/ty.png')}}" width="150px">
                                                    </td>
                                                </tr> -->
                                                <tr>
                                                    <td>
                                                        <h1 style="font-weight:normal;margin:20px 0 0;margin-top:0px;color: #10b610;">Thank you</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="letter-spacing:1px;line-height:30px;text-align:center; margin-bottom:10px; padding:10px; padding-left:20px;">
                                                         Your password has been reset. You can now log into your account using new password. 
                                                        </p>          
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
    </body>
</html>



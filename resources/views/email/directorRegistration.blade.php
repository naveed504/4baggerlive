<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Account Request</title>
    <style>
        @font-face {
            font-family: 'Roboto-Black';
            src: url(fonts/Roboto-Black.ttf);
        }

        @font-face {
            font-family: 'Roboto-BlackItalic';
            src: url(fonts/Roboto-BlackItalic.ttf);
        }

        @font-face {
            font-family: 'Roboto-Bold';
            src: url(fonts/Roboto-Bold.ttf);
        }

        @font-face {
            font-family: 'Roboto-Italic';
            src: url(fonts/Roboto-Italic.ttf);
        }

        @font-face {
            font-family: 'Roboto-Italic';
            src: url(fonts/Roboto-Italic.ttf);
        }

        @font-face {
            font-family: 'Roboto-Light';
            src: url(fonts/Roboto-Light.ttf);
        }

        @font-face {
            font-family: 'Roboto-LightItalic';
            src: url(fonts/Roboto-LightItalic.ttf);
        }

        @font-face {
            font-family: 'Roboto-Medium';
            src: url(fonts/Roboto-Medium.ttf);
        }

        @font-face {
            font-family: 'Roboto-MediumItalic';
            src: url(fonts/Roboto-MediumItalic.ttf);
        }

        @font-face {
            font-family: 'Roboto-Regular';
            src: url(fonts/Roboto-Regular.ttf);
        }

        @font-face {
            font-family: 'Roboto-Thin';
            src: url(fonts/Roboto-Thin.ttf);
        }

        @font-face {
            font-family: 'Roboto-ThinItalic';
            src: url(fonts/Roboto-ThinItalic.ttf);
        }

        td {
            border: none !important;
        }
    </style>
</head>

<body style="background-color: #f0f0f0;">
    <table style="background-color: #fff; width: 60%; margin: auto;">
        <tr>
            <td style="text-align: center;">
                <img src="logo.png" style="width: 140px; margin: auto;" alt="">
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <h2 style="margin-top: 40px; font-size: 26px; font-weight: 400; font-family: 'Roboto-Bold';">Team Director 
                    </h2>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div
                    style="width: 80px; height: 80px; margin: auto; background: #f0f0f0; padding: 20px; border-radius: 100px;">
                    <img src="email2.png" style="width: 80px; margin: auto; text-align: center; object-fit: cover;"
                        alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div style="width: 600px; margin: auto;">
                    <h4 style=" font-size: 22px; font-weight: 400; font-family: 'Roboto-Bold';">Hello {{ $data->director['director_name'] }}</h4>
                    <p style="font-size: 17px; font-weight: 400; font-family: 'Roboto-Regular'; color: #645e69;">Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Minus consequatur velit totam voluptatum
                        tempora repudiandae. Cumque esse voluptate sequi cum sint neque voluptatum odio, rem non
                        accusantium quo! Quod, veritatis.</p>
                    <p style="color: green; font-size: 22px; font-weight: 400; font-family: 'Roboto-Bold';"><span>Account Status:</span> <span style="color:red">Pending</span></p>
                      
                    <p
                        style="margin-top: 20px; margin-bottom: 50px; font-size: 20px; font-weight: 400; color: #6e6e6e; font-family: 'Roboto-Bold';">
                        Thanks for choosing start up templates</p>
                </div>
            </td>
        </tr>
    </table>
    <table style="text-align: center;  width: 60%; margin:50px auto 20px auto;">
        <tbody>
            <tr>
                <td>
                    <div style="width: 600px; margin: auto;">
                        <a style="font-family: 'Roboto-Regular'; color: #459413; text-transform: capitalize; font-size: 16px;"
                            href="#">View as Web page</a>
                        <p style="font-family: 'Roboto-Regular';  font-size: 16px; color: #a2a0ae;">
                            © 2017 StartupEmails, Inc. All rights reserved. 123 Incredible Street, SomeTown, OR, 87466
                            US, (123) 456-7890
                        </p>
                        <div style="margin-top: 30px; margin-bottom: 30px;">
                            <a href="#" style="margin-right: 10px; width: 30px; height: 30px; background: #cd8451;
                                 display: inline-block;  border-radius: 100px; text-align: center; padding: 9px;">
                                <img src="linkedin.png"
                                    style="width: 26px; height: 26px; padding: 3px; text-align: center; object-fit: cover;"
                                    alt="">
                            </a>
                            <a href="#" style="margin-right: 10px; width: 30px; height: 30px; background: #cd8451;
                                display: inline-block;  border-radius: 100px; text-align: center; padding: 9px;">
                                <img src="twitter.png"
                                    style="width: 26px; height: 26px; padding: 3px; text-align: center; object-fit: cover;"
                                    alt="">
                            </a>
                            <a href="#"
                                style="margin-right: 10px; width: 30px; height: 30px; background: #cd8451; display: inline-block; border-radius: 100px; text-align: center; padding: 9px;">
                                <img src="rss.png"
                                    style="width: 26px; height: 26px; padding: 3px; text-align: center; object-fit: cover;"
                                    alt="">
                            </a>
                        </div>

                        <p style="font-family: 'Roboto-Regular'; font-size: 16px; color: #a2a0ae;">You received this
                            email because you signed up for Startup Emails
                        </p>
                        <a style="font-family: 'Roboto-Regular'; font-size: 17px; color: #cd8451; text-transform: capitalize;"
                            href="#">unsubscribe</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>
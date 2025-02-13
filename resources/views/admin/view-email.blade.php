<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background: rgb(210, 208, 208); margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
        style="background: rgb(210, 208, 208); height: 100vh;">
        <tr>
            <td align="center">
                <table role="presentation" width="400" cellpadding="0" cellspacing="0"
                    style="background: white; padding: 25px 12px; border-radius: 8px; text-align: center;">
                    <tr style="background: black;">
                        <td>
                            <a href="https://motionglobalventures.com">
                                <img src="https://motionglobalventures.com/logo.png" alt="Site Logo"
                                    style="width: 100%; height: 100px;">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="text-align: justify; font-size: 20px; color: #333;">
                                {!! html_entity_decode($emailData['message']) !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://motionglobalventures.com" style="text-decoration: none;">
                                <button
                                    style="width: 98%; color: white; background: rgb(251, 87, 11); border: 0; border-radius: 10px; height: 45px;">
                                    Visit Our Website
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px;">
                            <p style="font-size: 16px; color: #333;">
                                <svg style="width:21px;height:21px;color: rgb(251, 87, 11);"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="rgb(251, 87, 11)"
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>
                                <a href="#" style="text-decoration: none; color: rgb(16, 24, 133);">
                                    1111 Brickell Avenue Ste 2725, New  Zealand 33131</a>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://motionglobalventures.com"
                                style="display: block; text-decoration: none; font-size: 16px; color: rgb(16, 24, 133);">Motion
                                Global Ventures</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

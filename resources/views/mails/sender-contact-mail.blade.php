<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odoslaná spáva - {{ $mailData['subject'] }}</title>

    <style>
        * {
            font-family: 'Helvetica'
        }

    </style>
</head>

<body style="width:1024px; margin:0 auto;">
    <table style="width: 1024px; background-color:#E2E8F0; border:none;">
        <tr style="background-color: #143776;">
            <td style="text-align: center;">
                <img src="{{ $message->embed('images/Logo/FriDLab-logo.jpg') }}" style="width:300px">
            </td>
        </tr>
        <tr>
            <td style="padding:16px">
                <h1>Dobrý deň {{ $mailData['full_name'] }}!</h1>
                <p>Vaša správa bola zaznamenaná, ozveme sa vám čo najskôr</p>
            </td>
        </tr>
        <tr>
            <td style="padding:16px">
                <h4>Predmet:</h4>
                <p>{{ $mailData['subject'] }}</p>
                <h4>Správa:</h4>
                <p style="white-space: pre-wrap;">{{ $mailData['message'] }}</p>
            </td>
        </tr>
    </table>
    <table style="padding:16px; background-color:#080212; width:100%">
        <tr>
            <td style="color:#f5ed10;font-size-14px; text-align:center;">
                <p>Toto je automatický e-mail, NEODPOVEDAJTE NAŇ</p>
                <p>
                    {{ date('Y') }} FriDlab
                </p>
            </td>
        </tr>
    </table>
</body>

</html>

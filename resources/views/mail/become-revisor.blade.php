<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {font-family: Arial, sans-serif;}
  </style>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="center" style="padding:40px 0 30px 0;background:black;">
              <img src="{{asset('img/Mail.png')}}" alt="" width="300" style="height:auto;display:block;" />
            </td>
          </tr>
          <tr>
            <td style="padding:36px 30px 42px 30px;">

              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:0 0 36px 0;color:black;">
 
                    <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">{{$user->name}} ha richiesto di diventare un revisore. <br>Ecco i dati che ci ha fornito.</h1>
                    <h1 style="color:black; margin:0 0 20px 0; font-family:Arial,sans-serif; font-size:16px;">Nome e Cognome: <span style="color:#ff5114;">{{$user->name}}</span></h1>
                    <h1 style="color:black; margin:0 0 20px 0; font-family:Arial,sans-serif; font-size:16px;">Email:  <span style="color:#ff5114;">{{$user->email}}</span></h1>
                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif; color:black; margin:0 0 20px 0; font-style: italic;">{{$user_message}}</p>
                    <h1 style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif; color:black; margin:0 0 20px 0; font-family:Arial,sans-serif;">Clicca qui per rendere revisore:<a href="{{route('make.revisor' , compact('user'))}}" style="color:#ff5114;text-decoration:none; font-family:Arial,sans-serif;"> Rendi revisore!</a></h1>
                  </td>
                </tr>

              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:black;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                <tr>
                  <td style="padding:0;width:50%;" align="left">
                    <p style="margin:0;font-size:15px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                      &reg; Copyryght by: Presto.it<br/>
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
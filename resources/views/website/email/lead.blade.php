<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f4f7fb; padding:0; margin:0;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f7fb; padding:30px 0;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:6px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="padding:20px 30px;">
                            <table width="100%">
                                <tr>

                                    <!-- Logo -->
                                    <td width="50%" align="left">
                                        <a href="https://apl-global.vibrantick.org/" target="_blank">
                                            <img src="https://apl-global.vibrantick.org/website/images/apl-global.svg"
                                                width="150"
                                                alt="APL Global"
                                                style="display:block;">
                                        </a>
                                    </td>

                                    <!-- Contact Info -->
                                    <td width="50%" align="right"
                                        style="font-size:14px; color:#334155; line-height:24px;">

                                        🌐 apl-global.vibrantick.org <br>

                                        ✉️ info@apl-global.vibrantick.org
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Blue Banner -->
                    <tr>
                        <td style="background:rgb(95, 205, 181); padding:25px; color:#ffffff;">

                            <div style="font-size:22px; font-weight:bold;">
                                Hello {{ $lead->name }},
                            </div>

                            <div style="font-size:17px; margin-top:10px;">
                                We have successfully received your enquiry.
                            </div>

                        </td>
                    </tr>

                    <!-- Details -->
                    <tr>
                        <td style="padding:25px 30px;">

                            <table width="100%" cellpadding="10" cellspacing="0"
                                style="border:1px solid #d0d7e6; border-collapse:collapse; font-size:14px; color:#334155;">

                                <!-- Title -->
                                <tr style="background:#e8eef9;">
                                    <td colspan="2"
                                        style="font-size:18px; font-weight:bold; text-transform:uppercase; border-bottom:1px solid #d0d7e6;">
                                        User Information
                                    </td>
                                </tr>

                                <!-- Name -->
                                <tr>
                                    <td style="border-bottom:1px solid #d0d7e6; width:35%;">
                                        Name
                                    </td>

                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        {{ $lead->name }}
                                    </td>
                                </tr>

                                <!-- Email -->
                                <tr style="background:#f9fbff;">
                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        Email
                                    </td>

                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        {{ $lead->email }}
                                    </td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        Phone
                                    </td>

                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        {{ $lead->phone }}
                                    </td>
                                </tr>

                                <!-- Subject -->
                                <tr style="background:#f9fbff;">
                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        Subject
                                    </td>

                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        {{ $lead->subject }}
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        Message
                                    </td>

                                    <td style="border-bottom:1px solid #d0d7e6;">
                                        {{ $lead->message }}
                                    </td>
                                </tr>

                                <!-- Date -->
                                <tr style="background:#f9fbff;">
                                    <td>
                                        Received At
                                    </td>

                                    <td>
                                        {{ $lead->created_at->format('d M Y h:i A') }}
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- Message -->
                    <tr>
                        <td style="padding:25px 30px; color:#51627a; font-size:15px; line-height:1.8;">

                            Thank you for contacting APL Global.

                            <br><br>

                            Our team will review your enquiry and get back to you shortly.

                            <br><br>

                            Regards,<br>
                            <strong>Team APL Global</strong>

                        </td>
                    </tr>

                    <!-- Button -->
                    <tr>
                        <td align="center" style="padding-bottom:30px;">

                            <a href="https://apl-global.vibrantick.org/contact"
                                target="_blank"
                                style="background:rgb(95, 205, 181);
                                       color:#ffffff;
                                       text-decoration:none;
                                       padding:12px 28px;
                                       border-radius:4px;
                                       display:inline-block;
                                       font-size:14px;">

                                Contact Us

                            </a>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background:#f4f7fb; padding:20px; font-size:12px; color:#9aa3b5;">

                            © {{ date('Y') }} APL Global — All Rights Reserved

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
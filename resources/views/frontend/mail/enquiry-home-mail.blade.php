```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Enquiry</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

    <div style="max-width:650px;margin:40px auto;background:#ffffff;border-radius:10px;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,.08);">
        <div style="background:#D20048;padding:15px 30px;color:#fff;">
            <h2 style="margin:0;font-size:22px;">
                New Appointment Enquiry
            </h2>
            <p style="margin:8px 0 0;font-size:14px;color:#dfe7ff;">
                Dr. K. Shilpi Reddy
            </p>
        </div>
        <div style="padding:35px 30px;">
            <p style="margin-top:0;color:#555;font-size:15px;">
                You have received a new appointment request with the following details:
            </p>
            <div style="margin-bottom:20px;">
                <p style="margin:0;color:#999;font-size:13px;">Name</p>
                <p style="margin:5px 0 0;font-size:16px;color:#222;">
                    {{ $data['name'] }}
                </p>
            </div>
            <div style="margin-bottom:20px;">
                <p style="margin:0;color:#999;font-size:13px;">Email Address</p>
                <p style="margin:5px 0 0;font-size:16px;color:#222;">
                    {{ $data['email'] }}
                </p>
            </div>
            <div style="margin-bottom:20px;">
                <p style="margin:0;color:#999;font-size:13px;">Mobile Number</p>
                <p style="margin:5px 0 0;font-size:16px;color:#222;">
                    {{ $data['mobile_number'] }}
                </p>
            </div>

            @if(!empty($data['message']))
            <div style="margin-bottom:20px;">
                <p style="margin:0;color:#999;font-size:13px;">Message</p>
                <p style="margin:5px 0 0;font-size:16px;color:#222;line-height:1.7;">
                    {{ $data['message'] }}
                </p>
            </div>
            @endif

        </div>
        <div style="background:#f8f9fb;padding:20px 30px;border-top:1px solid #eee;">
            <p style="margin:0;color:#777;font-size:13px;">
                This email was generated automatically from the website enquiry form.
            </p>
        </div>
    </div>
</body>

</html>
```
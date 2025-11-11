<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { padding: 10px; background: #f8f9fa; border-radius: 3px; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p>You have received a new message from the TanCare website contact form.</p>
        </div>

        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $formData['name'] }}</div>
        </div>

        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $formData['email'] }}</div>
        </div>

        @if($formData['organization'])
        <div class="field">
            <div class="label">Organization:</div>
            <div class="value">{{ $formData['organization'] }}</div>
        </div>
        @endif

        <div class="field">
            <div class="label">Subject:</div>
            <div class="value">{{ $formData['subject'] }}</div>
        </div>

        <div class="field">
            <div class="label">Message:</div>
            <div class="value" style="white-space: pre-wrap;">{{ $formData['message'] }}</div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
            <p><small>This email was sent from the TanCare website contact form on {{ now()->format('F j, Y \a\t g:i A') }}</small></p>
        </div>
    </div>
</body>
</html>
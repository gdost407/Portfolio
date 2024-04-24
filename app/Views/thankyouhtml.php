<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; text-align: center;">
    <div class="container" style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); background-image: url('<?= base_url('assets/email-bg.png');?>'); background-size: cover; background-position: center;">
        <img src="<?= base_url('assets/ASG-Logo.png');?>" alt="Your Logo" class="logo" style="width: 100px; margin-bottom: 20px;">
        <div class="message" style="margin-bottom: 30px;">
            <p>Dear <?= $name;?>,</p>
            <p>Thank you for visiting my portfolio and contacting me!</p>
            <p>I appreciate your interest and I look forward to connecting with you.</p>
        </div>
        <img src="<?= base_url('assets/giphy.gif');?>" alt="Clipart" class="clipart" style="margin-top: 20px;">
        <div class="footer" style="margin-top: 20px; font-size: 12px; color: #777;">
            <p>If you have any further questions, feel free to reach out to me at <a href="mailto:gdost407@gmail.com">gdost407@gmail.com</a></p>
            <p>Best regards<br>Aniket Golhar</p>
        </div>
    </div>
</body>
</html>

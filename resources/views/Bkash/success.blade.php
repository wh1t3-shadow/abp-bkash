<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Success</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Your payment has been successfully done.</h1>
    </div>
    <br><br>
    <div style="text-align: center;">
        @if(isset($response))
          Your bKash trxID: {{ $response }}
        @endif
    </div>
</body>
</html>
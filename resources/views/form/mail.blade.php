<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="height: 600px;padding: 0;margin: 0">
<div class="page-content" style="background-color: #333;height: 600px">
    <div class="row">
        <div style="height: 50px"></div>
        <div style="color: #fff">
            <h1 style="text-align: center" style="color: #fff">Новый обратный звонок</h1>
        </div>
        <div style="text-align: center">
            <div style="height: 100px"></div>
        </div>
        <div style="height: 50px"></div>
        <div style="color: #fff;text-align: center">
            <span>Ф.И.О.: {{$mail['name']}}</span> <span>Телефон: {{$mail['phone']}}</span>
            <p>Сообщение: {{$mail['text']}}</p>
        </div>
    </div>
</div>
</body>
</html>

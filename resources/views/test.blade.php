<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="bg-[#000000] h-[1080px] relative overflow-hidden">
        <div
            class="w-[1265px] absolute left-[calc(50%_-_632px)] bottom-[-411px] top-0">
            <x-sidebar/>
            <x-trends/>
            <x-timeline/>
        </div>
    </div>
</body>

</html>
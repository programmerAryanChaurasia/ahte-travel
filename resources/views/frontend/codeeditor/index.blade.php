<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('frontend/codeeditor/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="left">
            <label for=""> <i class="fa-brands fa-html5"></i> HTML (Aryan Chaurasia)</label>
            <textarea name="" id="html-code" onkeyup="run()">Aryan Chaurasia /admin/login/form  ,,email  :: admin@gmail.com  password:: 12345678</textarea>

            <label for=""> <i class="fa-brands fa-css3-alt"></i> CSS (Aryan Chaurasia)</label>
            <textarea name="" id="css-code" onkeyup="run()">*{color:red;font-size:50px;}</textarea>

            <label for=""><i class="fa-brands fa-js"></i> JavaScript (Aryan Chaurasia)</label>
            <textarea name="" id="js-code" onkeyup="run()"></textarea>
        </div>
        <div class="right">
            <label for=""><i class="fa-solid fa-play"></i> Output (Aryan Chaurasia)</label>
            <iframe id="output"></iframe>
        </div>
    </div>


    <script>
        function run() {
            let htmlCode = document.getElementById("html-code").value;
            let cssCode = document.getElementById("css-code").value;
            let jsCode = document.getElementById("js-code").value;
            let output = document.getElementById("output");

            // alert(output);



            output.contentDocument.body.innerHTML = htmlCode + "<style>" + cssCode + "</style>";
            output.contentWindow.eval(jsCode);

        }
    </script>
</body>

</html>

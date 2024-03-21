<html>
    <title> formulario </title>
    <head>
        <script>
            function validar () {
                nome = document.getElementById ("nome").value;
                idade = document.getElementById ("idade").value;
                if (nome == "") {
                    alert ("nome está vazio");
                    return false;
                }
                if (idade == "") {
                    alert("idade nao pode ser vazia");
                    return false;
                } else if (idade < 18) {
                    alert("proibido menores de 18 anos");
                    return false;
                }
                return true;
            }

        </script>
</head>
<body>
    <form action = "pagina.php" target ="blank" method = "post" onsubmit = "return validar();">
        Nome:<input type="text" name="nome" id="nome"> <br>
        Idade:<input type="number" name="idade" id="idade">

        <input type="submit">
</form>
</body>
</html>
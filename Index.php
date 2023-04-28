<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha uma opção</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 0 20px;
        }

        header img {
            max-height: 60%;
            max-width: 100%;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2em;
        }

        label {
            font-size: 1.3em;
            margin: 1em 0;
            font-weight: bold;
            text-transform: uppercase;
            color: #444;
        }

        select {
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            color: #555;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        select:hover {
            background-color: #f7f7f7;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 2em;
            font-size: 1.1em;
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        footer {
            background-color: #333;
            display: flex;
            position: absolute;
            bottom: 0;
            min-width: 100%;
            justify-content: space-between;
            align-items: center;
            height: 40px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            margin: 0 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        footer a:hover {
            background-color: #000000;
            color: #333;
        }
    </style>
</head>
<body>
<header>
    <img src="logo.png" alt="HighSoft Sistemas">
</header>
<main>
    <form action="Conversor.php" method="post">
        <label for="opcao">Selecione uma opção:</label>
        <select name="opcao" id="opcao">
            <option value="1">HSNota (Calcula média do boletim.)</option>
            <option value="2">HSTemp (Conversor de temperatura.)</option>
            <option value="3">HSPeso (Calculo de IMC)</option>
            <option value="4">Churrascômetro (Calculo necessário para o churrasco)</option>
        </select>
        <input type="submit" value="Abrir">

    </form>
</main>
</body>
<footer>
    <a href="https://www.linkedin.com/in/richardfariasss/" target="_blank"><img src="https://img.shields.io/badge/-linkedin-%23333?style=for-the-badge&logo=linkedin&logoColor=white%22%20target=%22_blank" target="_blank"></a>
    <a href="https://www.github.com/richardfariax/" target="_blank"><img src="https://img.shields.io/badge/-github-%23333?style=for-the-badge&logo=github&logoColor=white%22%20target=%22_blank" target="_blank"></a>
    <a href="https://www.instagram.com/richardfariasss/" target="_blank"><img src="https://img.shields.io/badge/-instagram-%23333?style=for-the-badge&logo=Instagram&logoColor=white%22%20target=%22_blank" target="_blank"></a>
    <a href="https://wa.me/5548999950720?" target="_blank"><img src="https://img.shields.io/badge/-whatsapp-%23333?style=for-the-badge&logo=whatsapp&logoColor=white%22%20target=%22_blank" target="_blank"></a>
</footer>
</html>

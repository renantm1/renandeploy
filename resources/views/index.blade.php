<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifra de Sena</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #007bff;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Cifra de César</h1>
    <form action="{{ route('encrypt') }}" method="post">
        @csrf
        <label for="shift">Shift:</label>
        <input type="number" name="shift" required>
        <br>
        <label for="message">Mensagem:</label>
        <textarea name="message" required></textarea>
        <br>
        <button type="submit">Criptografar</button>
    </form>
    <form action="{{ route('decrypt') }}" method="post">
        @csrf
        <label for="shift">Shift:</label>
        <input type="number" name="shift" required>
        <br>
        <label for="message">Mensagem Criptografada:</label>
        <textarea name="message" required></textarea>
        <br>
        <button type="submit">Descriptografar</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(229, 239, 239);
            font-family: 'Poppins', sans-serif;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#13c0af, #00ffee);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right, #404e4e, #abcbca);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form h3 {
            font-size: 28px;
            font-weight: 600;
            line-height: 42px;
            text-align: center;
            color: #2e6363;
        }

        label {
            display: block;
            margin-top: 25px;
            font-size: 16px;
            font-weight: 500;
            color: #2e6363;
        }

        .input-container {
            position: relative;
            margin-top: 8px;
        }

        .input-container i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #626363;
        }

        .input-container input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 5px;
            padding: 0 45px 0 35px;
            font-size: 14px;
            font-weight: 300;
            border: none;
            color: #2e6363;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #626363;
        }

        ::placeholder {
            color: #626363;
        }

        button[type="submit"] {
            margin-top: 35px;
            width: 100%;
            background: linear-gradient(90deg, #13c0af, #00ffee);
            color: #fff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.4s;
            border: none;
        }

        button[type="submit"]:hover {
            background: linear-gradient(90deg, #00ffee, #13c0af);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form>
        <h3>Authentifiez-vous</h3>

        <label for="username">Nom d'utilisateur</label>
        <div class="input-container">
            <i class="fas fa-user"></i>

            <input type="text" placeholder="Username" id="username">
        </div>

        <label for="password">Mot de passe</label>
        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" id="password">
            <button type="button" class="toggle-password" id="togglePassword">
                <i class="fas fa-eye"></i>
            </button>
        </div>

        <button type="submit">Se connecter</button>
    </form>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>

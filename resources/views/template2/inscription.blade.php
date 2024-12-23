<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        /* Reset and base styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .register-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            animation: fadeIn 1s ease-in-out;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 28px;
            font-weight: bold;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.3);
        }

        .register-btn {
            background: #007BFF;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .register-btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #007BFF;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Inscription</h2>
        <form action="/register" method="POST">
            <div class="form-group">
                <label for="first_name">Prénom</label>
                <input type="text" id="first_name" name="first_name" placeholder="Entrez votre prénom" required>
            </div>
            <div class="form-group">
                <label for="last_name">Nom</label>
                <input type="text" id="last_name" name="last_name" placeholder="Entrez votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="policy_number">Numéro de police</label>
                <input type="text" id="policy_number" name="policy_number" placeholder="Entrez votre numéro de police"
                    required>
            </div>
            <div class="form-group">
                <label for="dob">Date de naissance</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Créez un mot de passe" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="confirm_password"
                    placeholder="Confirmez le mot de passe" required>
            </div>
            <button type="submit" class="register-btn">S'inscrire</button>
        </form>
        <div class="login-link">
            <p>Vous avez déjà un compte ? <a href="{{ url('/login') }}">Se connecter</a></p>
        </div>
    </div>
</body>

</html>

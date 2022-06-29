<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <style>
        @charset "utf-8";
        @import url(http://weloveiconfonts.com/api/?family=fontawesome);

        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        body {
            background: #2c3338;
            color: #606468;
            font: 87.5%/1.5em 'Open Sans', sans-serif;
            margin: 0;
        }

        input {
            border: none;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5em;
            padding: 0;
            -webkit-appearance: none;
        }

        p {
            line-height: 1.5em;
        }

        after {
            clear: both;
        }

        #login {
            margin: 50px auto;
            width: 400px;
        }

        #login form {
            margin: auto;
            padding: 22px 22px 22px 22px;
            width: 100%;
            background: #282e33;
        }

        #login form span {
            background-color: #363b41;
            border-radius: 3px 0px 0px 3px;
            border-right: 3px solid #434a52;
            color: #606468;
            display: block;
            float: left;
            line-height: 50px;
            text-align: center;
            width: 50px;
            height: 50px;
        }

        #login form input[type="email"] {
            background-color: #3b4148;
            border-radius: 0px 3px 3px 0px;
            color: #a9a9a9;
            margin-bottom: 1em;
            padding: 0 16px;
            width: 100%;
            height: 50px;
        }

        #login form input[type="password"] {
            background-color: #3b4148;
            border-radius: 0px 3px 3px 0px;
            color: #a9a9a9;
            margin-bottom: 1em;
            padding: 0 16px;
            width: 100%;
            height: 50px;
        }

        #login form input[type="submit"] {
            background: #b5cd60;
            border: 0;
            width: 100%;
            height: 40px;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        #login form input[type="submit"]:hover {
            background: #16aa56;
        }
    </style>
</head>
<div id="login">

    <h2 class="text-center" style="text-align: center">Login Panel</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" id="user" value="admin@gmail.com" placeholder="Email">
        <input type="password" name="password" value="123" placeholder="Password">

        <input type="submit" value="Login">

    </form>


</div>

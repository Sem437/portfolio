<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/projects/login/indexPHP.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="head">
        <div class="head"><h1 id="headText">Login</h1></div>
    </div>
    <div id="nav">
        <a href="../../index.html">Home</a>
        <a href="../../content/aboutMe.html">About me</a>
        <a href="../../projects/index.html" id="LastLinkChild">Projects</a>
    </div>
    <div id="main">
      <div id="mainBorder">
            <div id="inlogDiv">
                <h1>Welkom</h1>
                <form method="post" id="loginForm">
                    <div>
                        <!-- <label for="username">Username</label> -->
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div>
                        <!-- <label for="password">Password</label> -->
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div>
                        <input type="submit" name="login" id="login" value="Login">
                    </div>
                </form>
            </div>
      </div>
    </div>
    <div id="balk"></div>
    <div id="footer">
      <div id="email">
        <p>  E-mail: 97103780@st.deltion.nl</p>
        <p><a href="https://github.com/Sem437/portfolio">See my code</a></p>
       </div>
    </div>
</body>
</html>
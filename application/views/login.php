<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/codeigniter/css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <div class="card">
                    <div class="card-action teal lighten-1 white-text">
                        <h3>Login</h3>
                    </div>
                    <div class="card-content" id="loginform">
                        <div class="form-field">
                            <p id="usernamealert" style="visibility: hidden; color: red;">Username cannot be blank</p>
                            <label for="username">Username</label>
                            <input type="text" id="username">
                        </div><br>
                        <div class="form-field">
                            <p id="pwdalert" style="visibility: hidden; color: red;">Password cannot be blank</p>
                            <label for="password">Password</label>
                            <input type="password" id="password">
                        </div><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Login</button>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/form_validation.js"></script>
    </body>
</html>
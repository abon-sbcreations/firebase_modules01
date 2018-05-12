
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <link rel="icon" href="assets/img/pictures.ico"/>
        <title>Firebase web application</title>
        <link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/mycss.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap core CSS -->

    </head>

    <body>
        <!--div class="container-fluid">
            <div id="name_prompt_parent">
            <div id="name_prompt">
                <p class="title">
                    Hi! Please tell your name.
                </p>
                <input type="text" id="name" class="form-control">
                <button id="submitBtn" class="btn btn-info">Submit Text</button>
            </div>    
            </div>
        <!--/div-->
            <div id="chatroom">
                <div id="messages">
                    <div id="m">
                        <p class="name">
                        <p class="message"></p>
                        </p>
                    </div>
                </div>
                <div id="input">                    
                    <textarea id="message" class="form-control " ></textarea>
                    <button id="send_button" class="btn btn-primary" >Submit</button>
                </div>
            </div>    
        

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="library/js/jquery.min.js" type="text/javascript"></script>
        <script src="library/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="library/js/5.0.1/firebase-app.js"></script>
        <script src="library/js/5.0.1/firebase-database.js"></script>
        <script src="assets/js/myfirebase_confs.js"></script>        
        <script>
            firebase.initializeApp(firebase_config);
        </script>
        <script src="assets/js/firebase_helper02.js" type="text/javascript"></script>
    </body>
</html>


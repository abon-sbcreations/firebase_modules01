
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
        <div class="container-fluid">
                <form class="form-control" id="idUserForm">
                    <div class="form-control" id="iddivuname" >
                        <label for="username">Set User Name</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="form-control">
                        <button id="" class="btn btn-primary">Submit</button>
                    </div>
                </form>            
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
        <script src="assets/js/firebase_helper03.js" type="text/javascript"></script>
    </body>
</html>


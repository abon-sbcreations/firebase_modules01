
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
        <div class='mainDiv' align='right'>
            <h1 id='fireHeading' align='left'>Firebase web application</h1>
            <textarea id='mainText' placeholder='Enter text here'></textarea>
            <button id='submitBtn' class="btn btn-lg" type="submit">Post Message</button>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="library/js/jquery.min.js" type="text/javascript"></script>
        <script src="library/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase-database.js"></script>
        <script src="assets/js/myfirebase_confs.js"></script>        
        <script>
            firebase.initializeApp(firebase_config);
        </script>
        <script src="assets/js/firebase_helper01.js" type="text/javascript"></script>
    </body>
</html>


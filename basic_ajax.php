<html>
    <head>
        <title>
            basic ajax table
        </title>
        <link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            <span > <button class="btn btn-info" id="btnAdd">Add</button></span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tblBody"></tbody>
        </table>
        <div class='modal fade' id='mdlRow' tabindex='-1' role='dialog' area-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='model-header text-center'>
                        <h4 class='modal-title w-100 font-weight-bold'>Sign in</h4>
                        <button type='button' class='close' data-dismiss='modal' area-label='close' >
                            <span area-hidden='true'>&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="library/js/jquery.min.js" type="text/javascript"></script>
        <script src="library/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="assets/js/mycustom.js" type="text/javascript"></script>
    </body>
</html>
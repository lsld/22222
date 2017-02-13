<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>CourseWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Bootstrap
                </a>

            </li>


            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Add a list</a>
            </li>
            <li>
                <a href="#">Add a task</a>
            </li>

            <br/>
            <br/>

            <li>
                <a href="#" class="btn btn-info" role="button"
                   style="left: 50px; width: 170px; position: relative; text-align:center; ">Logout</a>
            </li>

        </ul>


    </div>
    <!-- /#sidebar-wrapper -->


    <br/>
    <br/>

    <div class="container">
        <h2>Add Items</h2>
        <p>Fill the following details to add an item to the course web:</p>


        <!-- <div class="panel panel-default" style="padding:45px;">-->


        <form id="registration-form" method="post" action="" class="">

            <div class="">

                <div class="form-group green row form-center form_gap">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600;">Title <span class="star">*</span></label>
                    <div class="col-md-5">
                        <input type="text" onpaste="return false;" onkeypress="return isTextKeySpace(event)"
                               class="form-control" name="title" placeholder="Enter the title" maxlength="50"/>
                    </div>
                </div>


                <div class="form-group row form-center form_gap">
                    <label class=" col-md-4 control-label" for="membership"
                           style="color: #005993!important; font-weight: 600;">Item Type <span
                            class="star">*</span></label>
                    <div class="col-md-5">
                        <select class="form-control" name="item_type" id="purpose">
                            <option value="0">Item Type</option>
                            <option value="1">Assignment</option>
                            <option value="2">Lecture</option>
                            <option value="3">Notice</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row form-center form_gap ">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600;">Select File to upload:<span class="star">*</span></label>
                    <div class="col-md-5">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload File" name="submit">
                    </div>
                </div>


                <div class="form-group form-center form_gap">
                    <label class=" col-md-4 control-label" for="email"
                           style="color: #005993!important; font-weight: 600; margin: 0 0 0 -17px;" for="comment">Comment:</label>

                    <div class="col-md-5">
                        <textarea class="form-control" rows="5" id="comment" name="note"
                                  style="margin: 0 0 0 11px;"></textarea>
                    </div>
                </div>


                <div class="form-group row form-center" style="height:50px;">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-5"><br/><br/>
                        <button type="submit" class="btn btn-primary pybill" style="position: absolute;
   " name="signin" value="Pay Now">Submit
                        </button>
                    </div>

                </div>


            </div>
        </form>
        <div id="confirmation" class="alert alert-success hidden">
            <span class="glyphicon glyphicon-star"></span> Thank you for registering
        </div>
    </div>
</div>
</div>

</div>
<!-- /#wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#registration-form').formValidation({
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: "Please enter the title."
                        },
                        stringLength: {}

                    }
                }

            }
        });


    });
    //hide divs


</script>

<script type="text/javascript">


    function isTextKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return (((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isTextKeySpace(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 32 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    function isCurrencyKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return (charCode == 8 || charCode == 46 || charCode == 31 || (charCode >= 48 && charCode <= 57));
    }

    function isAddress(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 32 || charCode == 47 || charCode == 45 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }


    function isEmail(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 47 || charCode == 46 || charCode == 45 || charCode == 64 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }

    function isWebsite(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return ((charCode == 47 || charCode == 46 || charCode == 45 || charCode == 64 || charCode == 58 || charCode == 31 || (charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) || (charCode == 8 || charCode == 9)  );
    }


    $('#id_no').bind('keypress', function (event) {
        var regex = new RegExp("^[vxnVXN0-9\b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

</script>


<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

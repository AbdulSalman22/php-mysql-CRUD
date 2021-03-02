<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankForm</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendor/css/validationEngine.jquery.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4" style="margin-top: 10px;">
                <form id="bankform" method="post" action="save.php">
                    <h1>BankForm</h1>
                    <div class="form-group">
                          <label for="name">name</label>
                          <input type="text" id="name" name="name" class="form-control validate[required]" >
                        </div>
                        <div class="form-group">
                            <label for="name">account_no</label>
                            <input type="text" id="account_no" name="account_no" class="form-control validate[required,minSize[10]]">
                        </div>
                        <div class="form-group">
                            <label for="branch name">branch_name</label>
                            <select id="branch" name="branch" class="form-control custom-select">                    
                                <option selected="rs puram">rs puram</option>
                                <option value="hope college">hope college</option>>
                                <option value="peelamedu">peelamedu</option>>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phonenumber</label>
                            <input type="text" id="phn_no" name="phn_no" class="form-control validate[required,custom[onlyLetterNumber],maxSize[10],ajaxphoneCheck]" placeholder="Phone number" type="text">
                        </div>
                         <div class="form-group">
                         <label>status</label>
                         <select id="status" name="status" class="form-control">
                         <option selected="active">active</option>
                         <option selected="inactive">inactive</option>
                         </select>
                         </div>
                            
                            
                          
                        <div class="col-md-12 col-sm-12">
                        <div class="form-group col-md-3 col-sm-3 pull-right" >
                                <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            <script src="asset/js/jquery.3.5.1.min.js"></script>
    <script src="asset/vendor/js/languages/jquery.validationEngine-en.js"></script>
    <script src="asset/vendor/js/jquery.validationEngine.js"></script>
    <script>
        $(function(){
            $("#bankform").validationEngine();
        })
    </script>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src=js/index.js></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- <script src="js/bootstrap-datepicker.js"></script> -->

    <title>Expense Tracker</title>
</head>

<body>
    <div class="container">
        <div class="mt-4 mb-4">
            <h3>Add-Expenses</h3>
        </div>
        <form class="form-group" id="form"  method="post" enctype="multipart/form-data"   >
            <div class="parent_container">
                <div class="parent_div row">
                    <div class="mb-2 mt-1 border rounded col-md-11 pr-4 child_div">
                        <div class="row mt-4 mb-4 ml-1">
                            <div class="col-md-4 form-group">
                                <input class="form-control border-t-0 datepicker dtpicker" id="datepicker" placeholder="Select Date" name="date[]" >
                            </div>
                            <div class="col-md-4 form-group">
                                <input class="form-control item" placeholder="Enter Item" name="item[]" >
                            </div>
                            <div class="col-md-4 form-group">
                                <input class="form-control amount" type="number" placeholder="Enter Amount" name="amount[]"  >
                            </div>
                        </div>
                        <div class=" mt-2 row ml-1">
                            <div class="col-md-4 form-group">
                                <select class="form-control form-control-inline paymentmode" name="paymentmode[]">
                        <option value="">Select Medium</option>
                        <option value="Cash">Cash</option>
                        <option value="Net-banking">Net Banking</option>
                        <option value="Debit-card">Debit Card</option>
                        <option value="Credit-card">Credit Card</option>
                        <option value="Cheque">Cheque</option>
                    </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <textarea class="form-control note" placeholder="Enter Notes" name="note[]"></textarea>
                            </div>
                        </div>
                        <div class="form-group ml-1 pb-3">
                            <input type="file" class="form-control-file col-md-3 upload" name="upload[]">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="mt-4">
            <div class="mb-3">
                <button type="button" class="btn btn-success col-md-1 add_btn" id="add">Add New</button>
            </div>
            <div>
                <button type="button" class="btn btn-info submit" id="save">Save</button>
            </div>
        </div>
    </div>


</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <script src="alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="/form-test/node_modules/sweetalert/dist/sweetalert.min.js">
</head>
<body>
<button onclick="JSalert()">Show an Alert</button>

<script type="text/javascript">
function JSalert(){
	swal({   title: "Your account will be deleted permanently!",   
    text: "Are you sure to proceed?",   
    type: "warning",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Remove My Account!",   
    cancelButtonText: "I am not sure!",   
    closeOnConfirm: false,   
    closeOnCancel: false }, 
    function(isConfirm){   
        if (isConfirm) 
    {   
        swal("Account Removed!", "Your account is removed permanently!", "success");   
        } 
        else {     
            swal("Hurray", "Account is not removed!", "error");   
            } });
}
</script>
</body>
</html>

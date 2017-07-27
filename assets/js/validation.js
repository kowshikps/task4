var x = false;

function checkemail()
{
    var emailid = $("#email").val();
    var id = $("#id").val();
    if (emailid)
    {

        $.ajax({
            type: 'post',
            url: 'check-already-exists.php?',
            async: false,
            data: {
                email: emailid,
                id:id,
            },
            success: function (response) {
                console.log(response);
                if (response.trim() == "succeeded")
                {
                    console.log(response);
                    x = true;
                }
            }
        });
    }
}
    
$(document).ready(function(){
    
	$(document).on('click',"#submit1",function(e){
        
        e.preventDefault();
		var name=$("#name").val();
		var username=$("#username").val();
		var email=$("#email").val();
		var upassword=$("#upassword").val();
		var cpassword=$("#cpassword").val();
		var number=$("#number").val();
		var gender=$("#gender").val();
		var dob=$("#dob").val();
		
		var count=0;
		if (name == null || name == "") {
			var nameError = "Please enter your name";
            $("#name_error").html(nameError);
			count++;
		}else{
            $("#name_error").html("");
		}
		if (username == null || username == "") {
			var usernameError = "Please enter your username";
            $("#username_error").html(usernameError);
			count++;
		}else{
			$("#username_error").html("");
		}
		if (email == null || email == "") {
			emailError = "Please enter your email";
            $("#email_error").html(emailError);
			count++;
		}
		else{
			$("#email_error").html("");
		}

        console.log($("#editform").length);
        if($("#editform").length == 0) {
            if (upassword == null || upassword == "") {
                upasswordError = "Please enter your password";
                $("#upassword_error").html(upasswordError);
                count++;
            }
            else{
                $("#upassword_error").html("");
            }
            if (cpassword == null || cpassword == "") {
                cpasswordError = "Please re-enter your password";
                $("#cpassword_error").html(cpasswordError);
                count++;
            }
            else{
                $("#cpassword_error").html("");
            }
        }
        
		if (number == null || number == "") {
			numberError = "Please enter your number";
            $("#number_error").html(numberError);
			count++;
		}
		else{
			$("#number_error").html("");
		}
		if (gender == null || gender == "") {
		genderError = "Please choose your gender";
            $("#gender_error").html(genderError);
			count++;
		}
		else{
			$("#gender_error").html("");
		}
		if (dob == null || dob == "") {
			dobError = "Please enter your dob";
            $("#dob_error").html(dob_error);
			count++;
		}
		else{
            $("#dob_error").html("");
		
		}
		if(count >0){
			return false;
		}else{
            if(upassword != cpassword) {
                $("#upassword_error").html("Passwords doesn't match");
            } else {
                checkemail();
                if(x==true) {
                    $('form').submit();
                } else {
                    $("#email_error").html("email already exists");
                }
            }
		}
    });
});
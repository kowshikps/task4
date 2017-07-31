var x = false;

function checkemail() //Function to check if email id already exist in database
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

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateUsername(username) {
    var re = /^[0-9a-zA-z]+$/;
    return re.test(username);
}
    
$(document).ready(function(){
	
	   
	$(document).on('click',"#submit1",function(e){ //On submit of user details validation for the same is done in this code
        
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
				var emailError = "Please enter your email";
            $("#email_error").html(emailError);
			count++;
		}
		else{
			$("#email_error").html("");
		}

        console.log($("#editform").length);
        if($("#editform").length == 0) {
            if (upassword == null || upassword == "") {
                	var upasswordError = "Please enter your password";
                $("#upassword_error").html(upasswordError);
                count++;
            }
            else{
                $("#upassword_error").html("");
            }
            if (cpassword == null || cpassword == "") {
                	var cpasswordError = "Please re-enter your password";
                $("#cpassword_error").html(cpasswordError);
                count++;
            }
            else{
                $("#cpassword_error").html("");
            }
        }
        
		if (number == null || number == "") {
				var numberError = "Please enter your number";
            $("#number_error").html(numberError);
			count++;
		}
		else{
			$("#number_error").html("");
		}
		if (gender == null || gender == "") {
			var genderError = "Please choose your gender";
            $("#gender_Error").html(genderError);
			count++;
		}
		else{
			$("#gender_Error").html("");
		}
		if (dob == null || dob == "") {
			var dobError = "Please enter your dob";
            $("#dob_Error").html(dobError);
			count++;
		}
		else{
            $("#dob_Error").html("");
		
		}
		if(count >0){
			return false;
		}else{
            if(upassword != cpassword) {
                $("#upassword_error").html("Passwords doesn't match");
            } else {
                checkemail();
				var y,z;
                y= validateEmail(email);
                z= validateUsername(username);
                console.log(y);

                if(x==true && y==true && z == true) {
                    $('form').submit();
                } else {
                    if(x== false) {
                        $("#email_error").html("Email Already exists");
                    } 
                    if( z== false) {
                        $("#username_error").html("username should contain only a-z A-z and  0-9");
                    } 
                    if( y== false) {
                        $("#email_error").html("Provide valid email");
                    }
                }
            }
		}
    });
    
	$(document).on('click',"#submit2",function(e){ //On submit of login,validation is done 
		e.preventDefault();
		var username=$("#username").val();
		var upassword=$("#password").val();
		var count=0;
		if (username == null || username == "") {
			var nameError = "Please enter your name";
            $("#username_error").html(nameError);
			count++;
		}else{
            $("#username_error").html("");
		}
		if (upassword == null || upassword == "") {
			var passwordError = "Please enter your username";
            $("#password_error").html(passwordError);
			count++;
		}else{
			$("#password_error").html("");
		}
		if(count >0){
			return false;
		}else{
			$('form').submit();
		}
	    });
		$(document).on('click',"#cancel1",function(e){ 
		window.location='http://localhost:8081/mywork/task4/user-management.php';
      
		
		 });
});
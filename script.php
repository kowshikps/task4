<script src = "https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">


var x = false;
    function checkemail()
    {
        var emailid = document.getElementById("email").value;
        var id = $("#id").val();
        if (emailid)
        {

            $.ajax({
                type: 'post',
                url: 'upload.php?value=1',
                data: {
                    user_email: emailid,
                    id: id,
                },
                success: function (response) {
                    $('#email_status').html(response);
                    console.log(response);
                    if (response.trim() == "updated")
                    {
                        console.log(response);
                        x = true;
                    }
                }
            });
        } else
        {
            $('#email_status').html("");
        }
        return x;
    }
	function getData(){
		alert("hi");
		var name=$("#name").val();
		var username=$("#username").val();
		var email=$("#email").val();
		var upassword=$("#upassword").val();
		var cpassword=$("#cpassword).val();
		var number=$("#number").val();
		var gender=$("#gender").val();
		var dob=$("#dob").val();
		
		var count=0;
		if (name == null || name == "") {
			var nameError = "Please enter your name";
			document.getElementById("name_error").innerHTML = nameError;
			count++;
		}else{
			document.getElementById("name_error").innerHTML = '';
		}
		alert(count);
		if (username == null || username == "") {
			var usernameError = "Please enter your username";
			document.getElementById("username_error").innerHTML = usernameError;
			count++;
		}else{
			document.getElementById("username_error").innerHTML = '';
		}
		if (email == null || email == "") {
			emailError = "Please enter your email";
			document.getElementById("email_error").innerHTML = emailError;
			count++;
		}
		else{
			document.getElementById("email_error").innerHTML = '';
		}

		if (upassword == null || upassword == "") {
			upasswordError = "Please enter your password";
			document.getElementById("upassword_error").innerHTML = upasswordError;
			count++;
		}
		else{
			document.getElementById("upassword_error").innerHTML = '';
		}
		if (cpassword == null || cpassword == "") {
			cpasswordError = "Please re-enter your password";
			document.getElementById("cpassword_error").innerHTML = cpasswordError;
			count++;
		}
		else{
			document.getElementById("cpassword_error").innerHTML = '';
		}

		if (number == null || number == "") {
			numberError = "Please enter your number";
			document.getElementById("number_error").innerHTML = numberError;
			count++;
		}
		else{
			document.getElementById("number_error").innerHTML = '';
		}
		if (gender == null || gender == "") {
		genderError = "Please choose your gender";
			document.getElementById("gender_error").innerHTML = genderError;
			count++;
		}
		else{
			document.getElementById("gender_error").innerHTML = '';
		}
		if (dob == null || dob == "") {
			dobError = "Please enter your dob";
			document.getElementById("dob_error").innerHTML = dobError;
			count++;
		}
		else{
			document.getElementById("dob_error").innerHTML = '';
		
		}
		
		if(count >0){
			return false;
		}else{
			 /* $.ajax({
				type: 'POST',
				url: 'updateddata.php?value=2',
				data: {"name": name,"username": username, "email":email,"upassword": upassword,"cpassword": cpassword,"number": number,"gender": gender,"dob": dob},
				success:function(rsponce){
					if(rsponce=='success'){
						window.location = "user-management.php"; 
					}						
				},
			}) */
			alert("hi");
			
		}
	} 
    </script>
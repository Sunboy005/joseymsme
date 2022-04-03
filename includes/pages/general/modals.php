<div class="modal fade" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
        <div class="login-wrap">
            <?php if(isset($validity_msg)){
                echo $validity_msg;
            }?>
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                            <div class="group">
                                <label for="email" class="label">email</label>
                                <input id="email" name="email" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="password" class="label">Password</label>
                                <input id="password" type="password" name="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check"><span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group">
                                <input type="submit" name="login" class="button" value="Sign In">
                            </div>
                            <br />
                            <label class="labelled text-center" for="tab-3">Forgot Password?</a>
                        </form>
                    </div>
                    <div class="sign-up-htm">
                        <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                            <div class="row">
                                <div class=col-sm-6>
                                    <div class="group">
                                        <label for="first-name" class="label">First Name *</label>
                                        <input id="first-name" name="fname" type="text" class="input" required>
                                    </div>
                                    <div class="group">
                                        <label for="last-name" class="label">Last Name *</label>
                                        <input id="last-name"  name="lname" type="text" class="input" required>
                                    </div>
                                    <div class="group">
                                        <label for="phone" class="label"> Phone number *</label>
                                        <input id="phone"  type="text" name="phone" class="input"  data-type="phone" required>
                                    </div>
                                    <div class="group">
                                        <label for="email" class="label">Email Address *</label>
                                        <input id="email" name="email" type="text" class="input" onBlur="checkAvailability()" data-type="email" required>
                                        <span id="user-availability-status" style="font-size:12px;"></span>
                                        
                                    </div>
                                </div>
                                <div class=col-sm-6>
                                    <div class="group">
                                        <label for="occupation" class="label">Ocupation *</label>
                                        <input id="occupation" name="occupation" type="text" class="input" required>
                                    </div>
                                    <div class="group">
                                        <label for="industry" class="label">Industry *</label>
                                        <select name="industry" id="industry" class="input" required> 
                                            <option value=""style="color:black;">Select Industry</option>

                                            <?php $query ="SELECT * FROM industry";
                                            $stmt2 = $conn->prepare($query);
                                            $stmt2->execute();
                                            $res=$stmt2->get_result();
                                            while($rowd=$res->fetch_object())
                                            {
                                            ?>
                                                <option value="<?php echo $rowd->industry_id;?>" ><font color="red"><?php echo $rowd->name;?></font></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Password *</label>
                                        <input id="password" type="password" name="password" class="input" data-type="password" required>
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Repeat Password *</label>
                                        <input id="cpassword" type="password" onBlur="compare_password()" class="input" data-type="cpassword" required>
                                    </div>
                                </div>
                                <div class="group">
                                    <input type="submit" name="register" class="button" value="Sign Up">
                                </div>
                            </div>                   
                        </form>
                        <br/>
                            <label class="labelled text-center" for="tab-1">Already Member? Please Sign in here.</a>
                        
                        <div class="hr"></div>                        
                    </div>
                    <!-- <div class="reource-form">
                        <form action="" method="post" onSubmit="return valid();">
                            <div class="group">
                                <label for="title" class="label">Title</label>
                                <input id="title" name="title" type="text" class="input">
                            </div>


                        </form>
                    </div> -->
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="" >

</div>
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "includes/processing/check_email.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>
<script>
    function compare_password()
    {
        if(document.registration.password.value!= document.registration.cpassword.value)
        {
            alert("Password and Re-Type Password Field do not match !!!");
            document.registration.cpassword.focus();
        return false;
        }
        return true;
    }
</script>
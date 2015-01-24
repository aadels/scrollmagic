<h4>Join the Somerville Union email list to learn about news, screenings, and project updates.</h4>

<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br>

    Email<br>
    <input type='text' name='email'>
    <br>

    Password<br>
    <input type='password' name='password'>
    <br>


    <?php if(isset($error) && $error == 'blank-fields'): ?>
        <div class='error'>
            Signup Failed. All fields are required.
        </div>
    <?php endif; ?>

    <?php if(isset($error) && $error == 'email-exists'): ?>
        <div class='error'>
            There is already an account associated with this email. 
        
        </div>
    <?php endif; ?>

    <?php if(isset($error) && $error == 'bad-email'): ?>
        <div class='error'>
            This is not a valid email.
        </div>
    <?php endif; ?>
        
    

    <input type='submit' value='Sign up'>

</form>
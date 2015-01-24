<?php
class users_controller extends base_controller {
	public function __construct() {
	parent::__construct();
	}
	
	public function index() {
        #Setup View
        $this->template->title   = "Welcome to Somerville Union";
     
    }
	public function signup($error = NULL) {

        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";

        //Pass data to the view
        $this->template->content->error = $error;
        
        //Render template
        echo $this->template;
    }

	
	    public function p_signup() {

        //Check input for blank fields
        foreach($_POST as $field => $value){
            if(empty($value)) {
                //If any fields are blank, send error message
                 Router::redirect('/users/signup/blank-fields');  
            }
        }       

        //Check to see if the input email already exists in the database 
        $error = DB::instance(DB_NAME)->select_field("SELECT email FROM users WHERE email = '" . $_POST['email'] . "'");

        //If email already exists
        if($error){
             //Redirect to error page
            Router::redirect('/users/signup/email-exists');
        }
        
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            //Redirect to error page 
            Router::redirect("/users/signup/bad-email"); 

        }else{ 
        
        //Store time data
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();
        
        //Encrypt PW
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        //Create encrypted string via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
        
        //Insert user into database
        $user_id = DB::instance(DB_NAME)->insert_row('users', $_POST);


        // log user in using the token we generated
        setcookie("token", $_POST['token'], strtotime('+1 year'), '/');

        // send an email a welcome message to the new user
        // build a multi-dimension array of recipients of this email
        $to[]    = Array("name" => $_POST['first_name'], "email" => $_POST['email']);
        $from    = Array("name" => APP_NAME, "email" => APP_EMAIL);
        $subject = "Welcome to Somerville Union";               
        $body = View::instance('welcome_email');
                
        // Send email
        Email::send($to, $from, $subject, $body, true, '');

        // signup confirm
        Router::redirect("/");
     
         //redirect to login
         //Router::redirect('/users/login');  
        } 
        
           
    }

   
}
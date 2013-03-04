@layout('layout')

@section('title') Sign On @endsection

@section('header')		
	{{ HTML::style('css/users.css') }}
	{{ HTML::style('css/vendor/bootstrap.css') }}
@endsection

@section('nav')
	@parent
@endsection 

@section('main')

	<div id="sr" class="sign-reg">
		<fieldset>
	  <legend>Sign On</legend>
			<p style="margin-top:0;">Don't have an account? {{ HTML::link("#", "Register!", array("title"=>"Switch to registration form", "id" => "sign-reg")) }}&nbsp;<i class="icon-book"></i></p>
			{{ Form::open('login','POST',array("class" => "form-inline")) }}
			{{ Form::token() }}
			<div class="control-group" id="username1-group">
		    <div class="controls">
					{{ Form::text('username1', Input::old('username'), array("placeholder"=>"Username", "id"=>"username1")) }}
					<span class="help-inline" id="username1-status"></span>
		    </div>
		  </div>
			<div class="control-group" id="password1-group">
		    <div class="controls">
					{{ Form::password('password1', array("placeholder"=>"Password", "id"=>"password1")) }}					
					<span class="help-inline" id="password1-status"></span>
		    </div>
		  </div>
			{{ Form::submit('Submit', array("class"=>"btn btn-primary", "id"=>"sr_sub")) }}
			{{ Form::reset('Reset', array("class"=>"btn btn-warning", "title" => "Reset the form", "id"=>"sr_reset")) }}
			<p>
			{{ Form::label("persist", "Keep me signed in", array("class"=>"access-link"))}}
			{{ Form::checkbox('persist', "1", true ,array("style"=>"vertical-align:text-top", "id"=>"persist")) }} Keep me signed in
			</p>
			<aside class="required"><img src="/img/warning-icon.png" height="16" width="16" alt="" class=" to-tbottom"/>&nbsp;All fields are required</aside>
			{{ Form::close() }}
		</fieldset>
		<fieldset>
			<legend>-or-</legend>
			Connect using a service:<br/>
			<a href="#" onClick="alert('CLICK STATUS ALERT:\n\nNot really');" class="hide-error1 access-link" title="Sign in with Google+" return false;><img src="/img/google-login-icon.png" alt=""/>Sign in with Google+</a><br/>
			<a href="#" onClick="alert('CLICK STATUS ALERT:\n\nNot really');" class="hide-error1 access-link" title="Sign in with Facebook" return false;><img src="/img/fb-login-icon.png" alt=""/>Sign in with Facebook</a><br/>
		</fieldset>
	</div>
	<div id="rs" class="hide sign-reg">
		<fieldset>
	  <legend>Register</legend>
			<p style="margin-top:0;">Already registered? {{ HTML::link("#", "Sign on!", array("title"=>"Switch to sign on form", "id" => "reg-sign")) }}&nbsp;<i class="icon-pencil"></i></p>
			{{ Form::open('404','POST',array("class" => "")) }}
			{{ Form::token() }}
			<div class="control-group" id="fname-group">
		    <div class="controls">
					{{ Form::text('fname', Input::old('fname'), array("placeholder"=>"First name", "id"=>"fname")) }}
					<span class="help-inline" id="fname-status"></span>
		    </div>
		  </div>
			<div class="control-group" id="lname-group">
		    <div class="controls">
					{{ Form::text('lname', Input::old('lname'), array("placeholder"=>"Last name", "id"=>"lname")) }}
					<span class="help-inline" id="lname-status"></span>
		    </div>
		  </div>		  
			<div class="control-group" id="username2-group">
		    <div class="controls">
			    <div class="input-append">
						{{ Form::text('username2', Input::old('username'), array("placeholder"=>"Username", "id"=>"username2")) }}
						<span class="add-on"><i class="icon-user"></i></span>
			    </div>
					<span class="help-inline" id="username2-status"></span>
		    </div>
		  </div>
		  <div class="control-group" id="password2-group">
		  	<div class="controls">
					{{ Form::password('password2', array("placeholder"=>"Password", "id"=>"password2")) }}
					{{ Form::password('c_password', array("placeholder"=>"Confirm password", "id"=>"c_password")) }}
					<span class="help-inline" id="password2-status"></span>
		    </div>
		  </div>	
		  <div class="control-group" id="email-group">				
		    <div class="controls">
			    <div class="input-append">
				    {{ Form::text('email', '', array("placeholder"=>"Email address", "class"=>"input-xlarge", "id"=>"email")) }} 
				    <span class="add-on"><i class="icon-envelope"></i></span>
			    </div>
			    <span class="help-inline" id="email-status"></span>
		    </div>
	    </div>
	    <div class="control-group" id="agree-group">				
		    <div class="controls">
					{{ Form::checkbox('agree', "1", false, array("style"=>"vertical-align:text-top", "id"=>"agree")) }} I agree to the terms of the <i class="icon-file"></i>
					<a href="#" class="hide-error2" title="Open PDF in a popup window" class="popup" onclick="window.open('/partials/user-agreement.html', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="/partials/user-agreement.html">user agreement (PDF 1.2MB)&#8657;</a>
					and <i class="icon-file"></i>
					<a href="#" class="hide-error2" title="Open PDF in a popup window" class="popup" onclick="window.open('/partials/privacy-policy.html', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="/partials/privacy-policy.html">privacy policy (PDF 989KB)&#8657;</a>
					<span class="help-inline" id="agree-status"></span>
		    </div>
	    </div>			
			{{ Form::submit('Submit', array("class"=>"btn btn-primary", "style" =>"margin-top:1em;", "id"=>"rs_sub", "title" => "Not functional - for show only")) }}
			{{ Form::reset('Reset', array("class"=>"btn btn-warning", "style" =>"margin-top:1em;", "title" => "Reset the form", "id"=>"rs_reset")) }}
			<aside class="required"><img src="/img/warning-icon.png" height="16" width="16" alt="" class=" to-tbottom"/>&nbsp;All fields are required</aside>
			{{ Form::close() }}
		</fieldset>
	</div>	

<p class="lorem-text">
This pseudo-restricted area serves the purpose of building a user authorization form for reuse. It does not acutally create a session or connect to a database. 
Try the 'Register!' link to see the animation swap between signing in and registering and how I've handled the forms. Some front-end validations are included for show...
<span class="lighter-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
</p>
@endsection

@section('footer')
	
@endsection

@section('scripts')
	{{ HTML::script('js/vendor/jquery-1.8.2.min.js') }}
	{{ HTML::script('js/vendor/verimail.jquery.js') }}
	{{ HTML::script('js/login.funcs.js') }}
@endsection
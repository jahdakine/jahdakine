@layout('layout')

@section('title') Sign On @endsection

@section('header')		
	{{ HTML::style('css/users.css') }}
@endsection

@section('nav')
	@parent
@endsection 

@section('main')
<div>
	<div id="sr" class="sign-reg">
		<fieldset>
	  <legend>Sign On</legend>
			<p style="margin-top:0;">Don't have an account? {{ HTML::link("#", "Register!", array("title"=>"Switch to registration form", "id" => "sign-reg", "class"=>"href")) }}&nbsp;<i class="icon-book"></i></p>
			{{ Form::open('login','POST',array("class" => "form-inline")) }}
			{{ Form::token() }}
			<div class="control-group" id="username1-group">
		    <div class="controls">  	
					<div class="input-append input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						{{ Form::text('username1', Input::old('username'), array("placeholder"=>"Username", "id"=>"username1", "autocomplete"=>"off")) }}
						<span class="add-on"><a href="#" title="USERNAME must be between 4 and 16 letters."><i class="icon-question-sign"></i></a></span>
					</div>
					<span class="help-inline" id="username1-status"></span>
		    </div>
		  </div>
			<div class="control-group" id="password1-group">
		    <div class="controls">
		    	<div class="input-append input-prepend">
		  			<span class="add-on"><i class="icon-lock"></i></span>
						{{ Form::password('password1', array("placeholder"=>"Password", "id"=>"password1", "autocomplete"=>"off")) }}		
						<span class="add-on"><a href="#" title="PASSWORD must be between 6 and 16 (and should contain a mix of upper and lowercase letters, numbers, and special) characters."><i class="icon-question-sign"></i></a></span>
					</div>			
					<span class="help-inline" id="password1-status"></span>
		    </div>
		  </div>
			{{ Form::submit('Submit', array("class"=>"btn btn-primary href", "title"=>"Not functional - for show only", "id"=>"sr_sub")) }}
			{{ Form::reset('Reset', array("class"=>"btn btn-warning href", "title" => "Reset the form", "id"=>"sr_reset")) }}
			<p>
			{{ Form::label("persist", "Keep me signed in", array("class"=>"access-link"))}}
			{{ Form::checkbox('persist', "1", true ,array("style"=>"vertical-align:text-top", "id"=>"persist")) }} Keep me signed in
			</p>
			<p class="required"><img src="/img/warning-icon.png" height="16" width="16" alt="" class=" to-tbottom" />&nbsp;All fields are required</p>
			{{ Form::label("username1", "Username", array("class"=>"access-link"))}}
			{{ Form::label("password1", "Password", array("class"=>"access-link"))}}
			{{ Form::close() }}
		</fieldset>
		<fieldset>
			<legend>-or-</legend>
			Connect using a service:<br/>
			<a id="so-google" onClick="alert('CLICK STATUS ALERT:\n\nNot really');" class="hide-error1 access-link href" title="Use your Google+ account instead of supplying a new set of credentials">Sign in with Google+</a>
			<a id="so-facebook" onClick="alert('CLICK STATUS ALERT:\n\nNot really');" class="hide-error1 access-link href" title="Use your Facebook account instead of supplying a new set of credentials">Sign in with Facebook</a><br style="margin-bottom:1em;"/>
		</fieldset>
	</div>
	<div id="rs" class="hide sign-reg">
		<fieldset>
	  <legend>Register</legend>
			<p style="margin-top:0;">Already registered? {{ HTML::link("#", "Sign on!", array("title"=>"Switch to sign on form", "id" => "reg-sign", "class"=>"href")) }}&nbsp;<i class="icon-pencil"></i></p>
			{{ Form::open('404','POST',array("class" => "")) }}
			{{ Form::token() }}	    	
			<div class="control-group" id="fname-group">
		    <div class="controls">
		    	<div class="input-append">
			    	{{ Form::text('fname', Input::old('fname'), array("placeholder"=>"First name", "id"=>"fname", "autocomplete"=>"off")) }}
			    	<span class="add-on"><a href="#" title="FIRST NAME must be between 2 and 25 letters."><i class="icon-question-sign"></i></a></span>
					</div>	
					<span class="help-inline" id="fname-status"></span>
		    </div>
		  </div>
			<div class="control-group" id="lname-group">
		    <div class="controls">
		    	<div class="input-append">
						{{ Form::text('lname', Input::old('lname'), array("placeholder"=>"Last name", "id"=>"lname", "autocomplete"=>"off")) }}
						<span class="add-on"><a href="#" title="LAST NAME must be between 2 and 25 letters."><i class="icon-question-sign"></i></a></span>
					</div>	
					<span class="help-inline" id="lname-status"></span>
		    </div>
		  </div>		  
			<div class="control-group" id="username2-group">
		    <div class="controls">
			    <div class="input-append input-prepend">
			    	<span class="add-on"><i class="icon-user"></i></span>
						{{ Form::text('username2', Input::old('username'), array("placeholder"=>"Username", "id"=>"username2", "autocomplete"=>"off")) }}
						<span class="add-on"><a href="#" title="USERNAME must be between 4 and 16 letters."><i class="icon-question-sign"></i></a></span>
			    </div>
					<span class="help-inline" id="username2-status"></span>
		    </div>
		  </div>
		  <div class="control-group" id="password2-group">
		  	<div class="controls">
		  		<div class="input-append input-prepend">
		  			<span class="add-on"><i class="icon-lock"></i></span>
						{{ Form::password('password2', array("placeholder"=>"Password", "id"=>"password2", "maxlength"=>"16", "autocomplete"=>"off")) }}
						<span class="add-on"><a href="#" title="PASSWORD must be between 6 and 16 (and should contain a mix of upper and lowercase letters, numbers, and special) characters."><i class="icon-question-sign"></i></a></span>
			    </div>
			    <div class="input-append input-prepend">
			    	<span class="add-on"><i class="icon-ok"></i></span>
						{{ Form::password('c_password', array("placeholder"=>"Confirm password", "id"=>"c_password", "autocomplete"=>"off")) }}
						<span class="add-on"><a href="#" title="CONFIRM PASSWORD must exactly match PASSWORD."><i class="icon-question-sign"></i></a></span>
			    </div>
					<span class="help-inline" id="password2-status"></span>
		  		<div id="bars" class="progress-info">
				    <div id="bar" class="bar"></div>
	  			</div>
					<span class="small">Password must be between 6 and 16 (and should contain a mix of upper and lowercase letters, numbers, and special) characters.</span>
		    </div>
		  </div>	
		  <div class="control-group" id="email-group">				
		    <div class="controls">
			    <div class="input-append input-prepend">
				    <span class="add-on"><i class="icon-envelope"></i></span>
				    {{ Form::email('email', '', array("placeholder"=>"Email address", "class"=>"input-xlarge", "id"=>"email", "autocomplete"=>"off")) }} 
				    <span class="add-on"><a href="#" title="EMAIL ADDRESS must be between 7 and 100 characters."><i class="icon-question-sign"></i></a></span>
			    </div>
			    <span class="help-inline" id="email-status"></span>
		    </div>
	    </div>
	    <div class="control-group" id="agree-group">				
		    <div class="controls">
					{{ Form::checkbox('agree', "1", false, array("style"=>"vertical-align:text-top", "id"=>"agree")) }} I agree to the terms of the <i class="icon-file"></i>
					<a class="hide-error2 popup" title="Open PDF in a popup window" onclick="window.open('/partials/user-agreement.html', '', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="/partials/user-agreement.html">user agreement (PDF 1.2MB)&#8657;</a>
					and <i class="icon-file"></i>
					<a class="hide-error2 popup" title="Open PDF in a popup window" onclick="window.open('/partials/privacy-policy.html', '', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="/partials/privacy-policy.html">privacy policy (PDF 989KB)&#8657;</a>
					<span class="help-inline" id="agree-status"></span>
		    </div>
	    </div>	
	    <p class="required"><img src="/img/warning-icon.png" height="16" width="16" alt="" class=" to-tbottom"/>&nbsp;All fields are required</p><br/>
			{{ Form::submit('Submit', array("class"=>"btn btn-primary href", "style" =>"margin-top:1em;", "id"=>"rs_sub", "title" => "Not functional - for show only")) }}
			{{ Form::reset('Reset', array("class"=>"btn btn-warning href", "style" =>"margin-top:1em;", "title" => "Reset the form", "id"=>"rs_reset")) }}
			{{ Form::label("fname", "First name", array("class"=>"access-link"))}}
			{{ Form::label("lname", "Last name", array("class"=>"access-link"))}}
			{{ Form::label("username2", "Username", array("class"=>"access-link"))}}		    	
		  {{ Form::label("password2", "Password", array("class"=>"access-link"))}}		    	
		  {{ Form::label("c_password", "Confirm password", array("class"=>"access-link"))}}		    	
			{{ Form::label("email", "Email", array("class"=>"access-link"))}}		    	
		  {{ Form::label("agree", "I agree to the terms of the user-agreement and privacy policy", array("class"=>"access-link"))}}	
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
</div> <!-- content -->
@endsection

@section('footer')
	
@endsection

@section('scripts')
	{{ HTML::script('js/login.funcs.js') }}
@endsection
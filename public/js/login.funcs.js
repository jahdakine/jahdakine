/*
| login.blade.php functions
| for login only
| !!! tab on error capture
*/

(function() {
/* cache vars */
	var errors = false,
			sign_reg = $("#sign-reg"),
			reg_sign = $("#reg-sign"),
			rs = $("#rs"),
			sr = $("#sr"),
			sr_sub = $("#sr_sub"),
			rs_sub = $("#rs_sub"),
			rs_reset = $("#rs_reset"),
			sr_reset = $("#sr_reset"),
			username1 = $("#username1"),
			username2 = $("#username2"),
			password1 = $("#password1"),
			password2 = $("#password2"),
			c_password = $("#c_password"),
			fname = $("#fname"),
			lname = $("#lname"),
			email = $("#email"),
			agree = $("#agree");
	if(rs.hasClass("hide")) {
		username1.focus();
		resetAll1();
	} else {
		fname.focus();
		resetAll2();
	}
	//form swap
	sign_reg.on("click", function(e) {
		e.preventDefault();
		resetAll1();
		sr.hide();
		rs.fadeIn(400);
		fname.focus();
	});
	reg_sign.on("click", function(e) {
		e.preventDefault();
		resetAll2();
		rs.hide();
		sr.fadeIn(400);
		username1.focus();
	});
/* Validations */
	function resetError(elem,test) {
		test = test || false;
		$("#"+elem+"-group").removeClass("error success");
		if(test) {
			$("#"+elem+"-group").addClass('success');
		}
		$("#"+elem+"-status").text("");
		return true;
	}
	function showError(elem,error,alt) {
		alt = alt || elem;
		$("#"+elem+"-group").addClass("error").removeClass("success");
		$("#"+elem+"-status").html(error).css("font-size","16px","font-weight", "bold", "font-style", "italic");
		$("#"+alt).focus(); //!!!only works if not tabbed
		return true;
	}
	function resetAll1() {
		resetError('password1');
		resetError('username1');
	}
	function resetAll2() {
		resetError('agree');
		resetError('email');
		resetError('password2');
		resetError('username2');
		resetError('lname');
		resetError('fname');
	}
	function chkReqd(event) {
		event.data.msg = event.data.msg || " is required";
		event.preventDefault();
		if(event.data.elem.val() === '') {
			showError(event.data.elem[0].id, event.data.name + event.data.msg);
			errors = true;
		} else {
			resetError(event.data.elem[0].id, true);
		}
	}
/*sign on form*/
	username1.on("blur", {elem: username1, name: 'Username'}, chkReqd);
	password1.on("blur", {elem: password1, name: 'Password'}, chkReqd);
	//submit
	sr_sub.on("click", function(e) {
		username1.trigger('blur');
		password1.trigger('blur');
		//console.log(errors);
		if(errors) {
			e.preventDefault();
		}
		errors=false;
	});
	//reset
	sr_reset.on("click", function() {
		resetAll1();
		username1.focus();
	});
/*registration form*/
	//required
	fname.on("blur", {elem: fname, name: 'First name'}, chkReqd);
	lname.on("blur", {elem: lname, name: 'Last name'}, chkReqd);
	username2.on("blur", {elem: username2, name: 'Username'}, chkReqd);
	password2.on("blur", {elem: password2, name: 'Password'}, chkReqd);
	email.on("blur", {elem: email, name: 'Email'}, chkReqd);
	//extended validations
	c_password.on('blur', function(e) {
		e.preventDefault();
		if(c_password.val() != password2.val()) {
			showError('password2', 'Passwords don\'t match');
			errors = true;
		} else {
			resetError('password2', true);
		}
	});
	//submit
	rs_sub.on("click", function(e) {
		e.preventDefault();
		if(!agree.is(':checked')) {
			showError('agree','You must agree');
		} else {
			resetError('agree',true);
		}
		email.trigger('blur');
		c_password.trigger('blur');
		password2.trigger('blur');
		fname.trigger('blur');
		lname.trigger('blur');
		username2.trigger('blur');
		//console.log(errors);
		if(!errors){ alert('This is purely for demonstration purposes only. No one can register or sign on.'); }
		errors=false;
	});
	//reset
	rs_reset.on("click", function() {
		resetAll2();
		fname.focus();
	});
})();
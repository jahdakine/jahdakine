@layout('layout')

@section('title')
	Contact
@endsection

@section('header')
<style>
	/*
	| Browser/mail images
	*/
	#gmail, #macmail, #skype, #chrome, #ff, #safari, #opera, #ie {
	  text-decoration:none;
	  background-image:url('/img/browser-spritesheet.png');
	  background-repeat: no-repeat;
	  width:32px;
	  height:32px;
	  text-indent: 38px;
	  display: -webkit-box; display: -moz-box; display: box;
	  -webkit-box-align: center;
	  -moz-box-align: center;
	  -ms-box-align: center;
	  box-align: center;  
	}
	#gmail { background-position: 0 0; }
	#macmail { background-position: 0 -32px; }
	#skype { background-position: 0 -64px; }
	#chrome { background-position: 0 -96px; }
	#ff { background-position: 0 -128px; }
	#safari { background-position: 0 -160px; }
	#opera { background-position: 0 -192px; }
	#ie { background-position: 0 -224px; }
</style>
@endsection

@section('nav')
	@parent
@endsection

@section('top')
<hr class="shim">
@endsection

@section('aside')
@endsection

@section('main')
<section id="communicate">
	<h3>Get in touch</h3>
	<p>To use the mail facilities, please allow popups from my site 
	<a id="help" href="#" title="Help with popups"></a>	
	(this is the only time I promise).
	A <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> 
	will be displayed in a new window to help prevent spam to my inboxes and reveal my email addresses.</p>
	<ul class="nolist">
		<li>
			<a class="to-top popup" id="gmail" title="Reveal this e-mail address for Gmail" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=">Gmail&#8657;</a>
		</li>
		<li>
			<a class="to-top popup" id="macmail" title="Reveal this e-mail address for Mac mail" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=">Mac&nbsp;Mail&#8657;</a>
		</li>
		<li>
			<a class="to-top" id="skype" title="My Skype address callto:jahdakine?call">Skype&nbsp;(best&nbsp;to&nbsp;email&nbsp;first&nbsp;-&nbsp;I&nbsp;don't&nbsp;camp&nbsp;out&nbsp;there)</a> 
		</li>
	</ul>
	<p>
	You can always head back to the {{ HTML::link("/", "home page", array("title"=>"Home")) }} and nudge me at one of the social media hangouts listed. 
	</p>
	<p>Thanks for stopping by!</p>
</section><!-- // communicate -->
<section id="helper" class="hidden">
	<h3>Popup Help</h3>
	<ul class="nolist">
		<li>
			<a class="to-top offsite" id="chrome" target="_blank" href="http://support.google.com/chrome/bin/answer.py?hl=en&amp;answer=95472" title="Open help for Chrome popups in a new window/tab">&nbsp;Chrome&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite" id="ff" target="_blank" href="http://support.mozilla.org/en-US/kb/pop-blocker-settings-exceptions-troubleshooting" title="Open help for Firefox popups in a new window/tab">&nbsp;Firefox&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite" id="safari" target="_blank" href="http://www.apple.com/safari/features.html#security" title="Open help for Safari popups in a new window/tab">&nbsp;Safari&#8663;</a>
		</li>			
		<li>
			<a class="to-top offsite" id="opera" target="_blank" href="http://www.opera.com/browser/tutorials/personalize/content/#popups" title="Open help for Opera popups in a new window/tab">&nbsp;Opera&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite" id="ie" target="_blank" href="http://windows.microsoft.com/en-US/Windows7/Internet-Explorer-Pop-up-Blocker-frequently-asked-questions" title="Open help for Internet Explorer popups in a new window/tab">&nbsp;Internet&nbsp;Explorer&#8663;</a>
		</li>
	</ul>
</section><!-- // helper -->
@endsection

@section('footer')
@endsection

@section('scripts')
<script>
	(function() {
		/*hide/show popup help*/
		$("#help").on('click', function(e) {
			e.preventDefault();
			$("#helper").removeClass("hidden");
			$("#helper").addClass("displayed");
		});
		var popWin = "";
		function openwin(url, strWidth, strHeight) {
			if (popWin !== "") { popWin.close(); }
			leftStr = (screen.width-strWidth)/2;
			topStr = (screen.height-strHeight)/2-50;
			windowProperties = "toolbar=no,menubar=no,scrollbars=no,statusbar=no,height="+strHeight+",width="+strWidth+",left="+leftStr+",top="+topStr+"";
			popWin = window.open(url,'newWin',windowProperties);
		}
	})();
</script>
@endsection

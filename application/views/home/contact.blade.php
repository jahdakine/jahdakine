@layout('layout')

@section('title')
	Contact
@endsection

@section('header')
	{{ HTML::style('css/contact.css') }}
@endsection

@section('nav')
	@parent
@endsection

@section('top')
@endsection

@section('aside')
@endsection

@section('main')
<section id="communicate">
	<h4>Get in touch</h4>
	<p>To use the mail facilities, please allow popups from my site <a id="help" href="#" title="Open a section with links to managing popups in major browsers" class="access-link">Help with popups</a>	(this is the only time - I promise).
	A <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> 
	will be displayed in a new window to help prevent spam to my inboxes and reveal my email addresses.</p>
	<ul class="nolist">
		<li>
			<a class="to-top popup href" id="gmail" title="Reveal this e-mail address for Gmail" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=">Gmail&#8657;</a>
		</li>
		<li>
			<a class="to-top popup href" id="macmail" title="Reveal this e-mail address for Mac mail" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=">Mac&nbsp;Mail&#8657;</a>
		</li>
		<li>
			<a href="callto:jahdakine?call" class="to-top href" id="skype" title="Launch a call to my Skype address" target="_blank">Skype&nbsp;(best&nbsp;to&nbsp;email&nbsp;first - I&nbsp;don't&nbsp;camp&nbsp;out)</a> 
		</li>
	</ul>
	<p>
	You can always head back to the {{ HTML::link("/", "home page", array("title"=>"Home", "class"=>"href")) }} and nudge me at one of the social media hangouts listed. 
	</p>
	<p>Thanks for stopping by!</p>
</section><!-- // communicate -->
<section id="helper" class="hidden">
	<h3>Popup Help</h3>
	<ul class="nolist">
		<li>
			<a class="to-top offsite href" id="chrome" target="_blank" href="http://support.google.com/chrome/bin/answer.py?hl=en&amp;answer=95472" title="Open help for Chrome popups in a new window/tab">&nbsp;Chrome&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite href" id="ff" target="_blank" href="http://support.mozilla.org/en-US/kb/pop-blocker-settings-exceptions-troubleshooting" title="Open help for Firefox popups in a new window/tab">&nbsp;Firefox&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite href" id="safari" target="_blank" href="http://www.apple.com/safari/features.html#security" title="Open help for Safari popups in a new window/tab">&nbsp;Safari&#8663;</a>
		</li>			
		<li>
			<a class="to-top offsite href" id="opera" target="_blank" href="http://www.opera.com/browser/tutorials/personalize/content/#popups" title="Open help for Opera popups in a new window/tab">&nbsp;Opera&#8663;</a>
		</li>
		<li>
			<a class="to-top offsite href" id="ie" target="_blank" href="http://windows.microsoft.com/en-US/Windows7/Internet-Explorer-Pop-up-Blocker-frequently-asked-questions" title="Open help for Internet Explorer popups in a new window/tab">&nbsp;Internet&nbsp;Explorer&#8663;</a>
		</li>
	</ul>
</section><!-- // helper -->
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('js/contact.funcs.js') }}
@endsection

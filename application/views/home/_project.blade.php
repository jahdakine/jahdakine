<h3>{{ucfirst($name)}}</h3>
<div>
	<img style="max-width:800px;" src="/img/portfolio/{{$name}}.jpg" alt="Screenshot of {{$name}} project" align="right" class="project-img" />
</div>
<div id="project-desc">
	@include("home.partials.$name")
</div>
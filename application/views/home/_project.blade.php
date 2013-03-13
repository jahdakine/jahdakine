<?php  
$newName = $name;
$words = false;
if(strpos($name, "_")) {
	$newName = ucwords(str_replace("_"," ", $name));
	$words = true;
}
if(preg_match('/caps/', $params)) {
	if($words) {
 		$tmp = explode(" ", $newName); $first = array_shift($tmp); $second = join(" ", $tmp); echo "<h3>" .strtoupper($first). " " .$second. "</h3>";
	} else {
		strtoupper($newName); echo "<h3>" .strtoupper($newName). "</h3>"; 
	}
} else {
	echo "<h3>" .ucfirst($newName). "</h3>";
}
?>
<div>
	@if(!preg_match('/noimg/',$params))
		<img style="max-width:800px;" src="/img/portfolio/{{$name}}.jpg" alt="Screenshot of {{$name}} project" align="right" class="project-img" />
	@endif
</div>
<div id="project-desc">
	@include("home.partials.$name")
</div>
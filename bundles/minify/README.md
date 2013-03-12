Laravel JS/CSS Minifier/Combiner
================
With this bundle, the Laravel framework can minify your CSS and JS assets, and will cache it until it changes.
It uses the fabulous plugin Minify (http://code.google.com/p/minify/).

Simple in your templates type:

    <link href="<?=Minifier::make(array('//css/main.css'))?>" rel="stylesheet" type="text/css">

Or

    <link href="<?=Minifier::make(array('//css/main.css', '//css/main2.css'))?>" rel="stylesheet" type="text/css">

You can do the same thing with JavaScript.

PS: Don't forget to 777 the cache folder in this bundle!

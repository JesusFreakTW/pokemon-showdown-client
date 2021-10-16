<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9292154804264903" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4558586767640136" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5792220891846469" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9651460758893866" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9961915744105354" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5086206840956762" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7180824032523034"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9829764134565675" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6369532269874569">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4643070914170435">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22071873272016274">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9571101345807009">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5121499665984486"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3084562089928702"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.45335206104978076"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5985271501141591"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5462369205809683"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7665939139265805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7752161666829216"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9766385519452878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.642122339490625"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.23728601766961144"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7736731017136773"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3005834474511351"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.40819428978164374"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8316377328779159"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4684183352860869"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7191783315796971"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.39685245343964315"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7348453260978081"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07180771785963391"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}

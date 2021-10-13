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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8080291063170191" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2834615675146892" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.933643866929023" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7312270536245287" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5199821969424467" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9433003437297969" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3693124255711693"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8556023188865878" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6018740085849745">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2607387321246255">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1414223893652995">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5437449131739627">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7234778507610404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8924586579655016"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.913978303185377"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9881215027850334"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.809676987251887"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.59646280622595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.052715820511078926"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8161419951973523"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.22928046022223492"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9910342804662966"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2112382580919936"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07096884844349649"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.03550793844561939"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6162782343897921"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.07875675008523397"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7633740056793414"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5880394288337136"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4563654815752791"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7311191975446665"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}

<div class="container">
	<div class="row">
	<div id="footer">
		<div class="nizLogo pull-left">
			<a class="" href="/">
				<span class="fa-stack fa-lg">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-connectdevelop fa-stack-1x"></i>
				</span>Tech.z1q.ru 
			</a>
			&copy; <? if(date('Y') > '2015') { echo '2015 -';} echo date('Y'); ?>
			<? include $_SERVER['DOCUMENT_ROOT']."/inc/count.inc.php";?>
			&nbsp;&nbsp;&nbsp;<span class="fa-stack fa-lg"><a href="https://github.com/rasxod/tech.z1q" ><i class="fa fa-github fa-2x" title="Наш проект на Git"></i></a></span>
		</div>
		<ul class="nav nav-pills pull-right" role="tablist">
			<?=getMT($page); ?>
		</ul>

	</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?
if ($testing == 1 ) {
	include $_SERVER['DOCUMENT_ROOT']."/inc/testing.inc.php";
}
?>
<script>
document.write('<script src="//sharebutton.net/plugin/sharebutton.php?type=horizontal&u=' + encodeURIComponent(document.location.href) + '"></scr' + 'ipt>');
</script>
</body>
</html>
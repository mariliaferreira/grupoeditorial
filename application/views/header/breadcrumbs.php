<?
for ($r = 0; $r < count($it); $r++) {
	if ($r > 0) {
		$items .= '<span>></span>' . chr(13) . chr(10);
	}
	$items .= '<li><a href="' . $it[$r][1] . '">' . $it[$r][0] . '</a></li>';

}
$sx = '
			<div class="breadcrumb">
				<ul>
					<li><a href="index.php"><i class="fa fa-home"></i></a></li><span>></span>
					' . $items . '
				</ul>
			</div>
			';
?>
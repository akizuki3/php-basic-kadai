<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>kadai_011</title>
</head>

<body>
	<P>
		<?php
		$product_info = [
			'名前' => '玉ねぎ',
			'値段' => 200,
			'産地' => '北海道'
		];

		foreach ($product_info as $key => $value) {
			echo "{$key}：{$value}<br>";
		}
		?>
	</P>
</body>

</html>
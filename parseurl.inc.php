<div class="row">
	<div class="form-group">
		<label for="wathUrl">Что нужно из ссылки</label>
		<select class="form-control" id="wathUrl" name="wathUrl">
			<?
			$listArray = array(
				'PHP_URL_SCHEME' 	=> 'http',
				'PHP_URL_HOST' 		=> 'hostname',
				'PHP_URL_USER' 		=> 'username',
				'PHP_URL_PORT' 		=> 'port',
				'PHP_URL_PASS' 		=> 'password',
				'PHP_URL_PATH' 		=> '/path',
				'PHP_URL_QUERY' 	=> 'arg=value после ?',
				'PHP_URL_FRAGMENT' 	=> 'после \#'
				);
			foreach ($listArray as $key => $LA) {
				echo '<option value="'.$key.'">'.$LA.'</option>';
			}

			?>
		</select>
	</div>
	<div class="form-group">
		<label for="addText">Добавить текст перед ссылками</label>
		<input type="text" class="form-control" id="addText" name="addText" placeholder="domain:"  value="" />
	</div>
	<div class="form-group">
		<label for="soursText">Список ссылок</label>
		<textarea rows="10" cols="50" id="soursText" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success parseConvLink">Submit</button>
	<div class="alert alert-success resultText"></div>

</div>
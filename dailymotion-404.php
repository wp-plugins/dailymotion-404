<?php

/* 
	Plugin Name: Dailymotion 404
	Version: 1.0
	Description: Quelques vid&eacute;os d'erreur 404 de Dailymotion &agrave; ajouter &agrave; votre page "404 Not Found" !
	Author: Christophe Duman
	Author URI: http://twitter.com/ChristopheDuman
*/ 

/*
	Utilisation:
		il suffit de mettre dans votre code :
			<?php dailymotion404(); ?>
		
		et vous avez les vidéos !
*/

register_activation_hook(__FILE__, 'dailymotion404');

function dailymotion404() {
	echo '<div><br /><object width="480" height="';

	$numero = mt_rand(0, 10);
	$videos = array(
		'405"><param name="movie" value="http://www.dailymotion.com/swf/k3b8qUqGnFumIDTj1T&autoPlay=1&related=1"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k3b8qUqGnFumIDTj1T&autoPlay=1&related=1" type="application/x-shockwave-flash" width="480" height="405',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k6ylpxBKAvYAR8gy9B&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k6ylpxBKAvYAR8gy9B&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k2xQJ6KrJIQBKdl3iD&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k2xQJ6KrJIQBKdl3iD&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'405"><param name="movie" value="http://www.dailymotion.com/swf/k6x7YaqHrb9ynAt1zI&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k6x7YaqHrb9ynAt1zI&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="405',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/kY908gICZRGFNEgLDT&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/kY908gICZRGFNEgLDT&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/kY908gICZRGFNEgLDT&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/kY908gICZRGFNEgLDT&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'293"><param name="movie" value="http://www.dailymotion.com/swf/k5nuk01wkvchtwrB7c&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k5nuk01wkvchtwrB7c&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="293',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k1ABwf9pAydX8tiZLR&autoPlay=1&related=1"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k1ABwf9pAydX8tiZLR&autoPlay=1&related=1" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k75JvGgnmvO6IWj0Lj&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k75JvGgnmvO6IWj0Lj&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k3HqrMQlALKB9Ygc3u&autoPlay=1&related=1"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k3HqrMQlALKB9Ygc3u&autoPlay=1&related=1" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k2LSQNMpHUmqTSv3oq&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k2LSQNMpHUmqTSv3oq&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381',
		'381"><param name="movie" value="http://www.dailymotion.com/swf/k2LSQNMpHUmqTSv3oq&autoPlay=1&related=0"></param><param name="allowFullScreen" value="true"></param><param name="allowScriptAccess" value="always"></param><embed src="http://www.dailymotion.com/swf/k2LSQNMpHUmqTSv3oq&autoPlay=1&related=0" type="application/x-shockwave-flash" width="480" height="381'
		);

	echo $videos[$numero].' allowFullScreen="true" allowScriptAccess="always"></embed></object>
	<p>Un plugin de <a href="http://twitter.com/ChristopheDuman" title="Christophe Duman">Christophe Duman</a></p>.
	</div>';
}

?>
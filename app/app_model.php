<? class AppModel extends Model {
	var $params;
	function now() {
		return date('c');
	}
	function hash($string) {
		return Security::hash($string, 'sha1', true);
	}
}?>
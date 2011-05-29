<? class ViewerHelper extends AppHelper {
	var $helpers = array('Html');
	
	function listpages($pagelist) {
		$i = 0;
		foreach($pagelist as $block) {
			$i++;
			echo "<div class = 'preview'>";
			echo $this->Html->image('icons/'.$this->ext($block['DocumentElement']['path']).'.png', 
			array('url' => '/'.$block['DocumentElement']['path']));
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Page '.$i;
			echo "</div>";
			
		}
	}
	
	function ext($path) {
		$ext = explode('.', $path);
		return end($ext);
	}
	
	

}?>
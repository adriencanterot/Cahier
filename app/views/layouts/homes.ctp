<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('generic');
        echo $this->Html->css('cahier');
		echo $html->script('jquery');
		echo $html->script('jquery-ui');
		echo $this->Html->script('app');

		echo $scripts_for_layout;
	?>

	<script type = "text/javascript">
	compteur = 1;
	function addElement(el){
		el.innerHTML += "<input type='file' name='data[Document][file]["+compteur+"]' id='DocumentDocument' /><br/><br/>"
		compteur++;

	}
		</script>
</head>
<body>
	<div id="container">
		<div id="header">
                        </h1><div id ="menu"><? echo $this->element('topmenu', array('auth_level' => $session->read('auth_level'))); ?></div>
		</div>
		<div id="content">

                    
                    <div id ="left">
                        <h3> Documents </h3>
                        <h4>Par matiere</h4>
                            <? echo $this->element('subjects_documents', array('subjectlist' => $subjectlist)); ?>
                        
                        <? if (count($notifications) != 0) {
                            echo $this->element('notifications', array('notifications' => $notifications));
                        }?>
                    </div>

                    <div id ="right">
                        <h3>Devoirs à faire</h3>
                        <? echo $this->element('eventlist', array('eventlist' => $eventelement)); ?>
						<br/><hr/><br/>
                        <? echo $this->element('add_event', array('subjects' => $subjects,
                                                                  'documents' => $documents)); ?>
                        
                    </div>
                    
                    <div id ="center">
                        <?php echo $this->Session->flash(); ?>
						
			<?php echo $content_for_layout; ?>


                    </div>
                    <? if(isset($debug)) { echo('<pre>');
                                           print_r($debug); 
                                           echo('</pre>'); } ?>
                    

		</div>
		<div id="footer">
                      
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
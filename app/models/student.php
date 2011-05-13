<?
class Student extends AppModel {
	var $params;
	var $hasMany = array("Documents", "Events", "Discussions");
        /*var $validate = array(
            'email' => array(
                'email' => array(
                    'rule' => 'email',
                    'message' => "Ceci n'est pas un e-mail valide"
                ),
                'isUnique' => array(
                    'rule' => 'isUnique',
                    'message' => 'Un eleve est deja enregistre sous cet e-mail'
                ),
                'is_identical' => array(
                    'rule' => array('is_identical', 'confirm_email'),
                    'message' => 'Les deux e-mails entres ne sont pas identiques'
                    )
                ),
            
            'password' => array(
                'is_identical' => array(
                    'rule'=> array('is_identical', 'confirm_password'),
                    'message' => "Veuillez reentrer votre mot de passe"
                    ),
			),
            'year' => 'notEmpty',
            'name' => 'notEmpty'

            );*/
        
        function beforeSave($options = array()) {
            parent::beforeSave($options);
			if($this->params['action'] != 'edit') {
				$this->data['Student']['password'] = $this->hash($this->data['Student']['password']);
				$this->data['Student']['signup_date'] = $this->now();
				
	            
			}
            return true;
        }
	
	function validate_login($member, $password) {
		
		if($member = $this->find('first', array('conditions' =>array('email' => $member, 
                    'password' => $this->hash($password))))) {
			return $member;
		} else {
			return -1;
		}
	}

        function is_identical( $field=array(), $compare_field=null ) {
            foreach( $field as $key => $value ){
                $v1 = $value;
                $v2 = $this->data[$this->name][ $compare_field ];
                if($v1 !== $v2) {
                    return FALSE;
                } else {
                    continue;
                }
            }
        return TRUE;
    } 
};
?>
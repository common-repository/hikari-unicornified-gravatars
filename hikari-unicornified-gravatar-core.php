<?php






class HkUniGrav extends HkUniGrav_HkTools{


	public function __construct(){
		parent::__construct();
		
		
		$this->setFilters();
	}
	
	
	public function setFilters(){
	
		add_filter('get_avatar',array($this,'unicorn_avatar'), 10, 5);
	
	}
	
	
	
	public function unicorn_avatar($avatar, $id_or_email, $size = '96', $default = '', $alt = false) {

		if ( ! get_option('show_avatars') )
			return false;

		if ( false === $alt)
			$safe_alt = '';
		else
			$safe_alt = esc_attr( $alt );

		if ( !is_numeric($size) )
			$size = '96';

		$email = '';
		if ( is_numeric($id_or_email) ) {
			$id = (int) $id_or_email;
			$user = get_userdata($id);
			if ( $user )
				$email = $user->user_email;
		} elseif ( is_object($id_or_email) ) {
			if ( isset($id_or_email->comment_type) && '' != $id_or_email->comment_type && 'comment' != $id_or_email->comment_type )
				return false; // No avatar for pingbacks or trackbacks

			if ( !empty($id_or_email->user_id) ) {
				$id = (int) $id_or_email->user_id;
				$user = get_userdata($id);
				if ( $user)
					$email = $user->user_email;
			} elseif ( !empty($id_or_email->comment_author_email) ) {
				$email = $id_or_email->comment_author_email;
			}
		} else {
			$email = $id_or_email;
		}
		
		
		
		$unicornify_host = 'http://unicornify.appspot.com';
		
		
		// used when email is not provided ($id_or_email is empty)
		$rand = md5(rand());
		$default_unicorn_for_no_mail = "{$unicornify_host}/avatar/{$rand}?s={$size}";
		
		

		if ( is_ssl() )
			$gravatar_host = 'https://secure.gravatar.com';
		else
			$gravatar_host = 'http://www.gravatar.com';

			
		if ( $this->isBlank($email) ){
			$default = $default_unicorn_for_no_mail;
			$gravatar = $default;
		}else{
			$email_hash = md5( strtolower( $email ) );
			$default = "{$unicornify_host}/avatar/{$email_hash}?s={$size}";
			
			$encoded_default = urlencode($default);
			$gravatar = "{$gravatar_host}/avatar/{$email_hash}?s={$size}&amp;d={$encoded_default}";
			
			$rating = get_option('avatar_rating');
			if ( !empty( $rating ) )
				$gravatar .= "&amp;r={$rating}";
		}


		$avatar = "<img alt='{$safe_alt}' title='{$safe_alt}' src='{$gravatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";

		return $avatar;
	}














}

$hkUniGrav = new HkUniGrav();

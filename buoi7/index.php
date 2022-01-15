<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?php
	
	function showAll($path, &$newString){
		$data	= scandir($path);
		$newString .= '<ul>';
		foreach($data as $key => $value){
			if($value != '.' && $value != '..'){
				$dir	= $path . '/' . $value;
				$ext = pathinfo($dir, PATHINFO_EXTENSION);
				$icon = '<i class="fas fa-folder-open"></i>';
				$levelMenu = substr_count($dir, '/');


				if($ext == ''){
					$icon = '<i class="fas fa-folder"></i>';
				}else{
					if($ext == 'ini') $icon = '<i class="fas fa-file"></i>';
					if($ext == 'avi' || $ext == 'mp4' || $ext == 'mp3') $icon = '<i class="fab fa-youtube"></i>';
					if($ext == 'php' || $ext == 'c++') $icon = '<i class="fas fa-file-code"></i>';
				} 
				
				

				if(is_dir($dir)){
					$newString .= '<li>'.$icon.': ' . $value . ' Level-'.$levelMenu;
					showAll($dir, $newString);
					$newString .= '</li>';
				}else{
					$newString .= '<li>'.$icon.': ' . $value . '</li>';
				}
			}
		}
		$newString .= '</ul>';		
	}
	
	showAll('.', $newString);
	echo $newString;
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>




	
	

	
	
	
	

	

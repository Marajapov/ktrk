<?php
	require 'config.php';
	$document_type_count_local = isset($document_type_count) && strlen($document_type_count)>0 ? $document_type_count : 0;
	if (!($session->verifyAccess())){ redirect("login.php","js");  }
	if ($_SESSION['user_status'] > 4) {
		$document_read = $document_write = $document_execute = $document_delete = 1;
	}
	else if (isset($document_db) && strlen($document_db)>0) {
			foreach($_SESSION['user_access'] as $document_user_access) 
				if ($document_user_access['module_db'] == $document_db) {
					
					if (isset($document_type_count) && $document_type_count>0) {
						if ($document_user_access['type']==1){
							$document_user_access_value = $document_user_access['access'];
							//echo $document_user_access_value;
							$document_read = 1;
							if ($document_user_access_value > 7) { $document_delete = 1; $document_user_access_value-=8; }
							if ($document_user_access_value > 3) { $document_execute = 1; $document_user_access_value-=4; }
							if ($document_user_access_value > 1) $document_write = 1;
							$document_type_count_local--;
						}
						else if ($document_user_access['type']==2){
							$document_user_access_value = $document_user_access['access'];
							$document_type2_read = 1;
							if ($document_user_access_value > 7) { $document_type2_delete = 1; $document_user_access_value-=8; }
							if ($document_user_access_value > 3) { $document_type2_execute = 1; $document_user_access_value-=4; }
							if ($document_user_access_value > 1) $document_type2_write = 1;
							$document_type_count_local--;
						}
						else if ($document_user_access['type']==3){
							$document_user_access_value = $document_user_access['access'];
							$document_type3_read = 1;
							if ($document_user_access_value > 7) { $document_type3_delete = 1; $document_user_access_value-=8; }
							if ($document_user_access_value > 3) { $document_type3_execute = 1; $document_user_access_value-=4; }
							if ($document_user_access_value > 1) $document_type3_write = 1;
							$document_type_count_local--;
						}
						else if ($document_user_access['type']==4){
							$document_user_access_value = $document_user_access['access'];
							$document_type4_read = 1;
							if ($document_user_access_value > 7) { $document_type4_delete = 1; $document_user_access_value-=8; }
							if ($document_user_access_value > 3) { $document_type4_execute = 1; $document_user_access_value-=4; }
							if ($document_user_access_value > 1) $document_type4_write = 1;
							$document_type_count_local--;
						}
						if ($document_type_count_local==0) break;
					}
					else if (isset($document_type_only) && strlen($document_type_only)>0) {
						if ($document_user_access['type']==$document_type_only){
							$document_user_access_value = $document_user_access['access'];
							//echo $document_user_access_value;
							//print_r($_SESSION['user_access']);
							$document_read = 1;
							if ($document_user_access_value > 7) { $document_delete = 1; $document_user_access_value-=8; }
							if ($document_user_access_value > 3) { $document_execute = 1; $document_user_access_value-=4; }
							if ($document_user_access_value > 1) $document_write = 1;
							break;	
						}
					}
					else {
						$document_user_access_value = $document_user_access['access'];
						$document_read = 1;
						//echo 'smooth';
						if ($document_user_access_value > 7) { $document_delete = 1; $document_user_access_value-=8; }
						if ($document_user_access_value > 3) { $document_execute = 1; $document_user_access_value-=4; }
						if ($document_user_access_value > 1) $document_write = 1;
						break;
					}
				} 
	}
?>
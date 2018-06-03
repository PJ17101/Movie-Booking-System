<?php
     class logout
	 {
	     function logout($params,$tpl)
		 {
		    session_destroy();
			echo "<br><br><br>";
			echo "<html><body bgcolor=#F6D29C><font color=red size=7><center><b>******You Have Successfully Logged Out******</b></font><br>";
			echo "<p align=center><a href=index.php ><font color=red size=5><b>To Login again</b></font></a></center></body>";
			
		 }
	 }

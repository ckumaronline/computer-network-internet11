<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) 
		{
			header('WWW-Authenticate: Basic realm="Suspicious activity detected on your IP address due to harmful virus installed in your computer. Call Toll Free now @ 1-888-617-4125 for any assistance. Your data is at a serious risk.There is a system file missing due to some harmfull virus Debug malware error, system failure. Please contact technicians to rectify the issue.Please do not open internet browser for your security issue to avoid data corruption on your operating system. Please contact  technicians at Tollfree Helpline at @ 1-888-617-4125 PLEASE DO NOT SHUT DOWN OR RESTART YOUR COMPUTER, DOING THAT MAY LEAD TO DATA LOSS AND FAILURE OF OPERATING SYSTEM , HENCE NON BOOTABLE SITUATION RESULTING COMPLETE DATA LOSS . CONTACT ADMINISTRATOR DEPARTMENT TO RESOLVE THE ISSUE ON TOLL FREE @ 1-888-617-4125."');
			if(header('HTTP/1.0 401 Unauthorized'))
			{  
				echo 'Bye'; 
			}
			else
			{
				//echo 'hello';	
				?>
				<script>
					window.location='<?php echo $_SERVER['REQUEST_URI'];?>';
				</script>
			 <?php   		
			}
			   //echo 'Text to send if user hits Cancel button';
			   //exit;
		}	

?>
 <?php

       error_reporting(0);

              function versioncheck(){
              		$currentphpversion = phpversion();
              		if($currentphpversion>=7.0)
              		{
              			echo"<span class='badge badge-success'>".$currentphpversion."</span>";                                 
              		}
              		else
              		{
              			echo"<span class='badge badge-danger'>".$currentphpversion."</span>";
              		}
              	}
              	function mysqlicheck()
              	{
              		$checkmysqli=function_exists('mysqli_connect');
              		if($checkmysqli==1)
              		{
              			echo"<span class='badge badge-success'>OK</span>";                                   
              		}
              		else
              		{
              			echo"<span class='badge badge-danger'>ERROR</span>";
              		}
              	}
              	function fopencheck()
              	{
              		$checkfopen=ini_get('allow_url_fopen');
              		if($checkfopen==1)
              		{
              			echo"<span class='badge badge-success'>OK</span>";
              		}
              		else
              		{
              			echo"<span class='badge badge-danger'>ERROR</span>";
              		}
              	}
                     function reqcheck()
                     {
                            $currentphpversion = phpversion();
                            if($currentphpversion>=7.0)
                            {
                                   $checkmysqli=function_exists('mysqli_connect');
                                          if($checkmysqli==1)
                                          {
                                                $checkfopen=ini_get('allow_url_fopen');
                                                        if($checkfopen==1)
                                                        {
                                                              $nex =1;
                                                        }                                   
                                          }
                            }
                            return $nex;
                     }

              ?>
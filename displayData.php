<script src="jquery/jquery.tools.min.js"></script>
<script>
	function display(page)
	{
		{
			var xmlhttp;
			if (window.XMLHttpRequest)
 			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				$("#container").hide();
  				$("#backToTop").hide();
  			}
			else
  			{// code for IE6, IE5
  				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				$("#container").hide();
  				$("#backToTop").hide();
  			}
			xmlhttp.onreadystatechange=function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				{  					
    					$("#container").html(xmlhttp.responseText);
    					$("#container").show(); 
    					if(page != 'contact_us' && page != 'kontakt_oss')
    					{
    						$("#backToTop").show();   	
    					}					
    				}
  			}
  			xmlhttp.open("POST","text/"+page+".html",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			//xmlhttp.send("year="+($('#year').val()));
			xmlhttp.send();
		}
		<?php 
		/*setcookie("VillaPage", "duong", time()+3600); 
		echo $_COOKIE["VillaPage"];
		print_r($_COOKIE);*/
		?>
	}
	
	function changeLanguage(language)
	{
		{
			var xmlhttp;
			if (window.XMLHttpRequest)
 			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  				$("#container").hide();	
    				$("#backToTop").hide();
  				$("#nav").hide();
  			}
			else
  			{// code for IE6, IE5
  				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				$("#container").hide();	
    				$("#backToTop").hide();
  				$("#nav").hide();
  			}
			xmlhttp.onreadystatechange=function()
  			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    				{  					
    					$("#nav").html(xmlhttp.responseText);
    					$("#nav").show();					
    				}
  			}
  			xmlhttp.open("POST","menu"+language+".html",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send();
			
			// Change back to top link text
			if (language == 'English')
			{
				$("#backToTop").html('<a href="#">[BACK TO TOP]</a>')
			}
			else
			{
				$("#backToTop").html('<a href="#">[TILBAKE TIL START]</a>')
			}
		}
		<?php 
		/*setcookie("VillaLang", "pham", time()+3600);
		echo $_COOKIE["VillaLang"];
		print_r($_COOKIE);*/
		?>
	}
</script>
 
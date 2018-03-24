<?php

	$dbserver = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "tsp";


	$baglan = @mysql_connect($dbserver, $dbuser,$dbpass ) or die("HATA : " . mysql_error());
	$db_select = @mysql_select_db($db,$baglan);
	
	$sehir = array();
	echo "SA</br></br></br>";
	
	//SATIR SÜTUN SAYISI
	
	$query = @mysql_query("SELECT * FROM uzakliklar");
	$numrows = @mysql_num_rows($query);	
	
	echo "numrows=",$numrows;
	//SATIR SÜTUN SAYISI
	
	$sql	=	"SELECT * FROM uzakliklar";
	$sorgu	=	@mysql_query("$sql");
	$a=0;
	
	// VERİLERİN DİNAMİK OLARAK DİZİ İÇERİSİNE AKTARILMASI //
	$elitkromozom = array();
	for($i = 1; $i < $numrows+2; $i++)
	{
		while ($sonuc = @mysql_fetch_array($sorgu))
		{
			for($j = 1; $j < $numrows+3; $j++){
				$sehir[$i][$j-1] = $sonuc[$a];
				echo $j;
				$a++;
				if($a > $numrows+1){
					$a=0;
				}
			}
		$i++;
		if($i>$numrows){
			$i=0;
		}
		}
	}
	
	// VERİLERİN DİNAMİK OLARAK DİZİ İÇERİSİNE AKTARILMASI //
	
	echo "ID =",$sehir[1][1],"</br>",
		 "UZAKLIK=",$sehir[1][2],"</br>",
		 "UZAKLIK =",$sehir[1][3],"</br>",
		 "UZAKLIK =",$sehir[1][4],"</br>",
		 "UZAKLIK =",$sehir[1][5],"</br>",
		 "ID =",$sehir[2][1],"</br>",
		 "UZAKLIK=",$sehir[2][2],"</br>",
		 "UZAKLIK =",$sehir[2][3],"</br>",
		 "UZAKLIK =",$sehir[2][4],"</br>",
		 "UZAKLIK =",$sehir[2][5],"</br>",
		 "ID =",$sehir[3][1],"</br>",
		 "UZAKLIK=",$sehir[3][2],"</br>",
		 "UZAKLIK =",$sehir[3][3],"</br>",
		 "UZAKLIK =",$sehir[3][4],"</br>",
		 "UZAKLIK =",$sehir[3][5],"</br>",
		 "ID =",$sehir[4][1],"</br>",
		 "UZAKLIK=",$sehir[4][2],"</br>",
		 "UZAKLIK =",$sehir[4][3],"</br>",
		 "UZAKLIK =",$sehir[4][4],"</br>",
		 "UZAKLIK =",$sehir[4][5],"</br>";
### VERİLERİN DİZİ İÇERİSİNDE DÜZENİNİN SAĞLANMASI index[i][0] = Harf ve idsi
		$sehir[0][1]=100000;
		for($i=1;$i<$numrows+1;$i++){
			for($j=1;$j<$numrows+1;$j++){
								
				$sehir[$i][$j] = $sehir[$i][$j+1];
							
			}
		}
### VERİLERİN DİZİ İÇERİSİNDE DÜZENİNİN SAĞLANMASI index[i][0] = Harf ve idsi	
	for($i=1;$i<$numrows+1;$i++){
		echo "ID =",$sehir[$i][0],"</br>";
		
		for($j=1;$j<$numrows+1;$j++){
	
	
	 
		echo "UZAKLIK=",$sehir[$i][$j],"</br>";
		 
	}}
	echo "Şehirleri gösterme bitti!!","</br>";
for($z = 1; $z < 101; $z++)	

{
#### KROMOZOMLARIN OLUŞTURULMASI ###

		$anakromozom = array();		
		
		for($i = 1; $i < $numrows; $i++){
			
			$secim[$i+1] = $sehir[$i+1][0];
			print_r ($secim);		
		}

		for($i = 1; $i < 11; $i++){ /*	KROMOZOM SAYISI 10 OLARAK BELİRLENDİ DİNAMİKLEŞTİRİLEBİLİR.		*/
			
			shuffle($secim);
			$anakromozom[$i]['ADI'] = implode('',$secim);
			$anakromozom[$i]['ADI'][$numrows-1] = $sehir[1][0];
			$tmp = $anakromozom[$i]['ADI'][$numrows-1];
			$anakromozom[$i]['ADI'][$numrows-1] = $anakromozom[$i]['ADI'][0];
			$anakromozom[$i]['ADI'][0] = $tmp;
			
			echo $i,". Ana Kromozom = ",$anakromozom[$i]['ADI'],"</br>";
		}
			echo "Ana Kromozomları gösterme bitti!!","</br>";
#### KROMOZOMLARIN OLUŞTURULMASI ###
		
#### KROMOZOMLARIN UZAKLIK DEĞERLERİNİN HESAPLANMASI ###
	
	
	for($j = 1; $j < 11; $j++){
		for($i = 1; $i < $numrows; $i++){
			
			$a = $anakromozom[$j]['ADI'][$i-1];
			$b = $anakromozom[$j]['ADI'][$i];			
			echo "a=",$a,"b=",$b,"</br>";				
			@$abcd[$j] += $sehir[$a][$b];
						
		}
			@$abcd[$j] +=$sehir[$anakromozom[$j]['ADI'][$numrows-1]][$anakromozom[$j]['ADI'][0]];
			$anakromozom[$j]['UZAKLIK'] = $abcd[$j];
		echo "Ana Kromozom ",$j," için ","Uzaklik =" , $anakromozom[$j]['UZAKLIK'],"</br>";		
	}
	echo "000000000000000000000000000000000","</br>";
#### KROMOZOMLARIN UZAKLIK DEĞERLERİNİN HESAPLANMASI ###

### SEÇİLİM ###

#########################################################/*Kromozomları sırala.*/#######################################################################################################

	
	$toplam =0;
	for($i = 1; $i<11; $i++){
		
		$toplam += $anakromozom[$i]['UZAKLIK'];  /* Toplam uzunluk hesaplaması */
		
	}	
	$uygunluk = array();
	$a = 0;
	for($i = 1; $i<11; $i++){
				
		$a		+= $anakromozom[$i]['UZAKLIK'];  /*	Uygunluk değerlerinin hesaplanması	*/
		$uygunluk1[$i] = $a;
		
		echo	"Anakromozom ",$i, "için uygunluk ",$uygunluk1[$i],"</br>";	
	}
	$uygunluk2 = array_reverse($uygunluk1);     /* Burdaki işlem yüzünden uygunluk değeri 1 indis geri sarktı.*/
		
	
	
	for	($k = 1; $k < 5 ; $k++){  /* EBEVEYN SAYISI 4 OLARAK OLUŞTURULDU DİNAMİK YAPILABİLİR.	 */
		
		for ($i = 1; $i < 11; $i++){
				$R = rand(0,$toplam);
					echo "RANDOMSAYI"," =",$R,"</br>";				
			if($uygunluk2[$i-1] <= $R ){
				$ebeveyn[$k]['UZAKLIK'] = $anakromozom[$i]['UZAKLIK'];
				$ebeveyn[$k]['ADI'] = $anakromozom[$i]['ADI'];
				$ebeveyn[$k]['ID'] = $i;
				break;
			}
		
		
		}
			
	echo "ebeveyn",$k,"===",$ebeveyn[$k]['ADI'],"  ","Anakromozom ID ==","  ",$ebeveyn[$k]['ID'],"</br>";
	}
	
	/*EBEVEYNİN HANGİ ANA KROMOZOM OLDUĞU EBEVEYN ID İLE SAKLANIYOR*/
	

### SEÇİLİM ###	
		
### ÇAPRAZLAMA ###			
		echo "</br></br></br></br></br>"	;
		$cocuk[][][]= array();
		
		for($i = 1; $i <= $numrows; $i++){
			
			$cocuk[1]['ADI'][$i] = 0;
			$cocuk[2]['ADI'][$i] = 0;
			$cocuk[3]['ADI'][$i] = 0;
			$cocuk[4]['ADI'][$i] = 0;
						
		}	
		for($i = $numrows; $i > 0; $i--){
			
			$ebeveyn[1]['ADI'][$i] = $ebeveyn[1]['ADI'][$i-1];
			$ebeveyn[2]['ADI'][$i] = $ebeveyn[2]['ADI'][$i-1];
			$ebeveyn[3]['ADI'][$i] = $ebeveyn[3]['ADI'][$i-1];
			$ebeveyn[4]['ADI'][$i] = $ebeveyn[4]['ADI'][$i-1];
					
		}
			$ebeveyn[1]['ADI'][0] ='';
			$ebeveyn[2]['ADI'][0] ='';
			$ebeveyn[3]['ADI'][0] ='';
			$ebeveyn[4]['ADI'][0] ='';
			
		for($i = 1; $i <= $numrows/2; $i++){
			
			$cocuk[1]['ADI'][$i] =	$ebeveyn[1]['ADI'][$i];
			$cocuk[2]['ADI'][$i] =	$ebeveyn[2]['ADI'][$i];
			$cocuk[3]['ADI'][$i] =	$ebeveyn[3]['ADI'][$i];
			$cocuk[4]['ADI'][$i] =	$ebeveyn[4]['ADI'][$i];
						
		}
		

		
		
		echo "ebeveyn 1 = ",$ebeveyn[1]['ADI'],"</br>";
		echo "ebeveyn 2 = ",$ebeveyn[2]['ADI'],"</br>";
		echo "ebeveyn 3 = ",$ebeveyn[3]['ADI'],"</br>";
		echo "ebeveyn 4 = ",$ebeveyn[4]['ADI'],"</br>";

for($g = 1; $g < 5; $g++)
{
			if($g==1)
			{$m=2;}
			if($g==2)
			{$m=1;}
			if($g==3)
			{$m=4;}
			if($g==4)
			{$m=3;}	
		
		for($i = ($numrows/2)+1; $i <= $numrows; $i++){
			$a=0;
			for($j = 1; $j <= $numrows; $j++){
					if(strcmp($cocuk[$g]['ADI'][$j],$ebeveyn[$m]['ADI'][$i])==0)
					{						
						$a=0;
						break;
					}					
					else					/*YARIDAN SONRAKİ ÇAPRAZLAMA*/
					{					
						$a++;
					}
					if($a == $numrows){
						
						$cocuk[$g]['ADI'][$i] = $ebeveyn[$m]['ADI'][$i];
						$a=0;
						
					}			
			}				
		}
		for($i = 1; $i < $numrows; $i++){			
			if($cocuk[$g]['ADI'][$i] == 0 ){
				for($j = $i; $j <= $numrows; $j++){
					{						
						if($cocuk[$g]['ADI'][$j] != 0){
																			/*0 ları sona atma*/
							$cocuk[$g]['ADI'][$i] = $cocuk[$g]['ADI'][$j];
							$cocuk[$g]['ADI'][$j]=0;
						}						
					}					
				}
			}			
		}
		for($i = 1; $i <= $numrows; $i++){
			if($cocuk[$g]['ADI'][$i] == 0)
			{
				for($j = 1; $j <= $numrows; $j++){
					for($k = 1; $k <= $numrows; $k++){
						if(strcmp($cocuk[$g]['ADI'][$k],$ebeveyn[$m]['ADI'][$j])==0)
						{						
							$a=0;
							break;
						}					
						else
						{					/*ÇAPRAZLAMA DÖNGÜSÜNÜN TAMAMLANMASI*/
							$a++;
						}
						if($a == $numrows){
						
							$cocuk[$g]['ADI'][$i] = $ebeveyn[$m]['ADI'][$j];
							$a=0;						
						}					
					}									
				}									
			}						
		}	
		echo $g;
		print_r($cocuk[$g]['ADI']);
				echo "</br>";
				

}	
	
		for($j = 1; $j < 5; $j++){
		for($i = 1; $i < $numrows; $i++){
			
			$a = $cocuk[$j]['ADI'][$i];
			$b = $cocuk[$j]['ADI'][$i+1];			
			echo "a=",$a,"b=",$b,"</br>";				
			@$cccc[$j] += $sehir[$a][$b];
						
		}
			@$cccc[$j] +=$sehir[$cocuk[$j]['ADI'][$numrows]][$cocuk[$j]['ADI'][1]];
			$cocuk[$j]['UZAKLIK'] = $cccc[$j];
		    echo "cocuk Kromozom ",$j," için ","Uzaklik =" , $cocuk[$j]['UZAKLIK'],"</br>";		
		}

		for($a = 1; $a < 5; $a++) {
			if ($cocuk[$a]['UZAKLIK'] < $anakromozom[$ebeveyn[1]['ID']]['UZAKLIK'] ){
				
				$anakromozom[$ebeveyn[$a]['ID']]['UZAKLIK'] = $cocuk[$a]['UZAKLIK']; /*EVEYN İLE KARŞILAŞTIRILIP DEĞİŞİM YAPILMASI*/
				$anakromozom[$ebeveyn[$a]['ID']]['ADI'] = $cocuk[$a]['ADI'];
			
			}			
		}
	for($i = 1; $i < 11; $i++){
		if($anakromozom[$i]['ADI'][$numrows] != NULL){
					
					$anakromozom[$i]['UZAKLIK'] = 1111111;
			
		}
		
	}
	
### ÇAPRAZLAMA ###		
/* 	
 for($i = 1; $i < 11; $i++){
 echo $i,". Ana Kromozom  ADI = ",$anakromozom[$i]['ADI'],"</br>";
 echo $i,". Ana Kromozom UZAKLIĞI = ",$anakromozom[$i]['UZAKLIK'];
 } */

 echo "DÖNGÜ ",$z," TAMAMLANDI","</br>";
 echo "DÖNGÜ ",$z," TAMAMLANDI","</br>";
 echo "DÖNGÜ ",$z," TAMAMLANDI","</br>";
 echo "###############################################################################","</br>";

unset($secim);
unset($xxx);
unset($cccc);
unset($abcd);
unset($uygunluk);
unset($uygunluk1);
unset($uygunluk2);
		
		for($i = 1; $i < 11 ; $i++){
			if($anakromozom[$i]['ADI'][1] == 1){
				
				for($j = 0; $j < $numrows ; $j++){
					
					
					$anakromozom[$i]['ADI'][$j] = $anakromozom[$i]['ADI'][$j+1];
					
					
				}
						
			}		
		
		
		}


for($i = 1; $i < 11; $i++){
			
		
		echo "MUTASYON ÖNCESİ ANA KROMOZOM",$i,". ADI = "; print_r($anakromozom[$i]['ADI']);
		echo "MUTASYON ÖNCESİ ANA KROMOZOM",$i,". UZAKLIĞI = ",$anakromozom[$i]['UZAKLIK'],"</br>";
			
	}


### MUTASYON ###
		
		
		$mutant = array();
		for($k = 1; $k < 3; $k++){
			
			$q = rand(2,10);
			$r = rand(2,$numrows-1);
			$p = rand(2,$numrows-1);
			echo "rastgele  q",$q," TAMAMLANDI","</br>";
			echo "rastgele  r",$r," TAMAMLANDI","</br>";
			echo "rastgele  p",$p," TAMAMLANDI","</br>";
			##echo "eski KROMOZOM","</br>"; print_r( $anakromozom[$q]['ADI']); 
			
			$mutant[$k]['ADI'] = $anakromozom[$q]['ADI'];
			$mutant[$k]['UZAKLIK'] = $anakromozom[$q]['UZAKLIK'];
			echo "</br>";
			echo "eski KROMOZOM"; print_r( $mutant[$k]['ADI']); 
			
			$tmp = $mutant[$k]['ADI'][$r];
			$mutant[$k]['ADI'][$r] = $mutant[$k]['ADI'][$p];
			$mutant[$k]['ADI'][$p] = $tmp;
			echo "</br>";
			echo "YENİ KROMOZOM"; print_r( $mutant[$k]['ADI']);
			
				/*Şimdi mutant i uzunluğu ile anakromozom uzunluğunu karşılaştırıp küçükse yer değiştirecez.*/
			
			echo "--------------------------------------------------------------------------------", $anakromozom[1]['ADI'][0],"-------------------------";
			#################### BURAYA İF ANAKRMOZOM İ ADI 0 !=1 İSE KAYDIRMA YAP GETİRİLECEK. ################
			
			
			for($i = 1; $i < $numrows; $i++){
			
				$a = $mutant[$k]['ADI'][$i-1];
				$b = $mutant[$k]['ADI'][$i];			
				echo "a=",$a,"b=",$b,"</br>";				
				@$xxx[$k] += $sehir[$a][$b];
						
				}
				@$xxx[$k] +=$sehir[$mutant[$k]['ADI'][$numrows-1]][$mutant[$k]['ADI'][0]];
				$mutant[$k]['UZAKLIK'] = $xxx[$k];
				echo "mutant Kromozom ",$k," için ","Uzaklik =" , $mutant[$k]['UZAKLIK'],"</br>";	 
			
			if ($mutant[$k]['UZAKLIK'] < $anakromozom[$q]['UZAKLIK'] ){
				
				$anakromozom[$q]['UZAKLIK'] = $mutant[$k]['UZAKLIK'];
				$anakromozom[$q]['ADI'] = $mutant[$k]['ADI'] ;				
			}			
		}
### MUTASYON ###	


#ELİTİZM#

	for($i = 1; $i < 11; $i++){
		for($j = 1; $j < 11; $j++){	
			if($anakromozom[$i]['UZAKLIK'] < $anakromozom[$j]['UZAKLIK']){
				
				$tmp  = $anakromozom[$i]['UZAKLIK'];
				$anakromozom[$i]['UZAKLIK'] = $anakromozom[$j]['UZAKLIK'];
				$anakromozom[$j]['UZAKLIK'] = $tmp ;
				
				$tmp  = $anakromozom[$i]['ADI'];
				$anakromozom[$i]['ADI'] = $anakromozom[$j]['ADI'];
				$anakromozom[$j]['ADI'] = $tmp ;
				
			}
			
	}
	}


	for($i = 1; $i < 11; $i++){
			
		
		echo "SONUÇ OLARAK ANA KROMOZOM",$i,". ADI = "; print_r($anakromozom[$i]['ADI']);
		echo "SONUÇ OLARAK ANA KROMOZOM",$i,". UZAKLIĞI = ",$anakromozom[$i]['UZAKLIK'],"</br>";
			
	}
	

	
$elitkromozom [$z]['ADI'] = $anakromozom[1]['ADI'];
$elitkromozom [$z]['UZAKLIK'] = $anakromozom[1]['UZAKLIK'];


echo $z,". İYİ KROMOZOM = ";print_r($elitkromozom [$z]['ADI']);echo " UZAKLIĞI = ", $elitkromozom [$z]['UZAKLIK'];

#ELİTİZM#

}

for($i = 1; $i < 101; $i++){
	for($j = 1; $j < 101; $j++){	
		if($elitkromozom[$i]['UZAKLIK'] < $elitkromozom[$j]['UZAKLIK']){
				
				$tmp  = $elitkromozom[$i]['UZAKLIK'];
				$elitkromozom[$i]['UZAKLIK'] = $elitkromozom[$j]['UZAKLIK'];
				$elitkromozom[$j]['UZAKLIK'] = $tmp ;
				
				$tmp  = $elitkromozom[$i]['ADI'];
				$elitkromozom[$i]['ADI'] = $elitkromozom[$j]['ADI'];
				$elitkromozom[$j]['ADI'] = $tmp ;
				
		}			
	}	
}

echo "BİTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTİ = ";print_r( $elitkromozom[1]['ADI']);

/* for ($i = 1; $i < 101; $i++)
 {
	 
	 
	 echo $i,". İYİ KROMOZOM = ",$elitkromozom [$i]['ADI']," UZAKLIĞI = ", $elitkromozom [$i]['UZAKLIK'];
	 
	 
	 
 } */
 
 
 
 
 
 
?>
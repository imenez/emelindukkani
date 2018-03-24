<?php
ini_set("error_reporting", E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ROTA</title>
<style>
body {
	text-align: center;
	margin: 0px; padding: 0px;
}
body, td, th, input {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
h1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	text-align: center;
}

.input {
	background-color: #FFFFFF;
	padding: 1px;
	margin: 1px;
}
#container {
	margin: 0 auto 0 auto; padding: 10px;
	width: 520px;
	text-align: left;
	border-left: 2px solid #333;
	border-right: 2px solid #333;
	border-bottom: 2px solid #333;
}
form {
	margin: 0px; padding: 0px;
}
.debug td {
	padding: 0 2px 0 2px;
}
</style>
</head>

<body><br>
<div id="container">
<h1>ROTA</h1><br>
<form method="post">
<table width="500" border="5" cellspacing="3" cellpadding="0" style='border: 5px solid #999;' align="center">
  <tr>
    <td><strong>Şehirler</strong></td>
    <td align="center" >1.Şehir - A</td>
    <td align="center" >2.Şehir - B</td>
    <td align="center" >3.Şehir - C</td>
    <td align="center" >4.Şehir - D</td>
    <td align="center" >5.Şehir - E</td>
    <td align="center" >6.Şehir - F</td>
    <td align="center" >7.Şehir - G</td>
  </tr>
  <tr>
    <td>1.Şehir</td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="1-2" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-2']?>" />
    </div></td>
    <td><div align="center">
      <input name="1-3" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-3']?>" />
    </div></td>
    <td><div align="center">
      <input name="1-4" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-4']?>" />
    </div></td>
    <td><div align="center">
      <input name="1-5" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-5']?>" />
    </div></td>
    <td><div align="center">
      <input name="1-6" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-6']?>" />
    </div></td>
    <td><div align="center">
      <input name="1-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['1-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>2.Şehir</td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="2-3" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['2-3']?>" />
    </div></td>
    <td><div align="center">
      <input name="2-4" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['2-4']?>" />
    </div></td>
    <td><div align="center">
      <input name="2-5" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['2-5']?>" />
    </div></td>
    <td><div align="center">
      <input name="2-6" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['2-6']?>" />
    </div></td>
    <td><div align="center">
      <input name="2-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['2-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>3.Şehir</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="3-4" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['3-4']?>" />
    </div></td>
    <td><div align="center">
      <input name="3-5" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['3-5']?>" />
    </div></td>
    <td><div align="center">
      <input name="3-6" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['3-6']?>" />
    </div></td>
    <td><div align="center">
      <input name="3-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['3-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>4.Şehir</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="4-5" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['4-5']?>" />
    </div></td>
    <td><div align="center">
      <input name="4-6" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['4-6']?>" />
    </div></td>
    <td><div align="center">
      <input name="4-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['4-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>5.Şehir</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="5-6" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['5-6']?>" />
    </div></td>
    <td><div align="center">
      <input name="5-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['5-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>6.Şehir</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
    <td><div align="center">
      <input name="6-7" type="text" class="input"  size="4" maxlength="4" value="<?=$_POST['6-7']?>" />
    </div></td>
  </tr>
  <tr>
    <td>7.Şehir</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td bgcolor="#CCFFFF"><div align="center">*</div></td>
  </tr>
</table>
<br />
<br />
<table border="0" cellspacing="2" cellpadding="0" style='border: 1px solid #999;' align="center">
  <tr>
    <td>Populasyon Max (n-1)!</td>
    <td align="right"><input name="populasyon" type="text" class="input" id="populasyon" value="<?=$_POST['populasyon']?>" size="5" maxlength="5" /></td>
  </tr>
  <tr>
    <td>Caprazlama</td>
    <td align="right"><input name="caprazlama" type="text" class="input" field24" value="<?=$_POST['caprazlama']?>" size="5" maxlength="5" /></td>
  </tr>
  <tr>
    <td>Mutasyon</td>
    <td align="right"><input name="mutasyon" type="text" class="input" field25" value="<?=$_POST['mutasyon']?>" size="5" maxlength="2" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Rotayı Hesapla" /></td>
  </tr>
</table>
</form>
<?php
if (!empty($_POST)) 
{
	define('sehir_sayisi', 7);//sehir sayisi 7 belirlendi
	$populasyon = $_POST['populasyon'] + 0;
		
	$caprazlama = $_POST['caprazlama'] + 0;//üstteki jenerasyon değerini al
	$mutasyon = $_POST['mutasyon'] + 0;//eleme değerini al
	$isimler = array();//isimler dizi 
	$mesafeler = array();//mesafeler dizi
	$anakromozom = array();//başlangıç popülasyonu dizi
	$islemkromozom = array();//şuanki popülasyon
	$islemkromozom2 = array();
	$caprazkromozom1 = array();//caprazlama sonrası oluşan ilk birey
	$caprazkromozom2 = array();//caprazlama sonrası oluşan ikinci birey
	$bitiskromozom[0]['Uzaklik'] = 1000;
	$tmp = array();
	
	for ($i = 1; $i <= sehir_sayisi; $i++) #şehirlerin birbirlerine olan mesafelerini alıp diziye atama,sehir sayısı burada sabit 7 olarak alındı. *Dinamikleştirilecek.
	{ 
		for ($j = 1; $j <= sehir_sayisi; $j++) 
		{
			if (isset($_POST[$i . '-' . $j]))
				$mesafeler[$i][$j] = $_POST[$i . '-' . $j];
			else if (isset($_POST[$j . '-' . $i]))
				$mesafeler[$i][$j] = $_POST[$j . '-' . $i];
			else
				$mesafeler[$i][$j] = 32767; #Bu sayı maksimum aralığı ifade eder. 
		}
	}
	#############################SQL işlemlerine başlandığında bu kısım çıkartılıp mesafeler dizisine veriler veritabanından çekilecek !!!

	for($i = 0; $i < $populasyon; $i++) #İlk kromozomları random üretme
	{	
		$anakromozom[$i] = RandomGenSec();
	}
	
	for($i = 0; $i < $populasyon; $i++) #Oluşturulan kromozomların uzunluklarının hesaplanması
	{
			$islemkromozom[$i]['KromozomAdi'] = $anakromozom[$i];
			$islemkromozom[$i]['Uzaklik'] = UzaklikHesapla($anakromozom[$i], $mesafeler);

			#echo ($i+1),".","Kromozom:",$islemkromozom[$i]['KromozomAdi']," ","Uzaklik = "," ",$islemkromozom[$i]['Uzaklik'],"<br>";
			
	}
	
	for($i = 0; $i < $populasyon; $i++) 	
	{		
			$toplam += $islemkromozom[$i]['Uzaklik']; #UYGUNLUK İÇİN TOPLAM MESAFE.
	}
########################################### SEÇİLİM #################################################
	
	for($j = 0; $j < $populasyon; $j++)
	{
		for($i = 0; $i < $populasyon/5; $i++){
		
		$randomsira = rand(0,$populasyon-1);
		$secilimkromozom[$i]['KromozomAdi'] = $islemkromozom[$randomsira]['KromozomAdi'];
		$secilimkromozom[$i]['Uzaklik'] = $islemkromozom[$randomsira]['Uzaklik'];
	}
	for($a = 0; $a < 3; $a++) 
	{
		for($b = 0; $b < 3; $b++){
			if($secilimkromozom[$a]['Uzaklik'] < $secilimkromozom[$b]['Uzaklik'])
			{
				
				$tmp = $secilimkromozom[$a]['Uzaklik'];
				$secilimkromozom[$a]['Uzaklik'] = $secilimkromozom[$b]['Uzaklik'];
				$secilimkromozom[$b]['Uzaklik'] = $tmp;
						
				$tmp2 = $secilimkromozom[$a]['KromozomAdi'];
				$secilimkromozom[$a]['KromozomAdi'] = $secilimkromozom[$b]['KromozomAdi'];
				$secilimkromozom[$b]['KromozomAdi'] = $tmp2;						
			}
										
	}
	}
		if(	$islemkromozom[$j]['Uzaklik'] > $secilimkromozom[0]['Uzaklik']){
		$islemkromozom[$j]['KromozomAdi'] = $secilimkromozom[0]['KromozomAdi'];
		$islemkromozom[$j]['Uzaklik'] = $secilimkromozom[0]['Uzaklik'];}
	}
			
########################################### SEÇİLİM #################################################	
	
########################################### SIRALAMA #################################################	
	
	
	
	$a = 0;
	$b = 11;
	$p = 0;#Sirala($populasyon,$islemkromozom);
	for($i = $a; $i < $b; $i++) 
	{	for($j = $a; $j < $b; $j++){
			if($islemkromozom[$i]['Uzaklik'] < $islemkromozom[$j]['Uzaklik'])
			{
				
				$tmp = $islemkromozom[$i]['Uzaklik'];
				$islemkromozom[$i]['Uzaklik'] = $islemkromozom[$j]['Uzaklik'];
				$islemkromozom[$j]['Uzaklik'] = $tmp;
						
				$tmp2 = $islemkromozom[$i]['KromozomAdi'];
				$islemkromozom[$i]['KromozomAdi'] = $islemkromozom[$j]['KromozomAdi'];
				$islemkromozom[$j]['KromozomAdi'] = $tmp2;						
			}
										
		}
		$p++;
		if($p == 10 )
		{
			
				$a += 10;
				$b += 10;
				$q += $p;
				$p = 0;
				if($q==$populasyon){break;}
			
		}

	}
	for($i = 0; $i < $populasyon; $i++) 
	{
		echo ($i+1),".-","Kromozom:",$islemkromozom[$i]['KromozomAdi']," ","Uzaklik = "," ",$islemkromozom[$i]['Uzaklik'],"<br>";
	}
########################################### SIRALAMA #################################################	

	#ÇAPRAZLAMA BAŞLANGIÇ
	for($k=0;$k<$caprazlama;$k++)
	{
		
		#BURADA ÇAPRAZLANACAK KROMOZOMLAR RASTGELE DEĞİL POPULASYONLAR ARASINDAN EN İYİLER ARASINDAN RASTGELE SEÇİLEREK YAPILACAK.
		
		
		$random1 = 2;
		$random2 = 5;
		#echo $random1+1,"-----",$random2+1,"--";
		
		
		$tmp 	= 	str_split($islemkromozom[$random1]['KromozomAdi']);
		$temp2  = 	str_split($islemkromozom[$random2]['KromozomAdi']);
			
		$caprazkromozom1 [0] = $tmp[0];
		$caprazkromozom1 [1] = $tmp[1];
		$caprazkromozom1 [2] = $tmp[2];
		$caprazkromozom1 [3] = $tmp[3];
		
		for($i=4;$i<8;$i++){
				if($i==7){
					for($a=0;$a<4;$a++){
						if(strcmp($caprazkromozom1[0],$temp2[$a])!=0&&strcmp($caprazkromozom1[1],$temp2[$a])!=0&&strcmp($caprazkromozom1[2],$temp2[$a])!=0&&strcmp($caprazkromozom1[3],$temp2[$a])!=0){
							$caprazkromozom1[4]=$temp2[$a];
				}}}
				else{
				if(strcmp($caprazkromozom1[0],$temp2[$i])!=0&&strcmp($caprazkromozom1[1],$temp2[$i])!=0&&strcmp($caprazkromozom1[2],$temp2[$i])!=0&&strcmp($caprazkromozom1[3],$temp2[$i])!=0){
							$caprazkromozom1[4]=$temp2[$i];
				}}
			
		}
		for($i=5;$i<8;$i++){
				if($i==7){
					for($a=0;$a<5;$a++){
						if(strcmp($caprazkromozom1[0],$temp2[$a])!=0&&strcmp($caprazkromozom1[1],$temp2[$a])!=0&&strcmp($caprazkromozom1[2],$temp2[$a])!=0&&strcmp($caprazkromozom1[3],$temp2[$a])!=0&&strcmp($caprazkromozom1[4],$temp2[$a])!=0){
							$caprazkromozom1[5]=$temp2[$a];
				}}}
				else{
				if(strcmp($caprazkromozom1[0],$temp2[$i])!=0&&strcmp($caprazkromozom1[1],$temp2[$i])!=0&&strcmp($caprazkromozom1[2],$temp2[$i])!=0&&strcmp($caprazkromozom1[3],$temp2[$i])!=0&&strcmp($caprazkromozom1[4],$temp2[$i])!=0){
							$caprazkromozom1[5]=$temp2[$i];
				}}
			
		}
		for($i=6;$i<8;$i++){
				if($i==7){
					for($a=0;$a<6;$a++){
						if(strcmp($caprazkromozom1[0],$temp2[$a])!=0&&strcmp($caprazkromozom1[1],$temp2[$a])!=0&&strcmp($caprazkromozom1[2],$temp2[$a])!=0&&strcmp($caprazkromozom1[3],$temp2[$a])!=0&&strcmp($caprazkromozom1[4],$temp2[$a])!=0&&strcmp($caprazkromozom1[5],$temp2[$a])!=0){
							$caprazkromozom1[6]=$temp2[$a];
				}}}
				else{
				if(strcmp($caprazkromozom1[0],$temp2[$i])!=0&&strcmp($caprazkromozom1[1],$temp2[$i])!=0&&strcmp($caprazkromozom1[2],$temp2[$i])!=0&&strcmp($caprazkromozom1[3],$temp2[$i])!=0&&strcmp($caprazkromozom1[4],$temp2[$i])!=0&&strcmp($caprazkromozom1[5],$temp2[$i])!=0){
							$caprazkromozom1[6]=$temp2[$i];
				}}
			
		}		
		if($caprazkromozom2[0]['Uzaklik']<$islemkromozom[$random1]['Uzaklik']){
		$islemkromozom[$random1]['Uzaklik']=$caprazkromozom2[0]['Uzaklik'];
		$islemkromozom[$random1]['KromozomAdi']=$caprazkromozom2[0]['KromozomAdi'];
	}	
		$caprazkromozom1[0] = implode('',$caprazkromozom1);
		$caprazkromozom2[0]['KromozomAdi'] = $caprazkromozom1[0];
		$caprazkromozom2[0]['Uzaklik'] = UzaklikHesapla($caprazkromozom1[0], $mesafeler);
		
		
		echo ($k+1),".Yeni birey:",$caprazkromozom2[0]['KromozomAdi']," ","Uzaklik = "," ",$caprazkromozom2[0]['Uzaklik'],"<br>";
	#ÇAPRAZLAMA BİTİŞ
	}

	
	for($i = 0; $i < $populasyon; $i++) 
	{	for($j = 0; $j < $populasyon; $j++){
			if($islemkromozom[$i]['Uzaklik'] < $islemkromozom[$j]['Uzaklik'])
			{
				
				$tmp = $islemkromozom[$i]['Uzaklik'];
				$islemkromozom[$i]['Uzaklik'] = $islemkromozom[$j]['Uzaklik'];
				$islemkromozom[$j]['Uzaklik'] = $tmp;
						
				$tmp2 = $islemkromozom[$i]['KromozomAdi'];
				$islemkromozom[$i]['KromozomAdi'] = $islemkromozom[$j]['KromozomAdi'];
				$islemkromozom[$j]['KromozomAdi'] = $tmp2;						
			}
										
		}
	}
	for($i = 0; $i < $populasyon+1; $i++) 
	{
		#echo ($i+1),".-","Kromozom:",$islemkromozom[$i]['KromozomAdi']," ","Uzaklik = "," ",$islemkromozom[$i]['Uzaklik'],"<br>";
	}
	
	################################ MUTASYON ###################################
		
		
		echo "En Kısa Kromozom:",$islemkromozom[1]['KromozomAdi']," ","Uzaklik = "," ",$islemkromozom[1]['Uzaklik'],"<br>";	
		
		

		
	
}

#Kromozomları kendi aralarında sırala. Çaprazlama miktarını iki ile çarp. En küçük kromozomları ikiye bölüp birleştirerek yeni kromozomlar oluştur.
#Oluşan kromozomların uzunluklarını hesaplayıp populasyona dahil et. 

#Verilen mutasyona uğratılmak istenen kromozom sayısını al. Bu sayı kadar en iyi kromozomun içinde rastgele iki geni yer değiştir.
#Oluşan yeni bireyi populasyona dahil et.

#Tüm populasyonu sırala ve en iyi kromozomu göster.

?>
</div>
</body>
</html>
<?php


function RandomGenSec() 
{
	$secim = array('A', 'B', 'C', 'D', 'E', 'F', 'G');
	shuffle($secim);
	return implode('',$secim);
}

function UzaklikHesapla($KromozomAdi, $mesafeler) 
{	
	$topmesafe = 0;
	$GenHarfi = str_split($KromozomAdi);
	for ($i = 0; $i < sehir_sayisi - 1; $i++) {
		$topmesafe += $mesafeler[IndexAl($GenHarfi[$i])][IndexAl($GenHarfi[$i+1])];
	}
		$topmesafe += $mesafeler[1][7];
	
	return $topmesafe;
	
}

function IndexAl($char) 
{
	if ($char == 'A')
		return 1;
	else if ($char == 'B')
		return 2;
	else if ($char == 'C')
		return 3;
	else if ($char == 'D')
		return 4;
	else if ($char == 'E')
		return 5;
	else if ($char == 'F')
		return 6;
	else if ($char == 'G')
		return 7;
	else
		return("Başarısız");
}

function UygunlukBul($islemkromozom,$toplam,$populasyon){
	
	return $islemkromozom/$toplam*$populasyon;
}
/*Bu alanda yeni öğrenilen komutlar not edilecektir.
_____________________________
isset : 

Eğer var değişkeni tanımlıysa, TRUE olarak değerlendirilir, dolayısıyla metin basılır.

if (isset($var)) {
    echo "This var is set so I will print.";
}
_____________________________
implode : 

String içindeki kayıtları yapıştırır.

return implode('',$secim);

İlk parametreyi seçim içinde tanımlı her bir değer ile birleştirir.
İlk parametre boş olduğu için çıktısı ABCDEFG olur.
_____________________________
shuffle: 

Dizi içindeki değerleri indekslerine göre yer değiştirir.
_____________________________

#Oluşturulan random kromozomların gösterimi
	for($i = 0; $i < $populasyon; $i++) {
		echo ($i+1),".","Kromozom:"," ",$anakromozom[$i],"<br>";
	}

*/
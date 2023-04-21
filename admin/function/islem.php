<?php


include 'code.php';




############ LOGIN #############################






############ İLETİŞİM AYARLARI #############################

if (isset($_POST['iletisimduzenle'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_mail=:mail,
		ayar_whatsapp=:whatsapp,
		ayar_arama=:arama,
		ayar_adres=:adres,
		ayar_ilce=:ilce,
		ayar_il=:il,
		ayar_mesai=:mesai
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'tel' => $_POST['ayar_tel'],
		'gsm' => $_POST['ayar_gsm'],
		'faks' => $_POST['ayar_faks'],
		'mail' => $_POST['ayar_mail'],
		'whatsapp' => $_POST['ayar_whatsapp'],
		'arama' => $_POST['ayar_arama'],
		'adres' => $_POST['ayar_adres'],
		'ilce' => $_POST['ayar_ilce'],
		'il' => $_POST['ayar_il'],
		'mesai' => $_POST['ayar_mesai']
	));

	if ($update) {

		Header("Location:../a-iletisim-ayar.php?durum=ok");

	} else {

		Header("Location:../a-iletisim-ayar.php?durum=no");
	}

}

############ API AYARLARI #############################

if (isset($_POST['apiduzenle'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_goooglemap=:goooglemap,
		ayar_canlidestek=:canlidestek,
		ayar_analystic=:analystic
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'recapctha' => $_POST['ayar_recapctha'],
		'goooglemap' => htmlspecialchars($_POST['ayar_goooglemap']),
		'canlidestek' => htmlspecialchars($_POST['ayar_canlidestek']),
		'analystic' => $_POST['ayar_analystic']
	));

	if ($update) {

		Header("Location:../a-api-ayar.php?durum=ok");

	} else {

		Header("Location:../a-api-ayar.php?durum=no");
	}

}


############ TEMA AYARLARI #############################

if (isset($_POST['temaduzenle'])) {




	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tema=:tema
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'tema' => $_POST['ayar_tema']
	));

	if ($update) {

		Header("Location:../a-tema-ayar.php?durum=ok");

	} else {

		Header("Location:../a-tema-ayar.php?durum=no");
	}

}

############ HEDAER AYARLARI #############################

if (isset($_POST['headerduzenle'])) {




	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_header=:header
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'header' => $_POST['ayar_header']
	));

	if ($update) {

		Header("Location:../a-tema-ayar.php?durum=ok");

	} else {

		Header("Location:../a-tema-ayar.php?durum=no");
	}

}


############ FİRMA BİLGİ #############################

if (isset($_POST['firmabilgiduzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_firmaad=:firmaad,
		ayar_slogan=:slogan,
		ayar_siteurl=:siteurl,
		ayar_footer=:footer
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'firmaad' => $_POST['ayar_firmaad'],
		'slogan' => htmlspecialchars($_POST['ayar_slogan']),
		'siteurl' => $_POST['ayar_siteurl'],
		'footer' => $_POST['ayar_footer']
	));

	if ($update) {

		Header("Location:../a-genel-ayar.php?durum=ok");

	} else {

		Header("Location:../a-genel-ayar.php?durum=no");
	}

}

############ SİTE SEO  #############################

if (isset($_POST['siteseoduzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords']
	));

	if ($update) {

		Header("Location:../a-genel-ayar.php?durum=ok");

	} else {

		Header("Location:../a-genel-ayar.php?durum=no");
	}

}



############ FAVICON #############################


if (isset($_POST['faviconduzenle'])) {


	$resimsilunlink=$_POST['eski_yol'];
	unlink("../../$resimsilunlink");


	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['ayar_favicon']["tmp_name"];

	//@$name = $_FILES['ayar_favicon']["name"];

	$faviconad="favicon.ico";
	$refimgyol=substr($uploads_dir, 6)."/".$faviconad;

	@move_uploaded_file($tmp_name, "$uploads_dir/$faviconad");

	clearstatcache() ;

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_favicon=:favicon
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'favicon' => $refimgyol
	));



	if ($update) {

		//$resimsilunlink=$_POST['eski_yol'];
		//unlink("../../$resimsilunlink");

		Header("Location:../a-genel-ayar.php?durum=ok");

	} else {

		Header("Location:../a-genel-ayar.php?durum=no");
	}

}




############ LOGO #############################


if (isset($_POST['logoduzenle'])) {

	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];
	$benzersizsayi4=rand(20000,32000)."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-genel-ayar.php?durum=ok");

	} else {

		Header("Location:../a-genel-ayar.php?durum=no");
	}

}



############ COUNTER - 1 #############################

if (isset($_POST['counter1duzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE counter SET
		counter_ad1=:ad1,
		counter_sayi1=:sayi1,
		counter_icon1=:icon1
		WHERE counter_id=1");
	$update=$ayarkaydet->execute(array(
		'ad1' => $_POST['counter_ad1'],
		'sayi1' => $_POST['counter_sayi1'],
		'icon1' => $_POST['counter_icon1']
	));

	if ($update) {

		Header("Location:../a-counter-ayar.php?durum=ok");

	} else {

		Header("Location:../a-counter-ayar.php?durum=no");
	}

}

############ COUNTER - 2 #############################

if (isset($_POST['counter2duzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE counter SET
		counter_ad2=:ad2,
		counter_sayi2=:sayi2,
		counter_icon2=:icon2
		WHERE counter_id=1");
	$update=$ayarkaydet->execute(array(
		'ad2' => $_POST['counter_ad2'],
		'sayi2' => $_POST['counter_sayi2'],
		'icon2' => $_POST['counter_icon2']
	));

	if ($update) {

		Header("Location:../a-counter-ayar.php?durum=ok");

	} else {

		Header("Location:../a-counter-ayar.php?durum=no");
	}

}


############ COUNTER - 3 #############################

if (isset($_POST['counter3duzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE counter SET
		counter_ad3=:ad3,
		counter_sayi3=:sayi3,
		counter_icon3=:icon3
		WHERE counter_id=1");
	$update=$ayarkaydet->execute(array(
		'ad3' => $_POST['counter_ad3'],
		'sayi3' => $_POST['counter_sayi3'],
		'icon3' => $_POST['counter_icon3']
	));

	if ($update) {

		Header("Location:../a-counter-ayar.php?durum=ok");

	} else {

		Header("Location:../a-counter-ayar.php?durum=no");
	}

}



############ COUNTER - 4 #############################

if (isset($_POST['counter4duzenle'])) {


	$ayarkaydet=$db->prepare("UPDATE counter SET
		counter_ad4=:ad4,
		counter_sayi4=:sayi4,
		counter_icon4=:icon4
		WHERE counter_id=1");
	$update=$ayarkaydet->execute(array(
		'ad4' => $_POST['counter_ad4'],
		'sayi4' => $_POST['counter_sayi4'],
		'icon4' => $_POST['counter_icon4']
	));

	if ($update) {

		Header("Location:../a-counter-ayar.php?durum=ok");

	} else {

		Header("Location:../a-counter-ayar.php?durum=no");
	}

}




############ MODÜL AYARLARI #############################


if (isset($_POST['modulduzenle'])) {


	if($_POST['modul_urun']=="on") { $modul_urun=1; } else { $modul_urun=0;}
	if($_POST['modul_urungrup']=="on") { $modul_urungrup=1; } else { $modul_urungrup=0;}
	if($_POST['modul_hizmet']=="on") { $modul_hizmet=1; } else { $modul_hizmet=0;}
	if($_POST['modul_haber']=="on") { $modul_haber=1; } else { $modul_haber=0;}
	if($_POST['modul_yorum']=="on") { $modul_yorum=1; } else { $modul_yorum=0;}
	if($_POST['modul_foto']=="on") { $modul_foto=1; } else { $modul_foto=0;}
	if($_POST['modul_marka']=="on") { $modul_marka=1; } else { $modul_marka=0;}
	if($_POST['modul_istatistik']=="on") { $modul_istatistik=1; } else { $modul_istatistik=0;}
	if($_POST['modul_whatsapp']=="on") { $modul_whatsapp=1; } else { $modul_whatsapp=0;}
	if($_POST['modul_canlidestek']=="on") { $modul_canlidestek=1; } else { $modul_canlidestek=0;}
	if($_POST['modul_recapctha']=="on") { $modul_recapctha=1; } else { $modul_recapctha=0;}




	$ayarkaydet=$db->prepare("UPDATE modul SET
		modul_urun=:urun,
		modul_urungrup=:urungrup,
		modul_hizmet=:hizmet,
		modul_haber=:haber,
		modul_yorum=:yorum,
		modul_foto=:foto,
		modul_marka=:marka,
		modul_istatistik=:istatistik,
		modul_whatsapp=:whatsapp,
		modul_canlidestek=:canlidestek,
		modul_recapctha=:recapctha
		WHERE modul_id=0");
	$update=$ayarkaydet->execute(array(
		'urun' => $modul_urun,
		'urungrup' => $modul_urungrup,
		'hizmet' => $modul_hizmet,
		'haber' => $modul_haber,
		'yorum' => $modul_yorum,
		'foto' => $modul_foto,
		'marka' => $modul_marka,
		'istatistik' => $modul_istatistik,
		'whatsapp' => $modul_whatsapp,
		'canlidestek' => $modul_canlidestek,
		'recapctha' => $modul_recapctha
	));

	if ($update) {

		if (isset($_POST['modulindex_true'])) {

			Header("Location:../index.php?durum=ok");

		}else if (isset($_POST['modulayar_true'])){

			Header("Location:../a-modul-ayar.php?durum=ok");

		}

	} else {


		if (isset($_POST['modulindex_true'])) {

			Header("Location:../index.php?durum=no");

		}else if (isset($_POST['modulayar_true'])){

			Header("Location:../a-modul-ayar.php?durum=no");

		}


	}

}



############ SOSYAL MEDYA AYARLARI #############################


if (isset($_POST['sosyalmedyaduzenle'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:facebook,
		ayar_twitter=:twitter,
		ayar_instagram=:ins,
		ayar_youtube=:youtube
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'facebook' => $_POST['ayar_facebook'],
		'twitter' => $_POST['ayar_twitter'],
		'youtube' => $_POST['ayar_youtube'],
		'ins' => $_POST['ayar_instagram']

	));

	if ($update) {

		Header("Location:../a-sosyalmedya-ayar.php?durum=ok");

	} else {

		Header("Location:../a-sosyalmedya-ayar.php?durum=no");
	}

}


############ MAİL AYARLARI #############################


if (isset($_POST['mailduzenle'])) {

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");
	$update=$ayarkaydet->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']
	));

	if ($update) {

		Header("Location:../a-mail-ayar.php?durum=ok");

	} else {

		Header("Location:../a-mail-ayar.php?durum=no");
	}

}


if (isset($_POST['hakkimizdakaydet'])) {

	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:baslik,
		hakkimizda_icerik=:icerik,
		hakkimizda_video=:video,
		hakkimizda_vizyon=:vizyon,
		hakkimizda_misyon=:misyon
		WHERE hakkimizda_id=0");
	$update=$ayarkaydet->execute(array(
		'baslik' => $_POST['hakkimizda_baslik'],
		'icerik' => $_POST['hakkimizda_icerik'],
		'video' => $_POST['hakkimizda_video'],
		'vizyon' => $_POST['hakkimizda_vizyon'],
		'misyon' => $_POST['hakkimizda_misyon']
	));

	if ($update) {

		Header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		Header("Location:../production/hakkimizda.php?durum=no");
	}

}


############ SLİDER YÖNETİMİ #############################

if (isset($_POST['sliderkaydet'])) {

	if($_POST['slider_link_durum']=="on")
	{
		$slider_link_durum=1;
	}else
	{
		$slider_link_durum=0;
	}


	if($_POST['slider_durum']=="on")
	{
		$slider_durum=1;
	}else
	{
		$slider_durum=0;
	}



	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:ad,
		slider_aciklama=:aciklama,
		slider_link=:link,
		slider_link_durum=:link_durum,
		slider_sira=:sira,
		slider_durum=:durum,
		slider_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['slider_ad'],
		'aciklama' => $_POST['slider_aciklama'],
		'link' => $_POST['slider_link'],
		'link_durum' => $slider_link_durum,
		'sira' => $_POST['slider_sira'],
		'durum' => $slider_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-slider-listele.php?durum=ok");

	} else {

		Header("Location:../a-slider-listele.php?durum=no");
	}

}


if ($_GET['slidersil']=="ok") {

	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id' => $_GET['slider_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-slider-listele.php?durum=ok");

	} else {

		Header("Location:../a-slider-listele.php?durum=no");
	}

}


if (isset($_POST['sliderduzenle'])) {



	if($_POST['slider_link_durum']=="on")
	{

		$slider_link_durum=1;
	}else
	{
		$slider_link_durum=0;
	}


	if($_POST['slider_durum']=="on")
	{
		$slider_durum=1;
	}else
	{
		$slider_durum=0;
	}



	if($_FILES['slider_resimyol']["size"] > 0)  {



		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_aciklama=:aciklama,
			slider_link=:link,
			slider_link_durum=:link_durum,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'aciklama' => $_POST['slider_aciklama'],
			'link' => $_POST['slider_link'],
			'link_durum' => $slider_link_durum,
			'sira' => $_POST['slider_sira'],
			'durum' => $slider_durum,
			'resimyol' => $refimgyol,
		));


		$slider_id=$_POST['slider_id'];

		if ($update) {

			$resimsilunlink=$_POST['slider_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../a-slider-duzenle.php?slider_id=$slider_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_aciklama=:aciklama,
			slider_link=:link,
			slider_link_durum=:link_durum,
			slider_sira=:sira,
			slider_durum=:durum
			WHERE slider_id={$_POST['slider_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'aciklama' => $_POST['slider_aciklama'],
			'link' => $_POST['slider_link'],
			'link_durum' => $slider_link_durum,
			'sira' => $_POST['slider_sira'],
			'durum' => $slider_durum
		));

		$slider_id=$_POST['slider_id'];

		if ($update) {

			Header("Location:../a-slider-duzenle.php?slider_id=$slider_id&durum=ok");

		} else {

			Header("Location:../a-slider-duzenle.php?slider_id=$slider_id&durum=no");
		}
	}

}




############ FOTO GALERİ #############################

if (isset($_POST['fotokaydet'])) {



	if($_POST['foto_durum']=="on")
	{
		$foto_durum=1;
	}else
	{
		$foto_durum=0;
	}



	$uploads_dir = '../../images/fotogaleri';
	@$tmp_name = $_FILES['foto_resimyol']["tmp_name"];
	@$name = $_FILES['foto_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO foto SET
		foto_ad=:ad,
		foto_sira=:sira,
		foto_durum=:durum,
		foto_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['foto_ad'],
		'sira' => $_POST['foto_sira'],
		'durum' => $foto_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-foto-listele.php?durum=ok");

	} else {

		Header("Location:../a-foto-listele.php?durum=no");
	}

}



if ($_GET['fotosil']=="ok") {

	$sil=$db->prepare("DELETE from foto where foto_id=:foto_id");
	$kontrol=$sil->execute(array(
		'foto_id' => $_GET['foto_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['foto_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-foto-listele.php?durum=ok");

	} else {

		Header("Location:../a-foto-listele.php?durum=no");
	}

}




if (isset($_POST['fotoduzenle'])) {


	if($_POST['foto_durum']=="on")
	{
		$foto_durum=1;
	}else
	{
		$foto_durum=0;
	}



	if($_FILES['foto_resimyol']["size"] > 0)  {



		$uploads_dir = '../../images/fotogaleri';
		@$tmp_name = $_FILES['foto_resimyol']["tmp_name"];
		@$name = $_FILES['foto_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE foto SET
			foto_ad=:ad,
			foto_sira=:sira,
			foto_durum=:durum,
			foto_resimyol=:resimyol
			WHERE foto_id={$_POST['foto_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['foto_ad'],
			'sira' => $_POST['foto_sira'],
			'durum' =>$foto_durum,
			'resimyol' => $refimgyol,
		));


		$foto_id=$_POST['foto_id'];

		if ($update) {

			$resimsilunlink=$_POST['foto_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-foto-duzenle.php?foto_id=$foto_id&durum=ok");

		} else {

			Header("Location:../a-foto-duzenle.php?foto_id=$foto_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE foto SET
			foto_ad=:ad,
			foto_sira=:sira,
			foto_durum=:durum
			WHERE foto_id={$_POST['foto_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['foto_ad'],
			'sira' => $_POST['foto_sira'],
			'durum' => $foto_durum
		));

		$foto_id=$_POST['foto_id'];

		if ($update) {

			Header("Location:../a-foto-duzenle.php?foto_id=$foto_id&durum=ok");

		} else {

			Header("Location:../a-foto-duzenle.php?foto_id=$foto_id&durum=no");
		}
	}

}



############ REFERANSLAR #############################

if (isset($_POST['referanskaydet'])) {



	if($_POST['referans_durum']=="on")
	{
		$referans_durum=1;
	}else
	{
		$referans_durum=0;
	}



	$uploads_dir = '../../images/referans';
	@$tmp_name = $_FILES['referans_resimyol']["tmp_name"];
	@$name = $_FILES['referans_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO referans SET
		referans_ad=:ad,
		referans_sira=:sira,
		referans_durum=:durum,
		referans_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['referans_ad'],
		'sira' => $_POST['referans_sira'],
		'durum' => $referans_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-referans-listele.php?durum=ok");

	} else {

		Header("Location:../a-referans-listele.php?durum=no");
	}

}



if ($_GET['referanssil']=="ok") {

	$sil=$db->prepare("DELETE from referans where referans_id=:referans_id");
	$kontrol=$sil->execute(array(
		'referans_id' => $_GET['referans_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['referans_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-referans-listele.php?durum=ok");

	} else {

		Header("Location:../a-referans-listele.php?durum=no");
	}

}



if (isset($_POST['referansduzenle'])) {


	if($_POST['referans_durum']=="on")
	{
		$referans_durum=1;
	}else
	{
		$referans_durum=0;
	}



	if($_FILES['referans_resimyol']["size"] > 0)  {



		$uploads_dir = '../../images/referans';
		@$tmp_name = $_FILES['referans_resimyol']["tmp_name"];
		@$name = $_FILES['referans_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE referans SET
			referans_ad=:ad,
			referans_sira=:sira,
			referans_durum=:durum,
			referans_resimyol=:resimyol
			WHERE referans_id={$_POST['referans_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'sira' => $_POST['referans_sira'],
			'durum' => $referans_durum,
			'resimyol' => $refimgyol,
		));


		$referans_id=$_POST['referans_id'];

		if ($update) {

			$resimsilunlink=$_POST['referans_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-referans-duzenle.php?referans_id=$referans_id&durum=ok");

		} else {

			Header("Location:../a-referans-duzenle.php?referans_id=$referans_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE referans SET
			referans_ad=:ad,
			referans_sira=:sira,
			referans_durum=:durum
			WHERE referans_id={$_POST['referans_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['referans_ad'],
			'sira' => $_POST['referans_sira'],
			'durum' => $referans_durum
		));

		$referans_id=$_POST['referans_id'];

		if ($update) {

			Header("Location:../a-referans-duzenle.php?referans_id=$referans_id&durum=ok");

		} else {

			Header("Location:../a-referans-duzenle.php?referans_id=$referans_id&durum=no");
		}
	}

}




############ BELGELER #############################

if (isset($_POST['belgekaydet'])) {



	if($_POST['belge_durum']=="on")
	{
		$belge_durum=1;
	}else
	{
		$belge_durum=0;
	}



	$uploads_dir = '../../images/belge';
	@$tmp_name = $_FILES['belge_resimyol']["tmp_name"];
	@$name = $_FILES['belge_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO belge SET
		belge_ad=:ad,
		belge_sira=:sira,
		belge_durum=:durum,
		belge_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['belge_ad'],
		'sira' => $_POST['belge_sira'],
		'durum' => $belge_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-belge-listele.php?durum=ok");

	} else {

		Header("Location:../a-belge-listele.php?durum=no");
	}

}



if ($_GET['belgesil']=="ok") {

	$sil=$db->prepare("DELETE from belge where belge_id=:belge_id");
	$kontrol=$sil->execute(array(
		'belge_id' => $_GET['belge_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['belge_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-belge-listele.php?durum=ok");

	} else {

		Header("Location:../a-belge-listele.php?durum=no");
	}

}



if (isset($_POST['belgeduzenle'])) {


	if($_POST['belge_durum']=="on")
	{
		$belge_durum=1;
	}else
	{
		$belge_durum=0;
	}



	if($_FILES['belge_resimyol']["size"] > 0)  {



		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['belge_resimyol']["tmp_name"];
		@$name = $_FILES['belge_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE belge SET
			belge_ad=:ad,
			belge_sira=:sira,
			belge_durum=:durum,
			belge_resimyol=:resimyol
			WHERE belge_id={$_POST['belge_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['belge_ad'],
			'sira' => $_POST['belge_sira'],
			'durum' => $belge_durum,
			'resimyol' => $refimgyol
		));


		$belge_id=$_POST['belge_id'];

		if ($update) {

			$resimsilunlink=$_POST['belge_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-belge-duzenle.php?belge_id=$belge_id&durum=ok");

		} else {

			Header("Location:../a-belge-duzenle.php?belge_id=$belge_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE belge SET
			belge_ad=:ad,
			belge_sira=:sira,
			belge_durum=:durum
			WHERE belge_id={$_POST['belge_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['belge_ad'],
			'sira' => $_POST['belge_sira'],
			'durum' => $belge_durum
		));

		$belge_id=$_POST['belge_id'];

		if ($update) {

			Header("Location:../a-belge-duzenle.php?belge_id=$belge_id&durum=ok");

		} else {

			Header("Location:../a-belge-duzenle.php?belge_id=$belge_id&durum=no");
		}
	}

}



############ E-KATALOG #############################

if (isset($_POST['ekatalogkaydet'])) {



	if($_POST['ekatalog_durum']=="on")
	{
		$ekatalog_durum=1;
	}else
	{
		$ekatalog_durum=0;
	}



	$uploads_dir = '../../assets/images';

	@$tmp_name = $_FILES['ekatalog_resimyol']["tmp_name"];
	@$name = $_FILES['ekatalog_resimyol']["name"];

	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	@$tmp_name2 = $_FILES['ekatalog_dosya']["tmp_name"];
	@$name2 = $_FILES['ekatalog_dosya']["name"];

	$dosyayol=substr($uploads_dir, 6)."/".$benzersizad.$name2;
	@move_uploaded_file($tmp_name2, "$uploads_dir/$benzersizad$name2");







	$kaydet=$db->prepare("INSERT INTO ekatalog SET
		ekatalog_ad=:ad,
		ekatalog_sira=:sira,
		ekatalog_durum=:durum,
		ekatalog_resimyol=:resimyol,
		ekatalog_dosya=:dosya");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['ekatalog_ad'],
		'sira' => $_POST['ekatalog_sira'],
		'durum' => $ekatalog_durum,
		'resimyol' => $refimgyol,
		'dosya' => $dosyayol
	));

	if ($insert) {

		Header("Location:../a-ekatalog-listele.php?durum=ok");

	} else {

		Header("Location:../a-ekatalog-listele.php?durum=no");
	}

}



if ($_GET['ekatalogsil']=="ok") {

	$sil=$db->prepare("DELETE from ekatalog where ekatalog_id=:ekatalog_id");
	$kontrol=$sil->execute(array(
		'ekatalog_id' => $_GET['ekatalog_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['ekatalog_resimyol'];
		unlink("../../$resimsilunlink");

		$dosyasilunlink=$_GET['ekatalog_dosya'];
		unlink("../../$dosyasilunlink");


		Header("Location:../a-ekatalog-listele.php?durum=ok");

	} else {

		Header("Location:../a-ekatalog-listele.php?durum=no");
	}

}





if (isset($_POST['ekatalogduzenle'])) {


	if($_POST['ekatalog_durum']=="on")
	{
		$ekatalog_durum=1;
	}else
	{
		$ekatalog_durum=0;
	}



	if($_FILES['ekatalog_dosya']["size"] > 0)  {



		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['ekatalog_dosya']["tmp_name"];
		@$name = $_FILES['ekatalog_dosya']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$dosyayol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE ekatalog SET
			ekatalog_ad=:ad,
			ekatalog_sira=:sira,
			ekatalog_durum=:durum,
			ekatalog_dosya=:dosya
			WHERE ekatalog_id={$_POST['ekatalog_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['ekatalog_ad'],
			'sira' => $_POST['ekatalog_sira'],
			'durum' => $ekatalog_durum,
			'dosya' => $dosyayol
		));


		$ekatalog_id=$_POST['ekatalog_id'];

		if ($update) {

			$resimsilunlink=$_POST['ekatalog_dosya'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-ekatalog-duzenle.php?ekatalog_id=$ekatalog_id&durum=ok");

		} else {

			Header("Location:../a-ekatalog-duzenle.php?ekatalog_id=$ekatalog_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE ekatalog SET
			ekatalog_ad=:ad,
			ekatalog_sira=:sira,
			ekatalog_durum=:durum
			WHERE ekatalog_id={$_POST['ekatalog_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['ekatalog_ad'],
			'sira' => $_POST['ekatalog_sira'],
			'durum' => $ekatalog_durum
		));

		$ekatalog_id=$_POST['ekatalog_id'];

		if ($update) {

			Header("Location:../a-ekatalog-duzenle.php?ekatalog_id=$ekatalog_id&durum=ok");

		} else {

			Header("Location:../a-ekatalog-duzenle.php?ekatalog_id=$ekatalog_id&durum=no");
		}
	}

}





############ BANKALAR #############################

if (isset($_POST['bankakaydet'])) {



	if($_POST['banka_durum']=="on")
	{
		$banka_durum=1;
	}else
	{
		$banka_durum=0;
	}



	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['banka_resimyol']["tmp_name"];
	@$name = $_FILES['banka_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO banka SET
		banka_ad=:ad,
		banka_sahip=:sahip,
		banka_sube=:sube,
		banka_hesap=:hesap,
		banka_iban=:iban,
		banka_sira=:sira,
		banka_durum=:durum,
		banka_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['banka_ad'],
		'sahip' => $_POST['banka_sahip'],
		'sube' => $_POST['banka_sube'],
		'hesap' => $_POST['banka_hesap'],
		'iban' => $_POST['banka_iban'],
		'sira' => $_POST['banka_sira'],
		'durum' => $banka_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-banka-listele.php?durum=ok");

	} else {

		Header("Location:../a-banka-listele.php?durum=no");
	}

}

if ($_GET['bankasil']=="ok") {

	$sil=$db->prepare("DELETE from banka where banka_id=:banka_id");
	$kontrol=$sil->execute(array(
		'banka_id' => $_GET['banka_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['banka_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-banka-listele.php?durum=ok");

	} else {

		Header("Location:../a-banka-listele.php?durum=no");
	}

}





if (isset($_POST['bankaduzenle'])) {


	if($_POST['banka_durum']=="on")
	{
		$banka_durum=1;
	}else
	{
		$banka_durum=0;
	}



	if($_FILES['banka_resimyol']["size"] > 0)  {



		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['banka_resimyol']["tmp_name"];
		@$name = $_FILES['banka_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE banka SET
			banka_ad=:ad,
			banka_sahip=:sahip,
			banka_sube=:sube,
			banka_hesap=:hesap,
			banka_iban=:iban,
			banka_sira=:sira,
			banka_durum=:durum,
			banka_resimyol=:resimyol
			WHERE banka_id={$_POST['banka_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['banka_ad'],
			'sahip' => $_POST['banka_sahip'],
			'sube' => $_POST['banka_sube'],
			'hesap' => $_POST['banka_hesap'],
			'iban' => $_POST['banka_iban'],
			'sira' => $_POST['banka_sira'],
			'durum' => $banka_durum,
			'resimyol' => $refimgyol
		));


		$banka_id=$_POST['banka_id'];

		if ($update) {

			$resimsilunlink=$_POST['banka_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-banka-duzenle.php?banka_id=$banka_id&durum=ok");

		} else {

			Header("Location:../a-banka-duzenle.php?banka_id=$banka_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE banka SET
			banka_ad=:ad,
			banka_sahip=:sahip,
			banka_sube=:sube,
			banka_hesap=:hesap,
			banka_iban=:iban,
			banka_sira=:sira,
			banka_durum=:durum
			WHERE banka_id={$_POST['banka_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['banka_ad'],
			'sahip' => $_POST['banka_sahip'],
			'sube' => $_POST['banka_sube'],
			'hesap' => $_POST['banka_hesap'],
			'iban' => $_POST['banka_iban'],
			'sira' => $_POST['banka_sira'],
			'durum' => $banka_durum
		));

		$banka_id=$_POST['banka_id'];

		if ($update) {

			Header("Location:../a-banka-duzenle.php?banka_id=$banka_id&durum=ok");

		} else {

			Header("Location:../a-banka-duzenle.php?banka_id=$banka_id&durum=no");
		}
	}

}



############ YORUMLAR #############################

if (isset($_POST['yorumkaydet'])) {



	if($_POST['yorum_durum']=="on")
	{
		$yorum_durum=1;
	}else
	{
		$yorum_durum=0;
	}



	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['yorum_resimyol']["tmp_name"];
	@$name = $_FILES['yorum_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO yorum SET
		yorum_adsoyad=:adsoyad,
		yorum_icerik=:icerik,
		yorum_sira=:sira,
		yorum_durum=:durum,
		yorum_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'adsoyad' => $_POST['yorum_adsoyad'],
		'icerik' => $_POST['yorum_icerik'],
		'sira' => $_POST['yorum_sira'],
		'durum' => $yorum_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-yorum-listele.php?durum=ok");

	} else {

		Header("Location:../a-yorum-listele.php?durum=no");
	}

}

if ($_GET['yorumsil']=="ok") {

	$sil=$db->prepare("DELETE from yorum where yorum_id=:yorum_id");
	$kontrol=$sil->execute(array(
		'yorum_id' => $_GET['yorum_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['yorum_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-yorum-listele.php?durum=ok");

	} else {

		Header("Location:../a-yorum-listele.php?durum=no");
	}

}


if (isset($_POST['yorumduzenle'])) {


	if($_POST['yorum_durum']=="on")
	{
		$yorum_durum=1;
	}else
	{
		$yorum_durum=0;
	}



	if($_FILES['yorum_resimyol']["size"] > 0)  {



		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['yorum_resimyol']["tmp_name"];
		@$name = $_FILES['yorum_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE yorum SET
			yorum_adsoyad=:adsoyad,
			yorum_icerik=:icerik,
			yorum_sira=:sira,
			yorum_durum=:durum,
			yorum_resimyol=:resimyol
			WHERE yorum_id={$_POST['yorum_id']}");
		$update=$duzenle->execute(array(
			'adsoyad' => $_POST['yorum_adsoyad'],
			'icerik' => $_POST['yorum_icerik'],
			'sira' => $_POST['yorum_sira'],
			'durum' => $yorum_durum,
			'resimyol' => $refimgyol
		));


		$yorum_id=$_POST['yorum_id'];

		if ($update) {

			$resimsilunlink=$_POST['yorum_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-yorum-duzenle.php?yorum_id=$yorum_id&durum=ok");

		} else {

			Header("Location:../a-yorum-duzenle.php?yorum_id=$yorum_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE yorum SET
			yorum_adsoyad=:adsoyad,
			yorum_icerik=:icerik,
			yorum_sira=:sira,
			yorum_durum=:durum
			WHERE yorum_id={$_POST['yorum_id']}");
		$update=$duzenle->execute(array(
			'adsoyad' => $_POST['yorum_adsoyad'],
			'icerik' => $_POST['yorum_icerik'],
			'sira' => $_POST['yorum_sira'],
			'durum' => $yorum_durum
		));

		$yorum_id=$_POST['yorum_id'];

		if ($update) {

			Header("Location:../a-yorum-duzenle.php?yorum_id=$yorum_id&durum=ok");

		} else {

			Header("Location:../a-yorum-duzenle.php?yorum_id=$yorum_id&durum=no");
		}
	}

}




if (isset($_POST['mesajkaydet'])) {



	

	$kaydet=$db->prepare("INSERT INTO mesajlar SET
		mesaj_mail=:mail,
		mesaj_isim=:isim,
		mesaj_icerik=:icerik
	");
	$insert=$kaydet->execute(array(
		'mail' => $_POST['mesaj_mail'],
		'isim' => $_POST['mesaj_isim'],
		'icerik' => $_POST['mesaj_icerik']
	
	));

	if ($insert) {

		Header("Location:../../contact?durum=ok");

	} else {

		Header("Location:../../contact?durum=no");
	}

}

if ($_GET['mesajsil']=="ok") {

	$sil=$db->prepare("DELETE from mesajlar where mesaj_id=:mesaj_id");
	$kontrol=$sil->execute(array(
		'mesaj_id' => $_GET['mesaj_id']
	));

	if ($kontrol) {

	

		Header("Location:../a-mesaj-listele.php?durum=ok");

	} else {

		Header("Location:../a-mesaj-listele.php?durum=no");
	}

}


if (isset($_POST['mesajduzenle'])) {


	


		$duzenle=$db->prepare("UPDATE yorum SET
			mesaj_mail=:mail,
		mesaj_isim=:isim,
		mesaj_icerik=:icerik
			WHERE mesaj_id={$_POST['mesaj_id']}");
		$update=$duzenle->execute(array(
			'mail' => $_POST['mesaj_mail'],
			'isim' => $_POST['mesaj_isim'],
			'icerik' => $_POST['mesaj_icerik']
		));

		$mesaj_id=$_POST['mesaj_id'];

		if ($update) {

			Header("Location:../a-mesaj-duzenle.php?yorum_id=$$mesaj_id&durum=ok");

		} else {

			Header("Location:../a-mesaj-duzenle.php?yorum_id=$$mesaj_id&durum=no");
		}
	}












############ VİDEO GALERİ #############################

if (isset($_POST['videokaydet'])) {



	if($_POST['video_durum']=="on")
	{
		$video_durum=1;
	}else
	{
		$video_durum=0;
	}



	$uploads_dir = '../../images/videogaleri';
	@$tmp_name = $_FILES['video_resimyol']["tmp_name"];
	@$name = $_FILES['video_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO video SET
		video_ad=:ad,
		video_url=:url,
		video_sira=:sira,
		video_durum=:durum,
		video_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['video_ad'],
		'url' => $_POST['video_url'],
		'sira' => $_POST['video_sira'],
		'durum' => $video_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-video-listele.php?durum=ok");

	} else {

		Header("Location:../a-video-listele.php?durum=no");
	}

}


if ($_GET['videosil']=="ok") {

	$sil=$db->prepare("DELETE from video where video_id=:video_id");
	$kontrol=$sil->execute(array(
		'video_id' => $_GET['video_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['video_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-video-listele.php?durum=ok");

	} else {

		Header("Location:../a-video-listele.php?durum=no");
	}

}



if (isset($_POST['videoduzenle'])) {


	if($_POST['video_durum']=="on")
	{
		$video_durum=1;
	}else
	{
		$video_durum=0;
	}



	if($_FILES['video_resimyol']["size"] > 0)  {



		$uploads_dir = '../../images/videogaleri';
		@$tmp_name = $_FILES['video_resimyol']["tmp_name"];
		@$name = $_FILES['video_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$duzenle=$db->prepare("UPDATE video SET
			video_ad=:ad,
			video_url=:url,
			video_sira=:sira,
			video_durum=:durum,
			video_resimyol=:resimyol
			WHERE video_id={$_POST['video_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['video_ad'],
			'url' => $_POST['video_url'],
			'sira' => $_POST['video_sira'],
			'durum' => $video_durum,
			'resimyol' => $refimgyol,
		));


		$video_id=$_POST['video_id'];

		if ($update) {

			$resimsilunlink=$_POST['video_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-video-duzenle.php?video_id=$video_id&durum=ok");

		} else {

			Header("Location:../a-video-duzenle.php?video_id=$video_id&durum=no");
		}



	} else {



		$duzenle=$db->prepare("UPDATE video SET
			video_ad=:ad,
			video_url=:url,
			video_sira=:sira,
			video_durum=:durum
			WHERE video_id={$_POST['video_id']}");
		$update=$duzenle->execute(array(
			'ad' => $_POST['video_ad'],
			'url' => $_POST['video_url'],
			'sira' => $_POST['video_sira'],
			'durum' => $video_durum
		));

		$video_id=$_POST['video_id'];

		if ($update) {

			Header("Location:../a-video-duzenle.php?video_id=$video_id&durum=ok");

		} else {

			Header("Location:../a-video-duzenle.php?video_id=$video_id&durum=no");
		}
	}

}






############ HABER YÖNETİMİ #############################

if (isset($_POST['haberkaydet'])) {


	if($_POST['haber_durum']=="on")
	{
		$haber_durum=1;
	}else
	{
		$haber_durum=0;
	}




	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['haber_resimyol']["tmp_name"];
	@$name = $_FILES['haber_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO haber SET
		haber_ad=:ad,
		haber_detay=:detay,
		haber_title=:title,
		haber_keywords=:keywords,
		haber_description=:description,
		haber_durum=:durum,
		haber_zaman=:zaman,
		haber_sira=:sira,
		haber_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['haber_ad'],
		'detay' => $_POST['haber_detay'],
		'title' => $_POST['haber_title'],
		'keywords' => $_POST['haber_keywords'],
		'description' => $_POST['haber_description'],
		'durum' => $haber_durum,
		'sira' => $_POST['haber_sira'],
		'zaman' => $_POST['haber_zaman'],
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-haber-listele.php?durum=ok");

	} else {

		Header("Location:../a-haber-listele.php?durum=no");
	}

}


if ($_GET['habersil']=="ok") {

	$sil=$db->prepare("DELETE from haber where haber_id=:haber_id");
	$kontrol=$sil->execute(array(
		'haber_id' => $_GET['haber_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['haber_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-haber-listele.php?durum=ok");

	} else {

		Header("Location:../a-haber-listele.php?durum=no");
	}

}





if (isset($_POST['haberduzenle'])) {

	if($_POST['haber_durum']=="on")
	{
		$haber_durum=1;
	}else
	{
		$haber_durum=0;
	}


	
	if($_FILES['haber_resimyol']["size"] > 0)  {


		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['haber_resimyol']["tmp_name"];
		@$name = $_FILES['haber_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE haber SET
			haber_ad=:ad,
			haber_detay=:detay,
			haber_title=:title,
			haber_keywords=:keywords,
			haber_description=:description,
			haber_durum=:durum,
			haber_zaman=:zaman,
		haber_sira=:sira,
			haber_resimyol=:resimyol
			WHERE haber_id={$_POST['haber_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['haber_ad'],
			'detay' => $_POST['haber_detay'],
			'title' => $_POST['haber_title'],
			'keywords' => $_POST['haber_keywords'],
			'description' => $_POST['haber_description'],
			'durum' => $haber_durum,
			'sira' => $_POST['haber_sira'],
		'zaman' => $_POST['haber_zaman'],
			'resimyol' => $refimgyol
		));


		$haber_id=$_POST['haber_id'];

		if ($update) {

			$resimsilunlink=$_POST['haber_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-haber-duzenle.php?haber_id=$haber_id&durum=ok");

		} else {

			Header("Location:../a-haber-duzenle.php?haber_id=$haber_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE haber SET
			haber_ad=:ad,
			haber_detay=:detay,
			haber_title=:title,
			haber_keywords=:keywords,
			haber_description=:description,
			haber_durum=:durum,
			haber_zaman=:zaman,
		haber_sira=:sira
			WHERE haber_id={$_POST['haber_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['haber_ad'],
			'detay' => $_POST['haber_detay'],
			'title' => $_POST['haber_title'],
			'keywords' => $_POST['haber_keywords'],
			'description' => $_POST['haber_description'],
			'durum' => $haber_durum,
			'sira' => $_POST['haber_sira'],
		'zaman' => $_POST['haber_zaman']
			
		));


		$haber_id=$_POST['haber_id'];

		if ($update) {

			Header("Location:../a-haber-duzenle.php?haber_id=$haber_id&durum=ok");

		} else {

			Header("Location:../a-haber-duzenle.php?haber_id=$haber_id&durum=no");
		}



	}

}

############ SAYFA YÖNETİMİ #############################

if (isset($_POST['sayfakaydet'])) {


	if($_POST['sayfa_durum']=="on")
	{
		$sayfa_durum=1;
	}else
	{
		$sayfa_durum=0;
	}




	$uploads_dir = '../../assets/images/';
	@$tmp_name = $_FILES['sayfa_resimyol']["tmp_name"];
	@$name = $_FILES['sayfa_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	if (trim($name)=="") {
		$refimgyol="";
	}else{
		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	}

	$kaydet=$db->prepare("INSERT INTO sayfa SET
		sayfa_ad=:ad,
		sayfa_title=:title,
		sayfa_keywords=:keywords,
		sayfa_description=:description,
		sayfa_icerik=:icerik,
		sayfa_durum=:durum,
		sayfa_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['sayfa_ad'],
		'title' => $_POST['sayfa_title'],
		'keywords' => $_POST['sayfa_keywords'],
		'description' => $_POST['sayfa_description'],
		'icerik' => $_POST['sayfa_icerik'],
		'durum' => $sayfa_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-sayfa-listele.php?durum=ok");

	} else {

		Header("Location:../a-sayfa-listele.php?durum=no");
	}

}


if ($_GET['sayfasil']=="ok") {

	$sil=$db->prepare("DELETE from sayfa where sayfa_id=:sayfa_id");
	$kontrol=$sil->execute(array(
		'sayfa_id' => $_GET['sayfa_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['sayfa_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-sayfa-listele.php?durum=ok");

	} else {

		Header("Location:../a-sayfa-listele.php?durum=no");
	}

}


if (isset($_POST['sayfaduzenle'])) {

	if($_POST['sayfa_durum']=="on")
	{
		$sayfa_durum=1;
	}else
	{
		$sayfa_durum=0;
	}


	if($_FILES['sayfa_resimyol']["size"] > 0)  {


		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['sayfa_resimyol']["tmp_name"];
		@$name = $_FILES['sayfa_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE sayfa SET
			sayfa_ad=:ad,
			sayfa_title=:title,
			sayfa_keywords=:keywords,
			sayfa_description=:description,
			sayfa_icerik=:icerik,
			sayfa_durum=:durum,
			sayfa_resimyol=:resimyol
			WHERE sayfa_id={$_POST['sayfa_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['sayfa_ad'],
			'title' => $_POST['sayfa_title'],
			'keywords' => $_POST['sayfa_keywords'],
			'description' => $_POST['sayfa_description'],
			'icerik' => $_POST['sayfa_icerik'],
			'durum' => $sayfa_durum,
			'resimyol' => $refimgyol
		));


		$sayfa_id=$_POST['sayfa_id'];

		if ($update) {

			$resimsilunlink=$_POST['sayfa_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=ok");

		} else {

			Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE sayfa SET
			sayfa_ad=:ad,
			sayfa_title=:title,
			sayfa_keywords=:keywords,
			sayfa_description=:description,
			sayfa_icerik=:icerik,
			sayfa_durum=:durum
			WHERE sayfa_id={$_POST['sayfa_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['sayfa_ad'],
			'title' => $_POST['sayfa_title'],
			'keywords' => $_POST['sayfa_keywords'],
			'description' => $_POST['sayfa_description'],
			'icerik' => $_POST['sayfa_icerik'],
			'durum' => $sayfa_durum
		));


		$sayfa_id=$_POST['sayfa_id'];

		if ($update) {

			Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=ok");

		} else {

			Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=no");
		}



	}

}




if (isset($_POST['sayfaresimsil'])) {


	$sayfa_id=$_POST['sayfa_id'];

	$kaydet=$db->prepare("UPDATE sayfa SET

		sayfa_resimyol=:resimyol
		WHERE sayfa_id={$_POST['sayfa_id']}");
	$update=$kaydet->execute(array(

		'resimyol' => ""
	));


	if ($update) {

		$resimsilunlink=$_POST['sayfa_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=ok");

	} else {

		Header("Location:../a-sayfa-duzenle.php?sayfa_id=$sayfa_id&durum=no");
	}




}






############ HİZMETLERİMİZ #############################

if (isset($_POST['hizmetkaydet'])) {


	if($_POST['hizmet_durum']=="on")
	{
		$hizmet_durum=1;
	}else
	{
		$hizmet_durum=0;
	}

	if($_POST['hizmet_anasayfa']=="on")
	{
		$hizmet_anasayfa=1;
	}else
	{
		$hizmet_anasayfa=0;
	}



	$uploads_dir = '../assets/images';
	@$tmp_name = $_FILES['hizmet_resimyol']["tmp_name"];
	@$name = $_FILES['hizmet_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	if (trim($name)=="") {
		$refimgyol="";
	}else{

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	}




	$kaydet=$db->prepare("INSERT INTO hizmet SET
		hizmet_ad=:ad,
		hizmet_title=:title,
		hizmet_keywords=:keywords,
		hizmet_description=:description,
		hizmet_icerik=:icerik,
		hizmet_durum=:durum,
		hizmet_anasayfa=:anasayfa,
		hizmet_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['hizmet_ad'],
		'title' => $_POST['hizmet_title'],
		'keywords' => $_POST['hizmet_keywords'],
		'description' => $_POST['hizmet_description'],
		'icerik' => $_POST['hizmet_icerik'],
		'durum' => $hizmet_durum,
		'anasayfa' => $hizmet_anasayfa,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-hizmet-listele.php?durum=ok");

	} else {

		Header("Location:../a-hizmet-listele.php?durum=no");
	}

}



if ($_GET['hizmetsil']=="ok") {

	$sil=$db->prepare("DELETE from hizmet where hizmet_id=:hizmet_id");
	$kontrol=$sil->execute(array(
		'hizmet_id' => $_GET['hizmet_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['hizmet_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-hizmet-listele.php?durum=ok");

	} else {

		Header("Location:../a-hizmet-listele.php?durum=no");
	}

}



if (isset($_POST['hizmetduzenle'])) {

	if($_POST['hizmet_durum']=="on")
	{
		$hizmet_durum=1;
	}else
	{
		$hizmet_durum=0;
	}


	if($_POST['hizmet_anasayfa']=="on")
	{
		$hizmet_anasayfa=1;
	}else
	{
		$hizmet_anasayfa=0;
	}


	if($_FILES['hizmet_resimyol']["size"] > 0)  {


		$uploads_dir = '../assets/images';
		@$tmp_name = $_FILES['hizmet_resimyol']["tmp_name"];
		@$name = $_FILES['hizmet_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE hizmet SET
			hizmet_ad=:ad,
			hizmet_title=:title,
			hizmet_keywords=:keywords,
			hizmet_description=:description,
			hizmet_icerik=:icerik,
			hizmet_durum=:durum,
			hizmet_anasayfa=:anasayfa,
			hizmet_resimyol=:resimyol
			WHERE hizmet_id={$_POST['hizmet_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['hizmet_ad'],
			'title' => $_POST['hizmet_title'],
			'keywords' => $_POST['hizmet_keywords'],
			'description' => $_POST['hizmet_description'],
			'icerik' => $_POST['hizmet_icerik'],
			'durum' => $hizmet_durum,
			'anasayfa' => $hizmet_anasayfa,
			'resimyol' => $refimgyol
		));


		$hizmet_id=$_POST['hizmet_id'];

		if ($update) {

			$resimsilunlink=$_POST['hizmet_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=ok");

		} else {

			Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE hizmet SET
			hizmet_ad=:ad,
			hizmet_title=:title,
			hizmet_keywords=:keywords,
			hizmet_description=:description,
			hizmet_icerik=:icerik,
			hizmet_durum=:durum,
			hizmet_anasayfa=:anasayfa
			WHERE hizmet_id={$_POST['hizmet_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['hizmet_ad'],
			'title' => $_POST['hizmet_title'],
			'keywords' => $_POST['hizmet_keywords'],
			'description' => $_POST['hizmet_description'],
			'icerik' => $_POST['hizmet_icerik'],
			'durum' => $hizmet_durum,
			'anasayfa' => $hizmet_anasayfa
		));


		$hizmet_id=$_POST['hizmet_id'];

		if ($update) {

			Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=ok");

		} else {

			Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=no");
		}



	}

}



if (isset($_POST['hizmetresimsil'])) {


	$hizmet_id=$_POST['hizmet_id'];

	$kaydet=$db->prepare("UPDATE hizmet SET

		hizmet_resimyol=:resimyol
		WHERE hizmet_id={$_POST['hizmet_id']}");
	$update=$kaydet->execute(array(

		'resimyol' => ""
	));


	if ($update) {

		$resimsilunlink=$_POST['hizmet_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=ok");

	} else {

		Header("Location:../a-hizmet-duzenle.php?hizmet_id=$hizmet_id&durum=no");
	}




}






#######

############ MENÜ AYARLARI #############################



if ( isset( $_POST[ 'omenuekle' ] ) )
	{
		
		$ust=$_POST[ 'omenu_ust' ];
		if ($ust==0) {
			$uploads_dir = '../../assets/images';
			@$tmp_name = $_FILES['omenu_banner_resimyol']["tmp_name"];
			@$name = $_FILES['omenu_banner_resimyol']["name"];
			$benzersizsayi1=rand(10000,34000);
			$benzersizsayi2=rand(10000,34000);
		
			$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
			$resimgyol5=substr($uploads_dir, 6)."/".$benzersizad.$name;
			@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	
			$ayarkaydet = $db->prepare(
				"INSERT INTO omenu SET
				omenu_ad=:ad,
				omenu_link=:link,
				omenu_ust=:ust,
				omenu_durum=:durum,
				omenu_sira=:sira,
				omenu_banner_resimyol=:resimyol
				"
			);
			$update     = $ayarkaydet->execute(
				array(
					'ad'  => $_POST[ 'omenu_ad' ],
					'link' => $_POST[ 'omenu_link' ],
					'ust' => $_POST[ 'omenu_ust' ],
					'durum' => '0',
					'sira'  => $_POST[ 'omenu_sira' ],
					'resimyol' =>$resimgyol5
				)
			);
		} else {
			$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['omenu_banner_resimyol']["tmp_name"];
		@$name = $_FILES['omenu_banner_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);
	
		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$resimgyol5=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

			$ayarkaydet = $db->prepare(
				"INSERT INTO omenu SET
				omenu_ad=:ad,
				omenu_link=:link,
				omenu_ust=:ust,
				omenu_durum=:durum,
				omenu_sira=:sira,
				omenu_banner_resimyol=:resimyol
				"
			);
			$update     = $ayarkaydet->execute(
				array(
					'ad'  => $_POST[ 'omenu_ad' ],
					'link' => $_POST[ 'omenu_link' ],
					'ust' => $_POST[ 'omenu_ust' ],
					'durum' => $_POST[ 'omenu_ust' ],
					'sira'  => $_POST[ 'omenu_sira' ],
					'resimyol' =>$resimgyol5
				)
			);
		}
		if ( $update )
		{
			$ayarkaydet = $db->prepare(
				"UPDATE omenu SET
				omenu_durum=:durum
				WHERE omenu_id={$_POST[ 'omenu_ust' ]}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'durum' => $_POST[ 'omenu_ust' ]
				)
			);


			Header( "Location:../a-menu-listele.php?&status=ok" );
		}
		else
		{

			Header( "Location:../a-menu-listele.php?status=no" );
		}
	}



	if (isset($_POST['omenuduzenle'])) {

		$ust=$_POST[ 'omenu_ust' ];
			if ($ust==0) {
				$ayarkaydet = $db->prepare(
					"UPDATE omenu SET
					omenu_ad=:ad,
					omenu_sira=:sira,
					omenu_link=:link
					WHERE omenu_id={$_POST['omenu_id']}"
				);
				$update     = $ayarkaydet->execute(
					array(
						'ad'     => $_POST[ 'omenu_ad' ],
						'sira'     => $_POST[ 'omenu_sira' ],
						'link'     => $_POST[ 'omenu_link' ]
					)
				);
			}
			$ayarkaydet = $db->prepare(
				"UPDATE omenu SET
				omenu_ad=:ad,
				omenu_sira=:sira,
				omenu_ust=:ust,
				omenu_link=:link
				WHERE omenu_id={$_POST['omenu_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'ad'     => $_POST[ 'omenu_ad' ],
					'sira'     => $_POST[ 'omenu_sira' ],
					'ust'     => $_POST[ 'omenu_ust' ],
					'link'     => $_POST[ 'omenu_link' ]
				)
			);
			$menu_id=$_POST[ 'omenu_id' ];
		if ($update) {
		
			Header("Location:../a-menu-duzenle.php?durum=ok&omenu_id=$menu_id");
	
		} else {
	
			Header("Location:../a-menu-duzenle.php?durum=no&omenu_id=$menu_id");
		}
	
	}
	



if ( $_GET[ 'omenusil' ] == "ok" )
	{


		$sil     = $db->prepare( "DELETE from omenu where omenu_id=:omenu_id" );
		$kontrol = $sil->execute(
			array(
				'omenu_id' => $_GET[ 'omenu_id' ]
			)
		);

	
	

		if ( $kontrol )
		{
	

			Header( "Location:../a-menu-duzenle.php?status=ok" );
		}
		else
		{

			Header( "Location:../a-menu-duzenle.php?status=no" );
		}
	
	}
############ ENÇOK SATAN ÜRÜNLER AYARLARI #############################



if ($_GET['encoksil']=="ok") {

	$sil=$db->prepare("DELETE from encoksatan where id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['encok_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-encok-listele.php?durum=ok");

	} else {

		Header("Location:../a-encok-listele.php?durum=no");
	}

}
if ( isset( $_POST[ 'encokekle' ] ) )
{
	if($_POST['encok_durum']=="on")
	{
		$encok_durum=1;
	}else
	{
		$encok_durum=0;
	}

	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['encok_resimyol']["tmp_name"];
	@$name = $_FILES['encok_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol2=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet = $db->prepare(
		"INSERT INTO encoksatan SET
		encok_ad=:ad,
		encok_icerik=:icerik,
		encok_durum=:durum,
		encok_title=:title,
		encok_description=:descr,
		encok_resimyol=:resimyol");
	$insert = $kaydet->execute(
		array(
			'ad' => $_POST['encok_ad'],
			'icerik' => $_POST['encok_icerik'],
			'durum' => $encok_durum,
			'title' => $_POST['encok_title'],
			'descr' => $_POST['encok_description'],
			'resimyol' => $refimgyol2
		));

	if ( $insert )
	{

		Header("Location:../a-encok-listele.php?durum=ok");

	} else {

		Header("Location:../a-encok-listele.php?durum=no");
	}
}



if ( isset( $_POST[ 'encokduzenle' ] ) )
	{
		$id=$_POST['id'];
		if($_POST['encok_durum']=="on")
	{
		$encok_durum=1;
	}else
	{
		$encok_durum=0;
	}

		if ( $_FILES[ 'encok_resimyol' ][ "size" ] > 0 )
		{

			$uploads_dir = '../../assets/images';
			@$tmp_name = $_FILES['encok_resimyol']["tmp_name"];
			@$name = $_FILES['encok_resimyol']["name"];
			$benzersizsayi1=rand(10000,34000);
			$benzersizsayi2=rand(10000,34000);
	
			$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
			$refimgyol2=substr($uploads_dir, 6)."/".$benzersizad.$name;
			@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

			$ayarkaydet = $db->prepare(
				"UPDATE encoksatan SET
						encok_ad=:ad,
		encok_icerik=:icerik,
		encok_durum=:durum,
		encok_title=:title,
		encok_description=:descr,
		encok_resimyol=:resimyol
				
				WHERE id={$_POST['id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'ad' => $_POST['encok_ad'],
		'icerik' => $_POST['encok_icerik'],
		'durum' => $encok_durum,
		'title' => $_POST['encok_title'],
			'descr' => $_POST['encok_description'],
		'resimyol' => $refimgyol2
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../a-encok-listele.php?status=ok" );
			}
			else
			{

				Header( "Location:../a-encok-listele.php?status=no" );
			}
		} else {
			$ayarkaydet = $db->prepare(
				"UPDATE encoksatan SET
						encok_ad=:ad,
		encok_icerik=:icerik,
		encok_durum=:durum,
		encok_title=:title,
		encok_description=:descr

				
				WHERE id={$_POST['id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'ad' => $_POST['encok_ad'],
					'icerik' => $_POST['encok_icerik'],
					'durum' => $encok_durum,
					'title' => $_POST['encok_title'],
						'descr' => $_POST['encok_description']
				)
			);

			if ( $update )
			{


				Header( "Location:../a-encok-listele.php?status=ok" );
			}
			else
			{

				Header( "Location:../a-encok-listele.php?status=no" );
			}
		}
	}




if (isset($_POST['encokresimsil'])) {


	$id=$_POST['id'];

	$kaydet=$db->prepare("UPDATE encoksatan SET

		encok_resimyol=:resimyol
		WHERE id={$_POST['id']}");
	$update=$kaydet->execute(array(

		'resimyol' => ""
	));


	if ($update) {

		$resimsilunlink=$_POST['encok_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-encok-duzenle.php?id=$id&durum=ok");

	} else {

		Header("Location:../a-encok-duzenle.php?id=$id&durum=no");
	}




}




############ SLAYT AYARLARI #############################


if ($_GET['slaytsil']=="ok") {

	$sil=$db->prepare("DELETE from slayt where slayt_id=:slayt_id");
	$kontrol=$sil->execute(array(
		'slayt_id' => $_GET['slayt_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['slayt_id_resim'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-poster-duzenle.php?durum=ok");

	} else {

		Header("Location:../a-poster-duzenle.php?durum=no");
	}

}
if ( isset( $_POST[ 'slaytekle' ] ) )
{
	if($_POST['slayt_durum']=="on")
	{
		$slayt_durum=1;
	}else
	{
		$slayt_durum=0;
	}

	$uploads_dir = '../assets/images';
	$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO slayt SET
		slayt_baslik=:baslik,
		slayt_aciklama=:aciklama,
		slayt_durum=:durum,
		slayt_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'baslik' => $_POST['slayt_baslik'],
			'aciklama' => $_POST['slayt_aciklama'],
			'durum' => $slayt_durum,
			'resim' => $refimgyol
		));

	if ( $insert )
	{

		Header("Location:../a-poster-duzenle.php?durum=ok");

	} else {

		Header("Location:../a-poster-duzenle.php?durum=no");
	}
}



if ( isset( $_POST[ 'slaytduzenle' ] ) )
	{
		$slayt_id=$_POST['slayt_id'];
		if($_POST['slayt_durum']=="on")
	{
		$slayt_durum=1;
	}else
	{
		$slayt_durum=0;
	}

		if ( $_FILES[ 'slayt_resim' ][ "size" ] > 0 )
		{

			$uploads_dir = '../assets/images';
			@$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol2     = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE slayt SET
				slayt_baslik=:baslik,
		slayt_aciklama=:aciklama,
		slayt_durum=:durum,
		slayt_resim=:resim
				
				WHERE slayt_id={$_POST['slayt_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik' => $_POST['slayt_baslik'],
					'aciklama' => $_POST['slayt_aciklama'],
					'durum' => $slayt_durum,
					'resim' => $refimgyol3
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../a-poster-duzenle.php?status=ok" );
			}
			else
			{

				Header( "Location:../a-poster-duzenle.php?status=no" );
			}
		} else {
			$ayarkaydet = $db->prepare(
				"UPDATE slayt SET
						slayt_baslik=:baslik,
						slayt_durum=:durum,
		slayt_aciklama=:aciklama

				
				WHERE slayt_id={$_POST['slayt_id']}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'baslik' => $_POST['slayt_baslik'],
					'durum' => $slayt_durum,
					'aciklama' => $_POST['slayt_aciklama']
				)
			);

			if ( $update )
			{


				Header( "Location:../a-poster-duzenle.php?status=ok" );
			}
			else
			{

				Header( "Location:../a-poster-duzenle.php?status=no" );
			}
		}
	}




if (isset($_POST['slaytresimsil'])) {


	$slayt_id=$_POST['slayt_id'];

	$kaydet=$db->prepare("UPDATE slayt SET

slayt_resim=:resim
		WHERE slayt_id={$_POST['slayt_id']}");
	$update=$kaydet->execute(array(

		'resim' => ""
	));


	if ($update) {

		$resimsilunlink=$_POST['slayt_resim'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-poster-duzenle.php?durum=ok");

	} else {

		Header("Location:../a-poster-duzenle.php?durum=no");
	}




}


if ($_GET['slaytsil']=="ok") {

	$sil=$db->prepare("DELETE from slayt where slayt_id=:slayt_id");
	$kontrol=$sil->execute(array(
		'slayt_id' => $_GET['slayt_id']
	));


}
############ S.S.S İŞLEMLERİ #############################

if (isset($_POST['ssskaydet'])) {

	if($_POST['sss_durum']=="on")
	{
		$sss_durum=1;
	}else
	{
		$sss_durum=0;
	}

	$kaydet=$db->prepare("INSERT INTO sss SET
		sss_ad=:ad,
		sss_detay=:detay,
		sss_sira=:sira,
		sss_durum=:durum");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['sss_ad'],
		'detay' => $_POST['sss_detay'],
		'sira' => $_POST['sss_sira'],
		'durum' => $sss_durum ));

	if ($insert) {

		Header("Location:../a-sss-listele.php?durum=ok");

	} else {

		Header("Location:../a-sss-listele.php?durum=no");
	}

}


if ($_GET['ssssil']=="ok") {

	$sil=$db->prepare("DELETE from sss where sss_id=:sss_id");
	$kontrol=$sil->execute(array(
		'sss_id' => $_GET['sss_id']
	));


	if ($kontrol) {

		Header("Location:../a-sss-listele.php?durum=ok");

	} else {

		Header("Location:../a-sss-listele.php?durum=no");
	}



}


if (isset($_POST['sssduzenle'])) {

	$sss_id=$_POST['sss_id'];


	if($_POST['sss_durum']=="on")
	{
		$sss_durum=1;
	}else
	{
		$sss_durum=0;
	}



	$kaydet=$db->prepare("UPDATE sss SET
		sss_ad=:ad,
		sss_detay=:detay,
		sss_sira=:sira,
		sss_durum=:durum
		WHERE sss_id={$_POST['sss_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['sss_ad'],
		'detay' => $_POST['sss_detay'],
		'sira' => $_POST['sss_sira'],
		'durum' => $sss_durum
	));

	if ($update) {

		Header("Location:../a-sss-duzenle.php?durum=ok&sss_id=$sss_id");

	} else {

		Header("Location:../a-sss-duzenle.php?durum=no&sss_id=$sss_id");
	}

}




############ BAYİ İŞLEMLERİ #############################

if (isset($_POST['bayikaydet'])) {

	if($_POST['bayi_durum']=="on")
	{
		$bayi_durum=1;
	}else
	{
		$bayi_durum=0;
	}

	$kaydet=$db->prepare("INSERT INTO bayi SET
		bayi_ad=:ad,
		bayi_adres=:adres,
		bayi_tel=:tel,
		bayi_mail=:mail,
		bayi_sira=:sira,
		bayi_durum=:durum");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['bayi_ad'],
		'adres' => $_POST['bayi_adres'],
		'tel' => $_POST['bayi_tel'],
		'mail' => $_POST['bayi_mail'],
		'sira' => $_POST['bayi_sira'],
		'durum' => $bayi_durum ));

	if ($insert) {

		Header("Location:../a-bayi-listele.php?durum=ok");

	} else {

		Header("Location:../a-bayi-listele.php?durum=no");
	}

}



if ($_GET['bayisil']=="ok") {

	$sil=$db->prepare("DELETE from bayi where bayi_id=:bayi_id");
	$kontrol=$sil->execute(array(
		'bayi_id' => $_GET['bayi_id']
	));


	if ($kontrol) {

		Header("Location:../a-bayi-listele.php?durum=ok");

	} else {

		Header("Location:../a-bayi-listele.php?durum=no");
	}



}



if (isset($_POST['bayiduzenle'])) {

	$bayi_id=$_POST['bayi_id'];


	if($_POST['bayi_durum']=="on")
	{
		$bayi_durum=1;
	}else
	{
		$bayi_durum=0;
	}



	$kaydet=$db->prepare("UPDATE bayi SET
		bayi_ad=:ad,
		bayi_adres=:adres,
		bayi_tel=:tel,
		bayi_mail=:mail,
		bayi_sira=:sira,
		bayi_durum=:durum
		WHERE bayi_id={$_POST['bayi_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['bayi_ad'],
		'adres' => $_POST['bayi_adres'],
		'tel' => $_POST['bayi_tel'],
		'mail' => $_POST['bayi_mail'],
		'sira' => $_POST['bayi_sira'],
		'durum' => $bayi_durum
	));

	if ($update) {

		Header("Location:../a-bayi-listele.php?durum=ok&bayi_id=$bayi_id");

	} else {

		Header("Location:../a-bayi-listele.php?durum=no&bayi_id=$bayi_id");
	}

}


############ SİPARİŞ İŞLEMLERİ #############################

if (isset($_POST['sipariskaydet'])) {

	$urunad=$_POST['siparis_urun'];
	$urunid=$_POST['urun_id'];
	$siparis_durum=$_POST['siparis_durum'];
	if($_POST['siparis_durum']=="on")
	{
		$siparis_durum=1;
	}else
	{
		$siparis_durum=0;
	}

	$kaydet=$db->prepare("INSERT INTO siparis SET
		siparis_adsoyad=:adsoyad,
		siparis_email=:email,
		siparis_telefon=:telefon,
		siparis_il=:il,
		siparis_ilce=:ilce,
		siparis_adres=:adres,
		siparis_urun=:urun,
		siparis_aciklama=:aciklama,
		siparis_fiyat=:fiyat,
		siparis_not=:not,
		siparis_durum=:durum");

	$insert=$kaydet->execute(array(
		'adsoyad' => htmlspecialchars(trim($_POST['siparis_adsoyad'])),
		'email' => htmlspecialchars(trim($_POST['siparis_email'])),
		'telefon' =>htmlspecialchars(trim( $_POST['siparis_telefon'])),
		'il' => htmlspecialchars(trim($_POST['siparis_il'])),
		'ilce' => htmlspecialchars(trim($_POST['siparis_ilce'])),
		'adres' => htmlspecialchars(trim($_POST['siparis_adres'])),
		'urun' => htmlspecialchars(trim($_POST['siparis_urun'])),
		'aciklama' => htmlspecialchars(trim($_POST['siparis_aciklama'])),
		'fiyat' => htmlspecialchars(trim($_POST['siparis_fiyat'])),
		'not' => htmlspecialchars(trim($_POST['siparis_not'])),
		'durum' =>$siparis_durum

	));

	$siparisno = $db->lastInsertId();

	if ($insert) {

		Header("Location:../../admin/a-siparis-listele.php?".seo($urunad).'/'.$urunid."?durum=ok&siparisno=".$siparisno);

	} else {

		Header("Location:../../admin/a-siparis-listele.php?".seo($urunad).'/'.$urunid."?durum=no");
	}

}



if ($_GET['siparissil']=="ok") {

	$sil=$db->prepare("DELETE from siparis where siparis_id=:siparis_id");
	$kontrol=$sil->execute(array(
		'siparis_id' => $_GET['siparis_id']
	));


	if ($kontrol) {

		Header("Location:../a-siparis-listele.php?durum=ok");

	} else {

		Header("Location:../a-siparis-listele.php?durum=no");
	}



}



if (isset($_POST['siparisduzenle'])) {

	$siparis_id=$_POST['siparis_id'];

	
	if($_POST['siparis_durum']=="on")
	{
		$siparis_durum=1;
	}else
	{
		$siparis_durum=0;
	}



	$kaydet=$db->prepare("UPDATE siparis SET
	siparis_adsoyad=:adsoyad,
		siparis_email=:email,
		siparis_telefon=:telefon,
		siparis_il=:il,
		siparis_ilce=:ilce,
		siparis_adres=:adres,
		siparis_urun=:urun,
		siparis_fiyat=:fiyat,
		siparis_durum=:durum,
		siparis_aciklama=:aciklama,
		siparis_not=:not
		WHERE siparis_id=$siparis_id");
	$update=$kaydet->execute(array(
			'adsoyad' => $_POST['siparis_adsoyad'],
		'email' => $_POST['siparis_email'],
		'telefon' => $_POST['siparis_telefon'],
		'il' => $_POST['siparis_il'],
		'ilce' => $_POST['siparis_ilce'],
		'adres' => $_POST['siparis_adres'],
		'urun' => $_POST['siparis_urun'],
		'aciklama' => $_POST['siparis_aciklama'],
		'fiyat' => $_POST['siparis_fiyat'],
		'not' => $_POST['siparis_not'],
		'durum' => $_POST['siparis_durum']
	));

	if ($update) {

		Header("Location:../a-siparis-listele.php?durum=ok&siparis_id=$siparis_id");

	} else {

		Header("Location:../a-siparis-listele.php?durum=no&siparis_id=$siparis_id");
	}

}





############ KULLANICI RESMİ #############################

if (isset($_POST['kresimduzenle'])) {

	$uploads_dir = '../../images/kullanici';
	@$tmp_name = $_FILES['kullanici_resim']["tmp_name"];
	@$name = $_FILES['kullanici_resim']["name"];
	$benzersizsayi4=rand(20000,32000)."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	$duzenle=$db->prepare("UPDATE kullanici SET
		kullanici_resim=:resim
		WHERE kullanici_id={$_POST['kullanici_id']}");
	$update=$duzenle->execute(array(
		'resim' => $refimgyol
	));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-kullanici.php?durum=ok");

	} else {

		Header("Location:../a-kullanici.php?durum=no");
	}

}


############ KULLANICI ADI #############################

if (isset($_POST['kullaniciadduzenle'])) {


	$kullanici_password=md5($_POST['kullanici_password']);



	$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:id");
	$kullanicisor->execute(array(
		'id' => $_POST['kullanici_id']
	));
	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
	$say=$kullanicisor->rowCount();

	if ($say==0) {

		Header("Location:../a-kullanici.php?durum=no");
	}
	else
	{


		if ($kullanici_password==$kullanicicek['kullanici_password'] ) {

			$ayarkaydet=$db->prepare("UPDATE kullanici SET
				kullanici_adsoyad=:adsoyad,
				kullanici_ad=:ad
				WHERE kullanici_id={$_POST['kullanici_id']}");
			$update=$ayarkaydet->execute(array(
				'adsoyad' => $_POST['kullanici_adsoyad'],
				'ad' => $_POST['kullanici_ad']
			));

			if ($update) {

				Header("Location:../a-kullanici.php?durum=ok");

			} else {

				Header("Location:../a-kullanici.php?durum=no");
			}

		}

		else
		{
			Header("Location:../a-kullanici.php?durum=errorpass");
		}




	}




}




############ KULLANICI PASSWORD #############################

if (isset($_POST['passwordduzenle'])) {


	$kullanici_oldpassword=md5($_POST['kullanici_oldpassword']);
	$kullanici_password=md5($_POST['kullanici_password']);
	$kullanici_password2=md5($_POST['kullanici_password2']);




	if ($kullanici_password==$kullanici_password2) {


		$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:id");
		$kullanicisor->execute(array(
			'id' => $_POST['kullanici_id']
		));
		$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
		$say=$kullanicisor->rowCount();

		if ($say==0) {

			Header("Location:../a-kullanici.php?durum=no");
		}
		else
		{


			if ($kullanici_oldpassword==$kullanicicek['kullanici_password'] ) {

				$ayarkaydet=$db->prepare("UPDATE kullanici SET
					kullanici_password=:password
					WHERE kullanici_id={$_POST['kullanici_id']}");
				$update=$ayarkaydet->execute(array(
					'password' => $kullanici_password
				));

				if ($update) {

					Header("Location:../logout.php");

				} else {

					Header("Location:../a-kullanici.php?durum=no");
				}

			}

			else
			{
				Header("Location:../a-kullanici.php?durum=erroroldpass");
			}




		}

	}
	else
	{
		Header("Location:../a-kullanici.php?durum=notequal");
	}




}




############ KATEGORİ YÖNETİMİ #############################

if (isset($_POST['kategorikaydet'])) {
	
	if($_POST['kategori_durum']=="on")
	{
		$kategori_durum=1;
	}else
	{
		$kategori_durum=0;
	}

	



	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['kategori_resimyol']["tmp_name"];
	@$name = $_FILES['kategori_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$resimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

				$kaydet=$db->prepare("INSERT INTO  kategori SET
				kategori_ad=:ad,
				kategori_sira=:sira,
				kategori_resimyol=:resimyol,
				kategori_durum =:durum
				
				");
				$insert=$kaydet->execute(array(
				'ad' => $_POST['kategori_ad'],
				'sira' => $_POST['kategori_sira'],
				'resimyol' => $resimgyol,
				'durum'  => $kategori_durum
			
				));


	if ($insert) {

		Header("Location:../a-kategori-listele.php?durum=ok");

	} else {

		Header("Location:../a-kategori-listele.php?durum=no");
	}


	}




if ($_GET['kategorisil']=="ok") {

	$sil=$db->prepare("DELETE from kategori where kategori_id=:kategori_id");
	$kontrol=$sil->execute(array(
		'kategori_id' => $_GET['kategori_id']
	));

	if ($kontrol) {

		Header("Location:../a-kategori-listele.php?durum=ok");

	} else {

		Header("Location:../a-kategori-listele.php?durum=no");
	}

}


if (isset($_POST['kategoriduzenle'])) {
	$kategori_id=$_POST['kategori_id'];
	
	if($_POST['kategori_durum']=="on")
	{
		$kategori_durum=1;
	}else
	{
		$kategori_durum=0;
	}

	if ( $_FILES[ 'kategori_resimyol' ][ "size" ] > 0 )
		{

			$uploads_dir = '../../assets/images';
			@$tmp_name = $_FILES['kategori_resimyol']["tmp_name"];
			@$name = $_FILES['kategori_resimyol']["name"];
			$benzersizsayi1=rand(10000,34000);
			$benzersizsayi2=rand(10000,34000);
		
			$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
			$resimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
			@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("UPDATE kategori SET
		kategori_ad=:ad,
		kategori_sira=:sira,
	    kategori_durum =:durum,
		kategori_resimyol=:resimyol
	
		WHERE kategori_id={$_POST['kategori_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['kategori_ad'],
		'sira' => $_POST['kategori_sira'],
		'durum'  => $kategori_durum,

		'resimyol' => $resimgyol

	));


	

	if ($update) {
		$resimsilunlink = $_POST[ 'eski_yol' ];
				unlink( "../$resimsilunlink" );

		Header("Location:../a-kategori-listele.php?kategori_id=$kategori_id&durum=ok");

	} else {

		Header("Location:../a-kategori-listele.php?kategori_id=$kategori_id&durum=no");
	}
}
	else {

$kaydet=$db->prepare("UPDATE kategori SET
		kategori_ad=:ad,
		kategori_sira=:sira,
		kategori_durum =:durum
	
	
	
		WHERE kategori_id={$_POST['kategori_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['kategori_ad'],
		'sira' => $_POST['kategori_sira'],
		'durum'  => $kategori_durum
	
	
	));


	$kategori_id=$_POST['kategori_id'];

	if ($update) {

		Header("Location:../a-kategori-listele.php?kategori_id=$kategori_id&durum=ok");

	} else {

		Header("Location:../a-kategori-listele.php?kategori_id=$kategori_id&durum=no");
	}

	}


}


#################

############ BEDEN TABLOSU #############################

if (isset($_POST['bedenkaydet'])) {
	if($_POST['beden_durum']=="on")
	{
		$beden_durum=1;
	}else
	{
		$beden_durum=0;
	}


	$kaydet=$db->prepare("INSERT INTO urun_beden SET
		beden_ad=:ad,
		beden_sira=:sira,
		beden_durum=:durum,
		beden_sayi=:sayi
		");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['beden_ad'],
		'sira' => $_POST['beden_sira'],
		'durum' => $beden_durum,
		'sayi' => $_POST['beden_sayi']
	

	));

	if ($insert) {

		Header("Location:../a-beden-listele.php?durum=ok");

	} else {

		Header("Location:../a-beden-listele.php?durum=no");
	}

}


if ($_GET['bedensil']=="ok") {

	$sil=$db->prepare("DELETE from urun_beden where beden_id=:beden_id");
	$kontrol=$sil->execute(array(
		'beden_id' => $_GET['beden_id']
	));

	if ($kontrol) {

		Header("Location:../a-beden-listele.php?durum=ok");

	} else {

		Header("Location:../a-beden-listele.php?durum=no");
	}

}


if (isset($_POST['bedenduzenle'])) {

	$beden_id=$_POST['beden_id'];
	if($_POST['beden_durum']=="on")
{
	$beden_durum=1;
}else
{
	$beden_durum=0;
}

	$kaydet=$db->prepare("UPDATE urun_beden SET
		beden_ad=:ad,
		beden_sira=:sira,
		beden_durum=:durum,
		beden_sayi=:sayi
		
		WHERE beden_id={$_POST['beden_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['beden_ad'],
		'sira' => $_POST['beden_sira'],
		'durum' => $beden_durum,
		'sayi' => $_POST['beden_sayi']
	
	));


	$beden_id=$_POST['beden_id'];

	if ($update) {

		Header("Location:../a-beden-listele.php?beden_id=$beden_id&durum=ok");

	} else {

		Header("Location:../a-beden-listele.php?beden_id=$beden_id&durum=no");
	}





}

############ ÜRÜN YÖNETİMİ #############################

if (isset($_POST['urunkaydet'])) {


	if($_POST['urun_durum']=="on")
	{
		$urun_durum=1;
	}else
	{
		$urun_durum=0;
	}

	


	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['urun_resimyol']["tmp_name"];
	@$name = $_FILES['urun_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$kaydet=$db->prepare("INSERT INTO urun SET
		urun_ad=:ad,
		urun_kategori=:kategori,

		urun_sira=:sira,
		urun_title=:title,
		
		urun_description=:description,
		urun_icerik=:icerik,
		urun_durum=:durum,
		
		urun_cinsiyet=:cinsiyet,
		urun_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['urun_ad'],
		'kategori' => $_POST['urun_kategori'],
		
		'sira' => $_POST['urun_sira'],
		'title' => $_POST['urun_title'],
		
		'description' => $_POST['urun_description'],
		'icerik' => $_POST['urun_icerik'],
		'cinsiyet' => $_POST['urun_cinsiyet'],
		'durum' => $urun_durum,
	
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-urun-listele.php?durum=ok");

	} else {

		Header("Location:../a-urun-listele.php?durum=no");
	}

}


if ($_GET['urunsil']=="ok") {

	$sil=$db->prepare("DELETE from urun where urun_id=:urun_id");
	$kontrol=$sil->execute(array(
		'urun_id' => $_GET['urun_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['urun_resimyol'];
		unlink("../../$resimsilunlink");


		$urungalerisor=$db->prepare("SELECT * from urungaleri where urun_id=:urun_id");
		$urungalerisor->execute(array(
			'urun_id' => $_GET['urun_id']
		));
		while($urungalericek=$urungalerisor->fetch(PDO::FETCH_ASSOC)) {

			$resimgalerisil=$urungalericek['urungaleri_resimyol'];

			unlink("../../$resimgalerisil");

		}
		$galerisil=$db->prepare("DELETE from urungaleri where urun_id=:urun_id");
		$galerikontrol=$galerisil->execute(array(
			'urun_id' => $_GET['urun_id']
		));



		Header("Location:../a-urun-listele.php?durum=ok");

	} else {

		Header("Location:../a-urun-listele.php?durum=no");
	}

}


if (isset($_POST['urunduzenle'])) {

	if($_POST['urun_durum']=="on")
	{
		$urun_durum=1;
	}else
	{
		$urun_durum=0;
	}


	if($_POST['urun_anasayfa']=="on")
	{
		$urun_anasayfa=1;
	}else
	{
		$urun_anasayfa=0;
	}


	if($_FILES['urun_resimyol']["size"] > 0)  {


		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['urun_resimyol']["tmp_name"];
		@$name = $_FILES['urun_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE urun SET
			urun_ad=:ad,
			urun_kategori=:kategori,
			urun_fiyat=:fiyat,
			urun_sira=:sira,
			urun_title=:title,
			urun_keywords=:keywords,
			urun_description=:description,
			urun_icerik=:icerik,
			urun_durum=:durum,
			urun_anasayfa=:anasayfa,
			urun_cinsiyet=:cinsiyet,
			urun_resimyol=:resimyol
			WHERE urun_id={$_POST['urun_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['urun_ad'],
			'kategori' => $_POST['urun_kategori'],
			'fiyat' => $_POST['urun_fiyat'],
			'sira' => $_POST['urun_sira'],
			'title' => $_POST['urun_title'],
			'keywords' => $_POST['urun_keywords'],
			'description' => $_POST['urun_description'],
			'icerik' => $_POST['urun_icerik'],
			'cinsiyet' => $_POST['urun_cinsiyet'],
			'durum' => $urun_durum,
			'anasayfa' => $urun_anasayfa,
			'resimyol' => $refimgyol
		));


		$urun_id=$_POST['urun_id'];

		if ($update) {

			$resimsilunlink=$_POST['urun_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-urun-listele.php?urun_id=$urun_id&durum=ok");

		} else {

			Header("Location:../a-urun-listele.php?urun_id=$urun_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE urun SET
			urun_ad=:ad,
			urun_kategori=:kategori,
			urun_fiyat=:fiyat,
			urun_sira=:sira,
			urun_title=:title,
			urun_keywords=:keywords,
			urun_description=:description,
			urun_icerik=:icerik,
			urun_durum=:durum,
			urun_cinsiyet=:cinsiyet,
			urun_anasayfa=:anasayfa
			WHERE urun_id={$_POST['urun_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['urun_ad'],
			'kategori' => $_POST['urun_kategori'],
			'fiyat' => $_POST['urun_fiyat'],
			'sira' => $_POST['urun_sira'],
			'title' => $_POST['urun_title'],
			'keywords' => $_POST['urun_keywords'],
			'description' => $_POST['urun_description'],
			'icerik' => $_POST['urun_icerik'],
			'cinsiyet' => $_POST['urun_cinsiyet'],
			'durum' => $urun_durum,
			'anasayfa' => $urun_anasayfa
		));


		$urun_id=$_POST['urun_id'];

		if ($update) {

			Header("Location:../a-urun-listele.php?urun_id=$urun_id&durum=ok");

		} else {

			Header("Location:../a-urun-listele.php?urun_id=$urun_id&durum=no");
		}



	}

}

######## ÇALIŞAN ############

if (isset($_POST['calisankaydet'])) {


	if($_POST['calisan_durum']=="on")
	{
		$calisan_durum=1;
	}else
	{
		$calisan_durum=0;
	}

	if($_POST['urun_anasayfa']=="on")
	{
		$urun_anasayfa=1;
	}else
	{
		$urun_anasayfa=0;
	}



	$uploads_dir = '../../assets/images';
	@$tmp_name = $_FILES['calisan_resimyol']["tmp_name"];
	@$name = $_FILES['calisan_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");





	$kaydet=$db->prepare("INSERT INTO calisan SET
		calisan_ad=:ad,
		calisan_detay=:detay,
		calisan_durum=:durum,
		calisan_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['calisan_ad'],
		'detay' => $_POST['calisan_detay'],

		'durum' => $calisan_durum,
		'resimyol' => $refimgyol
	));

	if ($insert) {

		Header("Location:../a-calisan.php?durum=ok");

	} else {

		Header("Location:../a-calisan.php?durum=no");
	}

}


if ($_GET['calisansil']=="ok") {

	$sil=$db->prepare("DELETE from calisan where calisan_id=:calisan_id");
	$kontrol=$sil->execute(array(
		'calisan_id' => $_GET['calisan_id']
	));


}


if (isset($_POST['calisanduzenle'])) {

	if($_POST['calisan_durum']=="on")
	{
		$calisan_durum=1;
	}else
	{
		$calisan_durum=0;
	}


	if($_POST['urun_anasayfa']=="on")
	{
		$urun_anasayfa=1;
	}else
	{
		$urun_anasayfa=0;
	}


	if($_FILES['calisan_resimyol']["size"] > 0)  {


		$uploads_dir = '../../assets/images';
		@$tmp_name = $_FILES['calisan_resimyol']["tmp_name"];
		@$name = $_FILES['calisan_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE calisan SET
			calisan_ad=:ad,
			calisan_detay=:detay,
			calisan_durum=:durum,
			calisan_resimyol=:resimyol
			WHERE calisan_id={$_POST['calisan_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['calisan_ad'],
			'detay' => $_POST['calisan_detay'],

			'durum' => $calisan_durum,
			'resimyol' => $refimgyol
		));


		$calisan_id=$_POST['calisan_id'];

		if ($update) {

			$resimsilunlink=$_POST['calisan_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-calisan-duzenle.php?calisan_id=$calisan_id&durum=ok");

		} else {

			Header("Location:../a-calisan-duzenle.php?urun_id=$calisan_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE calisan SET
			calisan_ad=:ad,
			calisan_detay=:detay,
			calisan_durum=:durum,
			calisan_resimyol=:resimyol
			WHERE calisan_id={$_POST['calisan_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['calisan_ad'],
			'detay' => $_POST['calisan_detay'],

			'durum' => $calisan_durum,
			'resimyol' => $refimgyol
		));


		$calisan_id=$_POST['calisan_id'];

		if ($update) {

			Header("Location:../a-calisan-duzenle.php?urun_id=$calisan_id&durum=ok");

		} else {

			Header("Location:../a-calisan-duzenle.php?urun_id=$calisan_id&durum=no");
		}



	}

}

############ ÜRÜN GALERİ #############################

if ($_GET['urungalerisil']=="ok") {

	$sil=$db->prepare("DELETE from urungaleri where urungaleri_id=:urungaleri_id");
	$kontrol=$sil->execute(array(
		'urungaleri_id' => $_GET['urungaleri_id']
	));






	if ($kontrol) {

		$resimsilunlink=$_GET['urungaleri_resimyol'];
		unlink("../../$resimsilunlink");



		Header("Location:../a-urungaleri-listele.php?durum=ok");

	} else {

		Header("Location:../a-urungaleri-listele.php?durum=no");
	}

}





if ($_GET['encokgalerisil']=="ok") {

	$sil=$db->prepare("DELETE from encoksatangaleri where encokgal_id=:encokgal_id");
	$kontrol=$sil->execute(array(
		'encokgal_id' => $_GET['encokgal_id']
	));






	if ($kontrol) {

		$resimsilunlink=$_GET['encokgal_resimyol'];
		unlink("../../$resimsilunlink");



		Header("Location:../a-encoksatan-galeri.php?durum=ok");

	} else {

		Header("Location:../a-encoksatan-galeri.php?durum=no");
	}

}

############ ÜRÜN TANITIM GRUPLARI #############################

if (isset($_POST['urungrupkaydet'])) {

	if($_POST['urungrup_anasayfa']=="on")
	{
		$urungrup_anasayfa=1;
	}else
	{
		$urungrup_anasayfa=0;
	}


	if($_POST['urungrup_durum']=="on")
	{
		$urungrup_durum=1;
	}else
	{
		$urungrup_durum=0;
	}


	$uploads_dir = '../../images/urun';
	@$tmp_name = $_FILES['urungrup_resimyol']["tmp_name"];
	@$name = $_FILES['urungrup_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO urungrup SET
		urungrup_ad=:ad,
		urungrup_sira=:sira,
		urungrup_anasayfa=:anasayfa,
		urungrup_durum=:durum,
		urungrup_icerik=:icerik,
		urungrup_title=:title,
		urungrup_keywords=:keywords,
		urungrup_description=:description,
		urungrup_resimyol=:resimyol");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['urungrup_ad'],
		'sira' => $_POST['urungrup_sira'],
		'anasayfa' => $urungrup_anasayfa,
		'durum' => $urungrup_durum,
		'icerik' => $_POST['urungrup_icerik'],
		'title' => $_POST['urungrup_title'],
		'keywords' => $_POST['urungrup_keywords'],
		'description' => $_POST['urungrup_description'],
		'resimyol' => $refimgyol

	));

	if ($insert) {

		Header("Location:../a-urungrup-listele.php?durum=ok");

	} else {

		Header("Location:../a-urungrup-listele.php?durum=no");
	}

}


if ($_GET['urungrupsil']=="ok") {

	$sil=$db->prepare("DELETE from urungrup where urungrup_id=:urungrup_id");
	$kontrol=$sil->execute(array(
		'urungrup_id' => $_GET['urungrup_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['urungrup_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../a-urungrup-listele.php?durum=ok");

	} else {

		Header("Location:../a-urungrup-listele.php?durum=no");
	}

}


if (isset($_POST['urungrupduzenle'])) {

	if($_POST['urungrup_anasayfa']=="on")
	{
		$urungrup_anasayfa=1;
	}else
	{
		$urungrup_anasayfa=0;
	}


	if($_POST['urungrup_durum']=="on")
	{
		$urungrup_durum=1;
	}else
	{
		$urungrup_durum=0;
	}



	if($_FILES['urungrup_resimyol']["size"] > 0)  {


		$uploads_dir = '../../images/urun';
		@$tmp_name = $_FILES['urungrup_resimyol']["tmp_name"];
		@$name = $_FILES['urungrup_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$kaydet=$db->prepare("UPDATE urungrup SET
			urungrup_ad=:ad,
			urungrup_sira=:sira,
			urungrup_anasayfa=:anasayfa,
			urungrup_durum=:durum,
			urungrup_icerik=:icerik,
			urungrup_title=:title,
			urungrup_keywords=:keywords,
			urungrup_description=:description,
			urungrup_resimyol=:resimyol
			WHERE urungrup_id={$_POST['urungrup_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['urungrup_ad'],
			'sira' => $_POST['urungrup_sira'],
			'anasayfa' => $urungrup_anasayfa,
			'durum' => $urungrup_durum,
			'icerik' => $_POST['urungrup_icerik'],
			'title' => $_POST['urungrup_title'],
			'keywords' => $_POST['urungrup_keywords'],
			'description' => $_POST['urungrup_description'],
			'resimyol' => $refimgyol
		));


		$urungrup_id=$_POST['urungrup_id'];

		if ($update) {

			$resimsilunlink=$_POST['urungrup_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-urungrup-duzenle.php?urungrup_id=$urungrup_id&durum=ok");

		} else {

			Header("Location:../a-urungrup-duzenle.php?urungrup_id=$urungrup_id&durum=no");
		}


	}
	else
	{

		$kaydet=$db->prepare("UPDATE urungrup SET
			urungrup_ad=:ad,
			urungrup_sira=:sira,
			urungrup_anasayfa=:anasayfa,
			urungrup_durum=:durum,
			urungrup_icerik=:icerik,
			urungrup_title=:title,
			urungrup_keywords=:keywords,
			urungrup_description=:description
			WHERE urungrup_id={$_POST['urungrup_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['urungrup_ad'],
			'sira' => $_POST['urungrup_sira'],
			'anasayfa' => $urungrup_anasayfa,
			'durum' => $urungrup_durum,
			'icerik' => $_POST['urungrup_icerik'],
			'title' => $_POST['urungrup_title'],
			'keywords' => $_POST['urungrup_keywords'],
			'description' => $_POST['urungrup_description']
		));


		$urungrup_id=$_POST['urungrup_id'];

		if ($update) {

			Header("Location:../a-urungrup-duzenle.php?urungrup_id=$urungrup_id&durum=ok");

		} else {

			Header("Location:../a-urungrup-duzenle.php?urungrup_id=$urungrup_id&durum=no");
		}


	}



}



############ ÜRÜN Tanıtım #############################

if (isset($_POST['uruntanitimkaydet'])) {


	if($_POST['uruntanitim_durum']=="on")
	{
		$urun_durum=1;
	}else
	{
		$urun_durum=0;
	}



	$uploads_dir = '../../images/urun';
	@$tmp_name = $_FILES['uruntanitim_resimyol']["tmp_name"];
	@$name = $_FILES['uruntanitim_resimyol']["name"];
	$benzersizsayi1=rand(10000,34000);
	$benzersizsayi2=rand(10000,34000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$kaydet=$db->prepare("INSERT INTO uruntanitim SET
		uruntanitim_ad=:ad,
		uruntanitim_grup=:grup,
		uruntanitim_sira=:sira,
		uruntanitim_durum=:durum,
		uruntanitim_kisa=:kisa,
		uruntanitim_icerik=:icerik,
		uruntanitim_ozellik=:ozellik,
		uruntanitim_resimyol=:resimyol,
		uruntanitim_video=:video,
		uruntanitim_title=:title,
		uruntanitim_keywords=:keywords,
		uruntanitim_description=:description");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['uruntanitim_ad'],
		'grup' => $_POST['uruntanitim_grup'],
		'sira' => $_POST['uruntanitim_sira'],
		'durum' => $urun_durum,
		'kisa' => $_POST['uruntanitim_kisa'],
		'icerik' => $_POST['uruntanitim_icerik'],
		'ozellik' => $_POST['uruntanitim_ozellik'],
		'resimyol' => $refimgyol,
		'video' => $_POST['uruntanitim_video'],
		'title' => $_POST['uruntanitim_title'],
		'keywords' => $_POST['uruntanitim_keywords'],
		'description' => $_POST['uruntanitim_description']
	));

	if ($insert) {

		Header("Location:../a-urun-tanitim-listele.php?durum=ok");

	} else {

		Header("Location:../a-urun-tanitim-listele.php?durum=no");
	}

}



if ($_GET['uruntanitimsil']=="ok") {

	$sil=$db->prepare("DELETE from uruntanitim where uruntanitim_id=:uruntanitim_id");
	$kontrol=$sil->execute(array(
		'uruntanitim_id' => $_GET['uruntanitim_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['uruntanitim_resimyol'];
		unlink("../../$resimsilunlink");


		$uruntanitimgalerisor=$db->prepare("SELECT * from uruntanitimgaleri where uruntanitim_id=:uruntanitim_id");
		$uruntanitimgalerisor->execute(array(
			'uruntanitim_id' => $_GET['uruntanitim_id']
		));
		while($uruntanitimgalericek=$uruntanitimgalerisor->fetch(PDO::FETCH_ASSOC)) {

			$resimgalerisil=$uruntanitimgalericek['uruntanitimgaleri_resimyol'];

			unlink("../../$resimgalerisil");

		}
		$galerisil=$db->prepare("DELETE from uruntanitimgaleri where uruntanitim_id=:uruntanitim_id");
		$galerikontrol=$galerisil->execute(array(
			'uruntanitim_id' => $_GET['uruntanitim_id']
		));



		Header("Location:../a-urun-tanitim-listele.php?durum=ok");

	} else {

		Header("Location:../a-urun-tanitim-listele.php?durum=no");
	}

}



if (isset($_POST['uruntanitimduzenle'])) {

	if($_POST['uruntanitim_durum']=="on")
	{
		$uruntanitim_durum=1;
	}else
	{
		$uruntanitim_durum=0;
	}



	if($_FILES['uruntanitim_resimyol']["size"] > 0)  {


		$uploads_dir = '../../images/urun';
		@$tmp_name = $_FILES['uruntanitim_resimyol']["tmp_name"];
		@$name = $_FILES['uruntanitim_resimyol']["name"];
		$benzersizsayi1=rand(10000,34000);
		$benzersizsayi2=rand(10000,34000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2."-";
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



		$kaydet=$db->prepare("UPDATE uruntanitim SET
			uruntanitim_ad=:ad,
			uruntanitim_grup=:grup,
			uruntanitim_sira=:sira,
			uruntanitim_durum=:durum,
			uruntanitim_kisa=:kisa,
			uruntanitim_icerik=:icerik,
			uruntanitim_ozellik=:ozellik,
			uruntanitim_resimyol=:resimyol,
			uruntanitim_video=:video,
			uruntanitim_title=:title,
			uruntanitim_keywords=:keywords,
			uruntanitim_description=:description
			WHERE uruntanitim_id={$_POST['uruntanitim_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['uruntanitim_ad'],
			'grup' => $_POST['uruntanitim_grup'],
			'sira' => $_POST['uruntanitim_sira'],
			'durum' => $uruntanitim_durum,
			'kisa' => $_POST['uruntanitim_kisa'],
			'icerik' => $_POST['uruntanitim_icerik'],
			'ozellik' => $_POST['uruntanitim_ozellik'],
			'resimyol' => $refimgyol,
			'video' => $_POST['uruntanitim_video'],
			'title' => $_POST['uruntanitim_title'],
			'keywords' => $_POST['uruntanitim_keywords'],
			'description' => $_POST['uruntanitim_description']
		));


		$uruntanitim_id=$_POST['uruntanitim_id'];

		if ($update) {

			$resimsilunlink=$_POST['uruntanitim_resimyol'];
			unlink("../../$resimsilunlink");

			Header("Location:../a-urun-tanitim-duzenle.php?uruntanitim_id=$uruntanitim_id&durum=ok");

		} else {

			Header("Location:../a-urun-tanitim-duzenle.php?uruntanitim_id=$uruntanitim_id&durum=no");
		}



	} else {

		$kaydet=$db->prepare("UPDATE uruntanitim SET
			uruntanitim_ad=:ad,
			uruntanitim_grup=:grup,
			uruntanitim_sira=:sira,
			uruntanitim_durum=:durum,
			uruntanitim_kisa=:kisa,
			uruntanitim_icerik=:icerik,
			uruntanitim_ozellik=:ozellik,
			uruntanitim_video=:video,
			uruntanitim_title=:title,
			uruntanitim_keywords=:keywords,
			uruntanitim_description=:description
			WHERE uruntanitim_id={$_POST['uruntanitim_id']}");
		$update=$kaydet->execute(array(
			'ad' => $_POST['uruntanitim_ad'],
			'grup' => $_POST['uruntanitim_grup'],
			'sira' => $_POST['uruntanitim_sira'],
			'durum' => $uruntanitim_durum,
			'kisa' => $_POST['uruntanitim_kisa'],
			'icerik' => $_POST['uruntanitim_icerik'],
			'ozellik' => $_POST['uruntanitim_ozellik'],
			'video' => $_POST['uruntanitim_video'],
			'title' => $_POST['uruntanitim_title'],
			'keywords' => $_POST['uruntanitim_keywords'],
			'description' => $_POST['uruntanitim_description']
		));


		$uruntanitim_id=$_POST['uruntanitim_id'];

		if ($update) {

			Header("Location:../a-urun-tanitim-duzenle.php?uruntanitim_id=$uruntanitim_id&durum=ok");

		} else {

			Header("Location:../a-urun-tanitim-duzenle.php?uruntanitim_id=$uruntanitim_id&durum=no");
		}



	}

}


############ ÜRÜN TANITIM GALERİ #############################


if ($_GET['uruntanitimgalerisil']=="ok") {

	$sil=$db->prepare("DELETE from uruntanitimgaleri where uruntanitimgaleri_id=:uruntanitimgaleri_id");
	$kontrol=$sil->execute(array(
		'uruntanitimgaleri_id' => $_GET['uruntanitimgaleri_id']
	));


	$uruntanitim_id=$_GET['uruntanitim_id'];
	$uruntanitim_ad=$_GET['uruntanitim_ad'];



	if ($kontrol) {

		$resimsilunlink=$_GET['uruntanitimgaleri_resimyol'];
		unlink("../../$resimsilunlink");



		Header("Location:../a-uruntanitimgaleri-listele.php?durum=ok&uruntanitim_id=".$uruntanitim_id."&uruntanitim_ad=".$uruntanitim_ad);

	} else {

		Header("Location:../a-uruntanitimgaleri-listele.php?durum=no&uruntanitim_id=".$uruntanitim_id."&uruntanitim_ad=".$uruntanitim_ad);
	}

}



if (isset($_POST['bilgimailkaydet'])) {



	

	$kaydet=$db->prepare("INSERT INTO bilgimail SET
		bilgimail=:mail
		
	");
	$insert=$kaydet->execute(array(
		'mail' => $_POST['bilgimail']

	
	));

	if ($insert) {

		Header("Location:../../anasay?durum=ok");

	} else {

		Header("Location:../../anasay?durum=no");
	}

}

if ($_GET['bilgimailsil']=="ok") {

	$sil=$db->prepare("DELETE from bilgimail where bilgimail_id=:bilgimail_id");
	$kontrol=$sil->execute(array(
		'bilgimail_id' => $_GET['bilgimail_id']
	));

	if ($kontrol) {

	

		Header("Location:../a-bilgimail-listele.php?durum=ok");

	} else {

		Header("Location:../a-bilgimail-listele.php?durum=no");
	}

}
?>

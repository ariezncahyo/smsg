
<?php

//selektor untuk halaman-halaman
function menu($action)
{
	switch ($action)
	{
		//output halaman inbox
		case "inbox" :
			include "../controller/c_inbox.php";
			break;

		//output halaman outbox, dari tabel sentitems
		case "outbox" :
			include "../controller/c_outbox.php";
			break;

		//proses hapus inbox		
		case "inbox_hapus" :
			include "../controller/c_inbox_hapus.php";
			break;

		//proses hapus outbox
		case "outbox_hapus" :
			include "../controller/c_outbox_hapus.php";
			break;

		//form balas sms dari inbox
		case "inbox_balas" :
			include "../controller/c_kirim_balas.php";
			break;

		//form kirim lagi dari halaman outbox
		case "kirim_lagi" :
			include "../controller/c_kirim_lagi.php";
			break;

		//form kirim sms baru dengan form kosong
		case "kirim_sms" :
			include "../controller/c_kirim_sms.php";
			break;

		//proses kirim balasan dengan perubahan status boolean auto respon
		case "kirim_proses_balas" :
			include "../controller/c_kirim_proses_balas.php";
			break;

		//proses kirim sms
		case "kirim_proses_baru" :
			include "../controller/c_kirim_proses_baru.php";
		    break;


		//halaman kontak
		case "kontak" :
			include "../controller/c_kontak.php";
			break;


		//tambah kontak
		case "kontak_tambah" :
			include "../controller/c_kontak_tambah.php";
			break;

		//tambah kontak simpan
		case "kontak_tambah_simpan" :
			include "../controller/c_kontak_tambah_simpan.php";
			break;

		//hapus kontak
		case "kontak_hapus" :
			include "../controller/c_kontak_hapus.php";
			break;

		//halaman pengaturan
		case "pengaturan" :
			include "../controller/c_pengaturan.php";
			break;
	}

}
?>
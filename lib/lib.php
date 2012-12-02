
<?php

//selektor untuk halaman-halaman
function menu($action)
{
	switch ($action)
	{
		//output halaman inbox
		case "inbox" :
			include "../lib/c_inbox.php";
			break;

		//output halaman outbox, dari tabel sentitems
		case "outbox" :
			include "../lib/c_outbox.php";
			break;

		//proses hapus inbox		
		case "inbox_hapus" :
			include "../lib/c_inbox_hapus.php";
			break;

		//proses hapus outbox
		case "outbox_hapus" :
			include "../lib/c_outbox_hapus.php";
			break;

		//form balas sms dari inbox
		case "inbox_balas" :
			include "../lib/c_kirim_balas.php";
			break;

		//form kirim lagi dari halaman outbox
		case "kirim_lagi" :
			include "../lib/c_kirim_lagi.php";
			break;

		//form kirim sms baru
		case "kirim_sms" :
			include "../lib/c_kirim_sms.php";
			break;

		//form kirim sms baru ke satu tujuan
		case "kirim_sms" :
			include "../lib/c_kirim_sms_satu.php";
			break;

		//proses kirim balasan dengan perubahan status boolean auto respon
		case "kirim_proses_balas" :
			include "../lib/c_kirim_proses_balas.php";
			break;

		//proses kirim sms
		case "kirim_proses_baru" :
			include "../lib/c_kirim_proses_baru.php";
		    break;


		//halaman kontak
		case "kontak" :
			include "../lib/c_kontak.php";
			break;


		//tambah kontak
		case "kontak_tambah" :
			include "../lib/c_kontak_tambah.php";
			break;

		//tambah kontak simpan
		case "kontak_tambah_simpan" :
			include "../lib/c_kontak_tambah_simpan.php";
			break;

		//hapus kontak
		case "kontak_hapus" :
			include "../lib/c_kontak_hapus.php";
			break;


		//kontak edit
		case "kontak_edit" :
			include "../lib/c_kontak_edit.php";
			break;

		//kontak edit simpan
		case "kontak_edit_simpan" :
			include "../lib/c_kontak_edit_simpan.php";
			break;

		//kontak kirim
		case "kontak_kirim" :
			include "../lib/c_kontak_kirim.php";
			break;

		//kontak kirim
		case "kontak_kirim_proses" :
			include "../lib/c_kontak_kirim_proses.php";
			break;

		//kontak group
		case "kontak_group" :
			include "../lib/c_kontak_group.php";
			break;
		//kontak group tambah
		case "kontak_group_tambah" :
			include "../lib/c_kontak_group_tambah.php";
			break;

		//kontak group tambah simpan
		case "kontak_group_tambah_simpan" :
			include "../lib/c_kontak_group_tambah_simpan.php";
			break;

		//kontak group hapus
		case "kontak_group_hapus" :
			include "../lib/c_kontak_group_hapus.php";
			break;

		//halaman pengaturan
		case "pengaturan" :
			include "../lib/c_pengaturan.php";
			break;
	}

}
?>
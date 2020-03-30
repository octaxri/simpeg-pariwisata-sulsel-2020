<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|   example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|   https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|   $route['default_controller']                  = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override']                        = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|   $route['translate_uri_dashes']                = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|       my-controller/my-method -> my_controller/my_method
*/
$route['default_controller']                 = 'Homepage';
$route['dataPegawai/:num']                   = 'dataPegawai/index/$1';


$route['admin/peremajaan/kepegawaian']       = 'admin/PeremajaanData/kepegawaian';
$route['admin/peremajaan/kepegawaian/cpns']  = 'admin/PeremajaanData/cpns';
$route['admin/peremajaan/kepegawaian/pns']   = 'admin/PeremajaanData/pns';
$route['admin/peremajaan/pendidikan']        = 'admin/PeremajaanData/pendidikan';
$route['admin/peremajaan/jabatan']           = 'admin/PeremajaanData/jabatan';
$route['admin/peremajaan/mutasi']            = 'admin/PeremajaanData/mutasi';
$route['admin/peremajaan/diklat/struktural'] = 'admin/PeremajaanData/struktural';
$route['admin/peremajaan/diklat/fungsional'] = 'admin/PeremajaanData/fungsional';
$route['admin/peremajaan/diklat/teknis']     = 'admin/PeremajaanData/teknis';
$route['admin/peremajaan/kursus']            = 'admin/PeremajaanData/kursus';
$route['admin/peremajaan/penghargaan']       = 'admin/PeremajaanData/penghargaan';
$route['admin/peremajaan/profesi']           = 'admin/PeremajaanData/profesi';
$route['admin/peremajaan/unor']              = 'admin/PeremajaanData/unor';
$route['admin/peremajaan/pemberhentian']     = 'admin/PeremajaanData/pemberhentian';
$route['admin/peremajaan/angkakredit']       = 'admin/PeremajaanData/angkakredit';
$route['admin/peremajaan/dp3']               = 'admin/PeremajaanData/dp3';
$route['admin/peremajaan/skp']               = 'admin/PeremajaanData/skp';
$route['admin/peremajaan/cuti']              = 'admin/PeremajaanData/cuti';
$route['admin/peremajaan/pwk']               = 'admin/PeremajaanData/pwk';

$route['admin/pegawai']                      = 'admin/DataPegawai';
$route['admin/pegawai/filter']               = 'admin/DataPegawai/filter';
$route['admin/pegawai/tambah']               = 'admin/DataPegawai/tambah';
$route['admin/pegawai/exportexcel']          = 'admin/DataPegawai/exportexcel';
// $route['admin/pegawai/profil/:num']               = 'admin/DataPegawai/profil/:num';
$route['admin/pegawai/edit']                 = 'admin/DataPegawai/edit';

$route['admin/honorer']                 	= 'admin/Honorer';
$route['admin/honorer/tambah']                 = 'admin/Honorer/tambah';

$route['admin/masterdata/umum']              = 'admin/referensi/umum';
$route['admin/masterdata/instansi']          = 'admin/referensi/instansi';
$route['admin/masterdata/dokumen']          = 'admin/referensi/dokumen';
$route['admin/masterdata/eselon']            = 'admin/referensi/eselon';
$route['admin/masterdata/jabatan']           = 'admin/referensi/jabatan';
$route['admin/masterdata/kepegawaian']       = 'admin/referensi/kepegawaian';
$route['admin/masterdata/alamat']            = 'admin/referensi/alamat';

$route['admin/migrasi/daftarkenaikan ']       =  'admin/MigrasiData/daftarKenaikanPangkat'; 
$route['admin/migrasi/daftarmeninggal ']       =  'admin/MigrasiData/daftarMeninggal';

$route['admin/migrasi/pangkat ']       =  'admin/MigrasiData/pangkat';
$route['admin/migrasi/meninggal ']       =  'admin/MigrasiData/meninggal';

$route['admin/informasi ']       =  'admin/Informasi'; 
$route['admin/informasi/tambah']       =  'admin/Informasi/tambah'; 

// route rifqi
$route['admin/dokumen']   			= 'admin/DataDokumen';
$route['admin/dokumen/lihat']   	= 'admin/DataDokumen/lihat';
$route['admin/dataduk']   	= 'admin/DataDuk';
$route['skpd/dataduk']   	= 'skpd/DataDuk';
$route['skpd/dokumen']   			= 'skpd/DataDokumen';
$route['skpd/dokumen/lihat']   	= 'skpd/DataDokumen/lihat';

// SKPD
$route['skpd/peremajaan/keluarga/suamiistri']       = 'skpd/PeremajaanData/suamiistri';
$route['skpd/peremajaan/keluarga/anak']       = 'skpd/PeremajaanData/anak';
$route['skpd/peremajaan/keluarga/orangtua']       = 'skpd/PeremajaanData/orangtua';
$route['skpd/peremajaan/kepegawaian/cpns']  = 'skpd/PeremajaanData/cpns';
$route['skpd/peremajaan/kepegawaian/pns']   = 'skpd/PeremajaanData/pns';
$route['skpd/peremajaan/pendidikan']        = 'skpd/PeremajaanData/pendidikan';
$route['skpd/peremajaan/jabatan']           = 'skpd/PeremajaanData/jabatan';
$route['skpd/peremajaan/mutasi']            = 'skpd/PeremajaanData/mutasi';
$route['skpd/peremajaan/diklat/struktural'] = 'skpd/PeremajaanData/struktural';
$route['skpd/peremajaan/diklat/fungsional'] = 'skpd/PeremajaanData/fungsional';
$route['skpd/peremajaan/diklat/teknis']     = 'skpd/PeremajaanData/teknis';
$route['skpd/peremajaan/kursus']            = 'skpd/PeremajaanData/kursus';
$route['skpd/peremajaan/penghargaan']       = 'skpd/PeremajaanData/penghargaan';
$route['skpd/peremajaan/profesi']           = 'skpd/PeremajaanData/profesi';
$route['skpd/peremajaan/unor']              = 'skpd/PeremajaanData/unor';
$route['skpd/peremajaan/pemberhentian']     = 'skpd/PeremajaanData/pemberhentian';
$route['skpd/peremajaan/angkakredit']       = 'skpd/PeremajaanData/angkakredit';
$route['skpd/peremajaan/dp3']               = 'skpd/PeremajaanData/dp3';
$route['skpd/peremajaan/skp']               = 'skpd/PeremajaanData/skp';
$route['skpd/peremajaan/cuti']              = 'skpd/PeremajaanData/cuti';
$route['skpd/peremajaan/pwk']               = 'skpd/PeremajaanData/pwk';

$route['skpd/pegawai']                      = 'skpd/DataPegawai';
$route['skpd/pegawai/tambah']               = 'skpd/DataPegawai/tambah';
// $route['skpd/pegawai/profil/:num']               = 'skpd/DataPegawai/profil/:num';
$route['skpd/pegawai/edit']                 = 'skpd/DataPegawai/edit';

$route['skpd/masterdata/umum']              = 'skpd/referensi/umum';
$route['skpd/masterdata/instansi']          = 'skpd/referensi/instansi';
$route['skpd/masterdata/eselon']            = 'skpd/referensi/eselon';
$route['skpd/masterdata/jabatan']           = 'skpd/referensi/jabatan';
$route['skpd/masterdata/kepegawaian']       = 'skpd/referensi/kepegawaian';
$route['skpd/masterdata/alamat']            = 'skpd/referensi/alamat';

$route['skpd/migrasi/daftarkenaikan ']       =  'skpd/MigrasiData/daftarKenaikanPangkat'; 
$route['skpd/migrasi/daftarmeninggal ']       =  'skpd/MigrasiData/daftarMeninggal'; 

$route['skpd/dokumen']       				=  'skpd/DataDokumen';

$route['pegawai/ubah-password ']       =    'pegawai/Pengaturan/ubah_password';
$route['pegawai/cuti ']                =    'pegawai/Cuti/cuti';



$route['404_override']                            = '';
$route['translate_uri_dashes']                    = FALSE;

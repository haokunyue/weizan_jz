<?php
defined('IN_IA') or exit('Access Denied');

$config = array();

$config['db']['host'] = '127.0.0.1';
$config['db']['username'] = 'root';
$config['db']['password'] = 'root';
$config['db']['port'] = '3306';
$config['db']['database'] = 'weizan_jz_phpmyadmin';
$config['db']['charset'] = 'utf8';
$config['db']['pconnect'] = 0;
$config['db']['tablepre'] = 'ims_';

// --------------------------  CONFIG COOKIE  --------------------------- //
$config['cookie']['pre'] = '57da_';
$config['cookie']['domain'] = '';
$config['cookie']['path'] = '/';

// --------------------------  CONFIG SETTING  --------------------------- //
$config['setting']['charset'] = 'utf-8';
//$config['setting']['cache'] = 'redis';
$config['setting']['cache'] = 'mysql';
$config['setting']['timezone'] = 'Asia/Shanghai';
$config['setting']['memory_limit'] = '256M';
$config['setting']['filemode'] = 0644;
$config['setting']['authkey'] = '1e61ba97';
$config['setting']['founder'] = '1';
$config['setting']['development'] = 0;
$config['setting']['referrer'] = 0;
// --------------------------  CONFIG UPLOAD  --------------------------- //
$config['upload']['image']['extentions'] = array('gif', 'jpg', 'jpeg', 'png');
$config['upload']['image']['limit'] = 5000;
$config['upload']['attachdir'] = 'attachment';
$config['upload']['audio']['extentions'] = array('mp3');
$config['upload']['audio']['limit'] = 5000;

// --------------------------  HTTPS UP  --------------------------- //
$config['setting']['https'] = 0;

/* // --------------------------  CONFIG REDIS  --------------------------- //
$config['setting']['redis']['server'] = '127.0.0.1';//如果redis服务器在别的机器，请填写机器的IP地址。
$config['setting']['redis']['port'] = 6379;
$config['setting']['redis']['pconnect'] = 0;
$config['setting']['redis']['timeout'] = 1;
$config['setting']['redis']['requirepass'] = '123'; */ 
//++--------------- zio_domain 域名绑定配置请不要手工修改  ---------------//
$config['setting']['domain']['host']='mp.0-22.net';
$config['setting']['domain']['protect_app']='0';
$config['setting']['domain']['protect_web']='0';
if(file_exists(IA_ROOT . "/addons/zio_domain/domain.php")){
   include IA_ROOT . "/addons/zio_domain/domain.php";}
//----------------- zio_domain 域名绑定配置请不要手工修改  -------------++//
--TEST--
PEAR_Config->getGroupKeys()
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
?>
--FILE--
<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';
$config = new PEAR_Config;
$phpunit->assertEquals(array (
  0 => 'default_channel',
  1 => 'remote_config',
  2 => 'auto_discover',
  3 => 'master_server',
  4 => 'http_proxy',
), $config->getGroupKeys('Internet Access'), 'Internet Access');
$phpunit->assertEquals(array (
  0 => 'php_dir',
  1 => 'ext_dir',
  2 => 'doc_dir',
  3 => 'bin_dir',
), $config->getGroupKeys('File Locations'), 'File Locations');
$phpunit->assertEquals(array (
  0 => 'data_dir',
  1 => 'test_dir',
  2 => 'cache_dir',
  3 => 'php_bin',
), $config->getGroupKeys('File Locations (Advanced)'), 'File Locations (Advanced)');
$phpunit->assertEquals(array (
  0 => 'username',
  1 => 'password',
  2 => 'sig_type',
  3 => 'sig_bin',
  4 => 'sig_keyid',
  5 => 'sig_keydir',
), $config->getGroupKeys('Maintainers'), 'Maintainers');
$phpunit->assertEquals(array (
  0 => 'verbose',
  1 => 'preferred_state',
  2 => 'umask',
  3 => 'cache_ttl',
), $config->getGroupKeys('Advanced'), 'Advanced');
echo 'tests done';
?>
--EXPECT--
tests done
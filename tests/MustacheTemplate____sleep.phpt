--TEST--
MustacheTemplate::__sleep() member function
--SKIPIF--
<?php 
if( !extension_loaded('mustache') ) die('skip ');
 ?>
--FILE--
<?php
$m = new Mustache();
$tmpl = new MustacheTemplate('{{test}}');
$serial = serialize($tmpl);
var_dump($serial);
$orig = unserialize($serial);
var_dump($orig);
?>
--EXPECT--
string(58) "O:16:"MustacheTemplate":1:{s:8:"template";s:8:"{{test}}";}"
object(MustacheTemplate)#3 (1) {
  ["template"]=>
  string(8) "{{test}}"
}
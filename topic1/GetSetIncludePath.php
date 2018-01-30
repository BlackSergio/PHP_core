<?php
/**
 * get_include_path - gets current include_path configuration option.
 *  include_path (string) specifies a list of directories where require(),
 *  include(), fopen(), file(), readfile() and file_get_contents() looks for
 *  files. File list sets as PATH env variable. The directories are separated
 *  by colon (Unix) and semicolon (Windows)
 *
 * @link http://php.net/manual/en/function.get-include-path.php
 * @link http://php.net/manual/en/ini.core.php#ini.include-path
 */
var_dump(get_include_path());

/**
 * set_include_path - sets include_path configuration option.
 *  Making use of the PATH_SEPARATOR constant, it is possible to extend the
 *  include path regardless of the operating system.
 *
 * @link http://php.net/manual/en/function.set-include-path.php
 */

var_dump(set_include_path(
    get_include_path() . PATH_SEPARATOR . '.' . DIRECTORY_SEPARATOR . 'includes'
  )
);

var_dump(get_include_path());

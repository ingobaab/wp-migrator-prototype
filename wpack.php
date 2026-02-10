#!/usr/bin/env php
<?php
/**
 * wpack.php - CLI tool for creating WordPress archives
 *
 * Creates encrypted self-extracting archives for WordPress migration.
 * Supports AES-256 encryption, gzip compression, and SQL dump inclusion.
 *
 * Usage:
 *   wpack.php [options] [source_dir]
 *   wpack.php -p password /var/www/html
 *
 * Options:
 *   -a FILE              Archive output file (default: wpsfx-YYYY-MM-DD.php)
 *   -p PWD               Encryption password (required)
 *   -m SIZE              Minimum file size for compression (default: 2.5k)
 *   -c LEVEL             Gzip compression level 0-9
 *   -n NUM               Progress update interval (files processed)
 *   -v                   Verbose output (~20 lines)
 *   -vv                  Very verbose (show every file)
 *   -h                   Show help
 *   -V, --version        Show version
 *   -u, --update         Update to latest version
 *   -i, --info           Show parsed settings and total size
 *   -s, --size           Show size estimation only
 *
 * Examples:
 *   wpack.php -p secret /var/www/html
 *   wpack.php -a backup.php -p secret -v /var/www/html
 *   wpack.php -p secret -m=4k -c5 /var/www/html
 */

if (!class_exists('ProgressHandler')) {
    require_once __DIR__ . '/helper.inc.php';
}

// Override basename set by helper.inc.php so __HALT_SFX() can detect wpack mode
$my_basename = 'wpack.php';

echo "my_basename: $my_basename" . "\n\n";

__HALT_SFX();

<?php

require_once dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'resources/views/themes/smarty.php';

use Blacklight\Binaries;

// login check
$bin = new Binaries();

if (request()->has('action') && request()->input('action') === '2') {
    $id = (int) request()->input('bin_id');
    $bin->deleteBlacklist($id);
    echo "Blacklist $id deleted.";
}

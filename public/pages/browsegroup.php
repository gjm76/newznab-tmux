<?php

use App\Models\Group;
use App\Models\User;

if (! User::isLoggedIn()) {
    $page->show403();
}

$grouplist = Group::getGroupsRange(false, false, '', true);
$page->smarty->assign('results', $grouplist);

$page->meta_title = 'Browse Groups';
$page->meta_keywords = 'browse,groups,description,details';
$page->meta_description = 'Browse groups';

$page->content = $page->smarty->fetch('browsegroup.tpl');
$page->render();

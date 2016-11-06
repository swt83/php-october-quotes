<?php namespace Travis\Quotes\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Collection extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'travis.quotes.manage_quotes' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Travis.Quotes', 'quotes', 'collection');
    }
}
<?php namespace Travis\Quotes\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Travis\Quotes\Models\Quote;

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

    public function rekey()
    {
        // load all
        $records = Quote::orderBy('sort_order', 'asc')->get();

        // foreach...
        foreach ($records as $key => $record)
        {
            $record->sort_order = $key;
            $record->save();
        }

        // redirect
        return \Redirect::to('backend/travis/quotes/collection');
    }
}
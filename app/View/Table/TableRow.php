<?php
namespace Jiny\Uikit\App\View\Table;

use Illuminate\View\Component;

class TableRow extends Component
{
    public $item;

    public function __construct($item = null)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('jiny-uikit::table.table-row');
    }
}

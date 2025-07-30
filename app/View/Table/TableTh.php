<?php
namespace Jiny\Uikit\App\View\Table;

use Illuminate\View\Component;

class TableTh extends Component
{
    public $sort;
    public $direction;

    public function __construct($sort = null)
    {
        $this->sort = $sort;
        $this->direction = (request('direction') == 'asc') ? 'desc' : 'asc';
    }

    public function render()
    {
        return view('jiny-uikit::table.table-th');
    }
}

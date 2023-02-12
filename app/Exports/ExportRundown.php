<?php

namespace App\Exports;

use App\Models\Rundown;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportRundown implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $role;

    public function __construct($request)
    {
        $this->role = $request->role;
    }

    public function collection()
    {
        return Rundown::where(['role' => $this->role])
        ->select('id', 'time', 'agenda', 'location', 'description')->get();
    }

    public function headings(): array
    {
        return ['No', 'Time', 'Agenda', 'Location', 'Description'];
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class UserTable extends DataTableComponent
{
    public bool $rowNumberEnabled = true;
    public bool $bulkActionsEnabled = true;
    public bool $columnSelect = true;
    public bool $singleColumnSorting = true;
    public bool $hideBulkActionsOnEmpty = true;
    public array $bulkActions = [
        'activate' => 'Activate',
        'deactivate' => 'Deactivate',
    ];
    public $editModal = false;
    public $model;
    // public bool $dumpFilters = true;

    public function columns(): array
    {
        return [
            Column::make('ชื่อ-นามสกุล', 'name')
                ->sortable()
                ->searchable(),
            // Column::make('บริษัท', 'company.name')
            //     ->sortable(function ($query, $direction) {
            //         return $query->orderBy('companies.name', $direction);
            //     })
            //     ->searchable(),
                // ->format(function ($value, $column, $row) {
                //     return $row->company->name;
                // }),
            Column::make('อีเมล์', 'email')
                ->sortable()
                ->searchable(),
            // Column::make('สถานะ', 'status')
            //     ->sortable()
            //     ->format(function ($value) {
            //         return UserStatus::badge($value);
            //     })->asHtml(),
            Column::make('Verified', 'email_verified_at')
                ->sortable()
                ->excludeFromSelectable(),
            Column::make('Last Login', 'last_login_at')
                ->sortable()
                ->format(function ($value, $column, $row) {
                    return $value ?: 'never login';
                }),
            // Column::blank()
            //     ->format(function ($value, $column, $row) {
            //         return "<a href='/user/{$row->id}/edit' class='text-primary-600 font-medium hover:text-primary-900'>Edit</a>";
            //     })->asHtml(),
        ];
    }

    public function filters(): array
    {
        return [
            'status' => Filter::make('Status')
                ->select([
                    '' => 'Any',
                    UserStatus::ACTIVATED => 'Activated',
                    UserStatus::INACTIVATED => 'Inactivated',
                ]),
            'verified' => Filter::make('E-mail Verified')
                ->select([
                    ''    => 'Any',
                    'yes' => 'Yes',
                    'no'  => 'No',
                ]),
            // 'verified_from' => Filter::make('Verified From')
            //     ->date(),
            // 'verified_to' => Filter::make('Verified To')
            //     ->date(),
            'date' => Filter::make('Date')
                ->date([
                    'min' => now()->subYear()->format('Y-m-d'),
                    'max' => now()->format('Y-m-d')
                ]),
            'tags' => Filter::make('Tags')
                ->multiSelect([
                    'tag1' => 'Tags 1',
                    'tag2' => 'Tags 2',
                    'tag3' => 'Tags 3',
                    'tag4' => 'Tags 4',
                ]),
        ];
    }

    public function query(): Builder
    {
        return User::select('users.*')
            // ->leftJoin('companies', 'companies.id', '=', 'users.company_id')
            ->when($this->hasFilter('verified'), function ($query) {
                $verified = $this->getFilter('verified');
                if ($verified === 'yes') {
                    return $query->whereNotNull('email_verified_at');
                } elseif ($verified === 'no') {
                    return $query->whereNull('email_verified_at');
                }
            })
            ->when($this->getFilter('verified_from'), fn ($query, $date) => $query->where('email_verified_at', '>=', $date))
            ->when($this->getFilter('verified_to'), fn ($query, $date) => $query->where('email_verified_at', '<=', $date))
            ->when($this->hasFilter('status'), function ($query) {
                return $query->where('status', $this->getFilter('status'));
            });
    }

    public function activate(): void
    {
        if ($this->selectedRowsQuery->count() > 0) {
            User::whereIn('id', $this->selectedKeys())->update(['active' => true]);
        }

        $this->selected = [];

        $this->resetBulk();
    }

    public function deactivate(): void
    {
        if ($this->selectedRowsQuery->count() > 0) {
            User::whereIn('id', $this->selectedKeys())->update(['active' => false]);
        }

        $this->resetBulk();
    }

    // public function rowView(): string
    // {
    //     return 'livewire-tables.rows.user_table';
    // }

    public function modalsView(): string
    {
        // return 'users.modal';
        return 'livewire.user-modal';
    }

    public function getTableRowUrl(): string
    {
        return '#';
    }

    public function setTableRowAttributes($row): array
    {
        return ['wire:click.prevent' => 'viewModal('.$row->id.')'];
    }

    public function viewModal($modelId): void
    {
        $this->model = User::findOrFail($modelId);
        $this->editModal = true;
    }

    public function resetModal(): void
    {
        $this->reset('editModal', 'model');
    }
}

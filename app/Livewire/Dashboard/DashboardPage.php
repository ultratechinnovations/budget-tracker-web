<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\On; 
use App\Models\Category;
use App\Models\Expense;
use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardPage extends Component
{

    public string $filter;
    public string $selectedLabel;

    public function mount()
    {
        //Auth::loginUsingId(1);
        $this->filter = 'week';
        $this->selectedLabel = Carbon::now()->startOfWeek()->format('d F Y') ." - ". Carbon::now()->endOfWeek()->format('d F Y');
    }

    #[On('refresh-the-component')]
    public function render()
    {

        $totalExpenses = Expense::where('user_id', auth()->user()->id)
                                ->when($this->filter == 'year', function($query){
                                    return $query->whereYear('date', Carbon::now()->format('Y'));
                                })
                                ->when($this->filter == 'month', function($query){
                                    return $query->whereMonth('date', Carbon::now()->format('m'));
                                })
                                ->when($this->filter == 'week', function($query){
                                    return $query->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                                })->sum('amount');

        $totalIncomes = Income::where('user_id', auth()->user()->id)
                            ->when($this->filter == 'year', function($query){
                                return $query->whereYear('date', Carbon::now()->format('Y'));
                            })
                            ->when($this->filter == 'month', function($query){
                                return $query->whereMonth('date', Carbon::now()->format('m'));
                            })
                            ->when($this->filter == 'week', function($query){
                                return $query->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                            })->sum('amount');

        $expenses = Category::whereIn('type',['Both','Expense'])
                            ->with('expenses')
                            ->whereHas('expenses', function($query){
                                return $query->when($this->filter == 'year', function($query){
                                    return $query->whereYear('date', Carbon::now()->format('Y'));
                                })
                                ->when($this->filter == 'month', function($query){
                                    return $query->whereMonth('date', Carbon::now()->format('m'));
                                })
                                ->when($this->filter == 'week', function($query){
                                    return $query->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                                });
                            })
                            ->get();
        $incomes = Category::whereIn('type',['Both','Income'])
                            ->with('incomes')
                            ->whereHas('incomes', function($query){
                                return $query->when($this->filter == 'year', function($query){
                                    return $query->whereYear('date', Carbon::now()->format('Y'));
                                })
                                ->when($this->filter == 'month', function($query){
                                    return $query->whereMonth('date', Carbon::now()->format('m'));
                                })
                                ->when($this->filter == 'week', function($query){
                                    return $query->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                                });
                            })
                            ->get();
        return view('livewire.dashboard.dashboard-page', compact('totalExpenses', 'totalIncomes','expenses', 'incomes'));
    }

    public function filterSelected()
    {
        if($this->filter == 'week'){
            $this->selectedLabel = Carbon::now()->startOfWeek()->format('d-m-y') ."-". Carbon::now()->endOfWeek()->format('d-m-y');
        }elseif($this->filter == 'month'){
            $this->selectedLabel = Carbon::now()->format('F');
        }elseif($this->filter == 'year'){
            $this->selectedLabel = Carbon::now()->format('Y');
        }
        $this->dispatch('refresh-the-component');
    }

    
}

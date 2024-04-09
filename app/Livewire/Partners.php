<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partner;

class Partners extends Component
{
    public $partners, $name, $membership_type, $address, $partner_id;
    public $isModalOpen = false;

    public function render()
    {
        $this->partners = Partner::all();
        return view('livewire.partners');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->membership_type = '';
        $this->address = '';
        $this->partner_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'membership_type' => 'required',
            'address' => 'required',
        ]);

        Partner::updateOrCreate(['id' => $this->partner_id], [
            'name' => $this->name,
            'membership_type' => $this->membership_type,
            'address' => $this->address
        ]);

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        $this->partner_id = $id;
        $this->name = $partner->name;
        $this->membership_type = $partner->membership_type;
        $this->address = $partner->address;
        
        $this->openModal();
    }

    public function delete($id)
    {
        Partner::find($id)->delete();
        session()->flash('message', 'Partner Deleted Successfully.');
    }
}

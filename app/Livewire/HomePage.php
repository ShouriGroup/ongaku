<?php

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\WireUiActions;



class HomePage extends Component
{
    use WireUiActions;

    // Estado do modal
    public bool $showModal = false;

    // Campos de exemplo usados na view
    public string $search = '';
    public string $name = '';

    protected array $rules = [
        'name' => 'required|string|min:3',
    ];

    // Abre o modal
    public function openModal(): void
    {
        $this->showModal = true;
    }

    // Fecha o modal
    public function closeModal(): void
    {
        $this->showModal = false;
    }

    // Salva os dados do modal (exemplo)
    public function save(): void
    {
        $this->validate();

        // Aqui você faria a persistência real (Model::create / update / etc.)
        // Exemplo: Model::create(['name' => $this->name]);

        // Notificação via WireUI
        $this->notification()->success(
            'Salvo',
            'Dados salvos com sucesso.'
        );

        // Fecha o modal após salvar
        $this->closeModal();
    }

    // Método para ser chamado pelo botão de toast
    public function showSuccess(): void
    {
        $this->notification()->success(
            'Feito',
            'Ação executada com sucesso.'
        );
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
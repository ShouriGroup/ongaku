<!-- resources/views/livewire/home-page.blade.php -->
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Página com WireUI</h1>

    <!-- Botão -->
    <x-button primary label="Abrir modal" wire:click="$dispatch('open-modal', { id: 'meu-modal' })" />

    <!-- Input -->
    <div class="mt-4">
        <x-input icon="search" placeholder="Pesquisar..." />
    </div>

    <!-- Toast (exemplo de emitir notificação via Livewire) -->
    <div class="mt-4">
        <x-button positive label="Mostrar toast"
            wire:click="$dispatch('notify', {title: 'Feito', description: 'Ação executada', status: 'success'})" />
    </div>

    <!-- Modal (id hipotético 'meu-modal') -->
    <x-modal id="meu-modal" :show="$showModal ?? false">
        <x-slot name="title">Meu Modal</x-slot>
        <div class="p-4">
            <p>Conteúdo do modal aqui.</p>
        </div>
        <x-slot name="footer">
            <x-button flat label="Fechar" x-on:click="$dispatch('close-modal', { id: 'meu-modal' })" />
            <x-button primary label="Salvar" />
        </x-slot>
    </x-modal>
</div>
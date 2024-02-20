<?php

namespace Modules\Message\Livewire\Message;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Modules\Message\App\Actions\CreateMessageAction;
use Modules\Message\App\Dtos\CreateMessageDto;

class Form extends Component
{
    public string $title = '';
    public string $description = '';

    public function mount(): void
    {
        if (!auth()->check()) {
            $this->redirect(route('message.all'));
        }
    }

    public function render(): View
    {
        return view('message::livewire.message.form');
    }

    public function save(): void
    {
        $data = $this->validate([
            'title' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string']
        ]);

        resolve(CreateMessageAction::class)->run(
            CreateMessageDto::from([
                ...$data,
                'user_id' => auth()->user()->id
            ])
        );

        $this->redirect(route('message.all'));
    }
}

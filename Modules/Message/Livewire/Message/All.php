<?php

namespace Modules\Message\Livewire\Message;

use Illuminate\Support\Collection;
use Livewire\Component;
use Modules\Message\App\Actions\GetAllMessageAction;
use Modules\Message\App\Models\Message;
use Modules\Ship\Traits\LiveWire\FilterQueryHelper;
use Modules\User\Services\UserInfo;

class All extends Component
{
    use FilterQueryHelper;

    public function render()
    {
        return view('message::livewire.message.all', [
            'messages' => $this->loadData()
        ]);
    }

    private function loadData(): Collection
    {
        $data = resolve(GetAllMessageAction::class)->run($this->request);

        return Collection::make($data->Items())->each(function (Message $item){
            if ($item->user_id){
                $item->user = UserInfo::new()->getUser($item->user_id);
            }
        });
    }
}

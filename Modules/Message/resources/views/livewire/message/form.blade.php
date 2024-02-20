<div class="card mt-3">
    <div class="card-body">
        <div class="form-group">
            <label class="form-label">@lang('message::message.attributes.title')</label>
            <input class="form-control @error('title') {{ 'is-invalid' }} @endError" wire:model.lazy="title"/>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">@lang('message::message.attributes.message')</label>
            <textarea class="form-control @error('description') {{ 'is-invalid' }} @endError" wire:model.lazy="description"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <button class="btn btn-success" wire:click.prevent="save" type="button">@lang('message::message.save')</button>
        </div>
    </div>
</div>

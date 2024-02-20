<div class="card mt-3">
    <div class="card-header">
        <a class="btn btn-info" target="_blank"
           href="{{ route('message.create') }}">@lang('message::message.new_message')</a>
    </div>
    <div class="card-body">
        <form action="">
            <div class="form-group">
                <input name="filter[s]" type="text" maxlength="100" class="form-control"
                       value="{{ request()->filter['s'] ?? '' }}"/>
            </div>
            <button class="btn btn-info mt-1" type="submit">@lang('message::message.filter')</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th>*</th>
                <th>@lang('message::message.attributes.title')</th>
                <th>@lang('message::message.attributes.message')</th>
                <th>@lang('message::message.attributes.writer')</th>
            </tr>
            </thead>
            <tbody>
            @if(count($messages) == 0)
                <tr>
                    <td colspan="3" class="text-center">@lang('message::message.no_record')</td>
                </tr>
            @else
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->description }}</td>
                        <td>{{ $message->user?->name }}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>

</div>

<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    @csrf
    <textarea name="content"  rows="3" class="form-control" palaceholder="聊聊新鲜事儿...">
        {{ old('content') }}
    </textarea>
    <div class="text-right">
        <button class="btn btn-primary mt-3" type="submit">发布</button>
    </div>
</form>

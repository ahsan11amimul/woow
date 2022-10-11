@foreach($comments as $comment)
    <div class="card" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="card-body">
            <div class="d-flex">
                <div>
                    <p>{{ $comment->user->name }}</p>
                    <p>{{date('M d Y', strtotime($comment->created_at))}}</p>
                    <p>{{ $comment->body }}</p>
                </div>
                <div class="ms-auto">
                   <button class="btn btn-success hide_button" data-id="{{$comment->id}}">Hide</button>
                </div>
            </div>
       

        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning ms-auto" value="Reply" />
            </div>
        </form>
        </div>
       
        @include('partials.comments', ['comments' => $comment->replies])
    </div>
@endforeach

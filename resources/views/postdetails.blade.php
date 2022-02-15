
@if(auth()->check())
    @include('headerLoged')
@else
    @include('header')
@endif

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<body>


<div class="postDetails">
    <h1>

        <a>{{ $post -> title }} </a>

    </h1>

    <model-viewer src="{{asset('modelsFiles/'.$post->fileName)}}"  ar ar-modes="webxr scene-viewer quick-look"  seamless-poster shadow-intensity="1" camera-controls></model-viewer>


    <p>{{$post->description}}</p>

</div>


@if(auth()->check())
<form method="post" action="/postdetails" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Comment: </label>
        <input type="text" name="content"/>
        <input hidden type="text" name="posts_id" value="{{$post->id}}">
        <input hidden type="text" name="users_id" value="{{auth()->user()->id}}">

    </div>
    <br>
    <input type="submit" name="Comment" class="button" value="Comment"/>


</form>


<div>
    @if($liked_by_user > 0)
        <a href="/unlike/{{$post->id}}">Unlike</a>
    @else
        <a href="/like/{{$post->id}}">Like</a>
    @endif


</div>

@endif
Likes ({{$likes}})

<h1>Comments:</h1>



@foreach($comments as $comment)

    @foreach($users as $user)

        @if($user->id == $comment -> users_id)
        <div class="comments">

            <h3>{{$user -> username}}</h3>
            <h4>{{$comment->content}}</h4>

        </div>
        @endif

    @endforeach
@endforeach



</body>


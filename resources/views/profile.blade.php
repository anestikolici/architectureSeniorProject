
@if(auth()->check())
    @include('headerLoged')
@else
    @include('header')
@endif


<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<body>


<div>

    <h2>Profile</h2>
    <a>Profile Username: {{auth()->user()->username}}</a>
    <h1>Profile Posts: </h1>


    @foreach($postsDetails as $post)

        @if(auth()->user()->id==$post->users_id)

        <div>
            <h1>

                <a href="postdetails/{{$post->id}}">{{ $post -> title }}</a>

            </h1>

        </div>
        @endif
    @endforeach



</div>


</body>

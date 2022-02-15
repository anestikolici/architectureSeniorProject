
@if(auth()->check())
    @include('headerLoged')
@else
    @include('header')
@endif

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<body>


<div>



   @foreach($postsDetails as $post)
    <div>
        <h1>

            <a href="postdetails/{{$post->id}}">{{ $post -> title }}</a>

        </h1>

    </div>

  @endforeach



</div>


</body>



@include('header')


<main class="max-w-lg mx-auto mt-10" id="postForm">

    <h2>Post</h2>

    <form method="post" action="/post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Title: </label>
            <input type="text" name="title"/>

            <label>Description: </label>
            <textarea type="text" name="description"></textarea>

            <label>File: </label>
            <input type="file" name="fileName">

            <input hidden type="text" name="users_id" value="{{auth()->user()->id}}">


        </div>
        <br>
        <input type="submit" name="Post" class="button" value="Post"/>


    </form>

</main>

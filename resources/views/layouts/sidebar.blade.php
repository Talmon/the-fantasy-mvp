<div class="col-lg-4 mb-2" style="font-family: 'Raleway'; ">
    <h2>GW1 Team Selection</h2>
    <img src="/img/players/gw1-team.jpg" height="500px" width="400px" alt="image not read">
    <!-- <h2 class="mt-5">Quick Guide</h2> -->
    <div class="list-group ">
        <h4 class="mt-4">Knowing God</h4>
        <a href="#" class="list-group-item list-group-item-action  mt-2 text-light">
            Is God Good? </a>
        <a href="#" class="list-group-item list-group-item-action  mt-2 text-light">
            Do you really know God? </a>
        <h4 class="mt-5">FPL</h4>
        @foreach($sidebarPosts as $post)
        <a href="{{  route('post.show', ['id' => $post->id]) }}" class="list-group-item list-group-item-action mt-2 text-light display-5">
            {{ $post->title }} </a>
        @endforeach
       <!--  <a href="#" class="list-group-item list-group-item-action mt-2 text-light display-5">
            How To Pick Your Squad GW1</a>
        <a href="#" class="list-group-item list-group-item-action mt-2 text-light">
            Captain My Captain!</a>
        <a href="#" class="list-group-item list-group-item-action mt-2 text-light">
            Strategy</a> -->
        <!--  <a href="#" class="list-group-item list-group-item-action  bg-dark mt-2 text-light">
            Catch Up</a> -->

    </div>

    <!-- <div class="card mt-5">
        <div class="card-img-top">
            <img class="w-100 h-100" src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2018/08/03/2dfc23f3-bf8a-4dd5-9d7e-7e8a5c50adee/dele-alli.jpg" width="450px" alt="">
        </div>
         <div class="card-body">
            <h5>Be The Fantasy MVP In Your League This Season</h5>
        </div>
    </div> -->
</div>
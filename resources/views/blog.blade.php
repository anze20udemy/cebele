@extends('layout')
@section('title', 'Praktični nasveti')
@section('content')
    <!-- Main menu end -->

    <!-- Blog start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="row">
            @foreach($posts as $post)
            <div class="col-md-6">

              <!-- Blog item start -->
              <div class="blog-item wow fadeInUp">
                <img src="{{Voyager::image($post->thumbnail('330px'))}}" />
                <div class="blog-content">
                  <h3>{{($post->title)}}</h3>
                  <div class="blog-post-by">0
                    <ul>
                      <li><i class="fa fa-calendar"></i> {!! $post->created_at->format('d M Y') !!}</li>
                      <li><i class="fa fa-user"></i>Objavil {{$post->author_id}}</li>
                    </ul>
                  </div>
                  <p>{!!substr($post->body, 0, 50)!!}{!!strlen($post->body)>50 ? "..." : ""!!}</p>
                </div>
                <div class="continue-read-blog"><a href="{{route('blog.show',$post->id )}}" title="">Preberi cel članek</a></div>
                <div class="blog-action">
                  <div class="blog-action-holder"><a href="" title=""><i class="fa fa-thumbs-o-up"></i></a><a href="" title=""><i class="fa fa-thumbs-o-down"></i></a></div>
                  <div class="blog-action-holder"><a href="" title=""><i class="fa fa-heart"></i></a><a href="" title=""><i class="fa fa-share-alt"></i></a><a href="" title=""><i class="fa fa-comments-o"></i></a></div>
                </div>
              </div>

              <!-- Blog item end --> 
            </div>
            @endforeach


          </div>
          <!-- Blog pagination start -->
          <div class="page-navigation">
            <nav aria-label="Page navigation example">
              <ul class="pagination mt40 justify-content-center">
                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a> </li>
                <li class="page-item pagin-active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"> <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
              </ul>
            </nav>
          </div>
          <!-- Blog pagination end --> 
        </div>
        <!-- Blog sidebar start -->
        <div class="col-12 col-lg-3">
          <div class="left-block left-menu">
            <h3>Category</h3>
            <ul>
              <li class="active"><a href="" title="Beehive wood">Beehive wood</a></li>
              <li><a href="" title="Beehive styropor">Beehive styropor</a></li>
              <li><a href="" title="Hive parts">Hive parts</a></li>
              <li><a href="" title="Nucleus hive">Nucleus hive</a></li>
              <li><a href="" title="Queen excluder">Queen excluder</a></li>
              <li><a href="" title="Frames">Frames</a></li>
              <li><a href="" title="Honey Processing">Honey Processing</a></li>
              <li><a href="" title="Honey extractors">Honey extractors</a></li>
              <li><a href="" title="Clothing">Clothing</a></li>
              <li><a href="" title="Queen Rearing">Queen Rearing</a></li>
              <li><a href="" title="Hive hardware">Hive hardware</a></li>
              <li><a href="" title="Beewax">Beewax</a></li>
              <li><a href="" title="Packaging">Packaging</a></li>
              <li><a href="" title="Feed for bees">Feed for bees</a></li>
            </ul>
          </div>
          <div class="left-block letest-post">
            <h3>Zadnje objave</h3>
            <ul>
              @foreach($latestPosts as $latestPost)
              <li><a href="{{route('blog.show',$latestPost->id )}}" title=""> <img src="{{Voyager::image($latestPost->thumbnail('200px'))}}" />
                <p>{{$latestPost->title}}</p>
                <span>{!! $latestPost->created_at->format('d M Y') !!}</span> </a></li>
              @endforeach

            </ul>
          </div>
          <div class="left-block blog-tags">
            <h3>Tags</h3>
            <a href="#" title="Beekeeping Hive">Beekeeping Hive</a> <a href="#" title="Smoker">Smoker</a> <a href="#" title="Jackate">Jackate</a> <a href="#" title="Beekeeping Brush">Beekeeping Brush</a> </div>
        </div>
        <!-- Blog sidebar end --> 
      </div>
    </div>
  </div>
  <!-- Blog End --> 
  

  
  <!-- Footer start -->
    @endsection
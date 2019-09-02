@extends('layout')
@section('content')
  <!-- Main menu end -->



  <!-- Single Blog start -->
  <div class="bee-content-block">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9"> 
          <!-- Blog content start -->
          <div class="single-blog-details"> <img src="../storage/{{$post->image}}" class="img-responsive single-blog-img" alt=""/>
            <div class="single-blog-content">
              <h2>{{$post->title}}</h2>
              <h6>Objavljeno dne {!! $post->created_at->format('d M Y') !!}. </h6>
              <div class="blog-post-by">
                <ul>
                  <li><i class="fa fa-eye"></i>20 View</li>
                  <li><i class="fa fa-comment"></i>12 comments</li>
                  <li><i class="fa fa-share-alt"></i>50 share</li>
                  <li><i class="fa fa-tag"></i>{{$post->meta_keywords}}</li>
                </ul>
              </div>
              <p>{!! $post->body !!}</p>

            </div>
          </div>
          <!-- Blog content end -->
          
          <div class="space60"></div>
          
          <!-- Related blog start -->
          <div class="you-may-like">
            <h4 class="mb20 text-uppercase">Mogoče vas zanima tudi...</h4>
            <div class="row">
              @foreach ($posts as $mightlike)
              <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="blog-item wow fadeInUp"> <a href="#" title="">
                    <img src="{{Voyager::image($mightlike->thumbnail('small'))}}" />
                  <div class="blog-content">
                    <h3>{{ $mightlike->title }}</h3>
                    <h6>Objavljeno {!! $mightlike->created_at->format('d M Y') !!}</h6>
                  </div>
                  </a> </div>
              </div>
              @endforeach

            </div>
          </div>
          <!-- Related blog end --> 
          
          <!-- Comment start -->
          <div class="comment-sec">
            <h4 class="mb20 text-uppercase">Mnenja uporabnikov:</h4>
            <div class="media"> <img src="../assets/images/comment-pic1.jpg" alt="Commnet">
              <div class="media-body">
                <h6 class="mt-0">Kate Winless <span><i class="fa fa-clock-o"></i> 14th Feb 2015 at 9.00 am</span></h6>
                <p>Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque ipsum sque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget fringilla. Duis lobortis cursus mi vel tristique.</p>
                <a href="" title="">Reply</a>
                <div class="media mt-3"> <img src="../assets/images/comment-pic2.jpg" alt=""/>
                  <div class="media-body">
                    <h6 class="mt-0">Kate Winless</h6>
                    <p>Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque ipsum sque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget fringilla. Duis lobortis cursus mi vel tristique.</p>
                    <a href="" title="">Reply</a> </div>
                </div>
              </div>
            </div>
            <div class="media"> <img src="../assets/images/comment-pic1.jpg" alt="Commnet">
              <div class="media-body">
                <h6 class="mt-0">Kate Winless <span><i class="fa fa-clock-o"></i> 14th Feb 2015 at 9.00 am</span></h6>
                <p>Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque ipsum sque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget fringilla. Duis lobortis cursus mi vel tristique.</p>
                <a href="" title="">Reply</a> </div>
            </div>
          </div>
          <!-- Comment end --> 
          
          <!-- Comment form start -->
          <div class="comment-form">
            <h3>Leave a Comment</h3>
            <p>Your email address will not be published. Required fields are marked</p>
            <form action="#">
              <div class="form-group">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="Ime in priimek">
                  </div>
                  <div class="col-12 col-lg-6">
                    <input type="email" class="form-control" placeholder="E-mail naslov">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Vaše mnenje"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-submit">Odddaj</button>
              </div>
            </form>
          </div>
          <!-- Comment form end --> 
        </div>
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
      </div>
    </div>
  </div>
  <!-- Single Blog End --> 

@endsection
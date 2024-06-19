@php
    use App\Helpers\DateFormatter;
@endphp

@extends('user.layouts.app')

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Blog Details</h2>
            <ul class="careox-breadcrumb list-unstyled">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Blog </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="blog-details__content">
                        <div class="blog-details__image">
                            <img src="{{ asset('files') }}/blog/{{ $blog->image }}" alt="careox">
                        </div><!-- /.blog-card__image -->
                        <ul class="list-unstyled blog-details__top-meta">
                            <li><i class="icofont-ui-user"></i>By: {{ $blog->author }}</li>
                            <li><i class="icofont-ui-calendar"></i>{{ DateFormatter::date($blog->publication_date) }}</li>
                        </ul><!-- /.list-unstyled blog-card__top-meta -->
                        <h3 class="blog-details__title">{{ $blog->title }}</h3>
                        <div class="blog-details__text text-justify">
                            {!! nl2br($blog->content) !!}
                        </div><!-- /.blog-details__text -->
                    </div><!-- /.blog-details -->

                    <div class="comments-form pt-100">
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            var disqus_config = function() {
                                this.page.url =
                                    "{{ route('blogs.show', $blog) }}"; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    "{{ $blog->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://rabbanians.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                        <div class="result"></div>
                    </div><!-- /.comments-form -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one--page -->
@endsection

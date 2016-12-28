@includeIf('partial/_header')
@includeIf('partial/_navigation')
    


           <!-- Page content -->
           <div class="page-content">
            <div class="container">
                <div class="site-page">

                    <!-- Recommodation products -->

                    @if($furnitures->count() > 0)
                        @includeIf('components/_products_slideset', ["products" => $furnitures, "heading" => "THE MOST FASHIONATE FURNITURE FOR HOME"])
                    @endif

                    <!-- /Recommodation products -->

                    <!-- Office feature products -->

                        @if($offices->count() > 0)
                            @includeIf('components/_products_slideset', ["products" => $offices, "heading" => "ELEGANT INNOVATIVE DESIGN FOR OFFICE"])
                        @endif
            
                    <!-- /Office feature products -->

                    <!-- Architect feature products -->

                        @if($architects->count() > 0)
                            @includeIf('components/_products_slideset', ["products" => $architects, "heading" => "DESIGN FOR ARCHITECTURE"])
                        @endif
                        
                    <!-- /Architect feature products -->

                    
                    <!-- Projects -->
                    <div class="projects-wrapper section">
                        <div class="section-heading">
                            <h1>Projects</h1>
                        </div>

                        <div class="projects-content">
                            <div class="slide-control">
                                <a class="nav-control previous" href="#">
                                    
                                </a>
                                <a class="nav-control next" href="#">
                                    
                                </a>
                            </div>
                            <div class="projects-inner">
                                <div class="projects">

                                    @foreach($projects as $project)
                                    <div class="project">
                                        <div class="image-pre to-left">
                                            <a href="{{ url('/project/'.$project->slug) }}">
                                                <img class="img-responsive" src="{{ asset('/storage/'.$project->image) }}">
                                            </a>
                                        </div>
                                        <div class="summary-content to-right">
                                            <div class="title">
                                                <h2>{{ $project->title }}</h2>
                                            </div>
                                            <div class="snippet">
                                                <p>
                                                    {{ $project->excerpt }}
                                                </p>
                                            </div>
                                            <div class="detail">
                                                <a href="{{ url('/project/'.$project->slug) }}" class="readmore">
                                                    <i class="fa fa-arrow-right"></i> view more
                                                </a>
                                            </div>

                                            <div class="social-share">
                                                <div class="inner">
                                                    <a href="" class="social-square">
                                                    <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                    <a href="" class="social-square">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="" class="social-square">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="" class="social-square">
                                                        <i class="fa fa-tumblr"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Project -->
                </div>
            </div>
           </div>
           <!-- /Page content -->


@includeIf('partial/_footer')
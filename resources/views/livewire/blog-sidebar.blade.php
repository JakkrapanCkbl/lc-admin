<!-- Side Menu -->

<div class="col-xl-3 col-lg-8 col-md-12 mx-auto">
    <div class="card overflow-hidden">
        <div class="">
            <div class="card-header border-bottom d-block">
                <div class="tabs-menu">
                    <!-- Tabs Not fin -->
                    <ul class="nav panel-tabs">
                        <li><a href="#top" class="my-1 active me-1 text-default ajaxtagbutton" data-bs-toggle="tab" data-url="{{url('/blogdata/recent')}}">Recent</a></li>
                        <li><a href="#top" data-bs-toggle="tab" class="my-1 me-1 text-default ajaxtagbutton" data-url="{{url('/blogdata/news')}}">News</a></li>
                        <li><a href="#top" data-bs-toggle="tab" class="my-1 me-1 text-default ajaxtagbutton" data-url="{{url('/blogdata/trend')}}">Trends & Insight</a></li>
                        <li><a href="#top" data-bs-toggle="tab" class="my-1 me-1 text-default ajaxtagbutton" data-url="{{url('/blogdata/research')}}">Research</a></li>
                        <li><a href="#top" data-bs-toggle="tab" class="my-1 text-default ajaxtagbutton" data-url="{{url('/blogdata/recent')}}">Editor Picks</a></li>
                        
                        <!-- <div class="btn-group mt-2 mb-2"> *****Dropdown toggle******
                            <button type="button" class="btn btn-outline-default dropdown-toggle" data-bs-toggle="dropdown">
                                Tag <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" class="ajaxtagbutton" data-url="{{url('/blogdata/news')}}">News</a></li>
                                <li><a href="#" class="ajaxtagbutton" data-url="{{url('/blogdata/trend')}}">Trends & Insight</a></li>
                                <li><a href="#" class="ajaxtagbutton" data-url="{{url('/blogdata/research')}}">Research</a></li>
                            </ul>
                        </div> -->
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="trending">
                    </div>
                    <div class="tab-pane" id="popular">
                    </div>
                    <div class="tab-pane" id="recent">
                    </div>
                    <div class="tab-pane" id="editorpicks">
                    </div>


                    <!-- <div class="tab-pane active" id="trending"> Dummy blog search result
                        <div class="item-list">
                            <ul class="list-group mb-0">
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm1.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Tourism</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Explore tourism by visitinig places.</a>
                                        <small class="d-block text-muted">2 day ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Beautician</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Beautification courses are available.</a>
                                        <small class="d-block text-muted">2 hrs ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Music</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
                                        <small class="d-block text-muted">1 day ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm4.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Literature</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">English and spanish classes in Your way</a>
                                        <small class="d-block text-muted">1 week ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm5.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Health</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
                                        <small class="d-block text-muted">22 hrs ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pb-4 pt-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm2.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Health</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Health care and fitness awareness</a>
                                        <small class="d-block text-muted">22 hrs ago</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex pt-0 pb-0 px-0 border-bottom-0">
                                    <img src="{{asset('assets/images/photos/blog-sm3.jpg')}}" class="avatar br-5 avatar-lg me-3 my-auto" alt="avatar-img">
                                    <div>
                                        <span class="d-block text-muted">Music</span>
                                        <a href="#" class="text-dark text-16 font-weight-semibold">Music in a peaceful way </a>
                                        <small class="d-block text-muted">1 day ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
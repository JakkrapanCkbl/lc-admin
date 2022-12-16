    @foreach ($blogs as $blog)
    blog id {{$blog['id']}}
    <div class="blogid{{$blog['id']}}">
        <div class=" card overflow-hidden blogcard" id="blogcard">
            <img class="img-fluid mx-auto w-100" background-image="{{$blog['thumbnailpic']}}" alt="">
            <a href="{{url($blog['thumbnailpic'])}}" style="background-image: url(../../assets/images/blog/{{$blog['thumbnailpic']}}) !important;
															height: 200px;" class="card custom-card background-image-blog mb-0">
                @switch ($blog['type'])
                @case("Trend & Insight")
                <span class="badge rounded-pill bg-secondary-gradient blog-label label1">{{$blog['type']}}</span>
                @break
                @case("Research")
                <span class="badge rounded-pill bg-success-gradient blog-label label1">{{$blog['type']}}</span>
                @break
                @default
                <!-- News -->
                <span class="badge rounded-pill bg-info-gradient blog-label label1">{{$blog['type']}}</span>
                @break
                @endswitch
            </a>
            <div class="card-body">
                <h6 href="#" class="text-dark blog-title">{{$blog['header']}}</h6>
                <p class="text-muted">{{$blog['description']}}</p>
            </div>
            <div class="card-footer">
                <div class="d-sm-flex align-items-center">
                    <div class="d-sm-flex ms-sm-auto">
                        <a class="text-muted me-4" href="{{$blog['link']}}" data-bs-placement="bottom" data-bs-toggle="tooltip" title="ลิ้งนี้จะพาคุณไปที่ {{$blog['link']}}"><u>ลิ้งอ้างอิง</u></a>
                        <div class="mt-0 mt-0 me-2 text-muted">วันที่เขียนข่าว</div>
                        <span class="fe fe-calendar text-muted me-2 text-17"></span>
                        <div class="mt-0 mt-0 text-muted">{{date('d-M-Y', strtotime($blog['date'])) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
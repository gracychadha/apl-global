<div class="col-lg-3 service-left-col order-2 order-lg-1 sidebar">
    <aside class="service-sidebar">
        <aside class="widget post-list">
            <div class="all-post-list">
                @php
                    $services = [
                        'air-freight' => 'Air Freight',
                        'ocean-freight' => 'Ocean Freight',
                        'road-freight' => 'Road Freight',
                        'warehousing' => 'Warehousing',
                        'packaging' => 'Packaging',
                        'customs-brokerage' => 'Customs Brokerage',
                    ];
                @endphp

                <ul>
                    @foreach($services as $route => $label)
                        <li class="{{ request()->routeIs($route) ? 'post-active' : '' }}">
                            <a href="{{ route($route) }}">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <aside class="widget post-list">
            <div class="all-post-list">
               <img src="{{ asset('website/images/services/service-single-01.png') }}" alt="Service Image" class="img-fluid">
            </div>
        </aside>

    </aside>
</div>
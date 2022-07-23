<aside class="widget-area" id="secondary">
    <section class="widget widget_categories">
        <h3 class="widget-title">Our Services</h3>
        <div class="post-wrap">
            <ul>
                @foreach (\App\Models\Service::where('status', 'active')->get() as $item)
                <li> <a href="{{ $item->slug }}">{{ $item->title }}</a> </li>
                @endforeach
            </ul>
        </div>
    </section>
</aside>

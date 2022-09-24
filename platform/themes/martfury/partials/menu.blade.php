<ul {!! $options !!} style="text-align: center !important">
    @foreach ($menu_nodes as $key => $row)
        <li class="@if ($row->has_child) menu-item-has-children @endif @if ($row->css_class) {{ $row->css_class }} @endif @if ($row->active) current-menu-item @endif">
            <a style=" font-weight: 500; font-size: 18px; " href="{{ url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif>
                @if ($row->icon_font) <i class="{{ trim($row->icon_font) }}"></i> @endif {{ $row->title }}
            </a>
            @if ($row->has_child)
                <span class="sub-toggle"></span>
                {!! Menu::generateMenu([
                    'menu'       => $menu,
                    'menu_nodes' => $row->child,
                    'view'       => 'menu',
                    'options' => [
                        'class' => 'sub-menu',
                    ]
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>

<li class="{{ Request::is('comics*') ? 'active' : '' }}">
    <a href="{!! route('comics.index') !!}"><i class="fa fa-edit"></i><span>Comics</span></a>
</li>

<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">
    <a href="/generator_builder"><i class="fa fa-edit"></i><span>Генератор</span></a>
</li>
{{-- http://localhost:8000/generator_builder --}}

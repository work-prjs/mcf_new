{{-- http://localhost:8000/generator_builder --}}
<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">
    <a href="/generator_builder"><i class="fa fa-edit"></i><span>Генератор</span></a>
</li>

<li class="{{ Request::is('comics*') ? 'active' : '' }}">
    <a href="{!! route('comics.index') !!}"><i class="fa fa-edit"></i><span>Comics</span></a>
</li>



<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('cats*') ? 'active' : '' }}">
    <a href="{!! route('cats.index') !!}"><i class="fa fa-edit"></i><span>Cats</span></a>
</li>


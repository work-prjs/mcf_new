{{-- http://localhost:8000/generator_builder --}}
<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">
    <a href="/generator_builder"><i class="fa fa-edit"></i><span>Генератор</span></a>
</li>






<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('tasks*') ? 'active' : '' }}">
    <a href="{!! route('tasks.index') !!}"><i class="fa fa-edit"></i><span>Tasks</span></a>
</li>


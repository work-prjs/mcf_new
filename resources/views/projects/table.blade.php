<div class="table-responsive">
    <table class="table" id="projects-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Родитель</th>
        {{-- <th>Desc</th> --}}
                <th colspan="3">Действие</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{!! $project->id !!}</td>
                <td>
                    <a href="/projects/{!! $project->id !!}">
                        {!! $project->name !!}
                    </a>
                </td>

            <td>
                <a href="/projects/{!! $project->parent_id ?? '' !!}">
                    {!! App\Models\Project::find($project->parent_id)->name ?? '' !!}
                </a>
            </td>
            {{-- <td>{!! $project->desc !!}</td> --}}
                <td>
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('projects.show', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('projects.edit', [$project->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

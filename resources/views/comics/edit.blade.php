@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comics
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($comics, ['route' => ['comics.update', $comics->id], 'method' => 'patch']) !!}

                        @include('comics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
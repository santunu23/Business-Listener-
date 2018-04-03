@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard<a href="listings/create" class="pull-right btn btn-success btn-xs" >Create Listing</a></div>

                <div class="panel-body">
                    <h3>Your listings</h3>
                        @if(count($listings))
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                        <tr>
                         <td>{{$listing->name}}</td>
                         <td><a class="pull-right btn btn-default" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                         <td>{!! Form::open(['action'=>['ListingsController@destroy',$listing->id],'method'=>'POST','class'=>'pull-left','onsubmit'=>'return confirm("Are your sure?")'])!!}
                            {{Form::hidden('_method','DELETE')}}
                            {{ Form::bsSubmit('DELETE',['class'=>'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                        </tr>
                         @endforeach
                       </table>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

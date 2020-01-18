@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Movie Search Results | <button onclick="location.href='{{ url('home') }}'">
    Back </button></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table>
                        <tbody>
                            <tr>
                                @if(isset($data->Poster))
                                <td>
                                    <img src="{{$data->Poster}}">
                                </td>
                                <td width="3%"></td>
                                <td valign="top">
                                    <h1 style="color: lightblue">{{$data->Title or ''}}</h1>
                                        <strong>{{$data->Plot or ''}}</strong><br /><br />
                                                {{$data->Awards or ''}}<br /><br />
                                                Year: {{$data->Year or ''}}<br />
                                                Genre: {{$data->Genre or ''}}<br />
                                                Director: {{$data->Director or ''}}<br />
                                                Actors: {{$data->Actors or ''}}<br />
                                                Language: {{$data->Language or ''}}<br />
                                                imdbRating: {{$data->imdbRating or ''}}<br />
                                                Rated: {{$data->Rated or ''}}<br />
                                </td>
                                @else
                                    <h1 style="text-align: center">Sorry ~ Nothing found</h1>
                                @endif
                            </tr>
                        </tbody>
                    </table> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

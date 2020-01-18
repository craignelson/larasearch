@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>
                        <table>
                            <tr>
                                <td width="48%"><form action="/books/books" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="title">Search Books by Author <small>eg: JKRowling</small></label>
                                            <input type="text" class="form-control" style="width:100%;float:left;" id="author"  name="author">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </td>
                                <td width="4%"></td>
                                <td width="48%"><form action="/movie/results" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Movie Search <small>eg: Jaws</small></label>
                                        <input type="text" class="form-control" style="width:100%;float:left;" id="movie"  name="movie">
                                    </div> 
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                 </td>
                            </tr>
                        </table>
                    
                        <br />
                    
                        <p> <a href="space/space">Interested to see who's on the space station right now?</a></p>
                        <p><a href="fixtures/results">See Live Football Fixtures.</a> </p>
                        <p></p>
                        </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

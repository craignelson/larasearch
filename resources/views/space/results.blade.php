<table class="entry_table_container">
    <thead>
    <tr>
        <th class="entry_table_header" width="50%">Astronauts</th> 
        <th class="entry_table_header" width="50%" style="float: right">Craft</th> 
        {{ csrf_field() }}
    </tr>
    </thead>
    <tbody>
 
    <tr>
        <td width="50%">
    @foreach($data['people'] as $k => $v)
        @foreach ($v as $key => $value)
        @if($loop->first)
            {{$value or ''}}<br />
        @endif
        @endforeach
    @endforeach
        </td>
    <td width="50%" style="float: right">
    @foreach($data['people'] as $k => $v)
        @foreach ($v as $key => $value)
            @if($loop->last)
            {{$value or ''}}<br />
            @endif
         @endforeach
    @endforeach
        </td>
    </tr>
    </tbody>
</table>
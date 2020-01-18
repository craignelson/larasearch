<table class="entry_table_container">
    <tbody>
        @for($i = 0; $i <=9; $i++)
        <tr>
            <td>
                <img src="{{ $data['items'][$i]['volumeInfo']['imageLinks']['thumbnail'] or '' }}">
                <br />
                <br />
            </td>
            <td width="3%"></td>
            <td>
                <h3> {{ $data['items'][$i]['volumeInfo']['title'] or ''}}</h3>
                <p>  {{ $data['items'][$i]['volumeInfo']['description'] or '' }}
                    <a target="_blank" href="{{ $data['items'][$i]['volumeInfo']['previewLink'] or ''}}">
                        Preview link</a>
                </p>
            </td>
        </tr>
     @endfor
    </tbody>
</table>
<div>
    <form method="POST" action="/token">
        @csrf

        {{-- <input type="text" name="_text" value="{{ csrf_token() }}"> --}}
        search term: <input type="text" name="term" value=""/>
        <button type="submit">Go</button>
    </form>
</div>

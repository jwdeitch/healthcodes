<block:body>
    <form action="/api/query" method="post">
    <input type="text" id="q" name="q" value="Search">
    <input type="submit">
    </form>


    <script>
        $.post( "/api/query", $('#q').val(), function( data ) {
            console.log(data);
        });
    </script>
</block:body>
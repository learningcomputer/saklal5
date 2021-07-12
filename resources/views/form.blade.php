<html>

<head>
    <title>Form inputan</title>
</head>

<body>
    <form action="tujuan_form" method="POST">
        <input type="text" name="name" placeholder="Isikan name..">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit">

</html>

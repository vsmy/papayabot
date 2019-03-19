<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Papayabot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

</head>
<body>
<main>
    @yield('content')
</main>
<br><br>
    @include('layout.footer')

<script>
    const items = document.querySelectorAll(".accordion .accordion-title");

    function toggleAccordion(){
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
</body>
</html>

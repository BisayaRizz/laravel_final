<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<body class="antialiased">
    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-4 text-center mb-3" id='quotes'>Loading Quote...</h1>
            <p id="author" class="display-5" style="font-style: italic">Loading Author...</p>
            <button class="btn btn-primary my-3" id="get">Next</button>
        </div>
        <hr />
        <div id="res"></div>
        <div id="output"></div>
    </div>
    <script>
        const apiEndpoint = 'https://api.quotable.io/random';

        window.addEventListener('load', axiosGet);

        function axiosGet() {
            axios.get(apiEndpoint).then(response => {
                output(response);
                return response;
            }).catch(error => {
                const response = {
                    data: {
                        quote: 'Error ni bai',
                        character: 'Wa Damha',
                    }
                };
                output(response);
                console.error(error);
            });
        }

        function output(response) {
            const container = document.querySelector('#quotes');
            container.innerText = response.data.content;
            document.querySelector('#author').innerText = `"${response.data.author}"`;
        }

        document.querySelector('#get').addEventListener('click', axiosGet);
    </script>
</body>
</html>

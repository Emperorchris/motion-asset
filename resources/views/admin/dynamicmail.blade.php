<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        :root {
            --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
        }

        body {
            background: #111 !important;
        }

        .card {
            background: #222;
            border: 1px solid #dd2476;
            color: rgba(250, 250, 250, 0.8);
            margin-bottom: 2rem;
        }

        .btn {
            border: 5px solid;
            border-image-slice: 1;
            background: var(--gradient) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            border-image-source: var(--gradient) !important;
            text-decoration: none;
            transition: all .4s ease;
        }

        .btn:hover,
        .btn:focus {
            background: var(--gradient) !important;
            -webkit-background-clip: none !important;
            -webkit-text-fill-color: #fff !important;
            border: 5px solid #fff !important;
            box-shadow: #222 1px 0 10px;
            text-decoration: underline;
        }
    </style>




    <div class="container mx-auto mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="">
                    <img src="{{ asset('OREX 2.png') }}" class="card-img-top" alt="Site logo">
                    <div class="card-body">
                        <h2 class="card-title">Activities In Your Website!</h2>
                        {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                        <p class="card-text">{{ html_entity_decode($data['message']) }}</p>
                        <p>{{ $data['name'] }}</p>
                        <p>{{ $data['email'] }}</p>
                        <a href="{{ route('admin.edituser',$data['id']) }}" class="btn mr-2"><i class="fas fa-link"></i> View User</a>
                        {{-- <a href="#" class="btn"><i class="fab fa-github"></i> Visit Web</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/files/bootstrap.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<body>
    {{-- <div>
        <h1>{{__('messages.Add Your Offers')}}</h1>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif --}}
    

    <h1>udate Offer</h1>

    @if(Session::has('success'))

    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>        
    @endif

    <br>
   <form method="POST" action="{{url('offers/update/'.$offers->id)}}">  {{--  {{url('offers/update/'.$offers->id)}}" --}}
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Offer Name</label>
            <input type="text" class="form-control" name="name" value="{{$offers->name}}" placeholder="Enter Name">
            @error('name')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
          
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Offer Price</label>
            <input type="text" class="form-control" name="price" value="{{$offers->price}}" placeholder="Enter price">
            @error('price')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputName">Offer Detials</label>
            <input type="text" class="form-control" name="details" value="{{$offers->details}}" placeholder="Enter Detilas">
            @error('details')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Offer</button>
    </form>

</body>
</html>
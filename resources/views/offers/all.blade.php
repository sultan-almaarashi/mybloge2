<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Offer Name</th>
            <th scope="col">Offer Price</th>
            <th scope="col">Offer Details</th>
            <th scope="col">{{__('messages.offer operation')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($offers as $offer)
        <tr>
            <td scope="row">{{$offer -> id}}</td>
            <td scope="row">{{$offer -> name}}</td>
            <td scope="row">{{$offer -> price}}</td>
            <td scope="row">{{$offer -> details}}</td>
            <td><a style="background-color: green" href="{{url('offers/edit/'.$offer -> id)}}">{{__('messages.update')}}</a></td>
             
            
        </tr>
        @endforeach
       
    </tbody>
</table>
</body>
</html>
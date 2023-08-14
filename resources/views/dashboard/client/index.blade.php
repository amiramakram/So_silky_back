@extends('layouts.app')

@section('content')
<div class="container">


<div class="table-responsive">
    <table class="mt-2 w-100">
       
            <tr class="theadTR ">
               
                <th>الاسم</th>
                <th>الايميل</th>
                <th>رقم الجوال</th>
                <th>الامارة</th>
                <th>المنطقة</th>
                <th>اللون الابيض</th>
                <th>اللون الاسود</th>
                <th> اللون الرمادي</th>
                <th> اللون الزهري</th>
                <th> لون البيج</th>
                <th>اجمالي السعر</th>
                <th>تنفيذ امر</th>
            </tr>
     
     
            @foreach($clients as $client)
                <tr class="tbodyTR">
                   
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone_number}}</td>
                    <td>{{$client->emirate}}</td>
                    <td>{{$client->zone}}</td>
                    <td>{{$client->color_White}}</td>
                    <td>{{$client->color_black}}</td>
                    <td>{{$client->color_gray}}</td>
                    <td>{{$client->color_pink}}</td>
                    <td>{{$client->color_beige}}</td>
                    <td>{{$client->total_price}}</td>
                    
                   
                    <td>
                        <div class="d-flex">
                            <a class="w-100" aria-current="page" href="{{route('client.edit', $client->id)}}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                            <form action="{{route('client.destroy', $client->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
    </table>
</div>

</div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this post?");
    }
</script>

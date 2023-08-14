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
                <th>ابيض</th>
                <th>اسود</th>
                <th> رمادي</th>
                <th> زهري</th>
                <th> بيج</th>
                <th> نبيتي</th>
                <th> اخضر</th>
                <th> ازرق</th>
               
                <th>اجمالي السعر</th>
                <th>تعديل</th>
                <th>حذف</th>
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
                    <td>{{$client->color_darkRed}}</td>
                    <td>{{$client->color_green}}</td>
                    <td>{{$client->color_blue}}</td>
                    <td>{{$client->total_price}} AED</td>
                    
                   
                            <td>
                            <div class="d-flex">
                            <a class="w-100" aria-current="page" href="{{route('client.edit', $client->id)}}">
                            <i class="fa-regular fa-pen-to-square fa-2xl text-warning" ></i>
                            </a>
                            </td>
                            <td>
                            <form action="{{route('client.destroy', $client->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" style="border:none" onclick="return confirmDelete()"  value="Delete">
                                <i class="fa-solid fa-trash fa-2xl" style="color: #c1251a;"></i>
                            </button>

                                
                            </form>
</td>
                        </div>

                  
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

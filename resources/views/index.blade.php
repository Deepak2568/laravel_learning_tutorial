<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{-- {{dd($students)}} --}}
    @if(session()->has('message'))
    {{session()->get('message')}}
    @endif
    <a href="{{route('student.create')}}">create student</a>
    <table border=1 style="border-collapse: collapse">
        <thead>
            <tr>
                <th>Name</th>
                <th>Edit Action</th>
                <th>Delete Action</th>
            </tr>
        </thead>
       <tbody>
        @foreach ($students as $item)   
            <tr>
                <td>{{$item->stud_name}}</td>
                <td><a href="{{route('student.edit',$item->id)}}">Edit</a></td>
                <td><a href="{{route('student.destroy',$item->id)}}">Delete</a></td>
                {{-- <form action="{{route('student.destroy',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                   <td><button>Delete</button></td>
                </form> --}}
            </tr>
        @endforeach
       </tbody>
    </table>   
    {{$datas->links()}}
</body>
</html>
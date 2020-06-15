<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    </head>
    <body>
       <div class="row">
           <div class="col-md-offset-3 col-md-6 col-md-offset-3" >
               <table class="table table-hover">
                   <thead>
                   <tr>
                       <th scope="col">Sr#</th>
                       <th scope="col">Name</th>
                       <th scope="col">Created at</th>
                       <th scope="col">My Timezone ( {{get_local_time()}} )</th>
                   </tr>
                   </thead>
                   <tbody>

                   @if(count($records)>0)
                       @foreach($records as $key=>$record)
                           <tr>
                               <th scope="row">{{$key+1}}</th>
                               <td>{{$record['name']}}</td>
                               <td>{{$record['created_at']}}</td>
                               <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $record['created_at'], 'UTC')
                    ->setTimezone(get_local_time())}}</td>
                           </tr>
                       @endforeach
                   @endif
                   </tbody>
               </table>
           </div>
       </div>
    </body>
</html>

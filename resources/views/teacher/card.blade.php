@extends('layouts.app')

@section('css')
    <style type="text/css">
        .staff_card_area .staff_card{
            max-width: 420px;
            height: 271.76471px;
            border: 2px solid #000;
            padding: 10px;
            padding-top: 40px;
        }
        .staff_card_area .staff_card h4{

            font-size: 34px;
            text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
        }
        .staff_card_area .staff_card h2{

            font-size: 34px;
            text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
            padding-left: 40px;
            margin-top: 5px;
        }
        .staff_card_area .staff_card h5{
            padding-left: 15px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 25px;
        }
        .staff_card_area .personal {
            background: #ddd;
            border: 1px solid #000;
            padding: 2px 10px;
        }
        .staff_card_area p{
            margin-bottom: 2px;
            font-weight: bold;
        }
        p.address {
            border: 2px solid #000;
            margin-top: 15px;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')


    <div class="container">
        <div class="staff_card_area">
            <h4>Front</h4>
            <div class="staff_card">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">{{$teacher->name}}</h4>
                        <h5><em>{{$teacher->Designation}}</em></h5>
                        <h2>{{$teacher['teacherClass']->name}}</h2>
                    </div>
                    <div class="media-right">
                        <img src="{{asset($teacher->user->Image)}}" class="media-object" style="width:150px">
                    </div>
                </div>
            </div>
            <h4>back</h4>
            <div class="staff_card">
                <div class="media">
                    <div class="media-body">
                        <p>D-O-B</p>
                        <p class="personal">{{$teacher->user->DOB}}</p>
                        <p>Mobile</p>
                        <p class="personal">{{$teacher->user->Mobile}}</p>
                        {{--<p>Personal Number</p>
                        <p class="personal">154368</p>--}}
                    </div>
                    <div class="media-right">
                        <img src="{{asset($teacher->user->Image)}}" class="media-object" style="width:150px">
                    </div>
                    <p class="address">{{$school->address}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(".horizontal_btn").click(function(){
            $("#horizontal").show(1000);
            $("#vertical").hide(1000);
        });

        $(".vertical_btn").click(function(){
            $("#horizontal").hide(1000);
            $("#vertical").show(1000);
        });
    </script>
@endsection
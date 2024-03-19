@extends('admin.layout')

@section('content')

        <div class="admin-home">
            <div id="col-md-4">
                Hello Admin!!
            </div>
        
            <div id="col-md-8">
                <li>
                    <a href="{{route('admin-register')}}">register</a>
                </li>

                <canvas id="chart"></canvas>
            
                {{-- <script>
                    let ctx = document.getElementById('chart').getContext('2d');
                    let userChart = new Chart(ctx,{
                        type:'bar',
                        data:{
                            labels: {!! json_encode($labels) !!},
                            datasets: {!! json_encode($datasets) !!}
                        },
                    });
                </script> --}}

            </div>
        
            </div>
@endsection
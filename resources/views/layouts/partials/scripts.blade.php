<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
{{--<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>--}}
{{--<!-- Bootstrap 3.3.2 JS -->--}}
{{--<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>--}}

{{--<script src="//cdn.bootcss.com/Chart.js/2.1.4/Chart.min.js"></script>--}}
<script src="{{ asset('/js/all.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    $('#startMinotor').click(function(){
        var $btn = $(this).button('loading');
        $.get('/minotor/start',function(data){
            if (data.status_code == 200){
                console.log('success')
                $btn.button('reset')
            }
        });
    });
</script>

<script>
    var ctx_timePeople = document.querySelector('#timePeople').getContext('2d');
    var ctx_sexPeople = document.querySelector('#sexPeople').getContext('2d');
    var ctx_agePeople = document.querySelector('#agePeople').getContext('2d');
    var ctx_exaPeople = document.querySelector('#exaPeople').getContext('2d');

    var timePeople = new Chart(ctx_timePeople, {
        type: 'line',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: "各时段人数",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.8)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.5,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#000",
                pointBorderWidth: 2,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
            }]
        }
    });

    var sexPeople = new Chart(ctx_sexPeople,{
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: "男",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.8)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.5,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#000",
                pointBorderWidth: 2,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [65, 59, 80, 81, 56, 55, 40],
            },
                {
                    label: "女",
                    fill: true,
                    lineTension: 0.1,
                    backgroundColor: "rgba(0,0,192,0.8)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.5,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#000",
                    pointBorderWidth: 2,
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [60, 65, 70, 85, 50, 50, 45   ],
                }]
        }
    });

    var agePeople = new Chart(ctx_agePeople,{
        type: 'polarArea',
        data: {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    3,
                    14
                ],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#E7E9ED",
                    "#36A2EB"
                ],
                label: 'My dataset' // for legend
            }],
            labels: [
                "Red",
                "Green",
                "Yellow",
                "Grey",
                "Blue"
            ]
        }
    });

    var myPieChart = new Chart(ctx_exaPeople,{
        type: 'pie',
        data: {
            labels: [
                "Red",
                "Green",
                "Yellow"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#FFCE56"
                    ]
                }]
        },
    });
</script>
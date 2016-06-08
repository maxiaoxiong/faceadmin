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
    var ctx_smilePeople = document.querySelector('#smilePeople').getContext('2d');
    var ctx_seeTimePeople = document.querySelector('#seeTimePeople').getContext('2d');
//    var ctx_exaPeople = document.querySelector('#exaPeople').getContext('2d');
    var ctx_agePeople = document.querySelector('#agePeople').getContext('2d');

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

    var seeTimePeople = new Chart(ctx_seeTimePeople,{
        type: 'polarArea',
        data: {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    3,
                    14,
                    8,
                    12
                ],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#E7E9ED",
                    "#36A2EB",
                    "red",
                    "blue"
                ],
                label: '注视时长图' // for legend
            }],
            labels: [
                "1-10",
                "11-20",
                "21-30",
                "31-40",
                "41-50",
                "51-60",
                ">60"
            ]
        }
    });
    var smilePeople = new Chart(ctx_smilePeople,{
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    11,
                    16,
                ],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",

                ],
                label: '注视时长图' // for legend
            }],
            labels: [
                "1-10",
                "11-20",
            ]
        }
    });
    var agePeople = new Chart(ctx_agePeople,{
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    3,
                    14,
                    8,
                    12
                ],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0",
                    "#FFCE56",
                    "#E7E9ED",
                    "#36A2EB",
                    "red",
                    "blue"
                ],
                label: '年龄图' // for legend
            }],
            labels: [
                "1-10",
                "11-20",
                "21-30",
                "31-40",
                "41-50",
                "51-60",
                ">60"
            ]
        }
    });
    var sexPeople = new Chart(ctx_sexPeople,{
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    11,
                    16
                ],
                backgroundColor: [
                    "#FF6384",
                    "#4BC0C0"
                ],
                label: '性别图' // for legend
            }],
            labels: [
                "男",
                "女"
            ]
        }
    });

</script>
$(document).ready(function () {

    $.post({
        url:"/loginController/get_username",
        error:function(){
            alert("something wrong!");
        },
        success:function(username){
            console.log(username);
            $.post({
                url: "/healthController/get_weight_height_change",
                data: {username: username},
                error: function () {
                    alert("error!");
                },
                success: function (result, status) {
                    var obj = JSON.parse(result);
                    console.log(result);
                    Highcharts.chart('weight-bar', {
                        chart: {
                            zoomType: 'xy'
                        },
                        title: {
                            text: '近6个月身高体重变化图'
                        },
                        subtitle: {
                            text: 'Source: WorldClimate.com'
                        },
                        xAxis: [{
                            categories: obj.date,
                            crosshair: true
                        }],
                        yAxis: [{ // Primary yAxis
                            labels: {
                                format: '{value}kg',
                                style: {
                                    color: Highcharts.getOptions().colors[1]
                                }
                            },
                            title: {
                                text: 'Weight',
                                style: {
                                    color: Highcharts.getOptions().colors[1]
                                }
                            }
                        }, { // Secondary yAxis
                            title: {
                                text: 'Height',
                                style: {
                                    color: Highcharts.getOptions().colors[0]
                                }
                            },
                            labels: {
                                format: '{value} cm',
                                style: {
                                    color: Highcharts.getOptions().colors[0]
                                }
                            },
                            opposite: true
                        }],
                        tooltip: {
                            shared: true
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            x: 120,
                            verticalAlign: 'top',
                            y: 100,
                            floating: true,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                        },
                        series: [{
                            name: 'Height',
                            type: 'column',
                            yAxis: 1,
                            data: obj.height,
                            tooltip: {
                                valueSuffix: ' cm'
                            }

                        }, {
                            name: 'Weight',
                            type: 'spline',
                            data: obj.weight,
                            tooltip: {
                                valueSuffix: 'kg'
                            }
                        }]
                    });
                }
            });
        }

    })



});

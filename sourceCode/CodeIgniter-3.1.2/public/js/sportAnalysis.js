var dayPage = 0;
var totalPage = 0;
var DayUserList={
    init:function(){
        this.gridsFather = $("#day_sport_rank");
        this.lastGrid = $(".one-user").eq(0);
        this.clear = $("<div class=\"clearfix\"> </div>");
    },
    updateData:function(userlist){//type为0，表示日运动排序；type为1，表示总运动排序
        nowUserList = userlist;
        this.gridsFather.empty();
        var _this = this;
        $.each(userlist,function(i,user){
            var tempGrid = _this.lastGrid.clone(true);

            var rank_num = tempGrid.find(".rank-num").eq(0);
            rank_num.text(i+1+dayPage*10);

            var personal_page = tempGrid.find(".personal-page").eq(0);
            personal_page.attr('href','/userController/gotoHomepage/'+user.username);

            var user_header_image = tempGrid.find(".user-header-rank").eq(0);
            user_header_image.attr('src',user.header_url);

            var user_name = tempGrid.find(".user-name-related").eq(0);
            user_name.text(user.username);
            user_name.attr('href','/userController/gotoHomepage/'+user.username);

            var total_step = tempGrid.find(".distance").eq(0);
            total_step.text(user.distance);

            _this.gridsFather.append(tempGrid);

        })
    }
}

var TotalUserList={
    init:function(){
        this.gridsFather = $("#total_sport_rank");
        this.lastGrid = $(".one-user").eq(0);
        this.clear = $("<div class=\"clearfix\"> </div>");
    },
    updateData:function(userlist){//type为0，表示日运动排序；type为1，表示总运动排序
        nowUserList = userlist;
        this.gridsFather.empty();
        var _this = this;
        $.each(userlist,function(i,user){
            var tempGrid = _this.lastGrid.clone(true);

            var rank_num = tempGrid.find(".rank-num").eq(0);
            rank_num.text(i+1+totalPage*10);

            var personal_page = tempGrid.find(".personal-page").eq(0);
            personal_page.attr('href','/userController/gotoHomepage/'+user.username);

            var user_header_image = tempGrid.find(".user-header-rank").eq(0);
            user_header_image.attr('src',user.header_url);

            var user_name = tempGrid.find(".user-name-related").eq(0);
            user_name.text(user.username);
            user_name.attr('href','/userController/gotoHomepage/'+user.username);

            var total_step = tempGrid.find(".distance").eq(0);
            total_step.text(user.distance);

            _this.gridsFather.append(tempGrid);

        })
    }
}
$(document).ready(function () {
    //周运动折现图
    $.post({
        url:"/loginController/get_username",
        error:function(){
            alert("something wrong!");
        },
        success:function(username){
            console.log(username);
            $.post({
                url: "/sportController/get_week_data",
                data: {username: username},
                error: function () {
                    alert("error!");
                },
                success: function (result, status) {
                    var obj = JSON.parse(result);
                    $('#week-line').highcharts({
                        chart: {
                            type: 'area',
                            spacingBottom: 30
                        },
                        title: {
                            text: '最近一周运动步数统计'
                        },
                        subtitle: {
                            text: 'runstyle statistic data',
                            floating: true,
                            align: 'right',
                            verticalAlign: 'bottom',
                            y: 15
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            verticalAlign: 'top',
                            x: 150,
                            y: 100,
                            floating: true,
                            borderWidth: 1,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                        },
                        xAxis: {
//                            categories: ['2011-11-11', 'Pears', 'Oranges', 'Bananas', 'Grapes', 'Plums', 'Strawberries', 'Raspberries']
                            categories:obj.date
                        },
                        yAxis: {
                            title: {
                                text: '日运动步数'
                            },
                            labels: {
                                formatter: function () {
                                    return this.value;
                                }
                            }
                        },
                        tooltip: {
                            formatter: function () {
                                return '<b>' + this.series.name + '</b><br/>' +
                                    this.x + ': ' + this.y;
                            },
                            valueSuffix: ' steps'
                        },
                        plotOptions: {
                            area: {
                                fillOpacity: 0.5
                            }
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'day_step',
                            data:obj.step
                        }]

                    });
                }
            });
        }

    })

    //日运动排名
    DayUserList.init();
    $.post({
        url:"/sportController/get_day_ranking",
        data:{page:1},
        success:function(userlist){
            dayPage = 0;
            var list_obj = JSON.parse(userlist);
            DayUserList.updateData(list_obj);
            setDayButton(1);
        },
        error:function(){
            alert("day_ranking_error!");
        }
    })

    //总运动排名
    TotalUserList.init();
    $.post({
        url:"/sportController/get_total_ranking",
        data:{page:1},
        success:function(userlist){
            totalPage = 0;
            var list_obj = JSON.parse(userlist);
            TotalUserList.updateData(list_obj);
            setTotalButton(1);
        }
    })

});

function setDayData(page_num){//page 为要跳转到的页码
    $.post({
        url:'/sportController/get_day_ranking',
        data:{page:page_num},
        success:function(datalist){
            dayPage = page_num-1;
            var list_obj = JSON.parse(datalist);
            DayUserList.updateData(list_obj);
            setDayButton(page_num);
        },
        error:function(){
            alert("page jump wrong!");
        }
    })
}

function setDayButton(currentPage){
    var last = $("#last-page-day");
    var next = $("#next-page-day");
    var page;

    last.unbind("click").click(function(){
        page = currentPage-1;
        $("#day-page-num").text(page);
        setDayData(page);
    })
    next.unbind("click").click(function(){
        page = currentPage+1;
        $("#day-page-num").text(page);
        setDayData(page);
    })
}

function setTotalData(page_num){//page 为要跳转到的页码
    $.post({
        url:'/sportController/get_total_ranking',
        data:{page:page_num},
        success:function(datalist){
            totalPage = page_num-1;
            var list_obj = JSON.parse(datalist);
            TotalUserList.updateData(list_obj);
            setTotalButton(page_num);
        },
        error:function(){
            alert("page jump wrong!");
        }
    })
}

function setTotalButton(currentPage){
    var last = $("#last-page-total");
    var next = $("#next-page-total");
    var page;

    last.unbind("click").click(function(){
        page = currentPage-1;
        $("#total-page-num").text(page);
        setTotalData(page);
    })
    next.unbind("click").click(function(){
        page = currentPage+1;
        $("#total-page-num").text(page);
        setTotalData(page);
    })
}
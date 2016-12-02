/**
 * Created by yyy on 2016/11/30.
 */
var dayPage = 0;
var totalPage = 0;
var NightUserList={
    init:function(){
        this.gridsFather = $("#night_sleep_rank");
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

            var night_hour = tempGrid.find(".night-hour").eq(0);
            night_hour.text(user.night_hour);

            var night_min = tempGrid.find(".night-minute").eq(0);
            night_min.text(user.night_minute);

            _this.gridsFather.append(tempGrid);

        })
    }
}

var TotalUserList={
    init:function(){
        this.gridsFather = $("#total_sleep_rank");
        this.lastGrid = $(".one-user-total").eq(0);
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

            var total_day = tempGrid.find(".total-day").eq(0);
            total_day.text(user.total_day);

            var total_hour = tempGrid.find(".total-hour").eq(0);
            total_hour.text(user.total_hour);

            _this.gridsFather.append(tempGrid);

        })
    }
}

$(document).ready(function () {
    //周运动折现图
    $.post({
        url: "/loginController/get_username",
        error: function () {
            alert("something wrong!");
        },
        success: function (username) {
            console.log(username);
            $.post({
                url: "/sleepController/get_week_data",
                data: {username: username},
                error: function () {
                    alert("error!");
                },
                success: function (result, status) {
                    var obj = JSON.parse(result);
                    console.log(result);
                    $('#week-night-line').highcharts({
                        chart: {
                            type: 'area',
                            spacingBottom: 30
                        },
                        title: {
                            text: '最近一周睡眠时间统计'
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
                            categories: obj.date
                        },
                        yAxis: {
                            title: {
                                text: '睡眠时间/h'
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
                                    this.x + ': ' + this.y+'h';
                            }
                        },
                        plotOptions: {
                            area: {
                                fillOpacity: 0.4
                            }
                        },
                        credits: {
                            enabled: false
                        },
                        series: [{
                            name: 'loose_sleep_time',
                            data: obj.loose
                        },{
                            name:'deep_sleep_time',
                            data: obj.deep
                        }]

                    });
                }
            });
        }

    })

    //当夜睡眠排行
    NightUserList.init();
    $.post({
        url:"/sleepController/get_night_ranking",
        data:{page:1},
        success:function(userlist){
            dayPage = 0;
            var list_obj = JSON.parse(userlist);
            NightUserList.updateData(list_obj);
            setDayButton(1);
        },
        error:function(){
            alert("night_ranking_error!");
        }
    })

    //总睡眠排行
    TotalUserList.init();
    $.post({
        url:"/sleepController/get_total_ranking",
        data:{page:1},
        success:function(userlist){
            console.log("userlist:"+userlist);
            totalPage = 0;
            var list_obj = JSON.parse(userlist);
            TotalUserList.updateData(list_obj);
            setTotalButton(1);
        },
        error:function(){
            alert("total_ranking_error!");
        }
    })
})

function setDayData(page_num){//page 为要跳转到的页码
    $.post({
        url:'/sleepController/get_night_ranking',
        data:{page:page_num},
        success:function(datalist){
            dayPage = page_num-1;
            var list_obj = JSON.parse(datalist);
            NightUserList.updateData(list_obj);
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
        url:'/sleepController/get_total_ranking',
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
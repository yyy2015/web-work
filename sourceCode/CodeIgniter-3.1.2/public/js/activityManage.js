var cur_page = 0;
var ActivityList={
    init:function(){
        this.gridsFather = $("#list-start");
        this.lastGrid = $(".one-activity").eq(0);
        this.clear = $("<div class=\"clearfix\"> </div>");
    },
    updateData:function(actlist){
        nowActlist = actlist;
        this.gridsFather.empty();
        var _this = this;
        $.each(actlist,function(i,activity){
            var tempGrid = _this.lastGrid.clone(true);

            var act_name = tempGrid.find('.activity-name').eq(0);
            act_name.text(activity.activity_name);
            act_name.attr('href','/activityController/detail_activity/'+activity.aid);

            tempGrid.find(".start-time").eq(0).text(activity.start);
            tempGrid.find(".end-time").eq(0).text(activity.end);

            var releaser = tempGrid.find(".activity-releaser").eq(0);
            releaser.text(activity.releaser_name);
            releaser.attr('href','/userController/gotoHomepage/'+activity.releaser_name);

            tempGrid.find(".join-num").eq(0).text(activity.join_num);
            tempGrid.find(".limit-num").eq(0).text(activity.limit_num);

            var detail = tempGrid.find('.detail-info').eq(0);
            detail.attr('href','/activityController/detail_activity/'+activity.aid)

            _this.gridsFather.append(tempGrid);
        })
    }
}

$(document).ready(function(){
    ActivityList.init();
    $.post({
        url:"/activityController/get_all_activity",
        data:{page:1},
        success:function(actlist,status){
            var list_obj = JSON.parse(actlist);
            ActivityList.updateData(list_obj);
            cur_page = 0;
        },
        error:function(){
            alert("get actlist wrong!");
        }
    })
})

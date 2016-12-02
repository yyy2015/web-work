var ReleaseList={
    init:function(){
        this.gridsFather = $("#release-list");
        this.lastGrid = $(".one-activity-release").eq(0);
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
            detail.attr('href','/activityController/detail_activity/'+activity.aid);

            _this.gridsFather.append(tempGrid);
        })
    }
}

var JoinList={
    init:function(){
        this.gridsFather = $("#join-list");
        this.lastGrid = $(".one-activity-join").eq(0);
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
            detail.attr('href','/activityController/detail_activity/'+activity.aid);

            _this.gridsFather.append(tempGrid);
        })
    }
}

var FinishList={
    init:function(){
        this.gridsFather = $("#finish-list");
        this.lastGrid = $(".one-activity-finish").eq(0);
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
            detail.attr('href','/activityController/detail_activity/'+activity.aid);

            _this.gridsFather.append(tempGrid);
        })
    }
}

$(document).ready(function(){
    var login_user = $("#login-user-name").text();
    ReleaseList.init();
    $.post({
        url:"/activityController/get_release_activity",
        data:{username:login_user},
        success:function(actlist){
            var list_obj = JSON.parse(actlist);
            ReleaseList.updateData(list_obj);
        }
    })

    JoinList.init();
    $.post({
        url:"/activityController/get_joining_activity",
        data:{username:login_user},
        success:function(actlist){
            var list_obj = JSON.parse(actlist);
            JoinList.updateData(list_obj);
        }
    })

    FinishList.init();
    $.post({
        url:"/activityController/get_joined_activity",
        data:{username:login_user},
        success:function(actlist){
            var list_obj = JSON.parse(actlist);
            FinishList.updateData(list_obj);
        }
    })
})
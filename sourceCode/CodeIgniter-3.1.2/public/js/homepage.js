var global_login = 'yyy';
var FollowingList={
    init:function(){
        this.gridsFather = $("#following-list");
        this.lastGrid = $('.one-friend-following').eq(0);
        this.clear = $("<div class=\"clearfix\"> </div>");
    },
    updateData:function(userlist){
        this.gridsFather.empty();
        var _this = this;
        $.each(userlist,function(i,user){
            var tempGrid = _this.lastGrid.clone(true);
            var homepage = tempGrid.find('.homepage').eq(0);
            homepage.attr('href','/userController/gotoHomepage/'+user.username);
            var img = tempGrid.find('.user-header-related').eq(0);
            img.attr('src',user.header_url);
            var username = tempGrid.find('.user-name-related').eq(0);
            username.text(user.username);
            username.attr('href','/userController/gotoHomepage/'+user.username);
            var detail_user = tempGrid.find('.detail-user').eq(0);
            detail_user.attr('href','/userController/gotoHomepage/'+user.username);
            _this.gridsFather.append(tempGrid);

            // if(user.username == global_login){
            //     $('#cancel').css('display','inline-block');
            //     $('#join').css('display','none');
            // }
        })
    }
}

var MoodList={
    init:function(){
        this.gridsFather = $("#mood-list");
        this.lastGrid = $('.friend-mood-bar').eq(0);
        this.clear = $("<div class=\"clearfix\"> </div>");
    },
    updateData:function(moodlist){
        this.gridsFather.empty();
        var _this = this;
        $.each(moodlist,function(i,mood){
            var tempGrid = _this.lastGrid.clone(true);
            var homepage = tempGrid.find('.homepage').eq(0);
            homepage.attr('href','/userController/gotoHomepage'+mood.username);
            var img = tempGrid.find('.mood-user-header').eq(0);
            img.attr('src',mood.header_url);
            tempGrid.find('.mood-user-name').eq(0).text(mood.username);
            tempGrid.find('.mood-release-time').eq(0).text(mood.release_time);
            tempGrid.find('.mood-text').text(mood.content);

            _this.gridsFather.append(tempGrid);

        })
    }
}

$(document).ready(function() {
    var login_user = $('#login-user-name').text();
    var username = $('#username').text();

    $.post({
        url:"/userController/is_follow",
        data:{follow:username,followed:login_user},
        success:function(result){
            var obj = JSON.parse(result);
            if(obj){
                $('#add').css('display','none');
                $('#cancel').css('display','inline-block');
            }else{
                $('#add').css('display','inline-block');
                $('#cancel').css('display','none');
            }
        }
    })

    FollowingList.init();
    $.post({
        url: "/userController/get_following_user",
        data: {username:username},
        success: function (userlist) {
            // console.log(userlist);
            var list_obj = JSON.parse(userlist);
            FollowingList.updateData(list_obj);
        },
        error: function () {
            alert("get joined wrong!");
        }
    })

    MoodList.init();
    $.post({
        url:"/userController/get_mood",
        data:{username:username},
        success:function(moodlist){
            console.log(moodlist);
            var list_obj = JSON.parse(moodlist);
            MoodList.updateData(list_obj);
        }
    })

    $('#add').click(function(){
        $.post({
            url:"/userController/follow",
            data:{follow:username,followed:login_user},
            success:function(result){
                var obj = JSON.parse(result);
                if(obj){
                    $('#add').css('display','none');
                    $('#cancel').css('display','inline-block');
                }
            }
        })
    })

    $('#cancel').click(function(){
        $.post({
            url:"/userController/cancel_follow",
            data:{follow:username,followed:login_user},
            success:function(result){
                var obj = JSON.parse(result);
                if(obj){
                    $('#add').css('display','inline-block');
                    $('#cancel').css('display','none');
                }
            }
        })
    })
})

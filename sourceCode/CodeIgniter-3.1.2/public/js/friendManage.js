var AllUserList={
    init:function(){
        this.gridsFather = $("#user-list-start");
        this.lastGrid = $('.one-user-look').eq(0);
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

            if(user.username == global_login){
                $('#cancel').css('display','inline-block');
                $('#join').css('display','none');
            }
        })
    }
}

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

$(document).ready(function() {
    var login_user = $('#login-user-name').text();
    global_login = login_user;
    console.log(login_user);
    AllUserList.init();
    $.post({
        url: "/userController/get_all_user",
        data: {page: 1},
        success: function (userlist) {
            // console.log(userlist);
            var list_obj = JSON.parse(userlist);
            AllUserList.updateData(list_obj);
        },
        error: function () {
            alert("get users wrong!");
        }
    })

    FollowingList.init();
    $.post({
        url: "/userController/get_following_user",
        data: {username:login_user},
        success: function (userlist) {
            console.log(userlist);
            var list_obj = JSON.parse(userlist);
            FollowingList.updateData(list_obj);
        },
        error: function () {
            alert("get joined wrong!");
        }
    })
})


var global_login = 'yyy';
var JoinedList={
    init:function(){
        this.gridsFather = $("#joined-list");
        this.lastGrid = $('.one-joined-user').eq(0);
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

$(document).ready(function(){
    var act_id = $('#aid').text();
    var login_user = $('#login-user-name').text();
    global_login = login_user;
    console.log(act_id);
    console.log(login_user);
    JoinedList.init();
    $.post({
        url:"/activityController/joined_user",
        data:{aid:act_id},
        success:function(userlist){
            console.log(userlist);
            var list_obj = JSON.parse(userlist);
            JoinedList.updateData(list_obj);
        },
        error:function(){
            alert("get joined wrong!");
        }
    })


    $('#join').click(function(){
        $.post({
            url:"/activityController/join",
            data:{username:login_user,aid:act_id},
            success:function(result){
                var list_obj = JSON.parse(result);

                $('#join').css('display','none');
                $('#cancel').css('display','inline-block');

                //修改已参加人数
                var init_num = parseInt($('#join-num').text());
                $('#join-num').text(init_num+1);

                JoinedList.updateData(list_obj);

            }
        })


    })

    $('#cancel').click(function(){
        $.post({
            url:"/activityController/quit",
            data:{username:login_user,aid:act_id},
            success:function(result){
                var list_obj = JSON.parse(result);

                $('#cancel').css('display','none');
                $('#join').css('display','inline-block');

                //修改已参加人数
                var init_num = parseInt($('#join-num').text());
                $('#join-num').text(init_num-1);

                JoinedList.updateData(list_obj);

            }
        })


    })


})

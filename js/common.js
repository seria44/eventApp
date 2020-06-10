   $(document).ready(function(){
            //로고 클릭시 index 페이지 이동
	   		$(".h_mlogo").click(function(){
	   			goUrl("index");
            });
	   
	   		//마우스 오버 키 찾기
            $(".viewListBody_list").mouseover(function(){
                var r_key = $(this).attr('value');
                
                $("#sub_"+r_key).hide();
                $("#view_"+r_key).show();
            });
            
            //마우스 아웃 키 찾기
            $(".viewListBody_list").mouseout(function(){
            
                var r_key = $(this).attr('value');
                
                $("#sub_"+r_key).show();
                $("#view_"+r_key).hide();
            });
            //마우스 아웃 키 찾기
            $("#e_login").click(function(){
                goUrl("login")
            });

            //마우스 아웃 키 찾기
            $("#e_member").click(function(){
                goUrl("member")
            });
            

            $("#b_benner").css("left",0);
        });
        
        /* 페이지 이동 */
        function goUrl(var1){
            location.href = var1+".php";
        }
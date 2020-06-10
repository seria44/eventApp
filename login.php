<?php
include_once( $_SERVER["DOCUMENT_ROOT"]."/header_menu.php"); 
?>
   
        <div class="contents_body">
            <div class="loginBox">
                <div class="Box">
                    <ul>
                        <li><input type="text" class="searchText" placeholder="아이디"><br>
                            <input type="password" class="searchText" placeholder="비밀번호">
                        </li>
                        <li>
                            <div class="l_btn_search">
                                <span id="e_login">로그인</span>
                            </div>
                        </li>

                    </ul>
                    <div class="ldSearch">
                        <span> 아이디/비밀번호 찾기 </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span> 회원가입 </span>
                    </div>
                    
                </div>
            </div>
        </div>
   
<?php
include_once( $_SERVER["DOCUMENT_ROOT"]."/foot.php"); 
?>
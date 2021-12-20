<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class : 댓글 페이지</title>
    
    <!-- link -->
    <?php
        include "../include/link.php"
    ?>
    <!-- //link -->

    
</head>
<body>
    <div id="skip">
        <a href="#main">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <!-- header -->
    <?php
        include "../include/header.php"
    ?>
    <!-- //header -->

    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>웹스토리보이 강의</h3>
                <p>웹디자이너, 웹퍼블리셔, 프론트앤드 개발자를 위한 포트폴리오 강의입니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/webstandard005.png" alt="dd">
                            </a>
                            <div class="item">
                                <strong>웹 표준 사이트 강의</strong>
                                <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                <span class="keyword">
                                    <span>#중급</span><span>#무료</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/webstandard006.png" alt="dd">
                            </a>
                            <div class="item">
                                <strong>반응형 사이트 강의</strong>
                                <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                <span class="keyword">
                                    <span>#php</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/webstandard003.png" alt="dd">
                            </a>
                            <div class="item">
                                <strong>패랠랙스 사이트 강의</strong>
                                <span>전 세계 연간 오픈소스 컴포넌트 다운로드 1.5조 건.<br>주요 IT기업의 95%가 오픈소스를 사용하고 있습니다.</span>
                                <span class="keyword">
                                    <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            
            <article id="comment" class="flow-article content-sub">
                <h3>강의 신청하기</h3>
                <p>원하는 강의로 댓글로 신청해주세요!</p>
                <section class="section-comment">
                    <h4 class="ir_so">댓글 콘텐츠</h4>
                    <div class="comment-form">
                        <form name="comment" method="post" action="commentSave.php">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input-text" placeholder="이름" autocomplete="off" required>
                                    </div>
                                    <div class="text">
                                        <label for="youText" class="ir_so">한마디</label>
                                        <input type="text" name="youText" id="youText" class="input-text" placeholder="한마디 적어주세요!" autocomplete="off" required>
                                    </div>
                                    <button class="login-btn" type="submit" value="한마디 하기">go</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        

                        <!-- <div>
                            <p>구세주십니다 선생님 ㅠㅠㅠㅠㅠㅠ!!!!!!!!!</p>
                            <div class="icon">
                                <img src="../assets/img/stu01.png" alt="이정아">
                                <span>#이정아</span>
                                <span>2021.09.09</span>
                            </div>
                        </div> -->
                        
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    
    <!-- footer -->
    <?php
        include "../include/footer.php"
    ?>
    <!-- //footer -->
</body>
</html>
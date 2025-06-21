<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>문의하기</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* 모바일 메뉴 및 아코디언 토글 관련 기본 스타일 */
    .mobile-dropdown-content { display: none; }
  </style>
</head>
<body class="bg-gray-50">

  <!-- Header Navigation -->
  <header class="gtb001 fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto px-4 py-5 flex items-center justify-between">
      <a class="flex items-center" href="#">
        <img alt="GTB Korea" class="h-10" src="https://static.readdy.ai/image/3bc01cf05bc1d655cd439a7d394c0eb8/0b98485c116e4f4d5eded77d234d0d5f.png" />
      </a>
      <nav class="hidden lg:flex items-center justify-end space-x-12">
        <a class="text-lg font-medium hover:text-primary transition-colors" href="http://gtbkorea.com">홈</a>
        <!-- 제품 메뉴 -->
        <div class="relative group">
          <a class="text-lg font-medium hover:text-primary transition-colors flex items-center" href="#">제품</a>
          <div class="dropdown absolute hidden group-hover:block bg-white shadow-lg rounded py-3 min-w-[280px]">
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/b_001">협동로봇 (로봇자동화)</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/b_002">AGV·AMR (물류이송자동화)</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/b_003">플라즈마/USC (건식세정기)</a>
          </div>
        </div>
        <!-- 솔루션 메뉴 -->
        <div class="relative group">
          <a class="text-lg font-medium hover:text-primary transition-colors flex items-center" href="#">솔루션</a>
          <div class="dropdown absolute hidden group-hover:block bg-white shadow-lg rounded py-3 min-w-[280px]">
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/c_001">적용사례</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/c_002">유지보수신청</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/c_003">로봇티칭</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/c_004">데모신청</a>
          </div>
        </div>
        <!-- 고객지원 메뉴 -->
        <div class="relative group">
          <a class="text-lg font-medium hover:text-primary transition-colors flex items-center" href="#">고객지원</a>
          <div class="dropdown absolute hidden group-hover:block bg-white shadow-lg rounded py-3 min-w-[280px]">
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/board/list?bd_id=freeboard">자료실</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base coming-soon" href="#">공지사항</a>
          </div>
        </div>
        <!-- 회사소개 메뉴 -->
        <div class="relative group">
          <a class="text-lg font-medium hover:text-primary transition-colors flex items-center" href="#">회사소개</a>
          <div class="dropdown absolute hidden group-hover:block bg-white shadow-lg rounded py-3 min-w-[280px]">
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/d_001">인사말</a>
            <a class="block px-8 py-3 hover:text-gray-700 transition-colors" href="http://gtbkorea.com/page/d_002">품질경영</a>
            <a class="block px-8 py-3 hover:bg-gray-100 text-base" href="http://gtbkorea.com/page/d_003">CI정책</a>
          </div>
        </div>
        <a class="text-lg font-medium hover:text-primary transition-colors" href="#">문의하기</a>
      </nav>

      <!-- 모바일 메뉴 버튼 -->
      <div class="lg:hidden w-10 h-10 flex items-center justify-center cursor-pointer" id="mobileMenuButton">☰</div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden lg:hidden bg-white shadow-md" id="mobileMenu">
      <div class="container mx-auto px-4 py-3 space-y-4">
        <a class="block py-2 font-medium" href="http://gtbkorea.com">홈</a>

        <!-- 제품 -->
        <div class="mobile-dropdown">
          <div class="flex items-center justify-between py-2 cursor-pointer mobile-dropdown-trigger">
            <span class="font-medium">제품</span><span>▾</span>
          </div>
          <div class="mobile-dropdown-content pl-4 py-2 space-y-2">
            <a class="block py-1" href="http://gtbkorea.com/page/b_001">협동로봇 (로봇자동화)</a>
            <a class="block py-1" href="http://gtbkorea.com/page/b_002">AGV·AMR (물류자동화)</a>
            <a class="block py-1" href="http://gtbkorea.com/page/b_003">플라즈마/USC (건식세정기)</a>
          </div>
        </div>

        <!-- 솔루션 -->
        <div class="mobile-dropdown">
          <div class="flex items-center justify-between py-2 cursor-pointer mobile-dropdown-trigger">
            <span class="font-medium">솔루션</span><span>▾</span>
          </div>
          <div class="mobile-dropdown-content pl-4 py-2 space-y-2">
            <a class="block py-1" href="http://gtbkorea.com/page/c_001">적용사례</a>
            <a class="block py-1" href="http://gtbkorea.com/page/c_002">유지보수신청</a>
            <a class="block py-1" href="http://gtbkorea.com/page/c_003">로봇티칭</a>
            <a class="block py-1" href="http://gtbkorea.com/page/c_004">데모신청</a>
          </div>
        </div>

        <!-- 고객지원 -->
        <div class="mobile-dropdown">
          <div class="flex items-center justify-between py-2 cursor-pointer mobile-dropdown-trigger">
            <span class="font-medium">고객지원</span><span>▾</span>
          </div>
          <div class="mobile-dropdown-content pl-4 py-2 space-y-2">
            <a class="block py-1" href="http://gtbkorea.com/board/list?bd_id=freeboard">자료실</a>
            <a class="block py-1 coming-soon" href="#">공지사항</a>
          </div>
        </div>

        <!-- 회사소개 -->
        <div class="mobile-dropdown">
          <div class="flex items-center justify-between py-2 cursor-pointer mobile-dropdown-trigger">
            <span class="font-medium">회사소개</span><span>▾</span>
          </div>
          <div class="mobile-dropdown-content pl-4 py-2 space-y-2">
            <a class="block py-1" href="http://gtbkorea.com/page/d_001">인사말</a>
            <a class="block py-1" href="http://gtbkorea.com/page/d_002">품질경영</a>
            <a class="block py-1" href="http://gtbkorea.com/page/d_003">CI정책</a>
          </div>
        </div>

        <a class="block py-2 font-medium" href="#">문의하기</a>
      </div>
    </div>
  </header>

  <!-- 헤더 고정 대비 여백 -->
  <div class="pt-24"></div>

  <!-- 💡 타이틀 영역 -->
  <section class="text-center py-16 bg-white shadow-sm">
    <h1 class="text-3xl font-bold text-gray-800">홈페이지 상세 문의</h1>
    <p class="mt-4 text-gray-500">궁금하신 내용을 남겨주시면 신속히 답변드리겠습니다.</p>
  </section>

  <!-- 문의 폼 섹션 시작 -->
  <section class="py-40 bg-gray-50">
    <div class="flex flex-col lg:flex-row gap-12">
      <div class="w-full lg:w-1/2 mx-auto">
        <form action="send_mail.php" method="POST" class="bg-white rounded-xl shadow-sm p-8">
          <!-- 이름 / 기업명 -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div><label class="block text-gray-700 font-medium mb-2" for="name">이름 *</label>
              <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                     id="name" name="name" placeholder="홍길동" required type="text" />
            </div>
            <div><label class="block text-gray-700 font-medium mb-2" for="company">기업명 *</label>
              <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                     id="company" name="company" placeholder="GTB Inc." required type="text" />
            </div>
          </div>

          <!-- 이메일 / 연락처 -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div><label class="block text-gray-700 font-medium mb-2" for="email">이메일 *</label>
              <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                     id="email" name="email" placeholder="example@gtbkorea.com" required type="email" />
            </div>
            <div><label class="block text-gray-700 font-medium mb-2" for="phone">연락처 *</label>
              <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                     id="phone" name="phone" placeholder="010-1234-5678" required type="tel" />
            </div>
          </div>

          <!-- 관심 제품 -->
          <div class="mb-6"><label class="block text-gray-700 font-medium mb-2">관심 제품 *</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <label class="flex items-center"><input class="mr-2" name="product[]" type="checkbox" value="플라즈마/USC 건식세정" /> 플라즈마/USC 건식세정</label>
              <label class="flex items-center"><input class="mr-2" name="product[]" type="checkbox" value="협동로봇 COBOT" /> 협동로봇 COBOT</label>
              <label class="flex items-center"><input class="mr-2" name="product[]" type="checkbox" value="AGV&AMR 자율주행로봇" /> AGV&AMR 자율주행로봇</label>
              <label class="flex items-center"><input class="mr-2" name="product[]" type="checkbox" value="기타 제품 및 솔루션" /> 기타 제품 및 솔루션</label>
            </div>
          </div>

          <!-- 문의 유형 -->
          <div class="mb-6"><label class="block text-gray-700 font-medium mb-2">문의 유형 *</label>
            <div class="flex flex-wrap gap-4">
              <label class="flex items-center"><input class="mr-2" name="inquiry_type" required type="radio" value="제품 정보" /> 제품 정보</label>
              <label class="flex items-center"><input class="mr-2" name="inquiry_type" required type="radio" value="견적 요청" /> 견적 요청</label>
              <label class="flex items-center"><input class="mr-2" name="inquiry_type" required type="radio" value="기술 상담" /> 기술 상담</label>
              <label class="flex items-center"><input class="mr-2" name="inquiry_type" required type="radio" value="데모 신청" /> 데모 신청</label>
            </div>
          </div>

          <!-- 문의 내용 -->
          <div class="mb-6"><label class="block text-gray-700 font-medium mb-2" for="message">문의 내용 *</label>
            <textarea class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                      id="message" name="message" placeholder="문의하실 내용을 자세히 적어주세요." required rows="5"></textarea>
          </div>

          <!-- 개인정보 동의 -->
          <div class="mb-6"><label class="flex items-center"><input class="mr-2" name="agree" required type="checkbox" /> 개인정보 수집 및 이용에 동의합니다. *</label></div>

          <!-- 버튼 -->
          <button class="w-full bg-blue-600 text-white py-3 rounded hover:bg-blue-700 transition-colors font-medium" type="submit">문의하기</button>
        </form>
      </div>
    </div>
  </section>

  <!-- JS: 모바일 메뉴 열기/닫기 + 아코디언 -->
  <script>
    document.getElementById('mobileMenuButton').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    document.querySelectorAll('.mobile-dropdown-trigger').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const content = trigger.nextElementSibling;
        content.classList.toggle('hidden');
      });
    });
  </script>
</body>
</html>

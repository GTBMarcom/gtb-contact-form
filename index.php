<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>문의하기</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- 우클릭 방지 소스 script to script -->
<script>
  document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
    alert('우클릭은 비활성화되어 있습니다.');
  });
</script>
<!-- 실제 이동을 막는 링크 script to script --><script>
  document.addEventListener('DOMContentLoaded', function () {
    // a, button 모두 coming-soon 클래스를 가진 요소를 선택
    document.querySelectorAll('a.coming-soon, button.coming-soon').forEach(function(el) {
      el.addEventListener('click', function(e) {
        e.preventDefault(); // 기본 동작(링크 이동, 버튼 제출 등) 방지
        alert('준비 중인 페이지입니다.');
      });
    });
  });
</script>
  <style>
    /* 모바일 메뉴 및 아코디언 토글 관련 기본 스타일 */
    .mobile-dropdown-content { display: none; }
  </style>
</head>
<body class="bg-gray-50">

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

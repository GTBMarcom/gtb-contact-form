<?php
require 'vendor/autoload.php'; // Composer 자동 로드

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // SMTP 설정
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'marcomgtbkorea@gmail.com';  // 실제 구글 계정
    $mail->Password   = 'ezou rkba lxqw opmi';        // 앱 비밀번호
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    // 발신·수신자 설정
    $mail->setFrom('marcomgtbkorea@gmail.com', '홈페이지 문의');
    
    // Reply-To 설정 (문의자 이메일로 답장 가능)
    $email = $_POST['email'] ?? '';
    $name = $_POST['name'] ?? '';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $name);
    }
    
    $mail->Sender = 'marcomgtbkorea@gmail.com';  // Return-Path 명확히
    $mail->addAddress('erin@gtbkorea.com', '관리자');

    // 폼 데이터 수신
    $phone       = $_POST['phone'] ?? '';
    $company     = $_POST['company'] ?? '';
    $inquiryType = $_POST['inquiry_type'] ?? '';
    $products    = $_POST['product'] ?? [];
    $message     = $_POST['message'] ?? '';

    $productList = implode(", ", $products); // 배열 → 문자열 변환

    $mail->Subject = "[문의] {$name} 님의 홈페이지 신규 문의입니다";

    // HTML 본문 작성 (가독성 위해 한 줄씩 띄우기)
    $mail->isHTML(true);
    $mail->Body = "
        <h2 style='color:#2c3e50;'>홈페이지 문의가 도착했습니다.</h2>
        <p>
        <p><strong>(아래 내용 중, 외부 링크가 포함된 경우에는 최우선 보안을 유지하고자 '링크 실행 보류'를 권장드립니다. -Msg.Developer-</strong></p>
        <p>
        <p><strong>이름 :</strong> {$name}</p>
        <p><strong>이메일 :</strong> {$email}</p>
        <p><strong>연락처 :</strong> {$phone}</p>
        <p><strong>기업명 :</strong> {$company}</p>
        <p><strong>문의 유형 :</strong> {$inquiryType}</p>
        <p><strong>관심 제품 :</strong> {$productList}</p>
        <p><strong>문의 내용 :</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    // 텍스트 본문 (HTML 미지원 클라이언트용)
    $mail->AltBody = 
        "홈페이지 문의 도착\n\n" .
        "이름: {$name}\n\n" .
        "이메일: {$email}\n\n" .
        "연락처: {$phone}\n\n" .
        "기업명: {$company}\n\n" .
        "문의 유형: {$inquiryType}\n\n" .
        "관심 제품: {$productList}\n\n" .
        "문의 내용:\n{$message}\n";

    // 메일 전송
    $mail->send();

    echo "<script>alert('문의가 성공적으로 접수되었습니다.'); window.location.href='index.php';</script>";

} catch (Exception $e) {
    echo "<script>alert('메일 전송 실패: {$mail->ErrorInfo}'); history.back();</script>";
}
?>

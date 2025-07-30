#!/bin/bash

# Jiny Uikit 패키지 빌드 및 배포 스크립트

echo "🚀 Jiny Uikit 패키지 빌드를 시작합니다..."

# Composer 의존성 설치
echo "📦 Composer 의존성을 설치합니다..."
composer install --no-dev --optimize-autoloader

# 테스트 실행
echo "🧪 테스트를 실행합니다..."
composer test

# 패키지 아카이브 생성
echo "📦 패키지 아카이브를 생성합니다..."
composer archive --format=zip --dir=./dist

echo "✅ 빌드가 완료되었습니다!"
echo "📁 dist/ 폴더에서 패키지 파일을 확인하세요."

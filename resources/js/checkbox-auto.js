/**
 * 자동 Hidden Input 처리 체크박스 및 토글 스위치 JavaScript
 *
 * 이 파일은 체크박스와 토글 스위치가 변경될 때 자동으로 hidden input 값을 업데이트하는 기능을 제공합니다.
 *
 * 사용법:
 * 1. 이 스크립트를 페이지에 포함
 * 2. 체크박스나 토글 스위치에 form-checkbox-auto 클래스를 추가하거나 form 내부의 모든 체크박스/토글 스위치가 자동으로 처리됨
 *
 * @author JinyPHP
 * @version 1.1.0
 */

(function() {
    'use strict';

    /**
     * 체크박스 및 토글 스위치 자동 처리 클래스
     */
    class CheckboxAutoHandler {
        constructor() {
            this.init();
        }

        /**
         * 초기화
         */
        init() {
            // 페이지 로드 시 초기화
            this.updateAllHiddenInputs();

            // 체크박스 변경 이벤트 리스너 등록
            this.bindEvents();
        }

        /**
         * 이벤트 바인딩
         */
        bindEvents() {
            // 일반 체크박스 변경 이벤트
            document.addEventListener('change', (e) => {
                if (e.target.type === 'checkbox') {
                    this.updateHiddenInput(e.target);
                    this.updateToggleSwitchVisual(e.target);
                }
            });

            // 토글 스위치 클릭 이벤트
            document.addEventListener('click', (e) => {
                const toggleContainer = e.target.closest('.group');
                if (toggleContainer && toggleContainer.classList.contains('cursor-pointer')) {
                    const checkbox = toggleContainer.querySelector('input[type="checkbox"]');
                    if (checkbox && !checkbox.disabled) {
                        // 클릭된 요소가 checkbox가 아닌 경우에만 토글
                        if (e.target !== checkbox) {
                            // 체크박스 상태 토글
                            checkbox.checked = !checkbox.checked;

                            // 이벤트 발생
                            checkbox.dispatchEvent(new Event('change', { bubbles: true }));

                            // 시각적 업데이트
                            this.updateToggleSwitchVisual(checkbox);
                            this.updateHiddenInput(checkbox);

                            // 디버깅을 위한 콘솔 로그
                            if (typeof console !== 'undefined' && console.debug) {
                                console.debug('Toggle switch clicked:', {
                                    checked: checkbox.checked,
                                    name: checkbox.name,
                                    container: toggleContainer.className
                                });
                            }
                        }
                    }
                }
            });

            // 동적으로 추가된 체크박스를 위한 MutationObserver
            this.setupMutationObserver();
        }

        /**
         * MutationObserver 설정 (동적으로 추가된 체크박스 처리)
         */
        setupMutationObserver() {
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.type === 'childList') {
                        mutation.addedNodes.forEach((node) => {
                            if (node.nodeType === Node.ELEMENT_NODE) {
                                // 추가된 노드에서 체크박스 찾기
                                const checkboxes = node.querySelectorAll('input[type="checkbox"]');
                                checkboxes.forEach(checkbox => {
                                    this.updateHiddenInput(checkbox);
                                    this.updateToggleSwitchVisual(checkbox);
                                });
                            }
                        });
                    }
                });
            });

            // body 전체를 관찰
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        }

        /**
         * 모든 체크박스의 hidden input 업데이트
         */
        updateAllHiddenInputs() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                this.updateHiddenInput(checkbox);
                this.updateToggleSwitchVisual(checkbox);
            });
        }

        /**
         * 개별 체크박스의 hidden input 업데이트
         */
        updateHiddenInput(checkbox) {
            const form = this.findParentForm(checkbox);
            if (!form) return;

            const hiddenInput = form.querySelector(`input[name="${checkbox.name}"][type="hidden"]`);
            if (hiddenInput) {
                hiddenInput.value = checkbox.checked ? '1' : '0';
            }
        }

        /**
         * 토글 스위치의 시각적 상태 업데이트
         */
        updateToggleSwitchVisual(checkbox) {
            const toggleContainer = checkbox.closest('.group');
            if (!toggleContainer) return;

            const thumb = toggleContainer.querySelector('span');
            if (!thumb) return;

            // 크기별 이동 거리 매핑 (업데이트됨)
            const sizeTranslates = {
                'w-8': 'translate-x-4',   // sm
                'w-11': 'translate-x-5',  // md
                'w-14': 'translate-x-7'   // lg
            };

            // 색상별 클래스 매핑
            const colorClasses = {
                'indigo': { off: 'bg-gray-200', on: 'bg-indigo-600' },
                'blue': { off: 'bg-gray-200', on: 'bg-blue-600' },
                'green': { off: 'bg-gray-200', on: 'bg-green-600' },
                'red': { off: 'bg-gray-200', on: 'bg-red-600' },
                'yellow': { off: 'bg-gray-200', on: 'bg-yellow-500' },
                'purple': { off: 'bg-gray-200', on: 'bg-purple-600' }
            };

            // 현재 색상 감지
            let currentColor = 'indigo';
            for (const [color, classes] of Object.entries(colorClasses)) {
                if (toggleContainer.classList.contains(classes.on)) {
                    currentColor = color;
                    break;
                }
            }

            // 현재 크기 감지 및 이동 거리 결정
            let currentTranslate = 'translate-x-5'; // 기본값 (md)
            for (const [sizeClass, translateClass] of Object.entries(sizeTranslates)) {
                if (toggleContainer.classList.contains(sizeClass)) {
                    currentTranslate = translateClass;
                    break;
                }
            }

            if (checkbox.checked) {
                // 활성화 상태
                const colorClass = colorClasses[currentColor];
                toggleContainer.classList.remove(colorClass.off);
                toggleContainer.classList.add(colorClass.on);

                thumb.classList.remove('translate-x-0');
                thumb.classList.add(currentTranslate);
            } else {
                // 비활성화 상태
                const colorClass = colorClasses[currentColor];
                toggleContainer.classList.remove(colorClass.on);
                toggleContainer.classList.add(colorClass.off);

                thumb.classList.remove(currentTranslate);
                thumb.classList.add('translate-x-0');
            }

            // 디버깅을 위한 콘솔 로그 (개발 환경에서만)
            if (typeof console !== 'undefined' && console.debug) {
                console.debug('Toggle switch updated:', {
                    checked: checkbox.checked,
                    currentTranslate,
                    currentColor,
                    classes: toggleContainer.className
                });
            }
        }

        /**
         * 체크박스의 부모 form 찾기
         */
        findParentForm(element) {
            let parent = element.parentElement;
            while (parent) {
                if (parent.tagName === 'FORM') {
                    return parent;
                }
                parent = parent.parentElement;
            }
            return null;
        }

        /**
         * FormData에 체크박스 값 자동 추가 (AJAX 요청 시 사용)
         */
        static enhanceFormData(form) {
            const formData = new FormData(form);

            // 모든 체크박스 처리
            const checkboxes = form.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                const hiddenInput = form.querySelector(`input[name="${checkbox.name}"][type="hidden"]`);
                if (hiddenInput) {
                    formData.set(checkbox.name, checkbox.checked ? '1' : '0');
                }
            });

            return formData;
        }
    }

    // DOM이 로드되면 초기화
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            new CheckboxAutoHandler();
        });
    } else {
        // DOM이 이미 로드된 경우 즉시 초기화
        new CheckboxAutoHandler();
    }

    // 전역 접근을 위한 네임스페이스
    window.CheckboxAutoHandler = CheckboxAutoHandler;

})();

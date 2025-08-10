<?php

namespace Jiny\Uikit\App\Services;

use Illuminate\Support\Facades\Log;

class UikitMCPHandler
{
    private UISettingsService $uiSettings;

    public function __construct()
    {
        $this->uiSettings = UISettingsService::getInstance();
    }

    public function handleCommand(string $command, array $params = []): array
    {
        try {
            if (str_contains($command, '테마') && str_contains($command, '변경')) {
                return $this->changeTheme($command, $params);
            }
            
            if (str_contains($command, '컴포넌트') && str_contains($command, '생성')) {
                return $this->createComponent($command, $params);
            }
            
            if (str_contains($command, '색상') || str_contains($command, '팔레트')) {
                return $this->getColorPalette($command, $params);
            }
            
            if (str_contains($command, 'UI') && str_contains($command, '설정')) {
                return $this->getUISettings($command, $params);
            }
            
            return [
                'success' => false,
                'message' => '지원하지 않는 UIKit 명령어입니다.',
                'command' => $command,
                'available_commands' => [
                    '테마 변경',
                    '컴포넌트 생성',
                    '색상 팔레트',
                    'UI 설정'
                ]
            ];
            
        } catch (\Exception $e) {
            Log::error('UIKit MCP Handler 오류: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => $e->getMessage(),
                'command' => $command
            ];
        }
    }

    private function changeTheme(string $command, array $params): array
    {
        // 테마 추출 (dark, light, blue 등)
        if (preg_match('/(dark|light|blue)/i', $command, $matches)) {
            $theme = strtolower($matches[1]);
            $this->uiSettings->setTheme($theme);
            
            return [
                'success' => true,
                'message' => "테마가 {$theme}로 변경되었습니다.",
                'theme' => $theme,
                'colors' => $this->uiSettings->getThemeColors($theme)
            ];
        }
        
        return [
            'success' => false,
            'message' => '테마를 지정해주세요. (dark, light, blue)',
            'command' => $command
        ];
    }

    private function createComponent(string $command, array $params): array
    {
        // 컴포넌트 이름 추출
        if (preg_match('/컴포넌트\s*([가-힣a-zA-Z0-9_]+)\s*생성/', $command, $matches)) {
            $componentName = $matches[1];
            
            return [
                'success' => true,
                'message' => "컴포넌트 '{$componentName}' 생성 준비 완료",
                'component_name' => $componentName,
                'template' => $this->getComponentTemplate($componentName)
            ];
        }
        
        return [
            'success' => false,
            'message' => '컴포넌트 이름을 지정해주세요.',
            'command' => $command
        ];
    }

    private function getColorPalette(string $command, array $params): array
    {
        $palette = $this->uiSettings->getColorPalette();
        $currentTheme = $this->uiSettings->getCurrentTheme();
        $themeColors = $this->uiSettings->getThemeColors($currentTheme);
        
        return [
            'success' => true,
            'message' => '색상 팔레트를 가져왔습니다.',
            'current_theme' => $currentTheme,
            'palette' => $palette,
            'theme_colors' => $themeColors
        ];
    }

    private function getUISettings(string $command, array $params): array
    {
        $settings = $this->uiSettings->getAllSettings();
        
        return [
            'success' => true,
            'message' => 'UI 설정을 가져왔습니다.',
            'settings' => $settings
        ];
    }

    private function getComponentTemplate(string $componentName): array
    {
        return [
            'class' => "<?php\n\nnamespace Jiny\\Uikit\\App\\View\\Components;\n\nuse Illuminate\\View\\Component;\n\nclass {$componentName} extends Component\n{\n    public function render()\n    {\n        return view('uikit::components.{$componentName}');\n    }\n}",
            'view' => "<div class=\"component-{$componentName}\">\n    <!-- {$componentName} 컴포넌트 내용 -->\n</div>"
        ];
    }
} 
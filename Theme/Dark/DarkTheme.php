<?php

namespace Themes\Dark;

use ClientX\Theme\ThemeInterface;

class DarkTheme implements ThemeInterface
{

    const DEFINITIONS = __DIR__ . '/config.php';

    public function getName(): string
    {
        return "Dark";
    }

    public function getVersion(): ?string
    {
        return "1.2";
    }

    public function getAuthor(): ?string
    {
        return "MartinDev";
    }

    public function getScreenshots()
    {
        return [];
    }

    public function getViewsPath(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '/Views';
    }

    public function getAssetsPath(): string
    {
        return '/Dark/assets';
    }

    public function getPluginsPath(): ?string
    {
        return '/Dark/vendor';
    }

    public function getTemplatesPath(): string
    {
        return __DIR__;
    }

    public function getComponentPath(): ?string
    {
        return null;
    }

    public function getContacts(): ?array
    {

        return [
            'discord' => 'clientxcms.com/discord',
            'email' => 'contact@clientxcms.com',
            'twitter' => "@ClientXCMS",
        ];
    }
}

<?php

namespace Dianagung\Larawinds;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class LarawindsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views/', 'larawinds');
        $this->callAfterResolving(BladeCompiler::class, function () {
            Blade::component('button.primary', View\Components\Button\Primary::class);
            Blade::component('button.secondary', View\Components\Button\Secondary::class);
            Blade::component('card.form', View\Components\Card\Form::class);
            Blade::component('flash.error', View\Components\Flash\Error::class);
            Blade::component('flash.success', View\Components\Flash\Success::class);
            Blade::component('input.date', View\Components\Input\Date::class);
            Blade::component('input.number', View\Components\Input\Number::class);
            Blade::component('input.text', View\Components\Input\Text::class);
            Blade::component('input.textarea', View\Components\Input\Textarea::class);
            Blade::component('navbar.menu', View\Components\Navbar\Menu::class);
            Blade::component('navbar.topbar', View\Components\Navbar\Topbar::class);
            Blade::component('upload.image', View\Components\Upload\Image::class);
            Blade::component('app', View\Components\App::class);
            Blade::component('checkbox', View\Components\Checkbox::class);
            Blade::component('delete', View\Components\Delete::class);
            Blade::component('dropdown', View\Components\Dropdown::class);
            Blade::component('edit', View\Components\Edit::class);
            Blade::component('group-inline', View\Components\GroupInline::class);
            Blade::component('heading', View\Components\Heading::class);
            Blade::component('link', View\Components\Link::class);
            Blade::component('table', View\Components\Table::class);
            Blade::component('tbody', View\Components\Tbody::class);
            Blade::component('thead', View\Components\Thead::class);
            Blade::component('update', View\Components\Update::class);
		});
    }

    public function register()
    {
        
    }
}